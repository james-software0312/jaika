@extends('backend.admin-master')
@section('site-title')
    {{__('New Shipping Method')}}
@endsection
@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40">
                    <x-msg.error />
                    <x-msg.flash />
                </div>
            </div>
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="header-wrapper d-flex justify-content-between my-4">
                            <h4 class="header-title">{{__('Add New Shipping Method')}}</h4>
                            @can('shipping-method-list')
                            <a href="{{route('admin.shipping.method.all')}}" class="btn btn-primary">{{__('All Shipping Methods')}}</a>
                            @endcan
                        </div>

                        @can('shipping-method-create')
                        <form action="{{route('admin.shipping.method.new')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="zone_id">{{__('Zone')}}</label>
                                        <select name="zone_id" id="zone_id" class="form-control">
                                            @foreach ($all_zones as $zone)
                                                <option value="{{ $zone->id }}">{{ $zone->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">{{__('Title')}}</label>
                                        <input type="text" name="title" id="title" class="form-control" placeholder="{{ __('Title') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="tax_status">{{__('Tax Status')}}</label>
                                        <select name="tax_status" id="tax_status" class="form-control">
                                            @foreach ($all_tax_status as $key => $tax_status)
                                                <option value="{{ $key }}">{{ $tax_status }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">{{__('Status')}}</label>
                                        <select name="status" id="status" class="form-control">
                                            @foreach ($all_publish_status as $key => $status)
                                                <option value="{{ $key }}">{{ $status }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="setting_preset">{{__('Setting')}}</label>
                                        <select name="setting_preset" id="setting_preset" class="form-control">
                                            @foreach ($all_setting_presets as $key => $value)
                                                <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="form-group" style="display: none">
                                        <label for="minimum_order_amount">{{__('Minimum Order Amount')}}</label>
                                        <input type="number" id="minimum_order_amount" name="minimum_order_amount" class="form-control" step="0.01" placeholder="{{ __('Minimum Order Amount') }}">
                                    </div>
                                    <div class="form-group" style="display: none">
                                        <label for="coupon">{{__('Coupon')}}</label>
                                        <input type="text" id="coupon" name="coupon" class="form-control" placeholder="{{ __('Enter coupon name') }}">
                                        <small>{{ __('Shipping coupon is different from product coupon. If this coupon does not match in checkout, shipping will not work. Space will be replaced with underscore (_).') }}</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="cost">{{__('Cost')}}</label>
                                        <input type="number" id="cost" name="cost" class="form-control" step="0.01" placeholder="{{ __('Cost') }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary my-4 px-4">{{__('Create Shipping Method')}}</button>
                                </div>
                            </div>
                        </form>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        (function ($) {
            $(document).ready(function () {
                $('#setting_preset').on('change', function () {
                    let min_order_presets = ['min_order', 'min_order_or_coupon', 'min_order_and_coupon'];
                    let coupon_presets = ['min_order_or_coupon', 'min_order_and_coupon'];
                    let selected_value = $('#setting_preset').val();

                    if (min_order_presets.indexOf(selected_value) > -1) {
                        $('#minimum_order_amount').parent().fadeIn();
                    } else {
                        $('#minimum_order_amount').parent().fadeOut();
                    }

                    if (coupon_presets.indexOf(selected_value) > -1) {
                        $('#coupon').parent().fadeIn();
                    } else {
                        $('#coupon').parent().fadeOut();
                    }
                });
            });
        })(jQuery)
    </script>
@endsection
