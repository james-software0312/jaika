<!-- call to action area start -->
<div class="new-call-to-action-area-wrapper style-01 bg-color-cta-01" data-padding-top="{{ $padding_top }}" data-padding-bottom="{{ $padding_bottom }}">
    <div class="container custom-container-1410">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="new-call-to-action-inner">
                    <div class="content">
                        <p class="highlight-text">{{ $sub_title }}</p>
                        <h3 class="main-title">{{ html_entity_decode($title) }}</h3>
                        <p class="info">{{ $summary }}</p>
{{--                        <p class="highlight-text">$235.00</p>--}}

                        <div class="btn-wrapper">
                            <a href="{{ url($url) }}" class="default-btn color-black">{{ $btn_text }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="new-call-to-action-inner round-shadow-01">
                    <div class="img-box">
                        {!! render_image_markup_by_attachment_id($image) !!}
{{--                        <img src="assets/img/new-cta/01.png" alt="image">--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- call to action area end -->
