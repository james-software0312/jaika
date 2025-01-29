{{-- This condition will help you if you want to specify which page will render this top header --}}

@if((get_static_option('home_page_variant') != '05' || (request()->routeIs('frontend.dynamic.page') && isset($page_post->navbar_variant) && $page_post->navbar_variant != 5)) == false)
<div class="topbar-area">
    <div class="container custom-container-1790">
        <div class="row">
            <div class="col-lg-12">
                <div class="topbar-inner">
                    <div class="left-content">
                        <div class="select-option">
                            @php $all_language = get_all_language(); @endphp
                            <select class="lang" id="langchange">
                                @foreach($all_language as $lang)
                                    @php
                                        $lang_name = explode('(',$lang->name);
                                        $data = array_shift($lang_name);
                                    @endphp
                                    <option @if(get_user_lang() == $lang->slug) selected @endif value="{{$lang->slug}}">{{$data}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="social-icon">
                            <ul class="social-icon-list">
                                @foreach ($all_social_item as $social_item)
                                <li class="item"><a href="{{ $social_item->url }}"><i class="{{ $social_item->icon }} icon"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="right-content">
                        <div class="info">
                            <ul class="list">
                                 @if(!empty(get_static_option('navbar_right_faq_text')))
                                <li class="item">
                                    <a href="{{ get_static_option('navbar_right_faq_url') }}">{{ get_static_option('navbar_right_faq_text') }}</a>
                                </li>
                                 @endif
                                @if(!empty(get_static_option('navbar_right_text')))
                                <li class="item">
                                    <a href="#">{{ get_static_option('navbar_right_text') }}: {{ get_static_option('navbar_right_info') }}</a>
                                </li>
                                @endif
                            </ul>
                        </div>
                        <div class="social-icon">
                            <ul class="social-icon-list">
                                @foreach ($all_social_item as $social_item)
                                <li class="item"><a href="{{ $social_item->url }}"><i class="{{ $social_item->icon }} icon"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
