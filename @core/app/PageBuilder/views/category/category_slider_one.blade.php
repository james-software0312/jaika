<!-- category area start -->
<div class="category-new-area-wrapper" data-padding-top="{{ $padding_top }}" data-padding-bottom="{{ $padding_bottom }}">
    <div class="container custom-container-1410">
        <div class="row">
            <div class="col-lg-12">
                <div class="category-new-inner slick-main global-slick-init arrow-style-02" data-infinite="true"
                     data-arrows="false" data-dots="false" data-slidesToShow="6" data-slidesToScroll="1"
                     data-swipeToSlide="true" data-autoplay="false" data-autoplaySpeed="2500"
                     data-prevArrow='<div class="prev-icon"><i class="las la-arrow-left"></i></div>'
                     data-nextArrow='<div class="next-icon"><i class="las la-arrow-right"></i></div>'
                     data-responsive='[
                        {"breakpoint": 1200,"settings": {"slidesToShow": 3}},
                        {"breakpoint": 992,"settings": {"slidesToShow": 3}},
                        {"breakpoint": 768, "settings": {"slidesToShow": 2}},
						{"breakpoint": 768, "settings": {"slidesToShow": 2}},
						{"breakpoint": 376, "settings": {"slidesToShow": 1}}
                        ]'>

                    @foreach($categories as $category)
                        <div class="slick-item">
                            <a href="{{ route('frontend.products.category', $category->id) }}" class="single-category-new-style-01">
                                <span class="img-box">
                                    {!! render_image_markup_by_attachment_id($category->image) !!}
                                    <span class="number">{{ $category->product_count }}</span>
                                </span>

                                <span class="content">
                                    <span class="title">{{ $category->title }}</span>
                                </span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- category area end -->