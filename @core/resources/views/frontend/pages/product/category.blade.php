@extends('frontend.frontend-page-master')
@section('page-title')
    {{__('Category:')}} {{$category_name}}
@endsection
@section('site-title')
    {{__('Category:')}} {{$category_name}}
@endsection
@section('page-meta-data')
    <meta name="description" content="{{get_static_option('product_page_'.$user_select_lang_slug.'_meta_description')}}">
    <meta name="tags" content="{{get_static_option('product_page_'.$user_select_lang_slug.'_meta_tags')}}">
@endsection
@section('content')
<div class="shop-area-wrapper grid-only" id="shop">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    @if($all_products->count() < 1)
                        <div class="col-md-12">
                            <h2 class="text-center">{{ __("No product available") }}</h2>
                        </div>
                    @endif

                    @foreach ($all_products as $product)
                    <x-frontend.product.product-card :product="$product" />
                    @endforeach
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="pagination-default">
                            {!! $all_products->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
