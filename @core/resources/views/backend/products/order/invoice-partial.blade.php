<section class="invoice-area padding-top-100 padding-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card my-5">
                    <div class="card-body p-0">
                        <div class="invoice-wrapper">
                            <div class="invoice-flex-contents mb-5">
                                <div class="invoice-logo">
                                    {!! render_image_markup_by_attachment_id(get_static_option('site_logo')) !!}
                                </div>
                                <div class="invoice-top">
                                    <h2 class="invoice mt-5"> {{ __('Invoice') }} </h2>
                                    <h6 class="small-title"> {{ __('Invoice ID') }} #{{ $order_details->id }} </h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 margin-top-40">
                                    <div class="invoice-single-contents">
                                        <h5 class="title"> {{ __('Customer') }} </h5>
                                        <span class="names margin-top-20"> {{ $order_details->name }} </span>
                                        <ul class="invoice-address-list">
                                            <li class="list">
                                                @if ($user_shipping_address)
                                                    <span><b>{{__('Full Address')}}:</b></span> {{ $user_shipping_address }}
                                                @else
                                                    <span><b>{{__('Full Address')}}:</b></span> {{$order_details->address}}
                                                @endif
                                            </li>
                                            <li class="list"> <span><b> {{ __('Phone') }}: </b></span> <a href="tel:{{ $order_details->phone }}"> {{ $order_details->phone }} </a> </li>
                                            <li class="list"> <span><b> {{ __('Email') }}: </b></span> <a href="mailto:{{ $order_details->email }}"> {{ $order_details->email }} </a> </li>
                                            {!! getInvoiceAddressInfo($order_details->zipcode, 'zipcode') !!}
                                            {!! getInvoiceAddressInfo($order_details->city, 'city') !!}
                                            {!! getInvoiceAddressInfo($order_details->state, 'state') !!}
                                            {!! getInvoiceAddressInfo($order_details->country, 'country') !!}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-summery margin-top-60">
                                <h3 class="common-title-three text-center my-5"> {{ __('Order Summary') }} </h3>
                                <div class="invoice-contents-summery border-1 margin-top-40">
                                    <ul class="invoice-summery-list borders-bottom">
                                        <li class="list">
                                            <span class="list-single list-heading"> {{ __('Description') }} </span>
                                            <span class="list-single list-heading"> {{ __('Cost') }} </span>
                                            <span class="list-single list-heading"> {{ __('QTY') }} </span>
                                            <span class="list-single list-heading"> </span>
                                            <span class="list-single list-heading"> {{ __('Amount') }} </span>
                                        </li>
                                    </ul>
                                    <ul class="invoice-summery-list borders-bottom margin-top-20">
                                        @php
                                            $shopping_order_details = json_decode($order_details->order_details, true);
                                            $shopping_order_details = is_string($shopping_order_details) ? json_decode($shopping_order_details, true) : $shopping_order_details;
                                            $all_products = \App\Product\Product::whereIn('id', array_keys($shopping_order_details))->get();

                                            $payment_meta = json_decode($order_details->payment_meta, true);
                                        @endphp
                                        @foreach ($shopping_order_details as $id => $items)
                                            @foreach ($items as $item)
                                            @php
                                                $product = $all_products->find($item['id']);
                                                if(is_null($product)){
                                                    continue;
                                                }
                                                $item_attributes = '';
                                                $attribute_count = 0;
                                                if (!empty($item['attributes'])) {
                                                    $item_attributes .= ' (';
                                                    foreach ($item['attributes'] as $key => $attribute) {
                                                        if ($key != 'price') {
                                                            $item_attributes .= $key .': '. $attribute . ', ';
                                                            $attribute_count += 1;
                                                        }
                                                    }
                                                    $item_attributes = $attribute_count ? substr($item_attributes, 0, -2) . ')' : '';
                                                }
                                                $price = optional($item['attributes'])['price'] ?? $product->sale_price;

                                            @endphp
                                            <li class="list">
                                                <span class="list-single"> {{ $product->title }} {{ $item_attributes }}</span>
                                                <span class="list-single"> {{ float_amount_with_currency_symbol($product->sale_price) }} </span>
                                                <span class="list-single"> {{ $item['quantity'] }} </span>
                                                <span class="list-single"> </span>
                                                <span class="list-single"> {{ float_amount_with_currency_symbol($price * $item['quantity']) }} </span>
                                            </li>
                                            @endforeach
                                        @endforeach
                                    </ul>
                                    <div class="invoice-bottom-flex">
                                        <div class="invoice-patment-list">
                                            <div class="checkbox-inlines">
                                                <label class="checkbox-label" for="paypal4"> {{ __('Payment Gateway : ') }} </label>
                                                <b>{{ ucwords($order_details->payment_gateway) }}</b>
                                            </div>
                                            @if ($order_details->transaction_id)
                                            <div class="checkbox-inlines">
                                                <label class="checkbox-label" for="paypal4"> {{ __('Transaction ID : ') }} </label>
                                                <b>{{ ucwords($order_details->transaction_id) }}</b>
                                            </div>
                                            @endif
                                            @if ($order_details->payment_status)
                                            <div class="checkbox-inlines">
                                                <label class="checkbox-label" for="paypal4"> {{ __('Payment Status : ') }} </label>
                                                <b>{{ ucwords($order_details->payment_status) }}</b>
                                            </div>
                                            @endif
                                            @if ($order_details->status)
                                            <div class="checkbox-inlines">
                                                <label class="checkbox-label" for="paypal4"> {{ __('Order Status : ') }} </label>
                                                <b>{{ ucwords($order_details->status) }}</b>
                                            </div>
                                            @endif
                                        </div>
                                        <ul class="total-count-list">
                                            <li class="list">
                                                {{-- borders-bottom --}}
                                                <span class="subtotal total"> {{ __('Subtotal') }} </span>
                                                <span class="total-amount total"> {{ float_amount_with_currency_symbol($payment_meta['subtotal'] ?? 0, false) }} </span>
                                            </li>
                                            
                                            @if (isset($payment_meta['shipping_cost']) && !empty($payment_meta['shipping_cost']))
                                            <li class="list">
                                                <span class="subtotal total"> {{ __('Shipping Cost') }} (+)</span>
                                                <span class="total-amount total"> {{ float_amount_with_currency_symbol($payment_meta['shipping_cost'], false) }} </span>
                                            </li>
                                            @endif
                                            @if (isset($payment_meta['tax_amount']) && !empty($payment_meta['tax_amount']))
                                            <li class="list">
                                                <span class="subtotal total"> {{ __('Tax Amount') }} (+)</span>
                                                <span class="total-amount total"> {{ float_amount_with_currency_symbol($payment_meta['tax_amount'], false) }} </span>
                                            </li>
                                            @endif
                                            @if (isset($payment_meta['coupon_amount']) && !empty($payment_meta['coupon_amount']))
                                            <li class="list">
                                                <span class="subtotal total"> {{ __('Coupon Discount') }} (-)</span>
                                                <span class="total-amount total"> {{ float_amount_with_currency_symbol($payment_meta['coupon_amount'], false) }} </span>
                                            </li>
                                            @endif
                                            <li class="list border-top">
                                                <span class="subtotal total"> <strong>{{ __('Total') }}</strong> </span>
                                                <span class="total-amount total"> <strong>{{ float_amount_with_currency_symbol($payment_meta['total'], false) }}</strong> </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
