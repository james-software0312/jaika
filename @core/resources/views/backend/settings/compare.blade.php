@extends('backend.admin-master')
@section('style')
    <x-media.css/>
@endsection
@section('site-title')
    {{__('Compare Page Settings')}}
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
                        <h4 class="header-title">{{__('Compare Page Settings')}}</h4>
                        <form action="{{ route('admin.page.settings.compare') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="compare_title">{{ __('Compare Title') }}</label>
                                <input type="text" class="form-control" id="compare_title" name="compare_title" value="{{ get_static_option('compare_title') }}">
                            </div>
                            <div class="form-group">
                                <label for="compare_subtitle">{{ __('Compare Subtitle') }}</label>
                                <input type="text" class="form-control" id="compare_subtitle" name="compare_subtitle" value="{{ get_static_option('compare_subtitle') }}">
                            </div>
                            <div class="form-group">
                                <x-media-upload :id="get_static_option('compare_empty_image')" :name="'compare_empty_image'" :dimentions="'465X465'" :title="__('Empty Compare Image')" />
                            </div>
                            <div class="form-group">
                                <label for="compare_empty_text">{{ __('Empty Compare Text') }}</label>
                                <input type="text" class="form-control" id="compare_empty_text" name="compare_empty_text" value="{{ get_static_option('compare_empty_text') }}">
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
