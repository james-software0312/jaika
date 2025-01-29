@extends('backend.admin-master')
@section('site-title')
    {{__('Site Identity')}}
@endsection
@section('style')
    <x-media.css/>
@endsection
@section('content')

    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-12 mt-5">
                @include('backend.partials.message')
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="title">{{ __("Page Reading") }}</h2>
                    </div>

                    <div class="card-body">
                        <form class="col-md-6 col-12 col-sm-12" method="POST" action="{{route("admin.general.update")}}">
                            @csrf
                            <div class="row">
                                <label class="col-md-3 font-weight-bold" for="page-selector">
                                    Select Page
                                </label>

                                <div class="col-md-6">
                                    <select class="form-control form-control-sm" name="reading_page" id="page-selector">
                                        <option value="">Select a single page</option>
                                        @foreach($pages as $item)
                                            <option {{ $selected_home_page->option_value == $item->id ? "selected" : "" }} value="{{ $item->id }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 offset-md-3 mt-4">
                                    <button class="btn btn-info">Update Home Page</button>
                                </div>
                            </div>
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
