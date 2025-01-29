
@extends('backend.admin-master')
@section('style')
    <x-media.css/>
@endsection
@section('site-title')
    {{__('Checkout Page Settings')}}
@endsection
@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                <x-msg.success/>
                <x-msg.error/>
            </div>
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__('Checkout Page Settings')}}</h4>
                        <form action="{{ route('admin.page.settings.checkout') }}" method="POST">
                            @csrf
                            <h5 class="mt-5 mb-3">{{ __('Login Section') }}</h5>
                            <div class="form-group">
                                <label for="returning_customer_text">{{ __('Returning Customer Text') }}</label>
                                <input type="text" class="form-control" id="returning_customer_text" name="returning_customer_text" value="{{ get_static_option('returning_customer_text') }}">
                            </div>
                            <div class="form-group">
                                <label for="toggle_login_text">{{ __('Toggle Login Text') }}</label>
                                <input type="text" class="form-control" id="toggle_login_text" name="toggle_login_text" value="{{ get_static_option('toggle_login_text') }}">
                            </div>
                            <div class="form-group">
                                <label for="signin_title">{{ __('Sign-in Title') }}</label>
                                <input type="text" class="form-control" id="signin_title" name="signin_title" value="{{ get_static_option('signin_title') }}">
                            </div>
                            <div class="form-group">
                                <label for="signin_subtitle">{{ __('Sign-in Subtitle') }}</label>
                                <input type="text" class="form-control" id="signin_subtitle" name="signin_subtitle" value="{{ get_static_option('signin_subtitle') }}">
                            </div>
                            <div class="form-group">
                                <label for="remember_text">{{ __('Remember Text') }}</label>
                                <input type="text" class="form-control" id="remember_text" name="remember_text" value="{{ get_static_option('remember_text') }}">
                            </div>
                            <div class="form-group">
                                <label for="remember_signin_btn_text">{{ __('Signin Button Text') }}</label>
                                <input type="text" class="form-control" id="remember_signin_btn_text" name="remember_signin_btn_text" value="{{ get_static_option('remember_signin_btn_text') }}">
                            </div>
{{--  --}}
                            <h5 class="mt-5 mb-3">{{ __('Coupon Section') }}</h5>
                            <div class="form-group">
                                <label for="have_coupon_text">{{ __('Have Coupon Text') }}</label>
                                <input type="text" class="form-control" id="have_coupon_text" name="have_coupon_text" value="{{ get_static_option('have_coupon_text') }}">
                            </div>
                            <div class="form-group">
                                <label for="enter_coupon_text">{{ __('Enter Coupon Toggle Text') }}</label>
                                <input type="text" class="form-control" id="enter_coupon_text" name="enter_coupon_text" value="{{ get_static_option('enter_coupon_text') }}">
                            </div>
                            <div class="form-group">
                                <label for="coupon_title">{{ __('Coupon Title') }}</label>
                                <input type="text" class="form-control" id="coupon_title" name="coupon_title" value="{{ get_static_option('coupon_title') }}">
                            </div>
                            <div class="form-group">
                                <label for="coupon_subtitle">{{ __('Coupon Subtitle') }}</label>
                                <input type="text" class="form-control" id="coupon_subtitle" name="coupon_subtitle" value="{{ get_static_option('coupon_subtitle') }}">
                            </div>
                            <div class="form-group">
                                <label for="coupon_placeholder">{{ __('Coupon Placeholder') }}</label>
                                <input type="text" class="form-control" id="coupon_placeholder" name="coupon_placeholder" value="{{ get_static_option('coupon_placeholder') }}">
                            </div>
                            <div class="form-group">
                                <label for="apply_coupon_btn_text">{{ __('Apply Button Text') }}</label>
                                <input type="text" class="form-control" id="apply_coupon_btn_text" name="apply_coupon_btn_text" value="{{ get_static_option('apply_coupon_btn_text') }}">
                            </div>
{{--  --}}
                            <h5 class="mt-5 mb-3">{{ __('Billing Info Login Section') }}</h5>
                            <div class="form-group">
                                <label for="checkout_page_title">{{ __('Page Title') }}</label>
                                <input type="text" class="form-control" id="checkout_page_title" name="checkout_page_title" value="{{ get_static_option('checkout_page_title') }}">
                            </div>
                            <div class="form-group">
                                <label for="create_account_text">{{ __('Create Account Text') }}</label>
                                <input type="text" class="form-control" id="create_account_text" name="create_account_text" value="{{ get_static_option('create_account_text') }}">
                            </div>
                            <div class="form-group">
                                <label for="ship_to_another_text">{{ __('Ship to another address') }}</label>
                                <input type="text" class="form-control" id="ship_to_another_text" name="ship_to_another_text" value="{{ get_static_option('ship_to_another_text') }}">
                            </div>
{{--  --}}
                            <h5 class="mt-5 mb-3">{{ __('Right Section') }}</h5>
                            <div class="form-group">
                                <label for="order_summary_title">{{ __('Order Summary Title') }}</label>
                                <input type="text" class="form-control" id="order_summary_title" name="order_summary_title" value="{{ get_static_option('order_summary_title') }}">
                            </div>
                            <div class="form-group">
                                <label for="subtotal_text">{{ __('Subtotal Text') }}</label>
                                <input type="text" class="form-control" id="subtotal_text" name="subtotal_text" value="{{ get_static_option('subtotal_text') }}">
                            </div>
                            <div class="form-group">
                                <label for="shipping_text">{{ __('Shipping Text') }}</label>
                                <input type="text" class="form-control" id="shipping_text" name="shipping_text" value="{{ get_static_option('shipping_text') }}">
                            </div>
                            <div class="form-group">
                                <label for="vat_text">{{ __('VAT Text') }}</label>
                                <input type="text" class="form-control" id="vat_text" name="vat_text" value="{{ get_static_option('vat_text') }}">
                            </div>
                            <div class="form-group">
                                <label for="discount_text">{{ __('Discount Text') }}</label>
                                <input type="text" class="form-control" id="discount_text" name="discount_text" value="{{ get_static_option('discount_text') }}">
                            </div>
                            <div class="form-group">
                                <label for="coupon_text">{{ __('Coupon Text') }}</label>
                                <input type="text" class="form-control" id="coupon_text" name="coupon_text" value="{{ get_static_option('coupon_text') }}">
                            </div>
                            <div class="form-group">
                                <label for="total_text">{{ __('Total Text') }}</label>
                                <input type="text" class="form-control" id="total_text" name="total_text" value="{{ get_static_option('total_text') }}">
                            </div>
{{--  --}}
                            <div class="form-group">
                                <label for="proceed_to_checkout_btn_text">{{ __('Proceed to Checkout Button Text') }}</label>
                                <input type="text" class="form-control" id="proceed_to_checkout_btn_text" name="proceed_to_checkout_btn_text" value="{{ get_static_option('proceed_to_checkout_btn_text') }}">
                            </div>
                            <div class="form-group">
                                <label for="return_to_cart_btn_text">{{ __('Return to Cart Button Text') }}</label>
                                <input type="text" class="form-control" id="return_to_cart_btn_text" name="return_to_cart_btn_text" value="{{ get_static_option('return_to_cart_btn_text') }}">
                            </div>
                            <div class="form-group">
                                <label for="checkout_page_terms_text">{{ __('Terms & Conditions Text') }}</label>
                                <input type="text" class="form-control" id="checkout_page_terms_text" name="checkout_page_terms_text" value="{{ get_static_option('checkout_page_terms_text') }}">
                                <small>{{ __('Embrace the part of text you want to make a link with ') }} <b>[lnk]</b> {{ __(' and ') }} <b>[/lnk]</b>.</small>
                                <small>{!! __('For example: I have read and agree to the Website <b>[lnk]</b>terms & conditions<b>[/lnk]</b>.') !!}</small>
                            </div>
                            <div class="form-group">
                                <label for="checkout_page_terms_link_url">{{ __('Terms & Conditions Link URL') }}</label>
                                <input type="text" class="form-control" id="checkout_page_terms_link_url" name="checkout_page_terms_link_url" value="{{ get_static_option('checkout_page_terms_link_url') }}">
                            </div>
                            <div class="form-group">
                                <label for="checkout_page_no_product_text">{{ __('No Product Text') }}</label>
                                <input type="text" class="form-control" id="checkout_page_no_product_text" name="checkout_page_no_product_text" value="{{ get_static_option('checkout_page_no_product_text') }}">
                            </div>
                            <div class="form-group">
                                <label for="back_to_home_btn_text">{{ __('Back to Home Button Text') }}</label>
                                <input type="text" class="form-control" id="back_to_home_btn_text" name="back_to_home_btn_text" value="{{ get_static_option('back_to_home_btn_text') }}">
                            </div>

                            <h5 class="mt-5 mb-3">{{ __('Error messege') }}</h5>
                            <div class="form-group">
                                <label for="shipping_option_invalid_msg">{{ __('Shipping minimum amount not reached') }}</label>
                                <input type="text" class="form-control" id="shipping_option_invalid_msg" name="shipping_option_invalid_msg" value="{{ get_static_option('shipping_option_invalid_msg') }}">
                            </div>
                            <button class="btn btn-primary">{{ __('Save Settings') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <x-media.markup/>
@endsection
@section('script')
    <x-media.js/>
@endsection
