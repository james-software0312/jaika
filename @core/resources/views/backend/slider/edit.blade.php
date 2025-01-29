@extends('backend.admin-master')
@section('site-title')
    {{__('Edit Mobile Slider')}}
@endsection
@section('style')
    <x-media.css/>
@endsection
@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-12 mt-5">
                @include('backend.partials.message')
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__("Edit Mobile Slider")}}</h4>
                        <form action="{{route('admin.slider.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$slider->id}}">
                            <div class="form-group">
                                <label for="title">{{__('Title')}}</label>
                                <input type="text" class="form-control" name="title" id="title" value="{{$slider->title}}">
                            </div>
                            <x-media-upload :title="__('Slider Image')" :id="$slider->image" :name="'image'" :dimentions="'1920x1080'"/>

                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">{{__('Save Changes')}}</button>
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

