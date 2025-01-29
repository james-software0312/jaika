@extends('frontend.frontend-master')
@section('page-title')
    {{__('Payment Success')}}
@endsection
@section('content')
@php 
$mainTitle = $payment_details->payment_gateway === 'cash_on_delivery' ? __('Order Successful') : __('Payment Successful');
$amountTitle = $payment_details->payment_gateway === 'cash_on_delivery' ? __('Amount') : __('Amount Paid');
@endphp
<div class="patment-success-area padding-top-100 padding-bottom-100">
    <div class="container">
        <div class="payment-success-wrapper">
            <div class="payment-contents">
                <h4 class="title"> {{ $mainTitle }} </h4>
                <div class="icon">
                    <i class="las la-check"></i>
                </div>
                <ul class="payment-list margin-top-40">
                    <li>{{ __('Payment Gateway') }} <span class="payment-strong">{{ str_replace(['-','_'],[' ',' '],$payment_details->payment_gateway)}}</span></li>
                    <li>{{ __('Phone') }} <span class="payment-strong">{{ $payment_details->phone }}</span></li>
                    <li>{{ __('Name') }} <span class="payment-strong">{{ $payment_details->name }}</span></li>
                    <li>{{ __('Email') }} <span class="payment-strong">{{ $payment_details->email }}</span></li>
                </ul>
                <ul class="payment-list payment-list-two margin-top-30">
                    <li><span class="list-bold">{{ $amountTitle }}</span> <span class="payment-strong payment-bold">{{ float_amount_with_currency_symbol($payment_details->total_amount) }}</span></li>
                    <li>{{ __('Transaction ID') }}<span class="payment-strong">{{ $payment_details->transaction_id }}</span></li>
                </ul>
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
