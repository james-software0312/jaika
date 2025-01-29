@extends('backend.admin-master')
@section('style')
    <link rel="stylesheet" href="{{asset('assets/backend/css/colorpicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/css/dropzone.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/css/media-uploader.css')}}">
@endsection
@section('site-title')
    {{__('Color Settings')}}
@endsection
@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-12 mt-5">
                @include('backend.partials.message')
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__("Color Settings")}}</h4>
                        <form action="{{route('admin.general.color.settings')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="tab-content margin-top-30" id="nav-tabContent">
                            </div>

                            <div class="form-group">
                                <label for="site_color">{{__('Site Main Color Settings')}}</label>
                                <input type="text" name="site_color" style="background-color: {{get_static_option('site_color')}};color: #fff;" class="form-control" value="{{get_static_option('site_color')}}" id="site_color">
                                <small>{{__('you change site main color from here, it will replace website main color')}}</small>
                            </div>
                            <div class="form-group">
                                <label for="site_main_color_two">{{__('Site Main Color Two Settings')}}</label>
                                <input type="text" name="site_main_color_two" style="background-color: {{get_static_option('site_main_color_two')}};color: #fff;" class="form-control" value="{{get_static_option('site_main_color_two')}}" id="site_main_color_two">
                                <small>{{__('you change site base color two color from here, it will replace website site base color two color')}}</small>
                            </div>

                            <div class="form-group">
                                <label for="site_main_color_three">{{__('Site Main Color Three Settings')}}</label>
                                <input type="text" name="site_main_color_three" style="background-color: {{get_static_option('site_main_color_three')}};color: #FF805D;" class="form-control" value="{{get_static_option('site_main_color_three')}}" >
                                <small>{{__('you change site base color two color from here, it will replace website site base color three color')}}</small>
                            </div>
                            <div class="form-group">
                                <label for="site_main_color_four">{{__('Site Main Color Four Settings')}}</label>
                                <input type="text" name="site_main_color_four" style="background-color: {{get_static_option('site_main_color_four')}};color: #FF4343;" class="form-control" value="{{get_static_option('site_main_color_four')}}">
                                <small>{{__('you change site base color two color from here, it will replace website site base color four color')}}</small>
                            </div>


                            <div class="form-group">
                                <label for="site_secondary_color">{{__('Site Secondary Color Settings')}}</label>
                                <input type="text" name="site_secondary_color" style="background-color: {{get_static_option('site_secondary_color')}};color: #fff;" class="form-control" value="{{get_static_option('site_secondary_color')}}" id="site_secondary_color">
                                <small>{{__('you change site secondary color from here, it will replace website secondary color')}}</small>
                            </div>
                            <div class="form-group">
                                <label for="site_heading_color_one">{{__('Site Heading Color One')}}</label>
                                <input type="text" name="site_heading_color_one" style="background-color: {{get_static_option('site_heading_color_one')}};color: #fff;" class="form-control" value="{{get_static_option('site_heading_color_one')}}" id="site_heading_color_one">
                                <small>{{__('you can change site heading color from there , when you chnage this color it will reflect the color in all the heading like (h1,h2,h3,h4.h5.h6)')}}</small>
                            </div>
                            <div class="form-group">
                                <label for="site_heading_color_two">{{__('Site Heading Color Two')}}</label>
                                <input type="text" name="site_heading_color_two" style="background-color: {{get_static_option('site_heading_color_two')}};color: #fff;" class="form-control" value="{{get_static_option('site_heading_color_two')}}" id="site_heading_color_two">
                                <small>{{__('you can change site heading color from there , when you chnage this color it will reflect the color in all the heading like (h1,h2,h3,h4.h5.h6)')}}</small>
                            </div>
                            <div class="form-group">
                                <label for="site_hover_color_one">{{__('Site Hover Color One')}}</label>
                                <input type="text" name="site_hover_color_one" style="background-color: {{get_static_option('site_hover_color_one')}};color: #fff;" class="form-control" value="{{get_static_option('site_hover_color_one')}}" id="site_hover_color_one">
                                <small>{{__('you can change site heading color from there , when you chnage this color it will reflect the color in all the heading like (h1,h2,h3,h4.h5.h6)')}}</small>
                            </div>
                            <div class="form-group">
                                <label for="site_hover_color_two">{{__('Site Hover Color Two')}}</label>
                                <input type="text" name="site_hover_color_two" style="background-color: {{get_static_option('site_hover_color_two')}};color: #fff;" class="form-control" value="{{get_static_option('site_hover_color_two')}}" id="site_hover_color_two">
                                <small>{{__('you can change site heading color from there , when you chnage this color it will reflect the color in all the heading like (h1,h2,h3,h4.h5.h6)')}}</small>
                            </div>
                            <div class="form-group">
                                <label for="site_paragraph_color">{{__('Site Paragraph Color')}}</label>
                                <input type="text" name="site_paragraph_color" style="background-color: {{get_static_option('site_paragraph_color')}};color: #fff;" class="form-control" value="{{get_static_option('site_paragraph_color')}}" id="site_paragraph_color">
                                <small>{{__('you can change site paragraph color from there')}}</small>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">{{__('Update Changes')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <x-media.markup/>
@endsection
@section('script')
    <script src="{{asset('assets/backend/js/colorpicker.js')}}"></script>
    <script src="{{asset('assets/backend/js/dropzone.js')}}"></script>
   <x-media.js/>
    <script>
        (function($){
            "use strict";
            $(document).ready(function(){

                initColorPicker('#site_color');
                initColorPicker('#site_secondary_color');
                initColorPicker('#site_main_color_two');
                initColorPicker('#site_heading_color');
                initColorPicker('#site_paragraph_color');
                initColorPicker('input[name="portfolio_home_color"');
                initColorPicker('input[name="logistics_home_color"');
                initColorPicker('input[name="site_main_color_three"');
                initColorPicker('input[name="site_main_color_four"');

                function initColorPicker(selector){
                    $(selector).ColorPicker({
                        color: '#852aff',
                        onShow: function (colpkr) {
                            $(colpkr).fadeIn(500);
                            return false;
                        },
                        onHide: function (colpkr) {
                            $(colpkr).fadeOut(500);
                            return false;
                        },
                        onChange: function (hsb, hex, rgb) {
                            $(selector).css('background-color', '#' + hex);
                            $(selector).val('#' + hex);
                        }
                    });
                }
            });
        }(jQuery));
    </script>
@endsection
