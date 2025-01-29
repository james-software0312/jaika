@extends('frontend.frontend-page-master')
@section('page-title')
    {{ $campaign->title }}
@endsection
@section('style')
@endsection
@section('content')
<div class="shop-area-wrapper grid-only" id="shop">
    <div class="container">
        <div class="row">
            @php $campaign_products = $campaign->products; @endphp
            @if ($campaign_products && $campaign_products->count())
                @foreach ($campaign_products as $campaign_product)
                    @php $end_date = $campaign_product->end_date; @endphp
                    <x-frontend.product.product-card 
                        :product="$campaign_product->product"
                        :column="'col-md-4'"
                        :isCampaign="true"
                        :campaignProductEndDate="$end_date"
                        :campaignId="$campaign->id"
                    />
                @endforeach
            @else
            <div class="col-md-12">
                <div class="text-center">
                    <h1>{{ __('No products to show') }}</h1>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
