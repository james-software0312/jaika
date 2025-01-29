<!-- our brand area start -->
<div class="our-brand-new-area-wrapper" data-padding-top="{{ $padding_top }}" data-padding-bottom="{{ $padding_bottom }}">
    <div class="container custom-container-1410">
        <div class="row">
            <div class="col-lg-12">
                <div class="slick-main global-slick-init arrow-style-02" data-infinite="true" data-arrows="false"
                     data-dots="false" data-slidesToShow="5" data-slidesToScroll="1" data-swipeToSlide="true"
                     data-autoplay="true" data-autoplaySpeed="2500"
                     data-prevArrow='<div class="prev-icon"><i class="las la-arrow-left"></i></div>'
                     data-nextArrow='<div class="next-icon"><i class="las la-arrow-right"></i></div>'
                     data-responsive='[
                            {"breakpoint": 1200,"settings": {"slidesToShow": 2}},
                            {"breakpoint": 992,"settings": {"slidesToShow": 2}},
                            {"breakpoint": 768, "settings": {"slidesToShow": 2}},
							{"breakpoint": 415, "settings": {"slidesToShow": 1}}
                            ]'>

                    {!! $brand_data !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bag-and-shoe area end -->
