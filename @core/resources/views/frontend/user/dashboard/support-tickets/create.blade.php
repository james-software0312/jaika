@extends('frontend.frontend-page-master')
@section('site-title')
    {{ get_static_option('support_ticket_page_name') ?? 'Support Ticket' }}
@endsection
@section('page-title')
    {{ get_static_option('support_ticket_page_name') ?? 'Support Ticket' }}
@endsection
@section('page-meta-data')
    <meta name="description" content="{{ get_static_option('about_page_meta_description') }}">
    <meta name="tags" content="{{ get_static_option('about_page_meta_tags') }}">
@endsection
@section('style')
<style>
    .support-ticket-wrapper .login-form p {
        font-size: 36px;
        line-height: 40px;
        text-align: center;
        font-weight: 700;
        color: var(--heading-color);
        margin-bottom: 50px
    }

    .support-ticket-wrapper .login-form form.account-form {
        padding: 0 60px
    }

    .support-ticket-wrapper .title {
        font-size: 36px;
        line-height: 46px;
        font-weight: 700;
        text-align: center;
        margin-bottom: 40px
    }

    .support-ticket-wrapper button[type=submit]:hover {
        background-color: var(--secondary-color);
        color: #fff
    }

    .support-ticket-wrapper button[type=submit] {
        display: inline-block;
        border: none;
        background-color: var(--main-color-one);
        color: #fff;
        padding: 10px 30px;
        font-weight: 600;
        transition: all .4s
    }

    .support-ticket-wrapper textarea:focus {
        outline: 0;
        box-shadow: none
    }

    .support-ticket-wrapper textarea {
        max-height: 150px
    }
    .support-ticket-wrapper {
        padding: 50px;
        box-shadow: 0 0 40px 0 rgba(0, 0, 0, .05)
    }

    .support-ticket-wrapper .form-control {
        border: 1px solid #e2e2e2;
        border-radius: 0;
        height: 50px
    }

    .support-ticket-wrapper select.form-control:focus {
        outline: 0;
        box-shadow: none
    }

    .support-ticket-wrapper textarea.form-control {
        height: 150px
    }

    .support-ticket-wrapper checkbox.form-control {
        height: auto
    }
</style>
@endsection
@section('content')
    <section class="support-ticket-page-area padding-top-120 padding-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="support-ticket-wrapper">
                        @if (auth()->guard('web')->check())
                            <h3 class="title">
                                {{ get_static_option('support_ticket_form_title') }}</h3>
                            <x-msg.flash />
                            <x-msg.error />
                            <form action="{{ route('frontend.support.ticket.store') }}" method="post"
                                class="support-ticket-form-wrapper" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="via" value="{{ __('website') }}">
                                <div class="form-group">
                                    <label>{{ __('Title') }}</label>
                                    <input type="text" class="form-control" name="title" placeholder="{{ __('Title') }}">
                                </div>
                                <div class="form-group">
                                    <label>{{ __('Subject') }}</label>
                                    <input type="text" class="form-control" name="subject"
                                        placeholder="{{ __('Subject') }}">
                                </div>
                                <div class="form-group">
                                    <label>{{ __('Priority') }}</label>
                                    <select name="priority" class="form-control">
                                        <option value="low">{{ __('Low') }}</option>
                                        <option value="medium">{{ __('Medium') }}</option>
                                        <option value="high">{{ __('High') }}</option>
                                        <option value="urgent">{{ __('Urgent') }}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>{{ __('Departments') }}</label>
                                    <select name="departments" class="form-control">
                                        @foreach ($departments as $dep)
                                            <option value="{{ $dep->id }}">{{ $dep->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>{{ __('Description') }}</label>
                                    <textarea name="description" class="form-control" cols="30" rows="10"
                                        placeholder="{{ __('Description') }}"></textarea>
                                </div>
                                <div class="btn-wrapper text-center">
                                    <button type="submit" class="default-btn default-theme-btn">
                                        {{ get_static_option('support_ticket_button_text') }}
                                    </button>
                                </div>
                            </form>
                        @else
                            @include('frontend.partials.ajax-login-form',['title' =>
                            get_static_option('support_ticket_login_notice')])
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    @include('frontend.partials.ajax-login-form-js')
@endsection
