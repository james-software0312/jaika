
<!-- trendy collection area start -->
<div class="trendy-collection-new-area-wrapper" data-padding-top="{{$padding_top}}" data-padding-bottom="{{$padding_bottom}}">
    <div class="container custom-container-1410">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-5">
                <div class="section-title-wrapper style-02-new">
                    <h2 class="main-title">{{ $section_title }}</h2>
                    <p class="sub-title">{{ $section_summary }}</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="slick-main global-slick-init arrow-style-02" data-infinite="true" data-arrows="true"
                     data-dots="false" data-slidesToShow="4" data-slidesToScroll="1" data-swipeToSlide="true"
                     data-autoplay="true" data-autoplaySpeed="2500" data-appendArrows="#trendy_coll_02"
                     data-prevArrow='<div class="prev-icon"><i class="las la-arrow-left"></i></div>'
                     data-nextArrow='<div class="next-icon"><i class="las la-arrow-right"></i></div>'
                     data-responsive='[
                            {"breakpoint": 1200,"settings": {"slidesToShow": 4}},
                            {"breakpoint": 992,"settings": {"slidesToShow": 3}},
                            {"breakpoint": 768, "settings": {"slidesToShow": 2}},
							{"breakpoint": 451, "settings": {"slidesToShow": 1}}
                            ]'>

                    @foreach($all_products as $item)
                        <div class="slick-item">
                            <x-frontend.product.product-card-04 :item="$item" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bag-and-shoe area end -->