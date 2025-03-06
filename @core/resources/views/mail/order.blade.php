<!doctype html>
<html lang="en">
@php
    $default_lang = get_default_language();
@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ get_static_option('site_title') . ' ' . __('Mail') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Open Sans', sans-serif;
        }

        .mail-container {
            max-width: 650px;
            margin: 0 auto;
            text-align: center;
            background-color: #f2f2f2;
            padding: 40px 0;
        }

        .inner-wrap {
            background-color: #fff;
            margin: 40px;
            padding: 30px 20px;
            text-align: left;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.01);
        }

        .inner-wrap p {
            font-size: 16px;
            line-height: 26px;
            color: #656565;
            margin: 0;
        }

        .message-wrap {
            background-color: #f2f2f2;
            padding: 30px;
            margin-top: 40px;
        }

        .message-wrap p {
            font-size: 14px;
            line-height: 26px;
        }

        .btn-wrap {
            text-align: center;
        }

        .btn-wrap .anchor-btn {
            background-color: {{ get_static_option('site_color') }};
            color: #fff;
            font-size: 14px;
            line-height: 26px;
            font-weight: 500;
            text-transform: capitalize;
            text-decoration: none;
            padding: 8px 20px;
            display: inline-block;
            margin-top: 40px;
            border-radius: 5px;
            transition: all 300ms;
        }

        .btn-wrap .anchor-btn:hover {
            opacity: .8;
        }

        .verify-code {
            background-color: #f2f2f2;
            color: #333;
            padding: 10px 15px;
            border-radius: 3px;
            display: inline-block;
            margin: 20px;
        }

        table {
            margin: 0 auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table td,
        table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        .order_details_container table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #111d5c;
            color: white;
        }

        .order_details_container table th {
            text-align: center;
        }

        .order_details_container table tbody tr td:nth-child(3) {
            text-align: center;
        }

        .order_details_container table tbody tr td:nth-child(4) {
            text-align: center;
        }

        .logo-wrapper img {
            max-width: 200px;
        }

        .order_details_container h3 {
            text-align: center;
        }

        .order_overview h3 {
            text-align: center;
        }
    </style>
</head>

