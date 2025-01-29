@extends('backend.admin-master')
@section('site-title')
    {{__('Add New Mobile Slider')}}
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
                        <h4 class="header-title">{{__("Add New Mobile Slider")}}</h4>
                        <form action="{{route('admin.slider.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">{{__('Title')}}</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="{{__('Title')}}">
                            </div>
                            <x-media-upload :title="__('Slider Image')" :name="'image'" :dimentions="'1920x1080'"/>

                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">{{__('Create Slider')}}</button>
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

