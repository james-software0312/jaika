<div class="col-12 col-sm-6 col-md-4 col-lg-4">
    <div class="single-product-item">
        <div class="product-img-box">
            <a href="{{$route}}">
                {{$image_markup}}
            </a>
{{--            {{$hover_content}}--}}
        </div>
        <div class="product-details-wrap">
            <h3 class="product-title"><a href="{{$route}}">{{$title}}</a></h3>
            <div class="product-price-details">
                {{$price_markup}}
            </div>
        </div>
        {{$campaign_percentage_markup}}
        {{$badge_markup}}
    </div>
</div>