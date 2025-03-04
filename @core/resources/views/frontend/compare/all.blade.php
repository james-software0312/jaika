@extends('frontend.frontend-page-master')
@section('page-title')
    {{ __('Compare') }}
@endsection

@section('content')

@php $compare_empty = is_array($display_compare_items) && empty($display_compare_items[0]) && empty($display_compare_items[1]); @endphp

@if ($compare_empty)
<div class="only-img-page-wrapper cart">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="img-box">
                    {!! render_image_markup_by_attachment_id(get_static_option('compare_empty_image')) !!}
                </div>
                <div class="content">
                    <p class="info">{{ get_static_option('compare_empty_text',__('No products added to compare')) }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="product-compare-wrapper padding-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="produdt-compare-box table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>
                                    <p class="main-title">{{ get_static_option('compare_title',__('Product Comparison')) }}</p>
                                    <p class="info">{{ get_static_option('compare_subtitle', __('There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.')) }}</p>
                                </th>
                                @foreach ($products as $product)
                                    <th>
                                        <div class="img-box">
                                            <a href="#" data-id="{{ $product->id }}" class="compare-close-btn remove_compare_item_ajax">
                                                <i class="lar la-times-circle icon"></i>
                                            </a>
                                            {!! render_image_markup_by_attachment_id($product->image) !!}
                                        </div>
                                        <div class="info-box">
                                            <p class="title"><a href="{{ route('frontend.products.single', $product->slug) }}">{{ $product->title }}</a></p>
                                            <p class="price" style = "text-transform: lowercase!important;">{{ float_amount_with_currency_symbol($product->sale_price) }}</p>
                                            <a href="#" class="remove-btn remove_compare_item_ajax" data-id="{{ $product->id }}">{{ __('remove') }}</a>
                                        </div>
                                    </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($categories))
                            <tr>
                                <td>
                                    <span class="same-s-1">{{ __('Category') }}</span>
                                </td>
                                @foreach ($categories as $category) 
                                <td>
                                    <a href="{{route('frontend.products.category', [ 'id' => $category->id, 'slug' => \Str::slug($category->title ?? 'x')])}}" class="same-s-1">{{ $category->title }}</a>
                                </td>
                                @endforeach
                            </tr>
                            @endif
                             @if(!empty($all_ratings))
                            <tr>
                                <td>
                                    <span class="same-s-1">{{ __('Ratings') }}</span>
                                </td>
                                @foreach ($all_ratings as $rating) 
                                <td>
                                    {!! ratingMarkup($rating['avg'], $rating['count'].' '.__('Customer Review'), true) !!} 
                                </td>
                                @endforeach
                            </tr>
                            @endif
                            @if($products && $products->count())
                            <tr>
                                <td>
                                    <span class="same-s-1">{{ __('Description') }}</span>
                                </td>
                                @foreach ($products as $product)
                                <td>
                                    <span class="same-s-1">{{ $product->summary }}</span>
                                </td>
                                @endforeach
                            </tr>
                            <tr>
                                <td>
                                    <span class="same-s-1">{{ __('Availability') }}</span>
                                </td>
                                @foreach ($products as $product)  
                                <td>
                                    <span class="same-s-1">
                                        @php $inventory = $product->inventory; @endphp
                                        @if ($inventory)
                                            @if ($inventory->stock_count - $inventory->sold_count > 0)
                                                {{ __('In Stock') }}
                                            @else
                                                {{ __('Out of Stock') }}
                                            @endif
                                        @else
                                        {{ __('Not Available') }}
                                        @endif
                                    </span>
                                </td>
                                @endforeach
                            </tr>
                            @endif
                            @if($products && $products->count())
                            <tr>
                                <td>
                                    {{ __('Attributes') }}
                                </td>
                                @foreach ($products as $product)
                                <td>
                                    @php
                                        $product_attributes = getItemAttributes($product->id);
                                        $item_attributes = '';
                                    @endphp
                                    @foreach ($product_attributes as $name => $attributes)
                                        <b>{{ $name }}</b>: 
                                        @php
                                            $item_attributes = '';
                                        @endphp
                                        @foreach ($attributes as $attribute)
                                            @php
                                                $item_attributes .= $attribute;
                                                $item_attributes .= !$loop->last ? ', ' : '';
                                            @endphp
                                        @endforeach
                                        <span>{{ $item_attributes }}</span>
                                        <br>
                                    @endforeach
                                </td>
                                @endforeach
                            </tr>
                            @endif
                            <tr>
                                <td></td>
                                @foreach ($products as $product)
                                <td>
                                    @if ($product->attributes)
                                    <a href="{{ route('frontend.products.single', $product->slug) }}" class="default-btn">{{ __('View Options') }}</a>
                                    @else
                                    <a href="#" data-attributes="{{ $product->attributes }}" data-id="{{ $product->id }}" class="default-btn add_to_cart_ajax">{{ __('Buy Now') }}</a>
                                    @endif
                                </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                <div class="btn-wrapper d-flex justify-content-between">
                    @if(isset(request()->index) && request()->index > 1)
                    <a href="{{ route('frontend.products.compare', ['index' => request()->index - 1]) }}" class="default-btn color-reverse">{{ __('Previous Item') }}</a>
                    @endif
                    @php
                    $next_index = isset(request()->index) && request()->index > 1 ? request()->index : 1;
                    @endphp
                    <a href="{{ route('frontend.products.compare', ['index' => $next_index + 1]) }}" class="default-btn color-reverse">{{ __('Next Item') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
@section('scripts')
    <script>
        (function ($) {
            'use strict'
            $(document).ready(function () {
                $('.remove_compare_item_ajax').on('click', function (e) {
                    e.preventDefault();
                    let id = $(this).data('id');
                    $.ajax({
                        url: '{{ route("frontend.products.compare.ajax.remove") }}',
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: id
                        },
                        success: function (data) {
                            if (data) {
                                toastr.error('{{ __("Item removed") }}');
                                setTimeout(function () {
                                    location.reload();
                                }, 500);
                            }
                        },
                        error: function (err) {
                            toastr.error('{{ __("Something went wrong, failed to remove item") }}');
                        }
                    });
                });
            })
        })(jQuery)
    </script>
@endsection
