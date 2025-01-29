@extends('frontend.frontend-page-master')
@section('page-title')
    {{__('Payment Failed')}}
@endsection
@section('content')
<div class="patment-success-area padding-top-100 padding-bottom-100">
    <div class="container">
        <div class="payment-success-wrapper">
            <div class="payment-contents">
                <h4 class="title"> {{ __('Payment Failed') }} </h4>
                <div class="icon">
                    <i class="las la-times"></i>
                </div>
                <div class="my-5">
                    {{ __('Sorry, something went wrong. Your transaction failed.') }}
                </div>
                <div class="btn-wrapper margin-top-40">
                    @if(auth('web')->check())
                    <a href="{{ route('user.home') }}" class="default-btn color-one">{{ __('Go to Dashboard') }}</a>
                    @else
                    <a href="{{ route('homepage') }}" class="default-btn outline-one">{{ __('Back to Home') }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
