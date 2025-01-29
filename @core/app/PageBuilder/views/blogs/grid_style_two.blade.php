<!-- blog new area start -->
<div class="blog-grid-new-area-wrapper" data-padding-top="{{ $padding_top }}" data-padding-bottom="{{ $padding_bottom }}">
    <div class="container custom-container-1410">
        <div class="row">
            @foreach($all_blogs as $item)
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="single-blog-gird-new-item">
                        <div class="img-wrap">
                            <a href="#">
                                <div class="product-bg-img bg-size"
                                     {!! render_background_image_markup_by_attachment_id($item->image) !!} data-width="100%"
                                     data-height="318"></div>
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title">
                                <a href="{{ route('frontend.blog.single', $item->slug) }}">{{ Str::limit(purify_html(strip_tags($item->title)),120) }}</a>
                            </h4>

                            <div class="post-meta">
                                <ul class="post-meta-list">
                                    <li class="post-meta-item">
                                        <a href="{{ route('frontend.blog.single', $item->slug) }}">
                                            <span class="text">{{ $item->author }}</span>
                                        </a>
                                    </li>
                                    <li class="post-meta-item date">
                                        <span class="text">{{ $item->created_at->format("d F Y") }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- blog new area end -->
