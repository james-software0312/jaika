@extends('backend.admin-master')
@section('site-title')
    {{ __('Product Order View') }}
@endsection
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/common/css/order.css') }}">
@endsection
@section('content')
    @include("backend.products.order.invoice-partial")
@endsection
