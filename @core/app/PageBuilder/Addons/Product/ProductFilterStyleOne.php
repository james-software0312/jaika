<?php


namespace App\PageBuilder\Addons\Product;

use App\Helpers\SanitizeInput;
use App\PageBuilder\Fields\IconPicker;
use App\PageBuilder\Fields\Image;
use App\PageBuilder\Fields\NiceSelect;
use App\PageBuilder\Fields\Number;
use App\PageBuilder\Fields\Select;
use App\PageBuilder\Fields\Slider;
use App\PageBuilder\Fields\Text;
use App\PageBuilder\PageBuilderBase;
use App\Product\Product;
use App\Product\ProductCategory;
use App\StockItemModel;
use Intervention\Image\Facades\Image as InterImage;

class ProductFilterStyleOne extends PageBuilderBase
{
    /**
     * @inheritDoc
     */
    public function addon_title()
    {
        return __('Product Filter: 01');
    }

    /**
     * @inheritDoc
     */
    public function preview_image()
    {
        return 'product/filter-01.png';
    }

    /**
     * @inheritDoc
     */
    public function admin_render()
    {
        $output = $this->admin_form_before();
        $output .= $this->admin_form_start();
        $output .= $this->default_fields();
        $widget_saved_values = $this->get_settings();

        $output .= Text::get([
            'name' => 'section_title',
            'label' => __('Section Title'),
            'value' => $widget_saved_values['section_title'] ?? null,
        ]);
        $output .= Text::get([
            'name' => 'section_description',
            'label' => __('Section Description'),
            'value' => $widget_saved_values['section_description'] ?? null,
        ]);

        $products = Product::where(['status' => 'publish'])->get()->pluck('title', 'id')->toArray();
        $output .= NiceSelect::get([
            'name' => 'items',
            'multiple' => true,
            'label' => __('Products'),
            'placeholder' =>  __('Select Products'),
            'options' => $products,
            'value' => $widget_saved_values['items'] ?? null,
            'info' => __('you can select item for products, if you want to show all product leave it empty')
        ]);
        $categories =  ProductCategory::where('status', 'publish')->get()->pluck('title', 'id')->toArray();
        $output .= NiceSelect::get([
            'name' => 'product_categories',
            'multiple' => true,
            'label' => __('Category'),
            'placeholder' =>  __('Select Category'),
            'options' => $categories,
            'value' => $widget_saved_values['product_categories'] ?? null,
            'info' => __('You can select category that you want to show, if you want to show all the products leave it empty')
        ]);
        $output .= Select::get([
            'name' => 'order_by',
            'label' => __('Order By'),
            'options' => [
                'id' => __('ID'),
                'created_at' => __('Date'),
                'sale_price' => __('Price'),
            ],
            'value' => $widget_saved_values['order_by'] ?? null,
            'info' => __('set order by')
        ]);
        $output .= Select::get([
            'name' => 'order',
            'label' => __('Order'),
            'options' => [
                'asc' => __('Ascending'),
                'desc' => __('Descending'),
            ],
            'value' => $widget_saved_values['order'] ?? null,
            'info' => __('set product order')
        ]);
        $output .= Number::get([
            'name' => 'items_count',
            'label' => __('No. of Items'),
            'value' => $widget_saved_values['items_count'] ?? null,
            'info' => __('enter how many item you want to show in frontend, leave it empty if you want to show all products'),
        ]);
        $output .= Text::get([
            'name' => 'shop_now_btn_text',
            'label' => __('Shop Now Button Text'),
            'value' => $widget_saved_values['shop_now_btn_text'] ?? null,
        ]);
        $output .= Text::get([
            'name' => 'shop_now_btn_url',
            'label' => __('Shop Now Button URL'),
            'value' => $widget_saved_values['shop_now_btn_url'] ?? null,
        ]);

        $output .= Slider::get([
            'name' => 'padding_top',
            'label' => __('Padding Top'),
            'value' => $widget_saved_values['padding_top'] ?? 110,
            'max' => 200,
        ]);
        $output .= Slider::get([
            'name' => 'padding_bottom',
            'label' => __('Padding Bottom'),
            'value' => $widget_saved_values['padding_bottom'] ?? 110,
            'max' => 200,
        ]);

        $output .= $this->admin_form_submit_button();
        $output .= $this->admin_form_end();
        $output .= $this->admin_form_after();

        return $output;
    }

