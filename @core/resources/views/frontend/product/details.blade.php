@extends('frontend.frontend-page-master')
@section('page-title')
    {{ html_entity_decode($product->title) }}
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('assets/common/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.min.css') }}">
@endsection
@php
    $product_img_url = null;
    $product_image = get_attachment_image_by_id($product->image,"full", false);
    $product_img_url = !empty($product_image) ? $product_image['img_url'] : '';
    $site_title = get_static_option('site_title');
@endphp
@section('page-meta-data')
<meta property="og:title" content="{{$product->title}}" />
<meta property="og:url" content="{{url()->current()}}" />
<meta property="og:description" content="{{$product->summary}}" />
<meta property="og:image" content="{{$product_img_url}}" />
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="{{'@'.$site_title}}">
<meta name="twitter:title" content="{{$product->title}}">
<meta name="twitter:description" content="{{$product->summary}}">
<meta name="twitter:creator" content="{{'@'.$site_title}}">
<meta name="twitter:image" content="{{$product_img_url}}">
<meta name="twitter:domain" content="{{url()->current()}}">


@endsection 
@section('content')
<style>
 
    .zoom-image {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        transition: transform 0.1s ease-out;
        transform-origin: center;
    }
    .zoom-container:hover .zoom-image {
        transform: scale(2); /* Zoom level */
    }
</style>

    <input id="product-image" type="hidden" value="{{ get_attachment_image_by_id($product->image)["img_url"] ?? null }}">

