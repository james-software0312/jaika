
<!-- popular dress area start -->
<div class="popular-dress-new-area-wrapper" data-padding-top="{{ $padding_top }}" data-padding-bottom="{{ $padding_bottom }}">
    <div class="container custom-container-1410">
        <div class="row {{ $image_position == "right" ? "" : "flex-row-reverse" }}">
            <div class="col-lg-8">
                <div class="row three-column">
                    @foreach($all_products as $item)
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <x-frontend.product.product-card-02 :item="$item" />
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4">
                <div class="new-add-img-box">
                    <a href="{{ $btn_url }}">
                        {!! render_image_markup_by_attachment_id($banner_image) !!}
                    </a>
                    <div class="content">
                        <h5 class="catg">{{ $image_title }}</h5>
                        <div class="btn-wrapper">
                            <a href="{{ $btn_url }}" class="borderless-btn">{{ $btn_text }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- popular dress area end -->