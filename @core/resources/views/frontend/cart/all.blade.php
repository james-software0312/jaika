@extends('frontend.frontend-page-master')

@section('page-title')
    {{ __('Cart') }}
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/common/css/toastr.css') }}">
<style>
.lds-ellipsis {
    display: inline-block;
    position: fixed;
    width: 80px;
    height: 80px;
    left: 50vw;
    top: 40vh;
    z-index: 50;
    display: none;
}
.lds-ellipsis div {
  position: absolute;
  top: 33px;
  width: 13px;
  height: 13px;
  border-radius: 50%;
  background: var(--main-color-one);
  animation-timing-function: cubic-bezier(0, 1, 1, 0);
}
.lds-ellipsis div:nth-child(1) {
  left: 8px;
  animation: lds-ellipsis1 0.6s infinite;
}
.lds-ellipsis div:nth-child(2) {
  left: 8px;
  animation: lds-ellipsis2 0.6s infinite;
}
.lds-ellipsis div:nth-child(3) {
  left: 32px;
  animation: lds-ellipsis2 0.6s infinite;
}
.lds-ellipsis div:nth-child(4) {
  left: 56px;
  animation: lds-ellipsis3 0.6s infinite;
}
@keyframes lds-ellipsis1 {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}
@keyframes lds-ellipsis3 {
  0% {
    transform: scale(1);
  }
  100% {
    transform: scale(0);
  }
}
@keyframes lds-ellipsis2 {
  0% {
    transform: translate(0, 0);
  }
  100% {
    transform: translate(24px, 0);
  }
}
</style>
@endsection

@section('content')
    @if (empty($all_cart_items))
    <div class="only-img-page-wrapper cart">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="img-box">
                        {!! render_image_markup_by_attachment_id(get_static_option('empty_cart_image')) !!}
                    </div>
                    <div class="content">
                        <p class="info">{{ get_static_option('empty_cart_text', __('No products in your cart!')) }}</p>
                        <div class="btn-wrapper">
                            <a href="{{ route('homepage') }}" class="default-btn">{{ get_static_option('back_to_home_text', __('Back to home')) }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div id="cart-container">
        @include('frontend.cart.cart-partial')
    </div>
    @endif
    <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
@endsection
@section('scripts')
<script>
(function ($) {
    'use script'
    $(document).ready(function () {
        $(document).on('click', '.clear_cart', function (e) {
            e.preventDefault();
            $.ajax({
                url: '{{ route("frontend.products.cart.ajax.clear") }}',
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

        $(document).on('click', '.update_cart', function (e) {
            e.preventDefault();
            let all_item_info = $('.item_quantity_info');
            let cart_data = [];

            for (let i = 0; i < all_item_info.length; i++) {
                cart_data.push({
                    id: $(all_item_info[i]).data('id'),
                    product_attribute: $(all_item_info[i]).data('attr'),
                    quantity: $(all_item_info[i]).val(),
                });
            }

            $('.lds-ellipsis').show();

            $.ajax({
                url: '{{ route("frontend.products.cart.update.ajax") }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    cart_data: cart_data,
                    coupon: $('#coupon_input').val()
                },
                success: function (data) {
                    $('.lds-ellipsis').hide();
                    $('#cart-container').html(data);
                },
                error: function (err) {
                    toastr.error('{{ __("An error occurred") }}');
                }
            });
        });

        $(document).on('submit', '.discount-coupon', function (e) {
            e.preventDefault();
            let url = $(this).attr('action');
            let data = $(this).serialize();
            $('.lds-ellipsis').show();

            $.ajax({
                url: url,
                type: 'POST',
                data: data,
                success: function (data) {
                    $('.lds-ellipsis').hide();
                    $('#cart-container').html(data['details']);
                    if (data['type'] == 'fail') {
                        toastr.error(data['msg']);
                        return;
                    }
                    toastr.success(data['msg']);
                },
                error: function (err) {
                    $('.lds-ellipsis').hide();
                    toastr.error('{{ __("Coupon invalid") }}');
                }
            });
        });
    });
})(jQuery)
</script>
@endsection
