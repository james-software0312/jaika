@extends('frontend.frontend-page-master')

@section('page-title')
    {{ __('Checkout') }}
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/common/css/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/payment.css') }}">

    <style>
        .error-wrap li {
            text-transform: capitalize;
        }
    </style>
    <x-loader.css />
@endsection

@section('content')
{{-- get_static_option('',()) --}}
    @if (!empty($all_cart_items) && count($all_cart_items))
        <div class="checkout-area-wrapper widt-coupon">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="checkout-inner-content">
                            <x-msg.flash />
                            <x-msg.error />

                            {{-- GLOBAL DATA STORE FOR CHANGABLE VALUES --}}
                            <form id="global_settings">
                                <input type="hidden" name="gs_tax_amount" id="gs_tax_amount" value="{{ $tax }}" />
                                <input type="hidden" name="gs_selected_shipping_id" id="gs_selected_shipping_id" value="{{ optional($default_shipping)->id }}" />
                                <input type="hidden" name="gs_selected_shipping_amount" id="gs_selected_shipping_amount" value="{{ $default_shipping_cost }}" />
                                <input type="hidden" name="gs_coupon_text" id="gs_coupon_text" value="{{ request()->coupon }}" />
                                <input type="hidden" name="gs_coupon_amount" id="gs_coupon_amount" value="{{ $coupon_amount }}" />
                                <input type="hidden" name="gs_subtotal" id="gs_subtotal" value="{{ $subtotal }}" />

                                <input type="hidden" name="gs_selected_country" id="gs_selected_country" value="{{ $subtotal }}" />
                                <input type="hidden" name="gs_selected_state" id="gs_selected_state" value="{{ $subtotal }}" />
                            </form>
                            {{-- ======================================= --}}
                            @if (!$user)
                                <p class="query">
                                    <i class="las la-exclamation-circle icon"></i>
                                    {!! __('Returning customer?') !!}
                                    {{-- {!! filter_static_option_value('returning_customer_text', $setting_text, __('Returning customer?')) !!} --}}
                                    {{-- <a href="#" id="toggle_login">{!! filter_static_option_value('toggle_login_text', $setting_text, __('Click here to login')) !!}</a> --}}
                                    <a href="#" id="toggle_login">{!!  __('Click here to login')!!}</a>
                                </p>
                                {{-- login area --}}
                                <div class="discount-coupon-area margin-bottom-30 d-none" id="login_container">
                                    {{-- <h4 class="title">{!! filter_static_option_value('signin_title', $setting_text, __('Sign in')) !!}</h4> --}}
                                    <h4 class="title">{!! __('Sign in') !!}</h4>
                                    <p class="info">
                                        {{-- {!! filter_static_option_value('signin_subtitle', $setting_text, __('Login to buy the product as user')) !!} --}}
                                        {!! __('Login to buy the product as user') !!}
                                    </p>
                                    <form class="form-wrapper" id="login_form_order_page">
                                        <div class="error-wrap text-center"></div>
                                        <div class="row">
                                            <div class="form-group col-lg-6 col-12">
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="username"
                                                        aria-describedby="emailHelp" placeholder="User Name or Email"
                                                />
                                            </div>
                                            <div class="form-group col-lg-6 col-12">
                                                <input type="password" class="form-control" id="exampleInputPassword1"
                                                    name="password" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group form-check">
                                            <div class="box-wrap">
                                                <div class="left">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                        {{-- {!! filter_static_option_value('remember_text', $setting_text, __('Remember me')) !!} --}}
                                                        {!!__('Remember me') !!}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-wrapper">
                                            {{-- <button type="submit" id="login_btn" class="default-btn">{!! filter_static_option_value('remember_signin_btn_text', $setting_text, __('Sign in')) !!}</button> --}}
                                            <button type="submit" id="login_btn" class="default-btn">{!! __('Sign in') !!}</button>
                                        </div>
                                        <div class="sign-in-with">
                                            @if(get_static_option('enable_google_login'))
                                            <a href="{{route('login.google.redirect')}}" class="special-account">
                                                <img src="{{ asset('assets/frontend/img/icon/google-icon.svg') }}"
                                                    alt="icon">
                                            </a>
                                            @endif
                                            @if(get_static_option('enable_facebook_login'))
                                            <a href="{{route('login.facebook.redirect')}}" class="special-account">
                                                <img src="{{ asset('assets/frontend/img/icon/Facebook-icon.svg') }}"
                                                    alt="icon">
                                            </a>
                                            @endif
                                        </div>
                                    </form>
                                </div>
                                {{-- login area - end --}}
                            @endif
                            <p class="query">
                                <i class="las la-exclamation-circle icon"></i>
                                {{-- {!! filter_static_option_value('have_coupon_text', $setting_text, __('Have a coupon?')) !!} --}}
                                {!!__('Have a coupon?') !!}
                                {{-- <a href="#" class="toggle_coupon">{!! filter_static_option_value('enter_coupon_text', $setting_text, __('Click here to enter your code')) !!}</a> --}}
                                <a href="#" class="toggle_coupon">{!! __('Click here to enter your code') !!}</a>
                            </p>
                            <!-- discount coupon area -->
                            <div class="discount-coupon-area margin-bottom-50 margin-top-20 coupon_section d-none">
                                <h4 class="title">{!! filter_static_option_value('coupon_title', $setting_text, __('coupon discount')) !!}</h4>
                                <p class="info">
                                    {!! __('There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some.'
                                            )
                                    !!}
                                </p>

                                <form action="{{ route('frontend.checkout.apply.coupon') }}" method="get" class="discount-coupon">
                                    <div class="form-group">
                                        <input type="text" name="coupon" class="form-control"
                                            placeholder="{!! __('Enter your coupon code') !!}"
                                            value="{{ old('coupon') ?? request()->coupon }}">
                                    </div>
                                    <div class="btn-wrapper">
                                        <button class="default-btn" type="submit">{!!  __('apply coupon') !!} </button>
                                    </div>
                                </form>
                            </div>

                            <!-- billing details area -->
                            <div class="billing-details-area-wrapper">
                                <h3 class="title">{!!  __('Billing detail') !!}</h3>
                                <form action="{{ route('frontend.checkout') }}" method="POST" id="billing_info" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="coupon" id="coupon_code" value="{{ old('coupon') ?? request()->coupon }}">
                                    <input type="hidden" name="tax_amount">
                                    <input type="hidden" name="selected_shipping_option" value="{{ $default_shipping->id ?? '' }}">
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="country">{{ __('Country') }}</label>
                                            <select name="country" id="country">
                                                <option value="">{{ __('Select Country') }}</option>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}" 
                                                        @if(isset($user) && isset($user->country) 
                                                            && $user->country == $country->id
                                                        ) selected @endif
                                                    >{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="f-name">{{ __('Full name') }}</label>
                                            <input type="text" id="f-name" name="name" value="{{ old('name') ?? $user->name ?? '' }}">
                                        </div>

                                        <div class="form-group col-lg-12 col-12">
                                            <label for="address_amail">{{ __('Email') }}</label>
                                            <input type="email" id="email" name="email" value="{{ old('email') ?? $user->email ?? '' }}" />
                                        </div>

                                        <div class="form-group col-lg-12 col-12">
                                            <label for="address_phone">{{ __('Phone') }}</label>
                                            <input type="text" id="phone" name="phone" value="{{ old('phone') ?? $user->phone ?? '' }}" />
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="address_01">{{ __('Address') }}</label>
                                            <input type="text" id="address_01" name="address"
                                                value="{{ old('address') ?? $user->address ?? '' }}">
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="address_03">{{ __('City/Town') }}</label>
                                            <input type="text" id="city" name="city" value="{{ old('city') ?? $user->city ?? '' }}">
                                        </div>

                                        {{-- <div class="form-group col-lg-6 col-12">
                                            <label for="address_province_ship">{{ __('State') }}</label>
                                            <select id="state" name="state">
                                                <option value="">{{ __('Select State') }}</option>
                                                @if(isset($user) && isset($user->country))
                                                    @php
                                                        $states = \App\Country\State::where("country_id",$user->country)->where("status","publish")->select("id","name")->get();
                                                    @endphp
                                                    @foreach($states as $state)
                                                        <option value="{{ $state->id }}" {{ $state->id == $user->state ? "selected" : "" }}>{{ $state->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div> --}}

                                        <div class="form-group  col-12">
                                            <label for="address_zip_ship_2">{{ __('Zip Code') }}</label>
                                            <input type="text" id="zipcode" name="zipcode"
                                                value="{{ old('zipcode') ?? $user->zipcode ?? '' }}" />
                                        </div>

                                        @if (!$user)
                                            <div class="form-group form-check col-12">
                                                <input type="checkbox" id="create_account" name="create_account"
                                                    class="form-check-input">
                                                <label class="form-check-label" for="create_account">
                                                    {!!  __('Create an Account?') !!}
                                                </label>
                                            </div>
                                            <div class="form-group col-lg-12 col-12" style="display: none">
                                                <label for="username">{{ __('username') }}</label>
                                                <input type="text" name="username" class="form-control" id="username">
                                            </div>
                                            <div class="form-group col-lg-6 col-12" style="display: none">
                                                <label for="password">{{ __('Password') }}</label>
                                                <input type="password" name="password" class="form-control" id="password">
                                            </div>
                                            <div class="form-group col-lg-6 col-12" style="display: none">
                                                <label for="confirm_password">{{ __('Confirmed Password') }}</label>
                                                <input type="password" name="password_confirmation" class="form-control"
                                                    id="confirm_password">
                                            </div>
                                        @endif

                                        <div class="form-group col-12">
                                            <label for="order_note">{{ __('Order Note') }}</label>
                                            <textarea class="form-control" id="order_note" name="order_note" rows="3"></textarea>
                                        </div>
                                        @if (auth('web')->check())
                                        <input type="hidden" name="shipping_address_id" id="shipping_address_id">
                                        <div class="form-group form-check col-12">
                                            <input type="checkbox" class="form-check-input" id="ship_another_address">
                                            <label class="form-check-label" for="ship_another_address">
                                                {!! __('Ship to another address') !!}
                                            </label>
                                        </div>
                                        <div id="user_shipping_address_container" class="container-fluid" style="display: none">
                                            <div id="all_user_shipping_address_container">
                                                @if ($all_user_shipping)
                                                    @include('frontend.cart.checkout-user-shipping')
                                                @endif
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div id="user_shipping_address_form">
                                                        <div class="form-group">
                                                            <label for="user_shipping_name">{{ __('Name') }}</label>
                                                            <input type="text" class="form-control" id="user_shipping_name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="user_shipping_address">{{ __('Address') }}</label>
                                                            <textarea id="user_shipping_address" cols="30" rows="5"></textarea>
                                                        </div>
                                                        <button id="new_user_shipping_address_form_submit_btn" class="btn btn-primary px-3">{{ __('Add New Shipping Address') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5" id="checkout_total_containeraaa">
                        <div class="order cart-total">
                            <div id="checkout_total_container">
                                @include('frontend.cart.checkout-partial')
                            </div>
                            <div id="payment_method_input">
                                {!! render_payment_gateway_for_form() !!}
                                @if(!empty(get_static_option('manual_payment_gateway')))
                                    <div class="form-group manual_payment_transaction_field" style="display: none">
                                        <div class="label">{{__('Transaction ID')}}</div>
                                        <input type="text" name="transaction_id" placeholder="{{__('Transaction ID')}}"
                                                class="form-control">
                                        <span class="help-info">{!! get_manual_payment_description() !!}</span>
                                    </div>
                                @endif
                                @if(!empty(get_static_option('bank_payment_gateway')))
                                    <div class="form-group bank_payment_transaction_field" style="display: none">
                                        <div class="label">{{__('Bank Payment Image')}}</div>
                                        <input type="file" name="bank_payment_input" class="form-control-file">
                                        <span class="help-info">{!! get_manual_payment_description('bank_payment') !!}</span>
                                    </div>
                                @endif
                                @if(!empty(get_static_option('cheque_payment_gateway')))
                                    <div class="form-group cheque_payment_transaction_field" style="display: none">
                                        <div class="label">{{__('Cheque Payment Image')}}</div>
                                        <input type="file" name="cheque_payment_input" class="form-control-file">
                                        <span class="help-info">{!! get_manual_payment_description('cheque_payment') !!}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="sum-bar"></div>
                            <div class="form-group form-check col-12">
                                @php
                                    $checkout_page_terms_text = get_static_option('checkout_page_terms_text');
                                    $checkout_page_terms_link_url = get_static_option('checkout_page_terms_link_url');
                                    $checkout_page_terms_link_url = $checkout_page_terms_link_url ? url($checkout_page_terms_link_url) : "#";
                            
                                    $terms_text = str_replace(['[lnk]', '[/lnk]'], ["<a class='terms' href='$checkout_page_terms_link_url'>", "</a>"], __($checkout_page_terms_text));
                                @endphp
                                {{-- <input type="checkbox" class="form-check-input" name="agree" id="Checkhh">
                                <label class="form-check-label" for="Checkhh">
                                    {!! __($terms_text) !!}
                                </label> --}}
                            </div>
                            <div class="btn-wrapper btn-top">
                                <button type="submit" class="default-btn">{!!  __('Proceed to checkout') !!}</button>
                            </div>
                            <div class="btn-wrapper ">
                                <a href="{{ route('frontend.products.cart') }}" class="default-btn reverse">
                                    {!! __('Return to Cart') !!}
                                </a>
                            </div>
                        </div>

                    </div>
                   
                    </form>
                </div>
            </div>
        </div>
    @else
        <div class="only-img-page-wrapper cart">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="img-box">
                            {!! render_image_markup_by_attachment_id(get_static_option('empty_cart_image')) !!}
                        </div>
                        <div class="content">
                            <p class="info">{!!  __('No products in your cart!') !!}</p>
                            <div class="btn-wrapper">
                                <a href="{{ route('homepage') }}" class="default-btn">{!!  __('Back to home') !!}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <x-loader.html />
@endsection
@section('scripts')
    <link rel="stylesheet" href="{{ asset('assets/frontend/js/toastr.min.js') }}">
    @include('frontend.partials.scripts.checkout-scripts')
    <script>
        $(document).ready(function (){
            let id = $("#state").val();
            $.get('{{ route('state.info.ajax') }}', {
                id: id
            }).then(function(data) {
                $('#tax_amount').text(site_currency_symbol + Number(data.tax).toFixed(
                    2));
                calculateTotal();
            });
        });
    </script>
@endsection