<body>
    @php
        $total = 0;
        $payment_meta = !empty($payment_meta) ? json_decode($payment_meta, true) : [];
    @endphp
    <div class="mail-container">
        <div class="logo-wrapper">
            <a href="{{ url('/') }}">
                {!! render_image_markup_by_attachment_id(get_static_option('site_logo')) !!}
            </a>
        </div>
        <div class="inner-wrap">
            {!! $mail_message !!}

            <div class="order_overview">
                <h3>{{ __('Order Overview') }}</h3>
                {{-- <table>
                    @if (!empty($payment_meta['subtotal']))
                        <tr>
                            <th>{{ __('Subtotal') }}</th>
                            <td>{{ float_amount_with_currency_symbol($payment_meta['subtotal']) }}</td>
                        </tr>
                    @endif
                    @if (!empty($payment_meta['shipping_cost']))
                        <tr>
                            <th>{{ __('Shipping Cost') }}</th>
                            <td>{{ float_amount_with_currency_symbol($payment_meta['shipping_cost']) }}</td>
                        </tr>
                    @endif
                    @if (!empty($payment_meta['tax_amount']))
                        <tr>
                            <th>{{ __('Tax Amount') }}</th>
                            <td>{{ float_amount_with_currency_symbol($payment_meta['tax_amount']) }}</td>
                        </tr>
                    @endif
                    @if (!empty($payment_meta['total']))
                        <tr>
                            <th>{{ __('Total') }}</th>
                            <td>{{ float_amount_with_currency_symbol($payment_meta['total']) }}</td>
                        </tr>
                    @endif
                </table> --}}
                <div class="row" style="display: flex; justify-content: space-between; gap:15px; width:85%;">
                    <div class="col-md-6">
                        @if(auth()->check())
                            <h4>{{ __('buyer_detail') }}</h4>
                            <div>
                                <span> {{ auth()->user()->name }}</span>
                            </div>
                            <div>
                                <span> {{ auth()->user()->email }}</span>
                            </div>
                            <div>
                                <span> {{ auth()->user()->address }}</span>
                            </div>
                            <div>
                                <span>Tel: {{ auth()->user()->phone }}</span>
                            </div>
                        @else
                            <h4>{{ __('buyer_detail') }}</h4>
                            <div>
                                <span> {{ $data['name']; }}</span>
                            </div>
                            <div>
                                <span> {{ $data['email']; }}</span>
                            </div>
                            <div>
                                <span> {{ $data['address'] }}</span>
                            </div>
                            <div>
                                <span>Tel: {{ $data['phone'] }}</span>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <h4>{{ __('shipper_detail') }}</h4>
                        <div>
                            <span> {{ $data['name']; }}</span>
                        </div>
                        <div>
                            <span> {{ $data['email']; }}</span>
                        </div>
                        <div>
                            <span> {{ $data['address'] }}</span>
                        </div>
                        <div>
                            <span>Tel: {{ $data['phone'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h4>{{ __('Payment Method') }}</h4>
                        <div>
                            <span>{{ $data['payment_gateway'] }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="order_details_container">
                <h3>{{ __('Order Details') }}</h3>
                @if (count($order_details))
                    <table class="table table-default">
                        <thead>
                            <th style="width: 5%!important;">{{ __('#') }}</th>
                            <th style="width: 30%!important;">{{ __('Position') }}</th>
                            <th style="width: 10%!important;">{{ __('Image') }}</th>
                            <th style="width: 25%!important;">{{ __('Code') }}</th>
                            <th style="width: 5%!important;">{{ __('Quantity') }}</th>
                            <th style="width: 10%!important;">{{ __('Price') }}</th>
                            <th style="width: 15%!important;">{{ __('Total') }}</th>
                        </thead>
                        <tbody>
                            @foreach ($order_details as $key => $product)
                                @php $total += ($product['price'] * $product['quantity']); @endphp
                                <tr>
                                    <th>{{ $key + 1 }}</th>
                                    <td>
                                        <span> <b>{{ __('Name') }}</b>:&nbsp; {{ $product['name'] }}</span><br>
                                        <span> <b>{{ __('Size') }}</b>:&nbsp; {{ $product['size'] }}</span><br>
                                        <span> <b>{{ __('Color') }}</b>:&nbsp; {{ $product['color'] }}</span><br>
                                    </td>
                                    <td>
                                        <div class="img-wrap max-width-100" style="width: 50px!important;">
                                            {!! render_image_markup_by_attachment_id($product['image'], '', 'grid') !!}
                                        </div>
                                    </td>
                                    <td>{{ $product['code'] }}</td>
                                    <td>{{ $product['quantity'] }}</td>
                                    <td>{{ float_amount_with_currency_symbol($product['price']) }}</td>
                                    <td>{{ float_amount_with_currency_symbol($product['price'] * $product['quantity']) }}
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="2"></td>
                                <td colspan="3">{{ __('Subtotal') }}</td>
                                <td colspan="2">{{ float_amount_with_currency_symbol($payment_meta['subtotal']) }}</td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td colspan="3">{{ __('Shipping Cost') }}</td>
                                <td colspan="2">{{ float_amount_with_currency_symbol($payment_meta['shipping_cost']) }}</td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td colspan="3"> <b>{{ __('shipping_with_cost') }}</b></td>
                                <td colspan="2"><b> {{ float_amount_with_currency_symbol($payment_meta['subtotal'] + $payment_meta['shipping_cost']) }}</b></td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td colspan="3">PTU PL (23%) (23%)</td>
                                {{-- <td colspan="3">{{ __('Tax Amount') }}</td> --}}
                                <td colspan="2">{{ float_amount_with_currency_symbol($payment_meta['tax_amount']) }}</td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td colspan="3"> <b> {{ __('total_with_cost') }} </b</td>
                                <td colspan="2"><b> {{ float_amount_with_currency_symbol($payment_meta['total']) }} </b> </td>
                            </tr>
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
        <footer>
            {!! get_footer_copyright_text() !!}
        </footer>
    </div>
</body>

</html>
