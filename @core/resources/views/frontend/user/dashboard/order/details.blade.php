@extends('frontend.user.dashboard.user-master')
@section('style')
    <x-datatable.css />
    <style>
        .max-width-100 {
            max-width: 100px;
        }
        .previous_attachment {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        #continue_checkout_form {
            display: inline;
        }
    </style>
@endsection
@section('site-title')
    {{ __('My Orders') }}
@endsection
@section('section')
    <div class="form-header-wrap margin-bottom-50 d-flex justify-content-between">
        <h3 class="mb-3">{{ __('Order Details') }}</h3>
    </div>
    <div class="my-3 text-right">
        <a href="{{ route('user.product.order.all') }}" class="btn btn-primary px-4">{{ __('All Orders') }}</a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <ul>
                <li><b>{{ __('Order Id:') }}</b> #{{ $item->id }}</li>
                <li><b>{{ __('Payment Method:') }}</b> {{ ucwords(str_replace('_', ' ', $item->payment_gateway)) }}</li>
                <li>
                    <b>{{ __('Payment Status:') }}</b>
                    @if ($item->payment_status == 'complete')
                        <span class="badge badge-success px-2 py-1">{{ __('Complete') }}</span>
                    @elseif ($item->payment_status == 'pending')
                        <span class="badge badge-warning px-2 py-1">{{ __('Pending') }}</span>
                    @elseif ($item->payment_status == 'canceled')
                        <span class="badge badge-danger px-2 py-1">{{ __('Canceled') }}</span>
                    @endif
                </li>
                <li>
                    <b>{{ __('Order Status:') }}</b>
                    @if ($item->status == 'complete')
                        <span class="badge badge-success px-2 py-1">{{ __('Complete') }}</span>
                    @elseif ($item->status == 'pending')
                        <span class="badge badge-warning px-2 py-1">{{ __('Pending') }}</span>
                    @elseif ($item->status == 'in_progress')
                        <span class="badge badge-warning px-2 py-1">{{ __('In progress') }}</span>
                    @elseif ($item->status == 'shipped')
                        <span class="badge badge-warning px-2 py-1">{{ __('Shipped') }}</span>
                    @elseif ($item->status == 'canceled')
                        <span class="badge badge-danger px-2 py-1">{{ __('Canceled') }}</span>
                    @endif
                </li>
            </ul>
        </div>
        <div class="col-lg-6 my-5">
            <h3 class="mb-3">{{ __('Billing Details') }}</h3>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>{{ __('Name') }}</td>
                        <td>{{ $item->name }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('Email') }}</td>
                        <td>{{ $item->email }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('Address') }}</td>
                        <td>{{ $item->address }}</td>
                    </tr>
                    @if(!is_null($item->address))
                    <tr>
                        <td>{{ __('Zipcode') }}</td>
                        <td>{{ $item->zipcode }}</td>
                    </tr>
                    @endif
                    @php
                        $country = App\Country\Country::find($item->country);
                        $state = App\Country\State::find($item->state);
                    @endphp
                    @if(!is_null($country))
                    <tr>
                        <td>{{ __('Country') }}</td>
                        <td>{{ $country->name }}</td>
                    </tr>
                    @endif
                    @if(!is_null($state))
                    <tr>
                        <td>{{ __('State') }}</td>
                        <td>{{ $state->name }}</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="col-lg-6 my-5">
            @if(!is_null($user_shipping_address))
            <h3 class="mb-3">{{ __('Shipping Details') }}</h3>
            <h6>{{ $user_shipping_address->name }}</h6>
            <p>{{ $user_shipping_address->address }}</p>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 my-5">
            <h3 class="mb-3">{{ __('Order Summary') }}</h3>
            <table class="table table-bordered">
                <tbody>
                    @php
                        $payment_meta = json_decode($item->payment_meta, true);
                    @endphp
                    @if(isset($item->payment_gateway))
                    <tr>
                        <td>{{ __('Payment Gateway:') }}</td>
                        <td>{{ ucfirst(str_replace('_', ' ', $item->payment_gateway)) }}</td>
                    </tr>
                    @endif
                    <tr>
                        <td>{{ __('Transaction ID ') }}</td>
                        <td>{{ $item->transaction_id }}</td>
                    </tr>
                    @if (!is_null($item->coupon))
                    <tr>
                        <td>{{ __('Coupon Code') }}</td>
                        <td>{{ $item->coupon }}</td>
                    </tr>
                    @endif
                    @if(isset($payment_meta['subtotal']))
                    <tr>
                        <td>{{ __('Subtotal:') }}</td>
                        <td>{{ float_amount_with_currency_symbol($payment_meta['subtotal']) }}</td>
                    </tr>
                    @endif
                    @if(isset($payment_meta['shipping_cost']))
                    <tr>
                        <td>{{ __('Shipping Cost:') }}</td>
                        <td>(+) {{ float_amount_with_currency_symbol($payment_meta['shipping_cost']) }}</td>
                    </tr>
                    @endif
                    @if(isset($payment_meta['tax_amount']))
                    <tr>
                        <td>{{ __('Tax Amount:') }}</td>
                        <td>(+) {{ float_amount_with_currency_symbol($payment_meta['tax_amount']) }}</td>
                    </tr>
                    @endif
                    @if(isset($payment_meta['coupon_amount']) && $payment_meta['coupon_amount'] > 0)
                    <tr>
                        <td>{{ __('Coupon Amount:') }}</td>
                        <td>(-) {{ float_amount_with_currency_symbol($payment_meta['coupon_amount']) }}</td>
                    </tr>
                    @endif
                    <tr>
                        <th>{{ __('Total Amount') }}</th>
                        <td>{{ float_amount_with_currency_symbol($item->total_amount) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        

        <div class="col-md-12 my-5">
            <h3 class="mb-3">{{ __('Ordered Products') }}</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>{{ __('Image') }}</th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Quantity') }}</th>
                        <th>{{ __('Price') }}</th>
                        <th>{{ __('Total') }}</th>
                    </tr>
                </thead>
                @php $cart_items = json_decode($item->order_details, true); @endphp
                <tbody>
                    @foreach($cart_items as $id => $items)
                        @php $product = \App\Product\Product::find($id);@endphp
                        @foreach ($items as $cart_item)
                        <tr>
                            <x-table.td-image :image="$product->image" />
                            <td>
                                @php
                                    $item_attributes = '';
                                    $attribute_count = 0;
                                    if ($cart_item['attributes']) {
                                        $item_attributes .= ' (';
                                        foreach ($cart_item['attributes'] as $key => $attribute) {
                                            if ($key != 'price') {
                                                $item_attributes .= $attribute . ', ';
                                                $attribute_count += 1;
                                            }
                                        }
                                        $item_attributes = $attribute_count ? substr($item_attributes, 0, -2) . ')' : '';
                                    }
                                @endphp
                                {{ $product->title . ' ' . $item_attributes }}
                            </td>
                            <td>{{ $cart_item['quantity'] }}</td>
                            @php
                                $price = $cart_item['attributes']['price'] ?? $product->sale_price;
                            @endphp
                            <td>{{  float_amount_with_currency_symbol($price) }}</td>
                            <td>
                                {{ float_amount_with_currency_symbol($cart_item['quantity'] * $price)  }}
                            </td>
                        </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
            <div class="text-left">
                @if ($item->payment_status == 'pending')
                <a href="#" class="btn btn-danger px-4 cancel_payment">{{ __('Cancel Order') }}</a>
                @endif
                <a href="#" class="btn btn-warning px-4 re_order">{{ __('Reorder') }}</a>
                @if ($item->payment_status == 'pending')
                    @if (strlen($item->checkout_image_path))
                    <div class="previous_attachment: ">
                        @php
                            $file_name = explode('/', $item->checkout_image_path);
                            $file_name = end($file_name);
                        @endphp
                        <span>{{ __('Previous Attachment: ') }}</span>
                        <a href="{{ asset($item->checkout_image_path) }}" download>{{ $file_name }}</a>
                    </div>
                    @endif
                    <form action="{{ route('frontend.checkout.continue') }}" method="POST" enctype="multipart/form-data" id="continue_checkout_form">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <input type="hidden" name="payment_gateway" value="{{ $item->payment_gateway }}">
                        @if ($item->payment_gateway == 'bank_transfer')
                            <div class="form-group">
                                <label for="bank_transfer_input">{{ __('Bank Transfer Image') }}</label>
                                <input type="file" id="bank_transfer_input" name="bank_transfer_input" class="form-control-file">
                            </div>
                        @endif
                        @if ($item->payment_gateway == 'cheque_payment')
                            <div class="form-group">
                                <label for="cheque_payment_input">{{ __('Cheque Image') }}</label>
                                <input type="file" id="cheque_payment_input" name="cheque_payment_input" class="form-control-file">
                            </div>
                        @endif
                        <button type="submit" class="btn btn-success px-4 complete_payment">{{ __('Complete Payment') }}</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
    <form action="{{ route('frontend.checkout.reorder') }}" id="reorder_form" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $item->id }}">
    </form>
