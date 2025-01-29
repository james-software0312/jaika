<!-- bag-and-shoe area start -->
<div class="bag-and-show-area-wrapper" data-padding-top="{{$padding_top}}" data-padding-bottom="{{$padding_bottom}}">
    <div class="container custom-container-1410">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-wrapper style-01-new">
                    <h1 class="section-title-main">
                        {{--                        {{$section_title}}--}}
                        {!! $section_title !!}
                    </h1>
                    @php $rand = Str::random(35); @endphp
                    <div class="to-top-row-right main-color-one" id="bag_shop_{{$rand}}"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="slick-main global-slick-init arrow-style-02" data-infinite="true" data-arrows="true"
                     data-dots="false" data-slidesToShow="4" data-slidesToScroll="1" data-swipeToSlide="true"
                     data-autoplay="false" data-autoplaySpeed="2500" data-appendArrows="#bag_shop_{{$rand}}"
                     data-prevArrow='<div class="prev-icon"><i class="las la-arrow-left"></i></div>'
                     data-nextArrow='<div class="next-icon"><i class="las la-arrow-right"></i></div>'
                     data-responsive='[
                    {"breakpoint": 1200,"settings": {"slidesToShow": 4}},
                    {"breakpoint": 992,"settings": {"slidesToShow": 2}},
                    {"breakpoint": 768, "settings": {"slidesToShow": 2}},
					{"breakpoint": 576, "settings": {"slidesToShow": 1}}
                    ]'>
                    @foreach($all_products as $item)
                        <div class="slick-item">
                            <x-frontend.product.product-card-02 :item="$item" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bag-and-shoe area end -->