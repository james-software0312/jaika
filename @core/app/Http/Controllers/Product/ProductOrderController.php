<?php

namespace App\Http\Controllers\Product;

use App\ContactModel;
use App\Country\Country;
use App\Helpers\CartAdminHelper;
use App\Helpers\CartHelper;
use App\Helpers\FlashMsg;
use App\Http\Controllers\Controller;
use App\Mail\BasicMail;
use App\Product\Product;
use App\StockItemModel;
use App\SellOrder;
use App\SellOrderDetail;
use App\Product\ProductSellInfo;
use App\Shipping\UserShippingAddress;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class ProductOrderController extends Controller
{
    const BASE_URL = 'backend.products.order.';

    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:product-order-list|product-order-view-details|product-order-update-status|product-order-send-alert-mail|product-order-generate-invoice', ['only', ['orderLogs']]);
        $this->middleware('permission:product-order-create', ['only', ['create', 'store']]);
        $this->middleware('permission:product-order-view-details', ['only', ['show']]);
        $this->middleware('permission:product-order-update-status', ['only', ['product_order_status_change']]);
        $this->middleware('permission:product-order-send-alert-mail', ['only', ['order_reminder']]);
        $this->middleware('permission:product-order-generate-invoice', ['only', ['generateInvoice']]);
        $this->middleware('permission:product-order-approve-payment', ['only', ['product_order_payment_approve']]);
    }

    /** ===========================================================
     *                  ADMIN HOME PAGES
      =========================================================== */
    public function orderLogs()
    {
        $all_orders = ProductSellInfo::all();
        return view(self::BASE_URL.'all')->with(['all_orders' => $all_orders]);
    }

    public function generateInvoice(Request $request)
    {
        $order_details = ProductSellInfo::findOrFail($request->id);
        $db_order_details = json_decode($order_details->order_details, true);
        $db_order_details = is_string($db_order_details) ? json_decode($db_order_details, true) : $db_order_details;
        $products = Product::whereIn('id', array_keys($db_order_details))->get();

        $user_shipping_address = getUserShippingAddress($order_details->shipping_address_id);

        return view(self::BASE_URL.'pdf', compact('order_details', 'products', 'user_shipping_address'));

        $pdf = PDF::loadView(self::BASE_URL.'pdf', compact('order_details', 'products', 'user_shipping_address'));
        return $pdf->download('product-order-invoice.pdf');
    }

    public function create()
    {
        $all_products = Product::where(['status' => 'publish'])->get();
        $all_users = User::all();
        $countries = Country::where('status', 'publish')->get();
        $user_shipping_address = UserShippingAddress::all();
        return view(self::BASE_URL.'new', compact('all_products', 'all_users', 'countries', 'user_shipping_address'));
    }

    public function getProductRow(Request $request)
    {
        $this->validate($request, ['id' => 'required|exists:products,id']);
        $product = Product::findOrFail($request->id);
        $count = sanitize_html($request->count);
        return view('backend.partials.table.add-product-tr', compact('product', 'count'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'country' => 'required|string|max:191',
            'state' => 'required|string|max:191',
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string|max:191',
            'email' => 'required|string|max:191',
            'phone' => 'required|string|max:191',
            'address' => 'required|string|max:191',
            'city' => 'required|string|max:191',
            'zipcode' => 'required|string|max:191',
            'payment_gateway' => 'required|string|max:191',
            'shipping_address_id' => 'required|string|max:191',
            'order_note' => 'nullable|string|max:191',
            'status' => 'required|string|max:191',
        ]);

        // remove any previous cart items from
        CartHelper::clear();

        try {
            DB::beginTransaction();

            $order_details = json_encode(CartAdminHelper::addAllItemsToCart($request));
            $total_amount = CartHelper::getAttributeTotal('price');
            CartHelper::clear();

            $product_sell_info = ProductSellInfo::create([
                'name' => $request->name,
                'email' => $request->email,
                'user_id' => $request->user_id,
                'country' => $request->country,
                'address' => $request->address,
                'city' => $request->city,
                'state' => $request->state,
                'zipcode' => $request->zipcode,
                'phone' => $request->phone,

                'total_amount' => $total_amount,
                
                'status' => $request->status,
                'payment_status' => 'pending',
                'payment_gateway' => $request->payment_gateway,

                'order_details' => $order_details,
                'shipping_address_id' => $request->shipping_address_id,
            ]);

            DB::commit();

            if ($product_sell_info->id) {
                return back()->with(FlashMsg::create_succeed('Sell Info'));
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with(FlashMsg::create_failed('Sell Info'));
        }
    }

    public function show($id)
    {
        $order_details = ProductSellInfo::with('shipping')->findOrFail($id);
        $user_shipping_address = getUserShippingAddress($order_details->shipping_address_id);
        return view(self::BASE_URL.'view', compact('order_details', 'user_shipping_address'));
    }

    public function delete(Request $request)
    {
        return ProductSellInfo::findOrFail($request->id)->delete();
    }

    public function filterOrders(Request $request)
    {
        # code...
    }

    public function product_order_payment_approve(Request $request)
    {
        $payment_details = ProductSellInfo::findOrFail($request->id);

        $payment_details->payment_status = 'complete';
        $payment_details->save();

        // subject
        $site_title = get_static_option('site_title');
        $customer_subject = __('You order has been placed in') . ' ' . $site_title;
        $admin_subject = __('You Have A New Product Order From') . ' ' . $site_title;

        // message
        $subject = __('Your order has been placed');
        $message = __('Your order has been placed.') . ' #' . $payment_details->id;
        $message .= ' ' . __('at') . ' ' . date_format($payment_details->created_at, 'd F Y H:m:s');
        $message .= ' ' . __('via') . ' ' . str_replace('_', ' ', $payment_details->payment_gateway);
        
        // $payment_order_details = $payment_details->order_details ? json_decode($payment_details->order_details, true) : [];
        // $order_details = [];

        // if ($payment_order_details) {
        //     // $products = Product::whereIn('id', array_keys($payment_order_details))->get();
        //     $products = StockItemModel::whereIn('id', array_keys($payment_order_details))->get();
        //     foreach ($payment_order_details as $key => $order_items) {
        //         $product = $products->find($key);
        //         foreach ($order_items as $item) {
        //             $stock_item = StockItemModel::where('id', $item['id'])->get()->first();
        //             StockItemModel::where('id', $item['id'])->update([
        //                 'quantity' => $stock_item['quantity'] - $item['quantity']
        //             ]);
        //         }
        //     }
        // }
        

        try {
            Mail::to(get_static_option('site_global_email'))->send(new \App\Mail\PlaceOrder($payment_details, $admin_subject, $admin_subject, $order_details));
            Mail::to($payment_details->email)->send(new \App\Mail\PlaceOrder($payment_details, $customer_subject, $customer_subject, $order_details));
        } catch (\Exception $e) {
            return redirect()->back()->with(['msg' => __('Payment Status Updated, email send failed'), 'type' => 'success']);
        }

        return response()->json(FlashMsg::explain('success', __('Payment Status Updated..')));
    }

    public function product_order_status_change(Request $request)
    {
        $this->validate($request, ['order_status' => 'nullable|string|max:191']);
        $order_details = ProductSellInfo::find($request->order_id);
        // dd($order_details);
        $contact = ContactModel::where('email', $order_details->email)->first();
        if($contact) {
            $contact->status = 1;
            $contact->save();
        } else {
            ContactModel::insert([
                'name' => $order_details->name,
                'country' => $order_details->country,
                'address' => $order_details->address,
                'city' => $order_details->city,
                'email' => $order_details->email,
                'phone' => $order_details->phone,
                'status' => 1
            ]);
            $contact = ContactModel::where('email', $order_details->email)->first();
        }

        
        $cart_items = json_decode($order_details->order_details, true);
        $product = '';
        $data = [];
        foreach ($cart_items as $product_id => $product_variations) {
            $product = Product::find($product_id);
            $stockItem = StockItemModel::where('product_id',$product_id)->first();
            foreach ($product_variations as $key => $item) {
                if (!empty($product)) {
                    $data['products'][] = [
                        'title' => $product->title,  // e.g., "Red T-shirt"
                        'color' => $product->color,  // e.g., "Red"
                        'size' => $product->size,    // e.g., "M"
                        'price' => $product->sale_price, // e.g., 20.00 USD
                        'image' => $product->image,  // Product image URL (optional)
                        'sold_count' => $product->sold_count,
                        'quantity' => $item['quantity'], // e.g., 2
                        'total_price' => $product->sale_price * $item['quantity'], // e.g., 40.00 USD for 2 T-shirts
                    ];
        
                    $product->sold_count += $item['quantity'];
                    $product->save();
                    $stockItem->quantity -= $item['quantity']/$stockItem->unitconverter;
                    $stockItem->single_quantity -= $item['quantity'];
                    $stockItem->save();
                    SellOrderDetail::insert([
                        'stockitemid' => $stockItem->id,
                        'warehouseid' => $stockItem->warehouseid,
                        'selldate' => Carbon::now()->format('Y-m-d'),
                        'price' => $stockItem->price * $stockItem->unitconverter*$item['quantity'],
                        'quantity' =>$item['quantity'],
                        'contactid' =>  $contact->id,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                        'unitid' => $stockItem->unitid,

                    ]);
                }
            }
            SellOrder::insert(([
                'warehouseid' => $stockItem->warehouseid,
                'selldate' => Carbon::now()->format('Y-m-d'),
                'contactid' =>  $contact->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]));
        }

        $order_details->status = $request->order_status;
        $order_details->save();
        $data['payment_gateway'] = $order_details->payment_gateway;
        $data['total_price'] = $order_details->total_amount;

        $data['subject'] = __('your order status has been changed');
        $data['message'] = __('hello') . ' ' . $order_details->name . '<br>';
        $data['message'] .= __('your order') . ' #' . $order_details->id . ' ';
        $data['message'] .= __('status has been changed to') . ' ' . str_replace('_', ' ', $request->order_status) . '.';

        //send mail while order status change
        try {
            // dd($data);
            Mail::to($order_details->email)->send(new BasicMail($data));
        } catch (\Exception $e) {
            return redirect()->back()->with(['msg' => __('Product Order Status Update, email sending failed'), 'type' => 'success']);
        }

        return redirect()->back()->with(['msg' => __('Product Order Status Update..'), 'type' => 'success']);
    }

    public function product_order_bulk_action(Request $request)
    {
        ProductSellInfo::whereIn('id', $request->ids)->delete();
        return response()->json(['status' => 'ok']);
    }

    public function order_reminder(Request $request)
    {
        //send order reminder mail
        $order_details = ProductSellInfo::find($request->id);
        $data['subject'] = __('your order is still in pending at') . ' ' . get_static_option('site_title');
        $data['message'] = __('hello') . ' ' . $order_details->name . '<br>';
        $data['message'] .= __('your order ') . ' #' . $order_details->id . ' ';
        $data['message'] .= __('is still in pending, to complete your booking go to');
        $data['message'] .= ' <a href="' . route('user.home') . '">' . __('your dashboard') . '</a>';

        try {
            //send mail while order status change
            Mail::to($order_details->email)->send(new BasicMail($data));
        } catch (\Exception $e) {
            return redirect()->back()->with(FlashMsg::item_delete($e->getMessage()));
        }

        return redirect()->back()->with(['msg' => __('Reminder Mail Send Success'), 'type' => 'success']);
    }

    public function cart_markup_by_ajax(Request $request)
    {

        $product_details = Product::find($request->id);

        if (empty($product_details)) return '';

        $id = $request->id;
        $image_markup = render_image_markup_by_attachment_id($product_details->image, '', 'thumb');
        $title = $product_details->title;
        $route = route('frontend.products.single', $product_details->slug);

        $product_variant_markup = '';
        if (!empty($product_details->variant)) {
            foreach (json_decode($product_details->variant) as $variant_id =>  $terms) {
                $variant_title = get_product_variant_list_by_id($variant_id);
                if (!empty($variant_title)) {
                    $product_variant_markup .= '<div class="product-variant-list-wrapper"><h5 class="title">' . $variant_title . '</h5><ul class="product-variant-list">';
                    foreach ($terms as $term) {
                        $product_variant_markup .= '<li  data-variantid="' . $variant_id . '" data-variantname="' . $variant_title . '" data-term="' . $term . '">' . $term . '</li>';
                    }
                    $product_variant_markup .= '</ul>';
                    $product_variant_markup .= '</div>';
                }
            }
        }

        $unit_price =  amount_with_currency_symbol($product_details->sale_price);
        $tax_amount = 0;
        if (get_static_option('product_tax_type') == 'individual') {
            $tax_amount = ($product_details->sale_price / 100) * $product_details->tax_percentage;
            $tax_markup = amount_with_currency_symbol($tax_amount) . '(' . $product_details->tax_percentage . '%)';
        }
        $subtotal = (get_static_option('product_tax_type') == 'individual') ? $product_details->sale_price + ($tax_amount * 1) : $product_details->sale_price;
        $subtotal_markup = amount_with_currency_symbol($subtotal);
        return <<<HTML
<tr>
    <td>
        <div class="thumbnail">
            {$image_markup}
        </div>
    </td>
    <td>
        <h4 class="product-title">
            <a target="_blank" href="{$route}">{$title}</a>
        </h4>
        {$product_variant_markup}
         <input type="hidden" name="product[{$id}]" value="{$id}">
         <input type="hidden" class="product_variant_input" name="product[{$id}][var]" >
    </td>
    <td>
        <input type="number" name="product[$id][qty]" class="quantity" data-productid="{$id}" value="1">
    </td>
    <td class="unit_price">{$unit_price}</td>
    <td class="tax_amount">{$tax_markup}</td>
    <td class="subtotal">{$subtotal_markup}</td>
    <td>
        <div class="cart-action-wrap">
            <a href="#"
               class="btn btn-sm btn-danger ajax_remove_cart_item">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr>
HTML;
    }
    

    /** ===========================================================
     *                  USER HOME PAGES
      =========================================================== */
}
