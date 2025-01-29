@php
    $category_url = route('frontend.blog.category',  ['id' => optional($blog->category)->id, 'name' => optional($blog->category)->title]) ?? '';
@endphp

<div class="single-blog-item">
    <div class="img-box">
        {!! render_image_markup_by_attachment_id($blog->image) !!}
    </div>
    <div class="content">
        <ul class="post-meta">
            <li class="meta-item">
                <a href="{{route('frontend.blog.single', $blog->slug)}}">
                    <i class="las la-calendar icon"></i>
                    {{ date_format($blog->created_at, 'Y F Y') }}
                </a>
            </li>
            <li class="meta-item">
                <a href="{{ $category_url }}">
                    <i class="las la-tag icon"></i>
                    {{ optional($blog->category)->name }}
                </a>
            </li>
        </ul>
        <h4 class="title">
            <a href="{{ route('frontend.blog.single', $blog->slug) }}">{!! Str::limit(purify_html_raw($blog->title), 15) !!}</a>
        </h4>
        <p class="info">{!! Str::words(purify_html_raw(strip_tags($blog->blog_content)), 35) !!}</p>
        <div class="btn-wrapper">
            <a href="{{ route('frontend.blog.single', $blog->slug) }}" class="borderless-btn">{{ $readMoreBtnText }}</a>
        </div>
    </div>
</div>
