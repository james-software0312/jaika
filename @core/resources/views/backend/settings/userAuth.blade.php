@extends('backend.admin-master')
@section('style')
    <x-media.css/>
@endsection
@section('site-title')
    {{__('Login/Register Page Settings')}}
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
                        <h4 class="header-title">{{__('Login/Register Page Settings')}}</h4>
                        <form action="{{ route('admin.page.settings.user.auth') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <x-media-upload :id="get_static_option('user_auth_page_logo')" :name="'user_auth_page_logo'" :dimentions="'108X61'" :title="__('Login/Register page logo')" />
                            </div>
                            <div class="form-group">
                                <label for="toc_page_link">{{ __('Terms of Service and Conditions Link') }}</label>
                                <input type="text" class="form-control" id="toc_page_link" name="toc_page_link" value="{{ get_static_option('toc_page_link') }}">
                            </div>
                            <div class="form-group">
                                <label for="privacy_policy_link">{{ __('Privacy Policy Link') }}</label>
                                <input type="text" class="form-control" id="privacy_policy_link" name="privacy_policy_link" value="{{ get_static_option('privacy_policy_link') }}">
                            </div>
                            <div class="form-group">
                                <x-media-upload :id="get_static_option('user_auth_page_side_image')" :name="'user_auth_page_side_image'" :dimentions="'960X1080'" :title="__('Login/Register page side image')" />
                            </div>
                            <div class="form-group">
                                <label for="">{{ __('Social Icons') }}</label>
                                <div class="form-row my-1">
                                    <div class="col">
                                        <div class="form-row">
                                            <div class="col-auto">
                                                <x-iconpicker.input :id="'social_icon_icon'" :name="'social_icon_icon[]'" :label="''"/>
                                            </div>
                                            <div class="col">
                                                <input type="text" name="social_icon_link[]" class="form-control" placeholder="{{ __('Link') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button type="button" class="btn btn-primary add_social">+</button>
                                        <button type="button" class="btn btn-danger" disabled>-</button>
                                    </div>
                                </div>
                                <div id="repeater_container">
                                    @php
                                        $social_links_json = get_static_option('user_auth_page_social_links');
                                        $all_social_links = [];
                                        if ($social_links_json) {
                                            $all_social_links = json_decode($social_links_json, true);
                                        }
                                    @endphp
                                    @foreach ($all_social_links as $key => $social)
                                    <div class="form-row my-1">
                                        <div class="col">
                                            <div class="form-row">
                                                <div class="col-auto">
                                                    <x-iconpicker.input :id="'social_icon_icon_'.$key" :name="'social_icon_icon[]'" :label="''"/>
                                                </div>
                                                <div class="col">
                                                    <input type="text" name="social_icon_link[]" class="form-control" placeholder="{{ __('Link') }}" value="{{ $social['link'] }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button type="button" class="btn btn-primary add_social">+</button>
                                            <button type="button" class="btn btn-danger remove_social">-</button>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
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
    <x-iconpicker.js />
    <script>
        (function ($) {
            'use script'
            $(document).ready(function () {
                $(document).on('click', '.add_social', function () {
                    let container = $('#repeater_container');
                    let repeater_content = '<div class="form-row my-1">'
                                            + '<div class="col">'
                                                + '<div class="form-row">'
                                                    + '<div class="col-auto">'
                                                        + `<x-iconpicker.input :id="'social_icon_icon'" :name="'social_icon_icon[]'" :label="''"/>`
                                                    + '</div>'
                                                    + '<div class="col">'
                                                        + '<input type="text" name="social_icon_link[]" class="form-control" placeholder="{{ __('Link') }}">'
                                                    + '</div>'
                                                + '</div>'
                                            + '</div>'
                                            + '<div class="col-auto">'
                                                + '<button type="button" class="btn btn-primary add_social">+</button>'
                                                + '<button type="button" class="btn btn-danger remove_social">-</button>'
                                            + '</div>'
                                        + '</div>';
                    container.append(repeater_content);
                });

                $(document).on('click', '.remove_social', function () {
                    $(this).closest('.form-row.my-1').remove();
                });

                @foreach ($all_social_links as $key => $social)
                setSelectedClass('#social_icon_icon_{{ $key }}', '{{ $social["icon"] }}');
                @endforeach
            });
        })(jQuery)
    </script>
@endsection
