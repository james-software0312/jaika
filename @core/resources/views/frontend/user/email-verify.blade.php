@extends('frontend.frontend-page-master')
@section('page-title')
    {{__('Verify Your Account')}}
@endsection
@section('content')
    <section class="login-page-wrapper padding-top-110 padding-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="register-form-wrapper my-5 py-5">
                        <h2 class="text-center mb-4">{{__('Verify Your Account')}}</h2>
                        <x-msg.error/>
                        <x-msg.success/>
                        <div class="alert alert-warning alert-block text-center">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ __('Check Mail for Verification code.') }}</strong>
                        </div>
                        <form action="{{route('user.email.verify')}}" method="post" enctype="multipart/form-data" class="register-form verify-mail">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="verification_code" class="form-control" placeholder="{{__('Verify Code')}}">
                            </div>
                            <div class="btn-wrapper btn-top">
                                <button type="submit" class="submit-btn default-btn default-theme-btn default-btn">{{__('Verify Email')}}</button>
                            </div>
                            <div class="btn-pair btn-wrapper btn-top">
                                <div class="col-12 text-center mt-3">
                                    <a href="{{route('user.resend.verify.mail')}}" class="forgot-btn" style="text-transform: initial">{{__('Send verify code again?')}}</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