    /**
     * @inheritDoc
     */
    public function frontend_render()
    {
        $settings = $this->get_settings();

        $section_title = SanitizeInput::esc_html($settings['section_title']);
        $section_description = SanitizeInput::esc_html($settings['section_description']);
        $shop_now_btn_text = SanitizeInput::esc_html($settings['shop_now_btn_text']);
        $shop_now_btn_url = SanitizeInput::esc_html($settings['shop_now_btn_url']);
        $shop_now_btn_url = url($shop_now_btn_url);
        $order = SanitizeInput::esc_html($settings['order']);
        $order_by = SanitizeInput::esc_html($settings['order_by']);
        $items = SanitizeInput::esc_html($settings['items_count']);
        $padding_top = SanitizeInput::esc_html($settings['padding_top']);
        $padding_bottom = SanitizeInput::esc_html($settings['padding_bottom']);
        $product_items = $settings['items'] ?? [];
        // dd($settings);
        // dd($product_items);
        $product_categories = $settings['product_categories'] ?? [];

        $products = Product::query()->withAvg('rating', 'rating', 'campaignProduct')->with('inventory');
        // if (!empty($product_items)) {
        //     $products->whereIn('id', $product_items);
        // }
        // dd($products->get());
        if (!empty($product_categories)) {
            $products->whereIn('category_id', $product_categories)->limit(18);
        }

        $products->where(['status' => 'publish']);

        if ($order_by === 'rating') {
            $products = $products->with(['ratings','campaignProduct'])->get();
            $all_products = $products->sortByDesc(function ($products,$key){
                return $products->ratings()->avg('ratings');
            });
        } else {
            $products->orderBy($order_by, $order);
            $all_products =  $products->get();
        }

        if (!empty($items)) {
            $all_products = $all_products->take($items);
        }

        $output = '';

        foreach ($all_products as $item) {
            $output .= $this->getItemMarkup($item);
        }
        // product filter translatable texts
        $featured_text = __('Featured');
        $top_selling_text = __('Top selling');
        $new_text = __('New');
        $section_title = __('OUR STORE');
        // loader
        $loader = $this->loader();
        $section_description = __('A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring');
        return <<<HTML
        <div class="our-store-area-wrapper" data-padding-top="{$padding_top}" data-padding-bottom="{$padding_bottom}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-5">
                        <div class="section-title-wrapper">
                            <h2 class="main-title">{$section_title}</h2>
                            <!-- <p class="sub-title">{$section_description}</p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container custom-container-1618">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="our-stor-isotop-btn-wrapper">
                            <ul class="our-stor-btn-list">
                                <li id="product_filter_featured_products">{$featured_text}</li>
                                <li id="product_filter_top_selling">{$top_selling_text}</li>
                                <li id="product_filter_new_products">{$new_text}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row our-store-item-wrap" id="product_filter_section">
                    {$output}
                </div>
                <!-- <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="btn-wrapper">
                            <a href="{$shop_now_btn_url}" class="default-btn">{$shop_now_btn_text}</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        {$loader}
HTML;
    }

