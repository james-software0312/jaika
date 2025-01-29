@extends('frontend.user.dashboard.user-master')
@section('site-title')
    {{ __('User Dashboard') }}
@endsection

@section('section')
    <div class="row">
        <div class="col-lg-6">
            <div class="user-dashboard-card style-01 ">
                <div class="icon"><i class="las la-calendar-alt"></i></div>
                <div class="content">
                    <h4 class="title">{{ __('Total Orders') }}</h4>
                    <span class="number">{{ $product_count }}</span>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="user-dashboard-card style-01 ">
                <div class="icon"><i class="las la-calendar-alt"></i></div>
                <div class="content">
                    <h4 class="title">{{ __('Support Tickets') }}</h4>
                    <span class="number">{{ $support_ticket_count }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection
