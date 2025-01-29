<div class="news-update-area-wrapper single-page" data-padding-top="{{ $padding_top }}"
    data-padding-bottom="{{ $padding_bottom }}">
    <div class="container">
        <div class="row">
            @foreach ($all_blogs as $blog)
            <x-frontend.blog.grid :blog="$blog" :readMoreBtnText="$readMoreBtnText" />
            @endforeach
        </div>
        <div class="row justify-content-center margin-top-30">
            <div class="col-lg-6">
                <div class="pagination-default">
                    {!! $all_blogs->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
