@php
    $attributes = optional($product)->attributes ? json_decode($product->attributes, true) : null;
    $column_class = isset($column) ? $column : 'col-md-4';
@endphp

<div class="col-sm-6 {{ $column_class }}">
    <div class="single-new-collection-item single-product-item">
        <div class="product-img-box">
           @if(isset($isCampaign) && $isCampaign)
                @php
                    $campaignItemInfo = getCampaignItemStockInfo($product->id, $campaignId);
                    $percentage = $campaignItemInfo['sold_count'] / $campaignItemInfo['in_stock_count'] * 100;
                    $price_percentage = getCampaignPricePercentage($campaignId, $product->id, $product->sale_price);
                @endphp   
            @endif
            @php
                $campaign_product = getCampaignProductById($product->id);
                $sale_price = $campaign_product ? $campaign_product->campaign_price : $product->sale_price;
                $deleted_price = $campaign_product ? $product->sale_price : $product->price;
                $campaign_percentage = $campaign_product ? getPercentage($product->sale_price, $sale_price) : false;
            @endphp
            @if($campaign_percentage)
             <span class="discount-tag"> {{ round($campaign_percentage, 2) }}%</span>
            @endif
            @if(!empty($product->badge))
                <span class="sale">{{$product->badge}}</span>
            @endif

            <a href="{{ route('frontend.products.single', html_entity_decode($product->slug)) }}">
                {!! render_image_markup_by_attachment_id($product->image, '', 'gird') !!}
            </a>
            <div class="hover">
                <ul class="list">
                    <li>
                        <a href="#" id="quickview" class="quick-view" {!! getQuickViewDataMarkup($product) !!}>{{ __('Quickview') }} <i class="lar la-eye icon"></i></a>
                    </li>

                    @if($attributes && count($attributes)) 
                    <li>
                        <a href="{{ route('frontend.products.single', $product->slug) }}">{{ __('Add to Wish List') }} <i class="lar la-heart icon"></i></a>
                    </li>
                    @else
                    <li>
                        <a href="#" data-attributes="{{ $product->attributes }}" data-id="{{ $product->id }}" class="add_to_wishlist_ajax">{{ __('Add to Wish List') }} <i class="lar la-heart icon"></i></a>
                    </li>
                    @endif

                    <li>
                        <a href="#" data-id="{{ $product->id }}" class="add_to_compare_ajax">{{ __('Compare') }} <i class="las la-retweet icon"></i></a></li>

                    @if ($attributes && count($attributes))
                        <li>
                            <a href="{{ route('frontend.products.single', $product->slug) }}">{{ __('View Options') }} <i class="las la-eye"></i></a></li>
                    @else
                        <li>
                            <a href="#" data-attributes="{{ $product->attributes }}" data-id="{{ $product->id }}" class="add_to_cart_ajax">{{ __('Add to Cart') }} {{ $product->id }} sdf <i class="las la-shopping-cart icon"></i></a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>

        <div class="product-details-wrap">
            <h3 class="product-title"><a href="{{ route('frontend.products.single', $product->slug) }}">{{ Str::limit(html_entity_decode($product->title), 23) }}</a></h3>
            <div class="product-price-details">
                <ul class="list">
                    <li class="price">{{ float_amount_with_currency_symbol($sale_price) }}</li>
                    {{-- @if(!empty($deleted_price) && $deleted_price != 0) --}}
                    @if($sale_price < $deleted_price)
                    <li class="price"><del>{{ float_amount_with_currency_symbol($deleted_price) }}</del></li>
                    @endif
                </ul>
            </div>
        </div>

        @if(isset($isCampaign) && $isCampaign)
            <div class="campaign-progress-wrap">
                <div class="d-flex justify-content-between">
                    <small class="left"><b>{{ __('Sold ') . $campaignItemInfo['sold_count'] }}</b></small>
                    <small class="right"><b>{{ __('Total ') . $campaignItemInfo['in_stock_count'] }}</b></small>
                </div>
                <div class="progress campaign_item_progress">
                    <div class="progress-bar" role="progressbar" style="width: {{ $percentage }}%;" aria-valuenow="{{ $percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            @if($campaignProductEndDate)
            <x-frontend.product.campaign-countdown :countdownTime="$campaignProductEndDate" />
            @endif
        @endif
    </div>
</div>
