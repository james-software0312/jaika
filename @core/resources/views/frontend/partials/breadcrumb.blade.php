<div class="breadcrumb-area 
    @if( request()->routeIs('frontend.dynamic.page')  &&  empty($page_post->breadcrumb_status))
        d-none
    @endif
"
    {!! render_background_image_markup_by_attachment_id(get_static_option('site_breadcrumb_bg')) !!}
>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner">
                    <h2 class="page-title">@yield('page-title')</h2>
                    <ul class="page-list">
                        <li class="list-item"><a href="{{url('/')}}">{{__('Home')}}</a></li>
                        @if(request()->routeIs('frontend.products.campaign'))
                        <li class="list-item"><a href="{{ route('frontend.products.campaign.list') }}">{{ __('Campaign') }}</a></li>
                        @elseif(request()->routeIs('frontend.products.campaign.list'))
                        @elseif(request()->is(get_static_option('product_page_slug').'/*') || request()->is(get_static_option('product_page_slug').'-category'.'/*'))
                        <li class="list-item"><a href="{{url('/').'/'.get_static_option('product_page_slug')}}">{{get_static_option('product_page_slug')}}</a></li>
                        @elseif(request()->is(get_static_option('blog_page_slug').'/*') || request()->is(get_static_option('blog_page_slug').'-category'.'/*'))
                        <li class="list-item"><a href="{{url('/').'/'.get_static_option('blog_page_slug')}}">{{get_static_option('blog_page_name')}}</a></li>
                        @endif
                        <li class="list-item">@yield('page-title')</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
