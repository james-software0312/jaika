<!DOCTYPE html>
<html class="no-js" lang="{{get_default_language()}}"  dir="{{get_default_language_direction()}}">

<head>
    @include('frontend.partials.google-analytics')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if(request()->routeIs('homepage'))
        <meta name="description" content="{{filter_static_option_value('site_meta_description', $global_static_field_data)}}">
        <meta name="tags" content="{{filter_static_option_value('site_meta_tags', $global_static_field_data)}}">
    @else
        @yield('page-meta-data')
    @endif
    {!! render_favicon_by_id(filter_static_option_value('site_favicon', $global_static_field_data)) !!}
    {!! load_google_fonts() !!}
    <link rel=icon href="{{ asset('assets/frontend/img/favicon/favicon.png') }}" sizes="20x20" type="image/png">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min-v4.6.0.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/line-awesome.min-v1.3.0.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/helpers.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
    @include('frontend.partials.css-variable')
    @yield('style')

    <link rel="stylesheet" href="{{ asset('assets/common/css/toastr.css') }}">

    @if(!empty(filter_static_option_value('site_rtl_enabled', $global_static_field_data)) || get_user_lang_direction() == 'rtl')
        <link rel="stylesheet" href="{{asset('assets/frontend/css/rtl.css')}}">
    @endif
    @include('frontend.partials.og-meta')
    <script src="{{asset('assets/frontend/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery-migrate-3.3.2.js')}}"></script>
    <script>var siteurl = "{{url('/')}}";</script>
    {!! filter_static_option_value('site_third_party_tracking_code', $global_static_field_data) !!}

    <link rel="stylesheet" href="{{ asset('assets/common/css/toastr.css') }}">

    <style>
        .error-wrap li {
            display: block;
            font-family: var(--heading-font);
            font-size: 16px;
            font-weight: 400;
            color: #666666;
        }
    </style>
</head>

