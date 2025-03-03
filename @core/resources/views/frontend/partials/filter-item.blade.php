{{-- frontpage filter item --}}

@foreach ($products as $item)

@php
    $campaign_product = getCampaignProductById($item->id);
    $sale_price = $campaign_product ? $campaign_product->campaign_price : $item->sale_price;
    $campaign_percentage = $campaign_product ? getPercentage($item->sale_price, $sale_price) : false;
@endphp

<div class="col-sm-6 col-md-4 col-lg-2 gap-5 new">
    <div class="single-our-store-wrapper single-new-design-wrapper single-product-item" >
        <div class="product-img-box">
            @if(!empty($item->badge))
            <span class="sale">{{$item->badge}}</span>
            @endif
            @if($campaign_percentage)
                <span class="discount-tag">-{{ round($campaign_percentage, 2) }}%</span>
            @endif
            <a href="{{ route('frontend.products.single', $item->slug) }}">
                {!! render_image_markup_by_attachment_id($item->image, '', 'grid') !!}
            </a>
            <div class="hover">
                @php $attributes = $item->attributes ? json_decode($item->attributes, true) : null; @endphp
                <div class="left">
                    <ul>
                        <li>
                            @if (is_array($attributes) && count($attributes))
                            <a href="{{ route('frontend.products.single', $item->slug) }}" class="add-to-cart">{{ __('View Options') }}</a>
                            @else
                            <a href="#" data-attributes="{{ $item->attributes }}" data-id="{{ $item->id }}" class="add-to-cart add_to_cart_ajax">{{ __('Add to Cart') }}</a>
                            @endif
                        </li>
                    </ul>
                </div>
                <div class="right">
                    <ul>
                        <li>
                            @if (is_array($attributes) && count($attributes))
                            <a href="{{ route('frontend.products.single', $item->slug) }}"> <i class="lar la-heart icon"></i></a>
                            @else
                            <a href="#" data-attributes="{{ $item->attributes }}" data-id="{{ $item->id }}" class="add_to_wishlist_ajax"> <i class="lar la-heart icon"></i></a>
                            @endif

                            @php
                                $quick_view_data = getQuickViewDataMarkup($item);
                            @endphp
                            <a href="#" data-id="{{ $item->id }}" class="add_to_compare_ajax"> <i class="las la-retweet icon"></i></a>
                            <a href="#" id="quickview" class="quick-view" {!! $quick_view_data !!}>
                                <i class="lar la-eye icon"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="product-details-wrap">
            <h4 class="product-title">
                <a href="{{ route('frontend.products.single', $item->slug) }}">{{ $item->title }}</a>
            </h4>
            
            <div class="product-price-details">
                <ul class="list">
                    <li class="price">{{ float_amount_with_currency_symbol($sale_price) }}</li>
                    {{-- @if(!empty($item->price) && $item->price != 0) --}}
                    @if($sale_price < $item->price)
                        <li class="price"><del>{{ float_amount_with_currency_symbol($item->price) }}</del></li>
                    @endif
                        
                    
                </ul>
            </div>
        </div>
    </div>
</div>
@endforeach
