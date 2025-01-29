@extends('frontend.user.dashboard.user-master')
@section('style')
    <x-datatable.css />
@endsection
@section('site-title')
    {{ __('My Orders') }}
@endsection
@section('section')
    <div class="form-header-wrap margin-bottom-50 d-flex justify-content-between">
        <h3 class="mb-3">{{ __('My Orders') }}</h3>
    </div>
    <div class="table-wrap table-responsive all-user-campaign-table">
        <div class="order-history-inner text-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            {{ __('Order') }}
                        </th>
                        <th>
                            {{ __('Date') }}
                        </th>
                        <th>
                            {{ __('Status') }}
                        </th>
                        <th>
                            {{ __('Amount') }}
                        </th>
                        <th>
                            {{ __('Action') }}
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all_orders as $order)
                    <tr class="completed">
                        <td class="order-numb">
                            {{ $loop->index + 1 }}
                        </td>
                        <td class="date">
                            {{ $order->created_at->format('F d, Y') }}
                        </td>
                        <td class="status">
                            @if ($order->status == 'complete')
                                <span class="badge badge-success px-2 py-1">{{ __('Complete') }}</span>
                            @elseif ($order->status == 'pending')
                                <span class="badge badge-warning px-2 py-1">{{ __('Pending') }}</span>
                            @elseif ($order->status == 'in_progress')
                                <span class="badge badge-warning px-2 py-1">{{ __('In progress') }}</span>
                            @elseif ($order->status == 'shipped')
                                <span class="badge badge-warning px-2 py-1">{{ __('Shipped') }}</span>
                            @elseif ($order->status == 'canceled')
                                <span class="badge badge-danger px-2 py-1">{{ __('Canceled') }}</span>
                            @endif
                        </td>
                        <td class="amount">
                            {{ float_amount_with_currency_symbol($order->total_amount) }}
                        </td>
                        <td class="table-btn">
                            <div class="btn-wrapper">
                                <a href="{{ route('user.product.order.details', $order->id) }}" class="btn-default rounded-btn"> {{ __('view details') }}</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pagination-default">
                {!! $all_orders->links() !!}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/backend/js/sweetalert2.js') }}"></script>

    <script>
        (function($) {
            "use strict";
            $(document).ready(function() {

                $(document).on('click', '.mobile_nav', function(e) {
                    e.preventDefault();
                    $(this).parent().toggleClass('show');
                });

                $(document).on('click', '.swal_delete_button', function(e) {
                    e.preventDefault();
                    Swal.fire({
                        title: '{{ __('Are you sure?') }}',
                        text: '{{ __('You would not be able to revert this item!') }}',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $(this).next().find('.swal_form_submit_btn').trigger('click');
                        }
                    });
                });
            })
        })(jQuery)
    </script>

    <x-datatable.js />
@endsection
