@extends('frontend.user.dashboard.user-master')
@section('section')
<h5 class="mb-3">{{ __('Add Shipping Address') }}</h5>
<div class="text-right">
    <a href="{{ route('user.shipping.address.all') }}" class="btn btn-primary">{{ __('All Shipping Address') }}</a>
</div>
<div class="dashboard-form-wrapper">
    <form action="{{ route("frontend.add.user.shipping.address") }}" method="POST" id="new_user_shipping_address_form">
        @csrf
        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="address">{{ __('Address') }}</label>
            <textarea name="address" id="address" class="form-control" cols="30" rows="5"></textarea>
        </div>
        <button class="default-btn default-theme-btn">{{ __('Submit') }}</button>
    </form>
</div>
@endsection