    public function getItemMarkup($item)
    {
        $route = route('frontend.products.single', $item->slug);

        // campaign product check
        $campaign_product = !is_null($item->campaignProduct) ? $item->campaignProduct : getCampaignProductById($item->id);
        $sale_price = $campaign_product ? optional($campaign_product)->campaign_price : $item->sale_price;
        $price = !is_null($campaign_product) ? $item->sale_price : $item->price;
        $campaign_percentage = !is_null($campaign_product) ? getPercentage($item->sale_price, $sale_price) : false;

        $image_markup = render_image_markup_by_attachment_id($item->image, '', 'grid');
        $title_markup = "<h4 class='product-title'><a href='{$route}'>{$item->title}</a></h4>";
        // $price = $price > 0 ? float_amount_with_currency_symbol($price) : '';
        $price_markup = '<div class="product-price-details"><ul class="list"><li class="price"  style = "text-transform: lowercase!important;">' . float_amount_with_currency_symbol($sale_price) . '</li>';
        if($price > $sale_price) {
            $price_markup .= '<li class="price"  style = "text-transform: lowercase!important;"><del>' . $price . '</del></li></ul></div>';
        } else {
            $price_markup .= '</ul></div>';
        }
        $attributes = $item->attributes ? json_decode($item->attributes, true) : null;

        $add_compare_markup = '<a href="#" data-id="'.$item->id.'" class="add_to_compare_ajax"> <i class="las la-retweet icon"></i></a>';

        $add_to_wishlist_markup = "";
        if ($item->id) {
            if ($attributes && count($attributes)) {
                $route = route('frontend.products.single', $item->slug);
                $add_to_wishlist_markup = '<a href="'.$route.'"> <i class="lar la-heart icon"></i></a>';
            } else {
                $add_to_wishlist_markup = '<a href="#" data-attributes="'.$item->attributes.'" data-id="'.$item->id.'" class="add_to_wishlist_ajax"> <i class="lar la-heart icon"></i></a>';
            }

            // cart
            if (is_array($attributes) && count($attributes)) {
                $item_route = route('frontend.products.single', $item->slug);
                $add_to_cart_markup = '<a href="'.$item_route.'" class="add-to-cart">'.__('View Options').'</a>';
            } else {
                $add_to_cart_markup = '<a href="#" data-attributes="'.$item->attributes.'" data-id="'.$item->id.'" class="add-to-cart add_to_cart_ajax">'.__('Add to Cart').'</a>';
            }
            $quick_view_data = getQuickViewDataMarkup($item);
        }

        $thumbnail = "<a href='{$route}'>{$image_markup}</a>";
        $badge_markup = !empty($item->badge) ? '<span class="sale">' . $item->badge . '</span>' : '';
        
        
        $campaign_percentage_markup = '';
        if($campaign_percentage){
            $campaign_percentage_markup ='<span class="discount-tag">-'.round($campaign_percentage, 2).'%</span>';
        }
        $stock = StockItemModel::where('product_id', $item->id)->first();
        // dd($quick_view_data);
        $quick_view_data .= "data-unitconverter = '".$stock->unitconverter."'";
        $hover_content = <<<HTML
        <div class="hover">
            <div class="left">
                <ul>
                    <li>
                        {$add_to_cart_markup}
                    </li>
                </ul>
            </div>
            <div class="right">
                <ul>
                    <li>
                        {$add_to_wishlist_markup}
                        {$add_compare_markup}
                        <a href="#" id="quickview" class="quick-view" {$quick_view_data}>
                            <i class="lar la-eye icon"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
HTML;
        
        return <<<HTML
        <div class="col-sm-6 col-md-4 col-lg-2 new gap-5">
            <div class="single-our-store-wrapper single-new-design-wrapper single-product-item" >
                <div class="product-img-box">
                    {$campaign_percentage_markup}
                    {$badge_markup}
                    {$thumbnail}
                    {$hover_content}
                </div>
                <div class="product-details-wrap">
                    {$title_markup}
                    {$price_markup}
                </div>
            </div>
        </div>
HTML;
    }

    public function loader()
    {
        return <<<HTML
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
        <style>
            .lds-ellipsis {
                display: inline-block;
                position: fixed;
                width: 80px;
                height: 80px;
                left: 50vw;
                top: 40vh;
                z-index: 50;
                display: none;
            }
            .lds-ellipsis div {
                position: absolute;
                top: 33px;
                width: 13px;
                height: 13px;
                border-radius: 50%;
                background: var(--main-color-one);
                animation-timing-function: cubic-bezier(0, 1, 1, 0);
            }
            .lds-ellipsis div:nth-child(1) {
                left: 8px;
                animation: lds-ellipsis1 0.6s infinite;
            }
            .lds-ellipsis div:nth-child(2) {
                left: 8px;
                animation: lds-ellipsis2 0.6s infinite;
            }
            .lds-ellipsis div:nth-child(3) {
                left: 32px;
                animation: lds-ellipsis2 0.6s infinite;
            }
            .lds-ellipsis div:nth-child(4) {
                left: 56px;
                animation: lds-ellipsis3 0.6s infinite;
            }
            @keyframes lds-ellipsis1 {
                0% {
                    transform: scale(0);
                }
                100% {
                    transform: scale(1);
                }
            }
            @keyframes lds-ellipsis3 {
                0% {
                    transform: scale(1);
                }
                100% {
                    transform: scale(0);
                }
            }
            @keyframes lds-ellipsis2 {
                0% {
                    transform: translate(0, 0);
                }
                100% {
                    transform: translate(24px, 0);
                }
            }
        </style>
HTML;
    }

}
