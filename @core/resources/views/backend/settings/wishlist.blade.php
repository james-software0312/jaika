@extends('backend.admin-master')
@section('style')
    <x-media.css/>
@endsection
@section('site-title')
    {{__('Wishlist Page Settings')}}
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
                        <h4 class="header-title">{{__('Wishlist Page Settings')}}</h4>
                        <form action="{{ route('admin.page.settings.wishlist') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="empty_wishlist_text">{{ __('Empty Wishlist Text') }}</label>
                                <input type="text" class="form-control" id="empty_wishlist_text" name="empty_wishlist_text" value="{{ get_static_option('empty_wishlist_text') }}">
                            </div>
                            <div class="form-group">
                                <x-media-upload :id="get_static_option('empty_wishlist_image')" :name="'empty_wishlist_image'" :dimentions="'465X465'" :title="__('Empty Wishlist Image')" />
                            </div>
                            <div class="form-group">
                                <label for="send_to_cart_text">{{ __('Send To Cart Text') }}</label>
                                <input type="text" class="form-control" id="send_to_cart_text" name="send_to_cart_text" value="{{ get_static_option('send_to_cart_text') }}">
                            </div>
                            <div class="form-group">
                                <label for="clear_wishlist_text">{{ __('Clear Wishlist Text') }}</label>
                                <input type="text" class="form-control" id="clear_wishlist_text" name="clear_wishlist_text" value="{{ get_static_option('clear_wishlist_text') }}">
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
