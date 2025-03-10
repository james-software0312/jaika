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
    <title>{{get_static_option('site_title').' '. __('Mail')}}</title>
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
            background-color: {
                    {
                    get_static_option('site_color')
                }
            }

            ;
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

        table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #111d5c;
            color: white;
        }

        .logo-wrapper img {
            max-width: 200px;
        }
    </style>
</head>

<body>

    <div class="mail-container">
        <div class="logo-wrapper">
            <a href="{{url('/')}}">
                @php
                $site_logo = get_attachment_image_by_id(get_static_option('site_logo'),"full",false);
                @endphp
                @if (!empty($site_logo))
                <img src="{{$site_logo['img_url']}}" alt="{{get_static_option('site_title')}}">
                @endif
            </a>
        </div>
        <div>
            <p>Dziękujemy za złożenie zamówienia w naszym sklepie WINGS Timber. Zrealizujemy je tak szybko, jak to możliwe. Potwierdzimy koszt i czas dostawy w osobnej wiadomości.
                Jeśli masz jakiekolwiek pytania dotyczące swojego zamówienia, napisz do nas na adres wingstimber@wingstimber.com lub skontaktuj się z nami telefonicznie: +48 502 254 778.</p>
        </div>
        <div class="inner-wrap">
            <h3>
                {!! $data['message'] !!}
            </h3>
        </div>
        @if(array_key_exists('products', $data))
        <p>{{ \Carbon\Carbon::now()->toFormattedDateString() }}</p>
            <div>
                <table class="table table-default">
                    <thead>
                        {{-- <div class="img-wrap max-width-100" style="width: 50px!important;">
                            {!! render_image_markup_by_attachment_id($product['image'], '', 'grid') !!}
                        </div> --}}
                        <tr>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Image') }}</th>
                            <th>{{ __('Code') }}</th>
                            <th>{{ __('Quantity') }}</th>
                            <th>{{ __('unit price') }}</th>
                            <th>{{ __('sub_total') }}</th>
                            {{-- <th>Quantity</th>
                            <th>Total</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data['products'] as $product)
                        <tr>
                            <td>{{ $product['title'] }}</td>
                            <td>{{ $product['color'] }}</td>
                            <td>{{ $product['size'] }}</td>
                            <td>${{ number_format($product['price'], 2) }}</td>
                            <td>{{ $product['quantity'] }}</td>
                            <td>${{ number_format($product['total_price'], 2) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <br>
            <div>Total Price: ${{$data['total_price']}}</div>
            <div>Payment Method: {{$data['payment_gateway']}}</div>
            <br>
        @endif
        <footer>
            {!! get_footer_copyright_text() !!}
        </footer>
    </div>

</body>

</html>