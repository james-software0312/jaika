<h4 class="title">
    {!! __('your order') !!}
</h4>
<div class="sum-bar"></div>
@foreach ($all_cart_items as $key => $item)
    @php $product = $products->find($key); @endphp
    @foreach ($item as $cart_item)
        @php
            $item_attributes = '';
            if ($cart_item['attributes']) {
                $item_attributes .= ' (';
                $attribute_count = 0;
                foreach ($cart_item['attributes'] as $key => $attribute) {
                    if ($key != 'price') {
                        $item_attributes .= $attribute . ', ';
                        $attribute_count += 1;
                    }
                }
                $item_attributes = $attribute_count ? substr($item_attributes, 0, -2) . ')' : '';
            }

            $price = $cart_item['attributes']['price'] ?? $product->sale_price;
        @endphp
        <div class="cost-name-amount">
            <span class="same sub">{{ $product->title . $item_attributes }}
                <span class="details">{{ $cart_item['quantity'] }} {{ __('PCS') }} *
                    {{ float_amount_with_currency_symbol($price) }}</span>
            </span>
            <span
                class="same sub-amount">{{ float_amount_with_currency_symbol($price * $cart_item['quantity']) }}</span>
        </div>
    @endforeach
@endforeach

<div class="sum-bar"></div>
<div class="cost-name-amount sub-total-wrap">
    <span class="total">{!! __('sub total:') !!}:</span>
    <span class="total-amount" id="subtotal" data-amount="{{ $subtotal }}">{{ float_amount_with_currency_symbol($subtotal) }}</span>
</div>
<div class="sum-bar"></div>
@php
    $default_shipping_cost_amount = isset($default_shipping) && $default_shipping->id ? $default_shipping_cost : 0;
@endphp
<div class="cost-name-amount sub-total-wrap shipping-container">
    <div class="shipping-option-container">
        @if (isset($default_shipping) && $default_shipping->id)
        <div class="cost-name-amount all-shipping-options">
            <span class="same sub">
                <input type="radio" class="mr-2 mt-1 d-inline-block shipping-option" 
                        name="display_shipping_option"
                        data-minimum-amt="{{ optional($default_shipping->availableOptions)->minimum_order_amount ?? 0 }}"
                        data-amount="{{ optional($default_shipping->availableOptions)->cost ?? 0 }}"
                        value="{{ $default_shipping->id }}"
                        @if($default_shipping->id) checked @endif
                >
                    {{ __($default_shipping->name) }}

                @if(optional($default_shipping->availableOptions)->minimum_order_amount ?? 0)
                    <small class="min-order-text">{{ __("Minimum order amount: ") }}
                        {{ optional($default_shipping->availableOptions)->minimum_order_amount ?? 0 }}

                        @if(optional($default_shipping->availableOptions)->setting_preset == 'min_order_and_coupon')
                            {{ __("And coupon needed.") }}
                        @elseif(optional($default_shipping->availableOptions)->setting_preset == 'min_order_or_coupon')
                            {{ __("Or coupon needed.") }}
                        @endif
                    </small>
                @endif
            </span>
            <span class="same sub-amount">{{ float_amount_with_currency_symbol(optional($default_shipping->availableOptions)->cost ?? 0) }}</span>
        </div>
        @endif
    </div>
    <div class="shipping-cost">
        <span class="total shipping">{!!  __('shipping:') !!}:</span>
        <span class="total-amount" id="shipping_charge">{{ float_amount_with_currency_symbol($default_shipping_cost) }}</span>
    </div>
</div>
<div class="sum-bar"></div>
<div class="cost-name-amount sub-total-wrap">
    <span class="total vat">{!! __('vat') !!}:</span>
    <span class="total-amount">(+)<span id="tax_amount" data-tax-percentage="{{ $tax_percentage }}">{{ float_amount_with_currency_symbol($tax) }}</span></span>
</div>
<div id="discount_summery" style="display: none">
    <div class="sum-bar"></div>
    <div class="cost-name-amount sub-total-wrap">
        <span class="total discount">{!! __('discount') !!} 
        <span class="ex">{!!  __('coupon') !!}</span></span>
        <strong>
            (-)<span class="total-amount" id="coupon_amount">
                {{ float_amount_with_currency_symbol($coupon_amount) }}
            </span>
        </strong>
    </div>
</div>
<div class="sum-bar"></div>
<div class="cost-name-amount total-wrap">
    <span class="total"> {!! __('Total') !!}:</span>
    <span class="total-amount">
        <span class="ex"
            id="total_amount">{{ float_amount_with_currency_symbol($total) }}</span>
    </span>
</div>
<div class="sum-bar"></div>
