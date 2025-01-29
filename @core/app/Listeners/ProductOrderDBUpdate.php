<?php

namespace App\Listeners;

use App\Campaign\CampaignSoldProduct;
use App\Events\ProductOrdered;
use App\Helpers\CartHelper;
use App\Product\Product;
use App\Product\ProductInventory;
use App\Product\ProductSellInfo;
use DB;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ProductOrderDBUpdate
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ProductOrdered  $event
     * @return void
     */
    public function handle(ProductOrdered $event)
    {
        $orders = $event->data;
        if (!isset($orders['order_id']) && !isset($orders['transaction_id'])) return;

        CartHelper::clear();

        try {
            DB::beginTransaction();
            $order_info = ProductSellInfo::find($orders['order_id']);
            $order_details = json_decode($order_info->order_details, true) ?? [];

            // set order as complete
            //cash_on_delivery
            //todo if payment is manual payment or cash on delivery set payment status pending otherwise mark it as complete
            $paymentStatus = in_array($order_info->payment_gateway,['cash_on_delivery','cheque_payment','bank_payment','manual_payment']) ? 'pending' : 'complete'; 
            $order_info->update([
                'transaction_id' => $orders['transaction_id'],
                'payment_status' => $paymentStatus,
                'status' => 'pending'
            ]);

            // set stocks info
            if (count($order_details)) {
                foreach ($order_details as $id => $products) {
                    foreach ($products as $product) {
                        // if order has campaign items, (1) subtract from campaign stock and (2) insert in campaign sell table
                        if (isset($product['attributes']['type']) && $product['attributes']['type'] == 'Campaign Product') {
                            $campaign_sell = CampaignSoldProduct::where('product_id', $product['id'])->first();

                            if (!is_null($campaign_sell)) {
                                $campaign_sell->update([
                                    'sold_count' => $campaign_sell->sold_count + $product['quantity'],
                                    'total_amount' => $campaign_sell->total_amount + $product['quantity'] * $product['attributes']['price'],
                                ]);
                            } else {
                                CampaignSoldProduct::create([
                                    'product_id' => $product['id'],
                                    'sold_count' => $product['quantity'],
                                    'total_amount' => $product['quantity'] * $product['attributes']['price'],
                                ]);
                            }
                        }

                        // subtract product quantity from the inventory
                        $stock = ProductInventory::where('product_id', $product['id'])->first();
                        if ($stock) {
                            $stock->update([
                                'stock_count' => $stock->stock_count - $product['quantity'] >= 0 ? $stock->stock_count - $product['quantity'] : 0,
                                'sold_count' => $stock->sold_count + $product['quantity'],
                            ]);
                        }
                    }
                }
            }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }
}
