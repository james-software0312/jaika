@extends('frontend.frontend-page-master')

@section('page-title')
    {{ __('Wishlist') }}
@endsection

@section('content')
@if (empty($all_wishlist_items))
<div class="only-img-page-wrapper cart">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="img-box">
                    {!! render_image_markup_by_attachment_id(get_static_option('empty_wishlist_image')) !!}
                </div>
                <div class="content">
                    <p class="info">{{ get_static_option('empty_wishlist_text', __('No products added to the wishlist'))  }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="cart-area-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-box">
                    <table>
                        <thead>
                            <tr>
                                <th>{{ __('product name') }}</th>
                                <th>{{ __('unit price') }}</th>
                                <th>{{ __('quantity') }}</th>
                                <th>{{ __('total') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_wishlist_items as $key => $item)
                                @php
                                    $product = $products->find($key);
                                @endphp
                                @foreach ($item as $wishlist_item)
                                @php
                                    $item_attributes = '';
                                    if ($wishlist_item['attributes']) {
                                        $item_attributes .= ' (';
                                        foreach ($wishlist_item['attributes'] as $key => $attribute) {
                                            if ($key != 'price') {
                                                $item_attributes .= $attribute . ', ';
                                            }
                                        }
                                        $item_attributes = strlen($item_attributes) ? substr($item_attributes, 0, -2) . ')' : '';
                                    }
                                @endphp
                                <tr>
                                    <td>
                                        <div class="thumb">
                                            <a href="{{ route('frontend.products.single', $product->slug) }}">
                                                {!! render_image_markup_by_attachment_id($product->image, '', 'grid') !!}
                                            </a>
                                            <a href="{{ route('frontend.products.single', ['slug' => $product->slug]) }}" class="product-name">{{ $product->title . $item_attributes }}</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="price-box">
                                            <span class="price">{{ amount_with_currency_symbol($product->sale_price) }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <input class="quantity form-control item_quantity_info" type="number" min="1" max="10000000" data-id="{{ $wishlist_item['id'] }}" data-attr="{{ json_encode($wishlist_item['attributes']) }}" value="{{ $wishlist_item['quantity'] }}">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="total">
                                            <span class="price">{{ amount_with_currency_symbol($product->sale_price * $wishlist_item['quantity']) }}</span>
                                            <a href="#" class="remove_wishlist_item" data-id="{{ $wishlist_item['id'] }}" data-attr="{{ json_encode($wishlist_item['attributes']) }}">
                                                <i class="las la-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="cart-btn-wrapper two margin-bottom-0">
                    <div class="left">
                        <a href="#" class="default-btn clear_wishlist">{{ get_static_option('clear_wishlist_text', __('Clear Wishlist')) }}</a>
                    </div>
                    <div class="right">
                        <form action="{{ route('frontend.products.wishlist.send.to.cart') }}" method="POST">
                            @csrf
                            <button class="default-btn">{{ get_static_option('send_to_cart_text', __('Add to cart all')) }}</button>
                        </form>
                    </div>
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
        'use script'
        $(document).ready(function () {
            $('.remove_wishlist_item').on('click', function (e) {
                e.preventDefault();
                let id = $(this).data('id');
                let attributes = $(this).data('attr');
                $.ajax({
                    url: '{{ route("frontend.products.wishlist.ajax.remove") }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id,
                        product_attributes: attributes
                    },
                    success: function (data) {
                        if (data.type == 'success') {
                            toastr.success(data.msg);
                            setTimeout(function () {
                                location.reload();
                            }, 500);
                        }
                    },
                    error: function (err) {
                        toastr.error('{{ __("An error occurred") }}');
                    }
                });
            });
    
            $('.clear_wishlist').on('click', function (e) {
                e.preventDefault();
                $.ajax({
                    url: '{{ route("frontend.products.wishlist.ajax.clear") }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                    },
                    success: function (data) {
                        if (data.type == 'success') {
                            toastr.success(data.msg);
                            setTimeout(function () {
                                location.reload();
                            }, 500);
                        }
                    },
                    error: function (err) {
                        toastr.error('{{ __("An error occurred") }}');
                    }
                });
            });
        });
    })(jQuery)
    </script>
@endsection
