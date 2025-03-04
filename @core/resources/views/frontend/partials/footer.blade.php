
<input id="product-image-model" type="hidden" value="">

<!-- footer area start -->
@php
$page_post = $page_post ?? (object)['footer_variant' => null];
@endphp
<footer class="footer-area 
    @if( request()->routeIs('frontend.dynamic.page') && isset($page_post->footer_variant) && $page_post->footer_variant == 2)
        index-02 dark
    @elseif( request()->routeIs('frontend.dynamic.page') && isset($page_post->footer_variant) && $page_post->footer_variant == 3)
        style-new-01 border-top footer-bg-color-01
    @elseif( request()->routeIs('frontend.dynamic.page') && isset($page_post->footer_variant) && $page_post->footer_variant == 4)
        style-new-01 border-top
    @endif
">
    <div class="footer-top">
        <div class="container @if( (request()->routeIs('frontend.dynamic.page') or request()->routeIs('homepage')) && isset($page_post->footer_variant) && $page_post->footer_variant == 2)
                custom-container-1618
                @elseif((request()->routeIs('frontend.dynamic.page') or request()->routeIs('homepage')) && in_array($page_post->footer_variant,[1,3,4,5,6]))
                    custom-container-1410
                @endif">
            <div class="row">
                @if(isset($dynamic_page_footer))
                    @if ($dynamic_page_footer == 1)
                        {!! render_frontend_sidebar('footer', ['column' => true]) !!}
                    @elseif ($dynamic_page_footer == 2)
                        {!! render_frontend_sidebar('footer_two', ['column' => true]) !!}
                    @endif
                @else
                    {!! render_frontend_sidebar('footer', ['column' => true]) !!}
                @endif
            </div>
        </div>
        <div class = 'row'>
        <div class="social-link mb-4 d-block" style="margin: auto;">
            <ul class="list d-flex" style = "gap: 8px;">
                {!! single_post_share(route('frontend.products.single', purify_html("slug")), purify_html('slug'), 'http://website.local/assets/uploads/media-uploader/about-us 16347320191649676254.jpeg') !!}
            </ul>
        </div>
    </div>


    <div class="footer-bottom">
        <div class="copyright-area">
            <div class="container">
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-area-inner justify-content-center">
                            <div class="content">
                                <p class="copyright">{!! purify_html_raw(get_footer_copyright_text()) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- modal area start -->
<div class="product-modal-wrap" id="productview">
    <div class="product-modal">
        <div class="product-img">
            <img src="assets/img/flash-sale/Image-1.jpg" class="attribute_img" alt="image">
        </div>
        <div class="content">
            <h4 class="title">{{ __('product name') }}</h4>
            <small class="is_available text-secondary"></small>
            <div class="ratings">
                <i class="las la-star icon"></i>
                <i class="las la-star icon"></i>
                <i class="las la-star icon"></i>
                <i class="lar la-star icon"></i>
            </div>
            <div class="pricing">
                <ul class="list">
                    <li class="price" style = "text-transform: lowercase!important;">
                        <del class="main_price"></del>
                    </li>
                    <li class="price sale_price" style = "text-transform: lowercase!important;"></li>
                </ul>
            </div>
            <p class="info">{{ __('Product Info') }}</p>
            <div class="cart-option">
                <div class="d-flex add_to_cart_info">
                    <div class="input-group">
                        {{-- <input class="` form-control" type="number" min="1" max="10000000" value="1"> --}}
                    </div>
                    <div class="add-cart-btn">
                        <a href="#" class="add-to-cart add_to_cart modal_add_to_cart">{{ __('add to cart') }}</a>
                    </div>
                    <div class="add-cart-btn">
                        <a href="#" class="add-to-cart buy_now ml-1">{{ __('Buy Now') }}</a>
                    </div>
                </div>
            </div>
            <div class="attribute-options"></div>
            <div class="product_meta">
                <span class="sku_wrapper">{{ __('SKU') }}: <span class="sku"></span></span>
                <span class="posted_in">{{ __('Category') }}: <a href="#" class="product_category" rel="tag">|</a></span>
                <span class="posted_in productview_subcategory">{{ __('Subcategory') }}: 
                    <span id="product_subcategory_links"></span>
                </span>
            </div>
        </div>

        <div class="close-btn" id="close">
            <span class="btn-x">×</span>
        </div>
    </div>
</div>
<!-- modal area start -->

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
@yield('scripts')

<script>
        (function ($) {
            "use strict";
            $(document).ready(function () {
                function removeTags(str) {
                    if ((str === null) || (str === '')) {
                        return false;
                    }
                    str = str.toString();
                    return str.replace(/(<([^>]+)>)/ig, '');
                }

                $(document).on('submit', '.custom-form-builder-form', function (e) {
                    e.preventDefault();
                    var form = $(this);
                    var formID = form.attr('id');
                    var msgContainer =  form.find('.error-message');
                    var formSelector = document.getElementById(formID);
                    var formData = new FormData(formSelector);
                    msgContainer.html('');
                    $.ajax({
                        url: "{{route('frontend.form.builder.custom.submit')}}",
                        type: "POST",
                        headers: {
                            'X-CSRF-TOKEN': "{{csrf_token()}}",
                        },
                        beforeSend:function (){
                            form.find('.ajax-loading-wrap').addClass('show').removeClass('hide');
                        },
                        processData: false,
                        contentType: false,
                        data:formData,
                        success: function (data) {
                            form.find('.ajax-loading-wrap').removeClass('show').addClass('hide');
                            msgContainer.html('<div class="alert alert-'+data.type+'">' + data.msg + '</div>');
                        },
                        error: function (data) {
                            form.find('.ajax-loading-wrap').removeClass('show').addClass('hide');
                            var errors = data.responseJSON.errors;
                            var markup = '<ul class="alert alert-danger">';
                            $.each(errors,function (index,value){
                                markup += '<li>'+value+'</li>';
                            })
                            markup += '</ul>';
                            msgContainer.html(markup);
                        }
                    });
                });
            });
        })(jQuery);
    </script>

    @if(!empty(get_static_option('site_google_captcha_v3_site_key')))
        <script src="https://www.google.com/recaptcha/api.js?render={{get_static_option('site_google_captcha_v3_site_key')}}"></script>
        <script>
            grecaptcha.ready(function () {
                grecaptcha.execute("{{get_static_option('site_google_captcha_v3_site_key')}}", {action: 'homepage'}).then(function (token) {
                    if(document.getElementById('gcaptcha_token') != null){
                        document.getElementById('gcaptcha_token').value = token;
                    }
                });
            });
        </script>
    @endif

<script src="{{ asset('assets/common/js/toastr.min.js') }}"></script>
@include('frontend.partials.scripts.footer-scripts')

</body>
</html>