<div class="shop-details-area-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-view-wrap">
                    <div class="shop-details-gallery-slider" id="myTabContent">
                        <div class="single-main-image zoom-container" href="{{ get_image_url($product->image) }}" data-key="1" target="_blank">
                            @if(!empty($product->badge))
                                <span class="sale">{{$product->badge}}</span>
                            @endif
                            <!-- <a href="{{ get_image_url($product->image) }}" class="long-img magnific" data-key="1">
                                <i class="las la-search-plus"></i>
                            </a> -->

                            {!! render_image_markup_by_attachment_id($product->image, 'img-fluid zoom-image', 'thumbnail') !!}
                        </div>
                        @php
                            $product_image_gallery = $product->product_image_gallery && $product->product_image_gallery != 'null'
                                                        ? json_decode($product->product_image_gallery, true)
                                                        : [];
                        @endphp
                        @if ($product_image_gallery && count($product_image_gallery))
                            @foreach ($product_image_gallery as $gallery_image)
                            <div class="single-main-image">
                                @if(!empty($product->badge))
                                    <span class="sale">{{$product->badge}}</span>
                                @endif
                                <a href="{{ optional(get_attachment_image_by_id($gallery_image, 'full'))['img_url'] }}" class="long-img magnific" data-key="{{ $loop->iteration + 1 }}">
                                    <i class="las la-search-plus"></i>
                                </a>

                                {!! render_image_markup_by_attachment_id($gallery_image, 'img-fluid', 'thumbnail') !!}
                            </div>
                            @endforeach
                        @endif
                    </div>

                    <div class="thumb-wrap">
                        <ul class="shop-details-gallery-nav">
                            <li class="single-thumb">
                                <a class="thumb-link" aria-selected="true">
                                    {!! render_image_markup_by_attachment_id($product->image, '', 'thumbnail') !!}
                                </a>
                            </li>
                            @if ($product_image_gallery && count($product_image_gallery))
                                @foreach ($product_image_gallery as $gallery_image)
                                <li class="single-thumb">
                                    <a class="thumb-link"  aria-selected="true">
                                        {!! render_image_markup_by_attachment_id($gallery_image, '', 'thumbnail') !!}
                                    </a>
                                </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <x-msg.flash />
                <x-msg.error />
                <div class="product-summery">
                    @if ($avg_rating)
                    <div class="rating-wrap">
                        <div class="ratings">
                            @for ($i = 0; $i < $avg_rating; $i++)
                                <i class="las la-star icon"></i>
                            @endfor
                            @for ($i = $avg_rating; $i < 5; $i++)
                                <i class="lar la-star icon"></i>
                            @endfor
                        </div>
                        <p class="total-ratings">({{ $ratings->count() .' '. __('Customer Review') }})</p>
                    </div>
                    @endif
                    @php
                    $campaign_product = getCampaignProductById($product->id);
                    $sale_price = $campaign_product ? $campaign_product->campaign_price : $product->sale_price;
                    $deleted_price = $campaign_product ? $product->sale_price : $product->price;
                    $campaign_percentage = $campaign_product ? getPercentage($product->sale_price, $sale_price) : false;
                    @endphp
                    <div class="price-wrap">
                        <span class="price" data-main-price="{{ $sale_price }}" id="price">{{ float_amount_with_currency_symbol($sale_price) }}</span>
                        {{-- @if(!empty($deleted_price) && $deleted_price != 0) --}}
                        @if($sale_price < $deleted_price)
                        <del class="del-price">{{ float_amount_with_currency_symbol($deleted_price) }}</del>
                        @endif
                        @if($campaign_percentage)
                            <span class="discount-tag">-{{ round($campaign_percentage, 2) }}%</span>
                        @endif
                    </div>
                    <div class="short-description">
                        <p class="info">{{ $product->summary }}</p>
                    </div>

                    <div class="user-select-option">
                        @if($product->attributes && $product->attributes != 'null')
                            @php $product_attributes = decodeProductAttributes($product->attributes); @endphp
                            @foreach ($product_attributes as $attribute)
                            <div class="size section attribute_row">
                                <span class="name">{{ $attribute['name'] }}</span>
                                <div class="checkbox-color ">
                                    @foreach ($attribute['terms'] as $term)
                                        <div class="single-checkbox-wrap attribute">
                                            <label>
                                                <input type="radio" name="attr_{{ $attribute['name'] }}" data-attr="{{ json_encode($term) }}" data-attr-image="{{ isset($term['attribute_image']) ? get_image_url($term['attribute_image']) : '' }}" class="checkbox">
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
                                <button class="btn btn-sm clear-attributes">Clear</button>
                            </div>
                        @endif

                        @php
                            $item_in_stock = optional($product->inventory)->quantity_website;
                        @endphp
                        <div class="product_related_info mt-5">
                            @if($item_in_stock)
                                @php $item_stock_count = $item_in_stock ?? 0; @endphp
                                <div class="text-success"><span>({{ $item_stock_count.') '.Str::of('item')->plural($item_stock_count). ' ' . __('available in stock') }}</span></div>
                            @else
                                <div class="text-secondary text-danger"><span>({{ __('Item is not available in stock') }})</span></div>
                            @endif
                        </div>

                        <div class="quantity-add-cart add_to_cart_info mt-4">
                            @if($item_in_stock)
                                <div class="quantity">
                                    <div class="input-group w-200 d-flex justify-content-between">
                                        <button class="prd-quantity-btn btn btn-outline-info" data-button-type="minus"><i class="las la-minus"></i></button>
                                        <input class="form-control quantity" id="quantity" type="number" min="{{$unit->unitconverter}}" max="10000000" value="{{$unit->unitconverter}}">
                                        <button class="prd-quantity-btn btn btn-outline-info" data-button-type="plus"><i class="las la-plus"></i></button>
                                    </div>
                                </div>
                                <div class="cart-option mt-4">
                                    <a href="#" data-id="{{ $product->id }}" class="cart add_to_cart" style="background-color: #FF6280; color:white;">{{ __('add to cart') }}</a>
                                    {{-- <a href="#" data-id="{{ $product->id }}" class="cart add_to_wishlist">{{ __('wishlist') }}</a>
                                    <a href="#" data-id="{{ $product->id }}" class="cart add_to_compare_ajax">{{ __('Compare') }}</a>
                                    <a href="#" data-id="{{ $product->id }}" class="cart buy_now">{{ __(key: 'Buy Now') }}</a> --}}
                                </div>
                            @endif
                        </div>
                    </div>


                    <div class="product-attr-container mt-4">
                        @if ($product->category && $product->category->id)
                            <div class="product-attr">
                                {{ __('Category: ')}}
                                <a href="{{ route('frontend.products.category', [
                                    'id' => optional($product->category)->id,
                                    'slug' => \Str::slug(optional($product->category)->title ?? '')
                                ]) }}">
                                    {{ optional($product->category)->title }}
                                </a>
                            </div>
                        @endif

                        @php $all_subcategory_arr = getAllProductSubcategory($product); @endphp
                        @if ($all_subcategory_arr && count($all_subcategory_arr))
                            <div class="product-attr">
                                {{ __('Subcategory: ')}}
                                @foreach ($all_subcategory_arr as $key => $subcategory)
                                    @php
                                        $seperator = $key != count($all_subcategory_arr) - 1 ? ',' : '';
                                    @endphp
                                    <a href="{{ $subcategory['url'] ?? '' }}">{{ $subcategory['name'] . $seperator }}</a>
                                @endforeach
                            </div>
                        @endif

                        @if ($product->inventory)
                            <div class="product-attr">
                                {{ __('SKU')}}: &nbsp;  <span style="color:#28a745"> {{ optional($product->inventory)->code }}</span>
                            </div>
                            <div class="product-attr">
                                {{ __('Size')}}: &nbsp; <span style="color: blueviolet;"> {{ optional($product->inventory)->size }}</span>
                            </div>
                            <div class="product-attr">
                                {{ __('Color')}}: &nbsp; <span style="color: blueviolet;">{{ optional($product->inventory)->color }}</span>
                            </div>
                        @endif
                    </div>
                    <div class="social-link mt-4">
                        <ul class="list">
                            {!! single_post_share(route('frontend.products.single', purify_html($product->slug)), purify_html($product->title), $product_img_url) !!}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product-details-tab">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                role="tab" aria-controls="pills-home" aria-selected="true">{{ __('Description') }}</a>
                        </li>
                        @if ($product->additionalInfo && $product->additionalInfo->count())
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                role="tab" aria-controls="pills-profile" aria-selected="false">{{ __('Additional Information') }}</a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                role="tab" aria-controls="pills-contact" aria-selected="false">{{ __('Reviews') }}</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="description">
                                <h4 class="title">{{ __('Description') }} </h4>
                                {!! $product->description !!}
                            </div>
                        </div>
                        @if ($product->additionalInfo && $product->additionalInfo->count())
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="aditional-info">
                                <h4 class="title">{{ __('Additional Information') }}</h4>
                                <div class="table-wrap">
                                    <table class="add-info">
                                        <tbody>
                                            @foreach ($product->additionalInfo as $additionalInfo) 
                                            <tr>
                                                <th>{{ optional($additionalInfo)->title }}</th>
                                                <td>
                                                    <p>{{ optional($additionalInfo)->text }}</p>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <!-- feedback area start -->
                            <div class="feedback-section">
                                @if ($user_has_item)
                                <div class="feedback">
                                    <h4 class="feedback-title">{{ __('Leave a review') }}</h4>
                                    <form method="POST" action="{{ route('frontend.products.ratings.store') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label>{{__('Ratings')}}</label>
                                            <input type="number" name="rating" class="rating text-warning" />
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                            <label for="comment">{{ __('Your review') }}&nbsp;
                                                <span class="required">*</span>
                                            </label>
                                            <textarea class="form-control" name="comment" id="comment" required></textarea>
                                        </div>
                                        <button type="submit" class="default-btn">{{ __('Submit') }}</button>
                                    </form>
                                </div>
                                @endif
                                <div class="feedback">
                                    <h4 class="feedback-title">{{ __('Customer Review') }}</h4>
                                    @if(!auth()->check())
                                    <div class="row">
                                        <div class="col-sm-6 ">
                                            <form action="{{route('user.login')}}" method="post" class="register-form" id="login_form_order_page">
                                                @csrf
                                                <div class="error-wrap"></div>
                                                <div class="row">
                                                    <div class="form-group col-12">
                                                        <label for="login_email">{{ __('Username') }}
                                                        <span class="ex">*</span></label>
                                                        <input class="form-control" type="text" name="username" id="login_email" required />
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label for="login_password">{{ __('Password') }}<span class="ex">*</span></label>
                                                        <input class="form-control" type="password" name="password" id="login_password" required />
                                                    </div>
                                                    <div class="form-group form-check col-12">
                                                        <input type="checkbox" name="remember" class="form-check-input" id="login_remember">
                                                        <label class="form-check-label" for="remember">{{ __('Remember me') }} </label>
                                                    </div>
                                                </div>
                                                <div class="btn-pair">
                                                    <div class="btn-wrapper">
                                                        <button type="button" class="default-btn" id="login_btn">{{ __('SIGN IN') }}</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    @endif
                                    <div class="client-feedback">
                                        <ul class="client-feedbck-list">
                                            @forelse ($ratings as $rating)
                                            <li class="single-feedback mb-5">
                                                <h5 class="client-name">{{ optional($rating->user)->name }}</h5>
                                                <p class="publish-date"> {{ optional($rating->created_at)->format('D m, Y') }}</p>
                                                <div class="rating-box">
                                                    <a href="#">
                                                        @for ($i = 0; $i < $rating->rating; $i++)
                                                        <i class="las la-star"></i>
                                                        @endfor
                                                    </a>
                                                </div>
                                                <p class="comment">{{ $rating->review_msg }}</p>
                                            </li>
                                            @empty
                                            <h4 class="text-secondary">{{ __('No rating to show yet, Login to leave ratings') }}</h4>
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- feedback area end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- shop details area start -->