@endsection

@section('scripts')
    <script src="{{ asset('assets/backend/js/sweetalert2.js') }}"></script>
    <x-datatable.js />
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
                $('.cancel_payment').on('click', function(e) {
                    e.preventDefault();
                    Swal.fire({
                        title: '{{ __("Are you sure?") }}',
                        text: "{{ __('You will not be able to revert this!') }}",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: '{{ __("Yes, cancel order!") }}'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: '{{ route("frontend.checkout.cancel") }}',
                                type: 'POST',
                                data: {
                                    id: '{{ $item->id }}',
                                    _token: '{{ csrf_token() }}'
                                },
                                success: function(data) {
                                    if (data) {
                                        Swal.fire(
                                            '{{ __("Canceled!") }}',
                                            '{{ __("Your order has been cancelled.") }}',
                                            'success'
                                        );
                                        setTimeout(() => {
                                            location.reload();
                                        }, 500);
                                    }
                                },
                                error: function (error) {
                                    Swal.fire(
                                        '{{ __("Error!") }}',
                                        '{{ __("You clicked the button!") }}',
                                        'danger'
                                    )
                                }
                            });
                        }
                    })
                });
                $('.re_order').on('click', function(e) {
                    e.preventDefault();
                    $('#reorder_form').trigger('submit');
                });
            });
        })(jQuery)

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(input).next('img').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>
@endsection
