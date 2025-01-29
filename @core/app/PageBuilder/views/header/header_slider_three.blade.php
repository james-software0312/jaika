
<!-- header area start -->
<div class="new-header-area-wrapper new-style-1 global-slick-init slick-main arrow-style-02" data-infinite="true"
     data-padding-bottom="{{ $padding_bottom }}" data-padding-top="{{ $padding_top }}"
     data-arrows="true" data-dots="false" data-slidesToShow="1" data-slidesToScroll="1" data-swipeToSlide="true"
     data-autoplay="true" data-autoplaySpeed="2500"
     data-prevArrow='<div class="prev-icon"><i class="las la-arrow-left"></i></div>'
     data-nextArrow='<div class="next-icon"><i class="las la-arrow-right"></i></div>' data-responsive='[
    {"breakpoint": 1200,"settings": {"slidesToShow": 2}},
    {"breakpoint": 992,"settings": {"slidesToShow": 2}},
    {"breakpoint": 768, "settings": {"slidesToShow": 1}}
    ]'>
    {!! $output !!}
</div>
<!-- header area end -->