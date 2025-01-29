
<!-- nav area start -->
<nav class="navbar navbar-area navbar-expand-lg has-topbar nav-style-01 dark
    @if(!empty($page_post->navbar_variant))
        {{ $page_post->navbar_variant == 1 ||  $page_post->navbar_variant == 2 ||
        (request()->routeIs('frontend.dynamic.page') == false && $page_post->navbar_variant == 3) ? "nav-right-inline" : "" }}
    @else
        nav-right-inline
    @endif

    @if(!empty($page_post->navbar_variant))
        @if($page_post->navbar_variant == 5)
            home-page-five-slider
        @endif
    @endif
    @if(isset($page_post->navbar_variant) && $page_post->navbar_variant == 1)
        nav-style-01
    @elseif(isset($page_post->navbar_variant) && $page_post->navbar_variant == 2)
        index-02 dark
    @elseif(isset($page_post->navbar_variant) && $page_post->navbar_variant == 3)
{{--        style-new-01 border-top footer-bg-color-01--}}
        has-topbar new-nav-style-01 new-index-03
    @elseif(isset($page_post->navbar_variant) && $page_post->navbar_variant == 4)
        has-topbar new-nav-style-01 new-index-04
    @elseif(isset($page_post->navbar_variant) && $page_post->navbar_variant == 5)
        has-topbar new-nav-style-01 new-index-05
    @endif">

    <div class="container home-page-two-container new-nav-container custom-container-1410">
        <div class="responsive-mobile-menu">
            <div class="logo-wrapper">
                <a href="{{ route('homepage') }}" class="logo">
                    @if(!empty(filter_static_option_value('site_logo',$global_static_field_data)))
                        {!! render_image_markup_by_attachment_id(filter_static_option_value('site_logo',$global_static_field_data)) !!}
                    @else
                        <h2 class="site-title">{{filter_static_option_value('site_title',$global_static_field_data)}}</h2>
                    @endif
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
            <ul class="navbar-nav">
                {!! render_frontend_menu($primary_menu) !!}
            </ul>
        </div>
        <div class="nav-right-content">
            <ul>
                <li class="search position-relative">
                    <div class="search-open">
                        <i class="las la-search icon"></i>
                    </div>

                    <div class="search-bar">
                        <form class="menu-search-form" id="product_search_form" action="{{ route('frontend.products.all') }}">
                            <div class="search-close"> <i class="las la-times"></i> </div>
                            <input class="item-search" name="q" type="text" placeholder="Search Here.....">
                            <button type="submit"> Search Now </button>
                        </form>
                    </div>
                </li>
                <li class="favicon pr-0">
                    <a href="{{ route('frontend.products.compare') }}">
                        <i class="las la-retweet icon"></i>
                    </a>
                </li>
                <li class="favicon">
                    <a href="{{ route('frontend.products.wishlist') }}">
                        <i class="lar la-heart icon"></i>
                        <span class="cart-badge" id="wishlist_badge">{{ __('0') }}</span>
                    </a>
                </li>
                <li class="cart position-relative">
                    <a href="{{ route('frontend.products.cart') }}">
                        <i class="las la-cart-plus icon"></i>
                        <span class="cart-badge" id="cart_badge">{{ __('0') }}</span>
                    </a>
                    <div class="quick-cart">
                        <div class="arrow-up"></div>
                        <div id="top_minicart_container">
                            <div id="top_cart_item_box"></div>
                            <div class="total-pricing">
                                <div class="total">
                                    <span class="total">{{ __('SUB TOTAL:') }}</span>
                                    <span class="amount" id="top_cart_subtotal">00.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrapper">
                            <a href="{{ route('frontend.checkout') }}" class="default-btn">{{ __('checkout') }}</a>
                            <a href="{{ route('frontend.products.cart') }}" class="default-btn">{{ __('view cart') }}</a>
                        </div>
                    </div>
                </li>
                <li class="account account-option">
                    @if (auth('web')->user())
                    <a href="{{ route('user.home') }}">
                        <span class="text"> {{ __('Hi, ') . auth('web')->user()->name }}</span>
                        <i class="lar la-user icon"></i>
                    </a>
                    <div class="name-list">
                        <span class="lists">
                            <a href="{{ route('user.home') }}">{{ __('Dashboard') }}</a>
                        </span>
                        <span class="lists"><a href="{{ route('user.home.edit.profile') }}">{{ __('Edit Profile') }}</a></span>
                        <span class="lists"><a href="{{ route('user.home.change.password') }}">{{ __('Change Password') }}</a></span>
                        <span class="lists"><a href="{{ route('user.product.order.all') }}">{{ __('My Orders') }}</a></span>
                        <span class="lists"><a href="{{ route('user.shipping.address.all') }}">{{ __('Shipping Address') }}</a></span>
                        <span class="lists"><a href="{{ route('user.home.support.tickets') }}">{{ __('Support Ticket') }}</a></span>
                        <span class="lists">
                            <a href="{{ route('user.logout') }}" onclick="event.preventDefault();document.getElementById('logout_submit_btn').dispatchEvent(new MouseEvent('click'));">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                @csrf
                                <button id="logout_submit_btn" type="submit"></button>
                            </form>
                        </span>
                    </div>
                    @elseif (auth('admin')->user())
                    <a href="{{ route('admin.home') }}">
                        <span class="text"> {{ __('Hi, Admin') }}</span>
                        <i class="lar la-user icon"></i>
                    </a>
                    <div class="name-list">
                        <span class="lists"><a href="{{ route('admin.home') }}">{{ __('Dashboard') }}</a></span>
                        <span class="lists">
                            <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout_submit_btn').dispatchEvent(new MouseEvent('click'));">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="GET" style="display: none;">
                                @csrf
                                <button id="logout_submit_btn" type="submit"></button>
                            </form>
                        </span>
                    </div>
                    @else
                    <a href="{{ route('user.login') }}">
                        <span class="text"> {{ __('account') }}</span>
                        <i class="lar la-user icon"></i>
                    </a>
                    <div class="name-list">
                        <span class="lists"><a href="{{ route('user.login', ['type' => 'login']) }}">{{ __('Login') }}</a></span>
                        <span class="lists"><a href="{{ route('user.register') }}">{{ __('Register') }}</a></span>
                    </div>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- navbar area end -->
