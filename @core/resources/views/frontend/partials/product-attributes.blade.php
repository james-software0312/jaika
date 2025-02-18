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

<div class="input-group d-flex" style="gap:20px; flex-direction: column;">
    <button data-id="{{ $stock->id }}" class="prd-quantity-btn btn btn-outline-info" data-button-type="minus" data-unit = "{{ $stock->unitconverter }}"><i class="las la-minus" ></i></button>
    <input disabled class="quantity form-control item_quantity_info" type="text" min="{{ $stock->unitconverter }}" max="10000000" data-id="{{ $stock['id'] }}"  step="{{ $stock['unitconverter'] }}" value="{{ $stock->unitconverter }}">
    <button data-id="{{ $stock->id }}" class="prd-quantity-btn btn btn-outline-info" data-button-type="plus" data-unit = "{{ $stock->unitconverter }}"><i class="las la-plus" data-id="{{ $stock->id }}"></i></button>

</div>
<br>
<div class="d-flex add_to_cart_info">
   
    <div class="add-cart-btn">
        <a href="#" data-id="{{ $product->id }}" class="add-to-cart modal_add_to_cart">{{ __('add to cart') }}</a>
    </div>
    <div class="add-cart-btn">
        <a href="#" data-id="{{ $product->id }}" class="add-to-cart buy_now ml-1">{{ __('Buy Now') }}</a>
    </div>
    
</div>


<script>

    $(document).on("click",".prd-quantity-btn",function (){
            var quantityInput = $('.item_quantity_info[data-id="' + $(this).data("id") + '"]');
            if($(this).data("button-type") === "minus"){
                updateQuantity(quantityInput.val(),$(this).data("button-type"),$(this).data("unit"),$(this).data("id"), quantityInput);
            }else if($(this).data("button-type") === "plus"){
                updateQuantity(quantityInput.val(),$(this).data("button-type"),$(this).data("unit"),$(this).data("id"), quantityInput);
            }
        });
    
        function updateQuantity(val,type, unit, id, quantityInput){
    
    
            if(type == "plus"){
                if(quantityInput.val() != 1 ) quantityInput.val(parseInt(val) + parseInt(unit) );
                else quantityInput.val(parseInt(unit));
                
            }else if(type == "minus"){
                if(parseInt(val) > parseInt(unit)){
                    quantityInput.val(parseInt(val) - parseInt(unit));
                }else{
                    quantityInput.val(parseInt(unit));
                }
            }
    
        }
    </script>