<body>
    @include('frontend.partials.preloader')

    <!-- register form area start -->
    <div class="register-form-area-wrapper">
        <div class="register-bg"
            {!! render_background_image_markup_by_attachment_id(get_static_option('user_auth_page_side_image')) !!}
        ></div>
        <div class="custom-container-1720 container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-top">
                        <div class="left">
                            <div class="logo-wrapper">
                                <a href="{{ route('homepage') }}" class="logo">
                                    {!! render_image_markup_by_attachment_id(get_static_option('user_auth_page_logo')) !!}
                                </a>
                            </div>
                        </div>
                        <div class="right">
                            <div class="social-icon">
                                <ul class="social-icon-list">
                                    @php
                                        $social_links_json = get_static_option('user_auth_page_social_links');
                                        $all_social_links = [];
                                        if ($social_links_json) {
                                            $all_social_links = json_decode($social_links_json, true);
                                        }
                                    @endphp
                                    @foreach ($all_social_links as $social)
                                    <li class="item"><a href="//{{ $social['link'] }}"><i class="{{ $social['icon'] }} icon"></i></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-5">
                    <x-msg.error />
                    <x-msg.flash />
                    @php $fallback_class = empty(request()->type) ? " show active " : ""; @endphp
                    <div class="register-form-wrapper">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link @if(request()->type && request()->type == 'login') active @endif {{ $fallback_class }}" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">{{ __('sign in') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->type && request()->type == 'register') active @endif" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">{{ __('sign up') }}</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade @if(request()->type && request()->type == 'login') show active @endif {{ $fallback_class }}" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <form action="{{route('user.login')}}" method="post" class="register-form" id="login_form_order_page">
                                    @csrf
                                    <div class="error-wrap"></div>
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="login_email">{{ __('Username') }}
                                            <span class="ex">*</span></label>
                                            <input type="text" name="username" id="login_email" required />
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="login_password">{{ __('Password') }}<span class="ex">*</span></label>
                                            <input type="password" name="password" class="form-control" id="login_password" required />
                                        </div>
                                        <div class="form-group form-check col-12">
                                            <input type="checkbox" name="remember" class="form-check-input" id="login_remember">
                                            <label class="form-check-label" for="remember">{{ __('Remember me') }} </label>
                                        </div>
                                    </div>
                                    <div class="btn-pair">
                                        <a id="forgot-password" data-toggle="tab" 
                                            href="#forgot_password" role="tab" aria-controls="forgot_password" 
                                            aria-selected="false" class="forgot-btn">
                                            {{ __('forgot password?') }}
                                        </a>

                                        <div class="btn-wrapper">
                                            <button type="button" class="default-btn" id="login_btn">{{ __('SIGN IN') }}</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="bar-wrap">
                                    <span class="bar"></span>
                                    <p class="or">{{ __('or') }}</p>
                                    <span class="bar"></span>
                                </div>
                                <div class="sin-in-with">
                                    @if(get_static_option('enable_google_login'))
                                    <a href="{{ route('login.google.redirect') }}" class="sign-in-btn">
                                        <img src="{{ asset('assets/frontend/img/icon/google-icon.svg') }}" alt="icon">
                                        {{ __('Sign in with Google') }}
                                    </a>
                                    @endif
                                    @if(get_static_option('enable_facebook_login'))
                                    <a href="{{ route('login.facebook.redirect') }}" class="sign-in-btn">
                                        <img src="{{ asset('assets/frontend/img/icon/Facebook-icon.svg') }}" alt="icon">
                                        {{ __('Sign in with Facebook') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <div class="tab-pane fade @if(request()->type && request()->type == 'register') show active @endif" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <form action="{{route('user.register')}}" method="POST" class="register-form">
                                    @csrf
                                    
                                    <input type="hidden" name="captcha_token" id="gcaptcha_token">
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="address_amaila">{{ __('Full Name') }}<span class="ex">*</span></label>
                                            <input type="text" name="name" id="address_amaila">
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="l-name">{{ __('Username') }}<span class="ex">*</span></label>
                                            <input type="text" name="username" id="l-name" value="">
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="address_amailaw">{{ __('Email') }}<span class="ex">*</span></label>
                                            <input type="email" name="email" id="address_amailaw" />
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="country">{{ __('Country') }}<span class="ex">*</span></label>
                                            <select id="country" class="form-control" name="country">
                                                @foreach ($all_country as $country)
                                                    <option value="{{ $country }}">{{ $country }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="address_phone">{{ __('City') }}<span class="ex">*</span></label>
                                            <input type="text" name="city" id="address_city" />
                                        </div>

                                        <div class="form-group col-lg-6 col-12">
                                            <label for="exampleInputPassword16">{{ __('Password') }}<span class="ex">*</span></label>
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword16">
                                        </div>
                                        <div class="form-group col-lg-6 col-12">
                                            <label for="exampleInputPassword15">{{ __('Confirmed Password') }}<span
                                                    class="ex">*</span></label>
                                            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword15">
                                        </div>
                                        <div class="form-group form-check col-12">
                                            <input type="checkbox" class="form-check-input" name="agree_terms" id="Check11">
                                            <label class="form-check-label" for="Check11">
                                                {{ __('By creating an account, you agree to the') }}
                                                <a href="{{ url(get_static_option('toc_page_link')) }}">{{ __('terms of service and Conditions') }},</a> {{ __('and') }}
                                                <a href="{{ url(get_static_option('privacy_policy_link')) }}">{{ __('privacy policy') }}</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="btn-wrapper btn-top">
                                        <input type="submit" value="{{ __('register') }}" class="default-btn">
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="forgot_password" role="tabpanel" aria-labelledby="forgot_password">
                                <form action="{{route('user.forget.password')}}" method="post" class="register-form" id="forgot_password_form">
                                    @csrf
                                    <x-msg.error />
                                    <x-msg.flash />
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="forgot_password_username">{{ __('Username') }}<span class="ex">*</span></label>
                                            <input type="text" name="username" id="forgot_password_username">
                                        </div>
                                    </div>
                                    <div class="btn-wrapper btn-top">
                                        <input type="submit" value="{{ __('Send Reset Mail') }}" class="default-btn">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- register form area end -->


    <!-- back to top area start -->
    <div class="scroll-to-top">
        <i class="las la-angle-up"></i>
    </div>
    <!-- back to top area end -->

    <!-- jquery -->
    <script src="{{ asset('assets/frontend/js/jquery-3.6.0.min.js') }}"></script>
    <!-- jquery migrate -->
    <script src="{{ asset('assets/frontend/js/jquery-migrate-3.3.2.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('assets/frontend/js/bootstrap.min-v4.6.0.js') }}"></script>
    <!-- popper -->
    <script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
    <!-- slick js -->
    <script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
    <!-- isotope js -->
    <script src="{{ asset('assets/frontend/js/isotope.pkgd.min-v3.0.6.js') }}"></script>
    <!-- countdown js -->
    <script src="{{ asset('assets/frontend/js/loopcounter.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('assets/frontend/js/wow.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>

    @include('frontend.partials.google-captcha')
    @include('frontend.partials.gdpr-cookie')
    @include('frontend.partials.inline-script')
    @include('frontend.partials.twakto')

    <x-sweet-alert-msg/>
    <script src="{{ asset('assets/common/js/toastr.min.js') }}"></script>
    <script>
        (function ($) {
            'use strict'
            $(document).ready(function () {
                // 
            });
        })(jQuery);
    </script>

</body>

</html>
    <script>
        (function($) {
            "use strict";
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

            $('.nav-item .nav-link').on('click', function () {
                $('#forgot-password').removeClass('active');
            });
        })(jQuery)
    </script>
