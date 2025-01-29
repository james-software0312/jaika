@extends('frontend.frontend-page-master')
@section('page-meta-data')
    <meta name="description" content="{{$page_post->meta_description}}">
    <meta name="tags" content="{{$page_post->meta_tags}}">
@endsection

@section('site-title')
    {{$page_post->title}}
@endsection

@section('page-title')
    {{$page_post->title}}
@endsection

@section('og-meta')
    <meta name="og:title" content="{{$page_post->title}}">
    <meta name="og:description" content="{{$page_post->meta_description}}">
@endsection

@section('content')
<section class="dynamic-page-content-area">
    @php
        $page_container_option = $page_post->page_container_option ? 'container-fluid px-0' : 'container';
    @endphp
    <div class="{{ $page_container_option }}">
        <div class="row">
            <div class="col-lg-12">
                @if(!empty($page_post->page_builder_status))
                    {!! \App\PageBuilder\PageBuilderSetup::render_frontend_pagebuilder_content_for_dynamic_page('dynamic_page',$page_post->id) !!}
                @else
                    @include('frontend.partials.dynamic-page-content')
                @endif
            </div>
        </div>
    </div>
</section>

@endsection


