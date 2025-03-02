@php
    $attributes = $product->attributes ? json_decode($product->attributes, true) : null;
@endphp
<div class="single-shop-list-item">
    <div class="product-img-box">
        {!! render_image_markup_by_attachment_id($product->image, '', 'grid') !!}
    </div>
    <div class="product-details-wrap">
        <div class="ratings">
            @for ($i = 0; $i < $product->rating_avg_rating; $i++)
                <i class="las la-star icon"></i>
            @endfor
        </div>
        <h3 class="product-title"><a href="{{ route('frontend.products.single', $product->slug) }}">{{ html_entity_decode(Str::limit($product->title, 23)) }}</a></h3>
        <p class="info">{{ Str::limit(html_entity_decode($product->summary), 130) }}</p>
        <div class="pricing">
            <span class="price">{{ float_amount_with_currency_symbol($product->sale_price) }}</span>
             {{-- @if(!empty($product->price) && $product->price != 0) --}}
             @if($product->sale_price < $product->price)
            <del> {{ float_amount_with_currency_symbol($product->price) }}</del>
            @endif
        </div>
        <div class="cart-option">
            @if ($attributes && count($attributes))
            <a href="{{ route('frontend.products.single', $product->slug) }}" class="add-cart">{{ __('View Options') }}</a>
            @else
            <a href="#" class="wishlist add_to_cart_ajax" data-attributes="{{ $product->attributes }}" data-id="{{ $product->id }}">{{ __('Add to Cart') }}</a>
            <a href="#" class="wishlist add_to_wishlist_ajax" data-attributes="{{ $product->attributes }}" data-id="{{ $product->id }}">{{ __('Add to Wishlist') }}</a>
            <a href="#" class="wishlist add_to_compare_ajax" data-id="{{ $product->id }}">{{ __('Add to Compare') }}</a>
            @endif
        </div>
    </div>
</div>
