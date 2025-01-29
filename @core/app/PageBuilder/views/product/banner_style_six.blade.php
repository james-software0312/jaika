
<!-- call to action area start -->
<div class="new-call-to-action-area-wrapper style-02" data-padding-top="{{ $padding_top }}" data-padding-bottom="{{ $padding_bottom }}">
    <div class="container custom-container-1410">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="new-call-to-action-inner square-shadow-01">
                    <div class="img-box">
                        {!! render_image_markup_by_attachment_id($image) !!}
                        {!! render_image_markup_by_attachment_id($badge, "bage") !!}
                    </div>
                </div>
            </div>
            <div class="col-sm-5 col-md-5 col-lg-5">
                <div class="new-call-to-action-inner">
                    <div class="content">
                        <h3 class="main-title">Big Offer <br>
                            up to 70% off</h3>
                        <p class="info">{{ $description }}</p>

                        <div class="btn-wrapper">
                            <a href="{{ url($url) }}" class="default-btn color-orange-02">{{ $btn_text }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- call to action area end -->