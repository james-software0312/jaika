
<ul class="sub-menu mega-menu-inner multi">
    @foreach($mega_menu_items as $item)
        <?php
            $products = \App\Product\Product::whereJsonContains('sub_category_id', "$item->id")->inRandomOrder()->take(2)->get();
        ?>
        @if(!empty($products->count()))
            <li class="mega-menu-single-section">
                <ul class="mega-menu-main">
                    <li>
                        <a href="{{ route("frontend.products.subcategory",["id" => $item->id,"title" => Str::slug($item->title)]) }}">
                            <h5 class="menu-title font-weight-bold">{{ html_entity_decode($item->title) }}</h5>
                        </a>
                        <hr class="mt-1">
                    </li>
                    @foreach($products as $product)
                        <?php
                            $campaign_product = !is_null($product->campaignProduct) ? $product->campaignProduct : getCampaignProductById($product->id);
                            $sale_price = $campaign_product ? optional($campaign_product)->campaign_price : $product->sale_price;
                            $deleted_price = !is_null($campaign_product) ? $product->sale_price : $product->price;
                            $campaign_percentage = !is_null($campaign_product) ? getPercentage($product->sale_price, $sale_price) : false;
                        ?>
                        <li>
                            <div class="category-menu-product-wrap">
                                <div class="left-side">
                                    {!! render_image_markup_by_attachment_id($product->image,'','thumb') !!}
                                    @if(!empty($campaign_percentage))
                                        <span class="badge badge-danger left-side-badge">{{ $campaign_percentage }}%</span>
                                    @endif
                                </div>
                                <div class="right-side">
                                    <h5 class="product-title">
                                        <a href="{{ route('frontend.products.single', $product->slug) }}" class="title-text">
                                            {!! html_entity_decode($product->title) !!}</a>
                                    </h5>
                                    <div class="price-block mt-0">
                                        <span class="sale-price">{{ float_amount_with_currency_symbol($sale_price) }}</span>
                                        <span class="deleted-price">{{ float_amount_with_currency_symbol($deleted_price) }}</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endif
    @endforeach
</ul>
