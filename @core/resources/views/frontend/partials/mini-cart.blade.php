<div id="top_cart_item_box">
    @foreach ($all_cart_items as $key => $item)
        @php $product = $products->find($key); @endphp
        @foreach ($item as $cart_item)
        @php
            $item_attributes = '';
            $attribute_count = 0;
            if ($cart_item['attributes']) {
                $item_attributes .= ' (';
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
        <div class="single-row">
            <div class="img-box">
                {!! render_image_markup_by_attachment_id($product->image, '', 'grid') !!}
            </div>
            <div class="disc">
                <a href="{{ route('frontend.products.single', $product->slug) }}">
                    <span class="info">{{ $product->title }}</span>
                </a>
            </div>
            <div class="quant">
                <span class="quant-num">{{ $cart_item['quantity'] }}</span>
            </div>
            <div class="price-box">
                <span class="price">
                    {{ float_amount_with_currency_symbol($price) }}
                </span>
                @if(!empty($product->price) && $product->price != 0)
                <span class="price">
                    <del>{{ float_amount_with_currency_symbol($product->price) }}</del>
                </span>
                @endif
            </div>
            <div class="remove-box">
                <a href="#" class="remove_cart_item" data-id="{{ $cart_item['id'] }}" data-attr="{{ json_encode($cart_item['attributes']) }}">
                    <i class="las la-trash"></i>
                </a>
            </div>
        </div>
        @endforeach
    @endforeach
</div>
<div class="total-pricing">
    <div class="total">
        <span class="total">{{ __('SUB TOTAL:') }}</span>
        <span class="amount" id="top_cart_subtotal">{{ float_amount_with_currency_symbol($subtotal) }}</span>
    </div>
</div>
