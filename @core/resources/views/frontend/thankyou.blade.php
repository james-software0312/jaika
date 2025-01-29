@extends('frontend.frontend-master')
@section('style')
 <style>
     #notfound {
            position: relative;
            height: 100vh;
        }

        #notfound .notfound {
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .notfound {
            max-width: 767px;
            width: 100%;
            line-height: 1.4;
            padding: 0px 15px;
            text-align: center;
        }

        .notfound .notfound-404 {
            position: relative;
            height: 150px;
            line-height: 150px;
            margin-bottom: 25px;
        }

        .notfound .notfound-404 h1 {
            font-family: 'Titillium Web', sans-serif;
            font-size: 186px;
            line-height: 190px;
            font-weight: 900;
            margin: 0px;
            text-transform: uppercase;
            color: var(--main-color-one);
        }

        .notfound h2 {
            font-family: 'Titillium Web', sans-serif;
            font-size: 26px;
            font-weight: 700;
            margin: 0;
            color: var(--heading-color);
        }

        .notfound p {
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 0px;
            color: var(--paragraph-color);
        }

        .notfound a {
            font-family: 'Titillium Web', sans-serif;
            display: inline-block;
            text-transform: uppercase;
            color: #fff;
            text-decoration: none;
            border: none;
            background: var(--secondary-color);
            padding: 10px 40px;
            font-size: 14px;
            font-weight: 700;
            border-radius: 1px;
            margin-top: 15px;
            -webkit-transition: 0.2s all;
            transition: 0.2s all;
        }

        .notfound a:hover {
            background: var(--main-color-one);
        }

        @media only screen and (max-width: 767px) {
            .notfound .notfound-404 {
                height: 110px;
                line-height: 110px;
            }
            .notfound .notfound-404 h1 {
                font-size: 120px;
            }
        }
 </style>
@endsection

@section('content')

    <div id="notfound">
    <div class="notfound">
        <div class="notfound-404">
            <h1>{{$title}}</h1>
        </div>
        <h2>{{$description}}</h2>
        <div class="btn-wrapper margin-top-40">
            <a href="{{route('homepage')}}" class="default-btn active">{{__('Back To Home page')}}</a>
        </div>
    </div>
</div>

@endsection

