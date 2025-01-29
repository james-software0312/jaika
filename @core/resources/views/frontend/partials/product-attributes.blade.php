<div class="user-select-option">
    @if($product->attributes && $product->attributes != 'null')
        @php $product_attributes = decodeProductAttributesOld($product->attributes); @endphp
        @foreach ($product_attributes as $attribute)
        <div class="size section attribute_row">
            <span class="name">{{ $attribute['name'] }}</span>
            <div class="checkbox-color ">
                @foreach ($attribute['terms'] as $term)
                    @php
                        $term["attribute_image"] = get_attachment_image_by_id($term["attribute_image"])["img_url"] ?? null;
                    @endphp
                <div class="single-checkbox-wrap attribute">
                    <label>
                        <input type="radio" name="attr_{{ $attribute['name'] }}" data-attr="{{ json_encode($term) }}" class="quickViewCheckbox">
                        <span data-name="{{ $attribute['name'] }}" data-extra="{{ $term['additional_price'] }}" class="size-code">
                            {{ $term['name'] }} @if (isset($term['additional_price']) && $term['additional_price'] > 0) (+{{ float_amount_with_currency_symbol($term['additional_price']) }}) @endif
                        </span>
                    </label>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach

        <div class="size section attribute_row my-4">
            <button class="btn btn-sm clear-quick-view-attributes" style="display: none">Clear</button>
        </div>
    @endif
</div>
<div class="d-flex add_to_cart_info">
    <div class="input-group">
        <input class="quantity form-control" type="number" min="1" max="10000000" value="1">
    </div>
    <div class="add-cart-btn">
        <a href="#" data-id="{{ $product->id }}" class="add-to-cart modal_add_to_cart">{{ __('add to cart') }}</a>
    </div>
    <div class="add-cart-btn">
        <a href="#" data-id="{{ $product->id }}" class="add-to-cart buy_now ml-1">{{ __('Buy Now') }}</a>
    </div>
    
</div>
