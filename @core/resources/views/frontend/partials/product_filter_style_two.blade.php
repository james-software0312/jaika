<div class="filter-style-block-preloader lds-ellipsis">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
</div>

<div class="row">
    @foreach($products as $item)
        <div class="col-sm-6 col-md-4 col-lg-2">
            <x-frontend.product.product-card-03 :item="$item" />
        </div>
    @endforeach
</div>