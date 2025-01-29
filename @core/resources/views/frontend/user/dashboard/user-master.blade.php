@extends('frontend.frontend-page-master')
@section('page-title')
    {{__('User Dashboard')}}
@endsection
@section('content')
    <section class="login-page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="user-dashboard-wrapper">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="mobile_nav">
                                <i class="las la-cogs"></i>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bg-info text-white"><i class="lar la-user-circle"></i>{{ optional(Auth::guard('web')->user())->name }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->routeIs('user.home')) active @endif" href="{{route('user.home')}}">{{__('Dashboard')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->routeIs('user.home.edit.profile')) active @endif " href="{{route('user.home.edit.profile')}}">{{__('Edit Profile')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->routeIs('user.home.change.password')) active @endif " href="{{route('user.home.change.password')}}">{{__('Change Password')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->routeIs('user.product.order.all')) active @endif" href="{{route('user.product.order.all')}}">{{ __('My Orders') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->routeIs('user.shipping.address.all')) active @endif" href="{{route('user.shipping.address.all')}}">{{ __('Shipping Address') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->routeIs('user.home.support.tickets')) active @endif" href="{{ route('user.home.support.tickets') }}">{{ __('Support Ticket') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  href="{{ route('user.logout') }}"
                                   onclick="event.preventDefault();document.getElementById('logout_submit_btn').dispatchEvent(new MouseEvent('click'));">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                    <button id="logout_submit_btn" type="submit"></button>
                                </form>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel">
                                <div class="message-show margin-top-10">
                                    <x-msg.success/>
                                    <x-msg.error/>
                                </div>
                                @yield('section')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        $(document).ready(function (){
           $('select[name="country"] option[value="{{optional(auth()->guard('web')->user())->country}}"]').attr('selected',true);
           $(document).on('click','.mobile_nav',function(e){
              e.preventDefault(); 
               $(this).parent().toggleClass('show');
           });
        });
    </script>
@endsection
