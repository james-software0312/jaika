
<!-- random product area end -->
<div class="random-product-area-wrapper" data-padding-top="{{ $padding_top }}" data-padding-bottom="{{ $padding_bottom }}">
    <div class="container custom-container-1618">
        <div class="row">
            @foreach($categories as $category)
                <?php
                    $category_route = route('frontend.products.category', [
                        'id' => optional($category)->id,
                        'slug' => \Str::slug(optional($category)->title ?? '')
                    ]);
                ?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="single-random-item">
                        <div class="tag-box">
                            <a href="{{ $category_route }}" class="tag">{{ html_entity_decode(optional($category)->title) }}</a>
                        </div>
                        <a href="{{ $category_route }}">
                            <span class="product-bg-img bg-size-cover" {!! render_background_image_markup_by_attachment_id(optional($category)->image) !!} data-width="100%" data-height="400"></span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- random product area start -->
