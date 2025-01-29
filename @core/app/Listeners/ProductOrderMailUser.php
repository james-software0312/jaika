<?php

namespace App\Listeners;

use App\Events\ProductOrdered;
use App\Mail\PlaceOrder;
use App\Product\Product;
use App\Product\ProductSellInfo;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class ProductOrderMailUser
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
        if (!isset($orders['order_id']) && !isset($orders['transaction_id'])) {
            return;
        }

        $payment_details = ProductSellInfo::find($orders['order_id']);
        $payment_order_details = $payment_details->order_details ? json_decode($payment_details->order_details, true) : [];
        $order_details = [];

        if ($payment_order_details) {
            $products = Product::whereIn('id', array_keys($payment_order_details))->get();
            foreach ($payment_order_details as $key => $order_items) {
                $product = $products->find($key);
                foreach ($order_items as $item) {
                    $price = isset($item['attributes']) && isset($item['attributes']['price'])
                                ? $item['attributes']['price']
                                : $product->sale_price;

                    $order_details[] = [
                        'name' => optional($product)->title. " " . getItemAttributesName($item['attributes']),
                        'quantity' => $item['quantity'],
                        'price' => $price
                    ];
                }
            }
        }

        $subject = __('Your order has been placed');
        $message = __('Your order,') . ' #' . $orders['order_id'] . ' ' . __('has been placed');
        $message .= ' ' . __('at') . ' ' . date_format($payment_details->created_at, 'd F Y H:m:s');
        $message .= ' ' . __('via') . ' ' . str_replace('_', ' ', $payment_details->payment_gateway);

        try {
            Mail::to($payment_details->email)->send(new PlaceOrder(
                $payment_details,
                $subject,
                $message,
                $order_details
            ));
        } catch (\Exception $e) {
            //show error message
        }
    }
}