<!-- related item area start -->
<div class="related-item-area-wrapper new-collection-area-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="section-title-wrapper">
                    <h2 class="main-title">{{ __('Related') }} <span class="ex">{{ __('item') }}</span></h2>
                </div>
            </div>
        </div>
        <div class="row related-item-slider-main-full">
            @forelse ($related_products as $product)
            <div class="col-lg-12">
                @php
                    $attributes = $product->attributes ? json_decode($product->attributes, true) : null;
                @endphp
                <div class="single-new-collection-item single-product-item">
                    <div class="product-img-box">
                        <a href="{{ route('frontend.products.single', $product->slug) }}">
                            {!! render_image_markup_by_attachment_id($product->image, '', 'grid') !!}
                        </a>
                        <div class="hover">
                            <ul class="list">
                                <li><a href="#" id="quickview" class="quick-view" {!! getQuickViewDataMarkup($product) !!}>{{ __('Quickview') }} <i class="lar la-eye icon"></i></a></li>
                                @if($attributes && count($attributes)) 
                                <li><a href="{{ route('frontend.products.single', $product->slug) }}">{{ __('Add to Wish List') }} <i class="lar la-heart icon"></i></a></li>
                                @else
                                <li><a href="#" data-attributes="{{ $product->attributes }}" data-id="{{ $product->id }}" class="add_to_wishlist_ajax">{{ __('Add to Wish List') }} <i class="lar la-heart icon"></i></a></li>
                                @endif
                                <li><a href="#" data-id="{{ $product->id }}" class="add_to_compare_ajax">{{ __('Compare') }} <i class="las la-retweet icon"></i></a></li>
                                @if ($attributes && count($attributes))
                                <li><a href="{{ route('frontend.products.single', $product->slug) }}">{{ __('View Options') }} <i class="las la-eye"></i></a></li>
                                @else
                                <li><a href="#" data-attributes="{{ $product->attributes }}" data-id="{{ $product->id }}" class="add_to_cart_ajax">{{ __('Add to Cart') }} <i class="las la-shopping-cart icon"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="product-details-wrap">
                        <h3 class="product-title"><a href="{{ route('frontend.products.single', $product->slug) }}">{{ Str::limit(html_entity_decode($product->title), 23) }}</a></h3>
                        <div class="product-price-details">
                            @php
                            $campaign_product = getCampaignProductById($product->id);
                            $related_sale_price = $campaign_product ? $campaign_product->campaign_price : $product->sale_price;
                            $related_deleted_price = $campaign_product ? $product->sale_price : $product->price;
                            @endphp
                            <ul class="list">
                                <li class="price">{{ float_amount_with_currency_symbol($related_sale_price) }}</li>
                                {{-- @if(!empty($related_deleted_price) && $related_deleted_price != 0) --}}
                                @if($related_deleted_price > $related_sale_price)
                                <li class="price"><del>{{ float_amount_with_currency_symbol($related_deleted_price) }}</del></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-lg-12">
                <div class="text-center">{{ __('No Related Products') }}</div>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('assets/frontend/js/bootstrap4-rating-input.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
<script>
(function ($) {
    'use script'
    let site_currency_symbol = '{{ site_currency_symbol() }}';

    showAndHideClearButton($(".checkbox:checked").length);


    document.querySelectorAll('.zoom-container').forEach(container => {
        const zoomImage = container.querySelector('.zoom-image');

        container.addEventListener('mousemove', (e) => {
            const { left, top, width, height } = container.getBoundingClientRect();
            const x = ((e.pageX - left) / width) * 100;
            const y = ((e.pageY - top) / height) * 100;

            zoomImage.style.transformOrigin = `${x}% ${y}%`;
        });

        container.addEventListener('mouseleave', () => {
            zoomImage.style.transformOrigin = 'center';
        });
    });

document.querySelectorAll('.zoom-container').forEach(container => {
    const zoomImage = container.querySelector('.zoom-image');

    container.addEventListener('mousemove', (e) => {
        const { left, top, width, height } = container.getBoundingClientRect();
        const x = ((e.pageX - left) / width) * 100;
        const y = ((e.pageY - top) / height) * 100;

        zoomImage.style.transformOrigin = `${x}% ${y}%`;
    });

    container.addEventListener('mouseleave', () => {
        zoomImage.style.transformOrigin = 'center';
    });
});
    $(document).on("click",".clear-attributes",function (){
        $(".checkbox").removeAttr("checked");
        $("#price").text(site_currency_symbol + parseFloat($("#price").data("main-price")).toFixed(2));

        let old_image = $("#product-image").val();
        $(".attribute_img").attr("src",old_image);

        showAndHideClearButton($(".checkbox:checked").length);
    })

    $(document).on("click",".checkbox",function (){
        showAndHideClearButton($(".checkbox:checked").length);
    });

    // this function will show and hide clear button
    function showAndHideClearButton(length,where = $(".clear-attributes")){
        if(length < 1){
            where.fadeOut();
        }else{
            where.fadeIn();
        }
    }

    $(document).on("click",".prd-quantity-btn",function (){
        if($(this).data("button-type") === "minus"){
            updateQuantity($("#quantity").val(),$(this).data("button-type"));
        }else if($(this).data("button-type") === "plus"){
            
            updateQuantity($("#quantity").val(),$(this).data("button-type"));
        }
    });

    function updateQuantity(val,type){
;
        let unit = "{{$unit->unitconverter}}";
        if(type == "plus"){
            item_in_stock = "{{ $item_in_stock }}";
            console.log(item_in_stock);
            if(parseInt(val) + parseInt(unit) > item_in_stock) {
                $("#quantity").val(parseInt(unit));
                alert('Requested quantity is not available. Only available quantity is added to cart');
            }
            else if($("#quantity").val() != 1) $("#quantity").val(parseInt(val) + parseInt(unit) );
            else $("#quantity").val(parseInt(unit));
            
        }else if(type == "minus"){
            if(parseInt(val) > "{{$unit->unitconverter}}"){
                $("#quantity").val(parseInt(val) - parseInt(unit));
            }else{
                $("#quantity").val("{{$unit->unitconverter}}");
            }
        }

    }

    $(document).ready(function() {
        $('.magnific').magnificPopup({type:'image'});

        $('.add_to_cart').on('click', function (e) {
            e.preventDefault();

            let product_id = $(this).data('id');
            let quantity = Number($('#quantity').val().trim());
            let price = $('#price').text().split(site_currency_symbol)[1];
            let attributes = {};

            // get attributes
            let rendered_attributes = $('.attribute_row');
            for (let i = 0; i < rendered_attributes.length; i++) {
                let name = $(rendered_attributes[i]).find('.name').text();
                let selected_attribute = $(rendered_attributes[i]).find('input.checkbox:checked').next().text();
                attributes[name] = selected_attribute;
            }

            attributes['price'] = price;

            let selected_attributes_arr = [];
            let all_selected_attributes = $('.attribute_row input.checkbox:checked');
            all_selected_attributes.map(function (k, v) {
                selected_attributes_arr.push($(v).data('attr'));
            });

            if (attributeSelected(attributes)) {
                $.ajax({
                    url: '{{ route("frontend.products.add.to.cart.ajax") }}',
                    type: 'POST',
                    data: {
                        product_id: product_id,
                        quantity: quantity,
                        product_attributes: selected_attributes_arr,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (data) {
                        if (data.quantity_msg) {
                            toastr.warning(data.quantity_msg)
                        } else {
                            toastr.success(data.msg);
                        }
                        refreshShippingDropdown();
                    },
                    erorr: function (err) {
                        toastr.error('{{ __("An error occurred") }}');
                    }
                });
            } else {
                toastr.error('{{ __("Select all attribute to proceed") }}');
            }
        });

        $('.add_to_wishlist').on('click', function (e) {
            e.preventDefault();
            let product_id = $(this).data('id');
            let quantity = Number($('#quantity').val().trim());
            let price = $('#price').text().split('$')[1];
            let attributes = {};

            // get attributes
            let rendered_attributes = $('.attribute_row');
            for (let i = 0; i < rendered_attributes.length; i++) {
                let name = $(rendered_attributes[i]).find('.name').text();
                let selected_attributes_arr = [];
                let selected_attribute = $(rendered_attributes[i]).find('input.checkbox:checked').next().text();
                attributes[name] = selected_attribute;
            }

            attributes['price'] = price;

            if (attributeSelected(attributes)) {
                $.ajax({
                    url: '{{ route("frontend.products.add.to.wishlist.ajax") }}',
                    type: 'POST',
                    data: {
                        product_id: product_id,
                        quantity: quantity,
                        product_attributes: attributes,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (data) {
                        toastr.success(data.msg);
                        refreshWishlistDropdown();
                    },
                    erorr: function (err) {
                        toastr.error('{{ __("An error occurred") }}');
                    }
                });
            } else {
                toastr.error('{{ __("Select an attribute to proceed") }}');
            }
        });

        $(document).on('click', '#login_btn', function (e) {
            var formContainer = $('#login_form_order_page');
            var el = $(this);
            var username = $('#login_form_order_page #login_email').val();
            var password = $('#login_form_order_page #login_password').val();
            var remember = $('#login_form_order_page #login_remember').val();

            el.text('{{__("Please Wait")}}');

            $.ajax({
                type: 'post',
                url: "{{route('user.ajax.login')}}",
                data: {
                    _token: "{{ csrf_token() }}",
                    username : username,
                    password : password,
                    remember : remember,
                },
                success: function (data){
                    if(data.status == 'invalid') {
                        el.text('{{__("Login")}}')
                        formContainer.find('.error-wrap').html('<div class="alert alert-danger">'+data.msg+'</div>');
                    } else {
                        formContainer.find('.error-wrap').html('');
                        el.text('{{__("Login Success.. Redirecting ..")}}');
                        location.reload();
                    }
                },
                error: function (data) {
                    var response = data.responseJSON.errors;
                    formContainer.find('.error-wrap').html('<ul class="alert alert-danger"></ul>');
                    $.each(response,function (value,index){
                        formContainer.find('.error-wrap ul').append('<li>'+index+'</li>');
                    });
                    el.text('{{__("Login")}}');
                }
            });
        });
    });

    function refreshShippingDropdown() {
        $.ajax({
            url: '{{ route("frontend.products.cart.info.ajax") }}',
            type: 'GET',
            success: function (data) {
                $('#cart_badge').text(data.item_total);
                $('#top_minicart_container').html(data.cart);
            },
            erorr: function (err) {
                toastr.error('{{ __("An error occurred") }}');
            }
        });
    }

    function refreshWishlistDropdown() {
        // sync changes in details page
        $.ajax({
            url: '{{ route("frontend.products.wishlist.total") }}',
            type: 'GET',
            success: function (data) {
                $('#wishlist_badge').text(data.total);
            },
            erorr: function (err) {
                toastr.error('{{ __("An error occurred") }}');
            }
        });
    }
})(jQuery)
</script>
@endsection
