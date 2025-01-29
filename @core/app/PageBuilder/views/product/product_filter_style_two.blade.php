<!-- popular dress area start -->
 <style>
    @media only screen and (max-width: 1000px) {
        #product_show {
            width: calc(50% - 20px)!important;
        }
    }
 </style>
<div class="popular-dress-area-wrapper" data-padding-top="50" data-padding-bottom="50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="section-title-wrapper style-02-new">
                    <h2 class="main-title">{{ $title }}</h2>
                    <p class="sub-title">{{ $description }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container custom-container-1618 filter-two-main-container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="our-stor-isotop-btn-wrapper">
                    <ul class="our-stor-btn-list">
                        <li data-filter="new-items" class="product_filter_style_two active">New items</li>
                        <li data-filter="top-rated" class="product_filter_style_two">Top Rated</li>
                        <li data-filter="top-selling" class="product_filter_style_two">Top Selling</li>
                        <li data-filter="campaign" class="product_filter_style_two">Campaign</li>
                        <li data-filter="discounted" class="product_filter_style_two">Discounted</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="our-store-item-wrap product-filter-style-two-product-wrapper" data-item-limit="{{ $items }}">
            <div class="filter-style-block-preloader lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>

            <div class="row filter-item-wrap" style = "gap:20px;">
                @foreach($all_products as $item)
                    <div class="form-class " id="product_show" style="width: calc(20% - 20px);  ">
                        <x-frontend.product.product-card-03 :item="$item" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- popular dress area end -->
