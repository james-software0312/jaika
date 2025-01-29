@extends('frontend.frontend-page-master')
@php
$post_img = null;
$blog_image = get_attachment_image_by_id($blog_post->image, 'full', false);
$post_img = !empty($blog_image) ? $blog_image['img_url'] : '';
@endphp

@section('style')
    @if (!empty(get_static_option('site_disqus_key')))
        <script id="dsq-count-scr" src="//{{ get_static_option('site_disqus_key') }}.disqus.com/count.js" async></script>
    @endif
@endsection
@section('og-meta')
    <meta name="og:title" content="{{ purify_html($blog_post->og_meta_title) }}">
    <meta name="og:description" content="{{ purify_html($blog_post->og_meta_description) }}">
    {!! render_og_meta_image_by_attachment_id($blog_post->og_meta_image) !!}
    <meta name="og:tags" content=" {{ purify_html($blog_post->meta_tags) }}">
@endsection

@section('page-meta-data')
    <meta name="description" content="{{ purify_html($blog_post->meta_description) }}">
    <meta name="tags" content="{{ purify_html($blog_post->meta_tag) }}">
@endsection
@section('site-title')
    {{ purify_html($blog_post->title) }}
@endsection
@section('page-title')
    {{ purify_html($blog_post->title) }}
@endsection
@section('content')
    <section class="blog-details-content-area padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-inner-content">
                        <div class="img-box">
                            @if (!empty($blog_image))
                                <img src="{{ $blog_image['img_url'] }}" alt="{{ purify_html($blog_post->title) }}">
                            @endif
                        </div>
                        <div class="content">
                            <ul class="post-meta">
                                <li class="meta-item">
                                    <a href="#">
                                        <i class="las la-calendar icon"></i>
                                        {{ date_format($blog_post->created_at, 'd M Y') }}
                                    </a>
                                </li>
                                <li class="meta-item">
                                    <a href="#">
                                        <i class="lar la-eye icon"></i>
                                        {{ $blog_post->visit_count }} {{ __('views') }}
                                    </a>
                                </li>
                                <li class="meta-item">
                                    <i class="las la-tag icon"></i>
                                    {!! purify_html_raw(get_blog_category_by_id($blog_post->blog_categories_id, 'link')) !!}
                                </li>
                            </ul>
                            <h3 class="title">{{ purify_html($blog_post->title) }}?</h3>
                            <div class="content-area mt-4">
                                <p> {!! $blog_post->blog_content !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-details-tag-icon">
                        <!-- entry footer -->
                        @php
                            $all_tags = explode(',', purify_html($blog_post->tags));
                        @endphp
                        @if (count($all_tags) > 1)
                            <div class="tag">
                                <p class="name">{{ get_static_option('blog_single_page_tags_title') }}:</p>
                                @foreach ($all_tags as $tag)
                                    @php $slug = Str::slug($tag); @endphp
                                    <a href="{{ route('frontend.blog.tags.page', ['name' => $slug]) }}"
                                        class="tag-btn">{{ $tag }}</a>
                                @endforeach
                            </div>
                            <div class="icon">
                                <p class="name">{{ get_static_option('blog_single_page_share_title') }}</p>
                                <ul>
                                    {!! single_post_share(route('frontend.blog.single', purify_html($blog_post->slug)), purify_html($blog_post->title), $post_img) !!}
                                </ul>
                            </div>
                        @endif
                    </div>

                    <div class="disqus-comment-area margin-top-40">
                        <div id="disqus_thread"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-area-wrapper">
                        {!! render_frontend_sidebar('blog', ['column' => false]) !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @if (!empty(get_static_option('site_disqus_key')))
        <div id="disqus_thread"></div>
        <script>
            /**
             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
            /*
            var disqus_config = function () {
            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            */
            (function() { // DON'T EDIT BELOW THIS LINE
                var d = document,
                    s = d.createElement('script');
                s.src = 'https://{{ get_static_option('site_disqus_key') }}.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
        </script>
    @endif
@endsection
