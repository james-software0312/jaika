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
use Intervention\Image\Facades\Image as InterImage;

class ProductSliderStyleOne extends PageBuilderBase
{
    /**
     * @inheritDoc
     */
    public function addon_title()
    {
        return __('Product Slider: 01');
    }

    /**
     * @inheritDoc
     */
    public function preview_image()
    {
        return 'product/slider-01.png';
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
            'info' => __('For lighter text embrace with <b>[lgt]</b> and <b>[/lgt]</b>')
        ]);
        $products = Product::where(['status' => 'publish'])->get()->pluck('title', 'id')->toArray();
        $output .= NiceSelect::get([
            'name' => 'items',
            'multiple' => true,
            'label' => __('Products'),
            'placeholder' =>  __('Select Products'),
            'options' => $products,
            'value' => $widget_saved_values['product_items'] ?? null,
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
            'name' => 'items',
            'label' => __('Items'),
            'value' => $widget_saved_values['items'] ?? null,
            'info' => __('enter how many item you want to show in frontend, leave it empty if you want to show all products'),
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

        // add padding option

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
        $formatted_section_title = $this->format_section_title($section_title);
        $order = SanitizeInput::esc_html($settings['order']);
        $order_by = SanitizeInput::esc_html($settings['order_by']);
        $items = SanitizeInput::esc_html($settings['items']);
        $padding_top = SanitizeInput::esc_html($settings['padding_top']);
        $padding_bottom = SanitizeInput::esc_html($settings['padding_bottom']);
        $product_items = $settings['product_items'] ?? [];
        $product_categories = $settings['product_categories'] ?? [];

        $products = Product::query()->with('inventory', 'campaignProduct', 'campaignSoldProduct')->where('status', 'publish');

        if (!empty($product_items)) {
            $products->whereIn('id', $product_items);
        }

        if (!empty($product_categories)) {
            $products->whereIn('category_id', $product_categories);
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
            $output .= $this->get_slider_item($item);
        }
        

        return <<<HTML
<div class="new-collection-area-wrapper" data-padding-top="{$padding_top}" data-padding-bottom="{$padding_bottom}">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="section-title-wrapper">
                    <h2 class="main-title">{$formatted_section_title}</h2>
                </div>
            </div>
        </div>
        <div class="row new-collection-slider">
            {$output}
        </div>
    </div>
</div>
HTML;
    }

    public function get_slider_item($item)
    {
        $route = route('frontend.products.single', $item->slug);

        $image_markup = render_image_markup_by_attachment_id($item->image, '', 'full');

        $title_markup = "<h3 class='product-title'><a href='{$route}'>{$item->title}</a></h3>";

        // campaign product check
        $campaign_product = !is_null($item->campaignProduct) ? $item->campaignProduct : getCampaignProductById($item->id);
        $sale_price = $campaign_product ? optional($campaign_product)->campaign_price : $item->sale_price;
        $price = !is_null($campaign_product) ? $item->sale_price : $item->price;
        $campaign_percentage = !is_null($campaign_product) ? getPercentage($item->sale_price, $sale_price) : false;

        $price = $price > 0 ? float_amount_with_currency_symbol($price) : '';
        $price_markup = '<div class="product-price-details"><ul class="list"><li class="price">' . float_amount_with_currency_symbol($sale_price) . '</li><li class="price"><del>' . $price . '</del></li></ul></div>';

        $add_to_cart_markup = "";
        if ($item->id) {
            $attributes = $item->attributes ? json_decode($item->attributes, true) : null;

            if ($attributes && count($attributes)) {
                $route = route('frontend.products.single', $item->slug);
                $add_to_cart_markup = '<li><a href="'.$route.'" class="add-to-cart">'.__('View Options').' <i class="las la-eye"></i></a></li>';
            } else {
                $add_to_cart_markup = '<li><a href="#" data-attributes="'.$item->attributes.'" data-id="'.$item->id.'" class="add-to-cart add_to_cart_ajax">'.__('Add to Cart').' <i class="las la-shopping-cart icon"></i></a></li>';
            }
        }

        $add_to_wishlist_markup = "";
        if ($item->id) {
            $attributes = $item->attributes ? json_decode($item->attributes, true) : null;

            if ($attributes && count($attributes)) {
                $route = route('frontend.products.single', $item->slug);
                $add_to_wishlist_markup = '<li><a href="'.$route.'" class="add-to-cart">'.__('Add to Wish List').' <i class="lar la-heart icon"></i></a></li>';
            } else {
                $add_to_wishlist_markup = '<li><a href="#" data-attributes="'.$item->attributes.'" data-id="'.$item->id.'" class="add-to-cart add_to_wishlist_ajax">'.__('Add to Wish List').' <i class="lar la-heart icon"></i></a></li>';
            }
        }

        $add_to_compare = '<li><a href="#" data-id="'.$item->id.'" class="add_to_compare_ajax">'.__('Compare').' <i class="las la-retweet icon"></i></a></li>';

        $quick_view_data = getQuickViewDataMarkup($item);
        $quick_view_markup = '<li><a href="#" class="quick-view call-modal" '.$quick_view_data.'}>'.__('Quickview').' <i class="lar la-eye icon"></i></a></li>';

        $thumbnail = "<a href='{$route}'>{$image_markup}</a>";
        $badge_markup = !empty($item->badge) ? '<span class="sale">' . $item->badge . '</span>' : '';
        
        $campaign_percentage_markup = '';
        if($campaign_percentage){
            $campaign_percentage_markup ='<span class="discount-tag">-'.round($campaign_percentage, 2).'%</span>';
        }
        
        
        $hover_content = <<<HTML
            <div class="hover">
                <ul class="list">
                    {$add_to_wishlist_markup}
                    {$add_to_compare}
                    {$add_to_cart_markup}
                    {$quick_view_markup}
                </ul>
            </div>
HTML;

        $output = <<<HTML
        <div class="col-lg-12">
            <div class="single-new-collection-item single-product-item">
                <div class="product-img-box">
                    {$badge_markup}
                    {$campaign_percentage_markup}
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
        return $output;
    }

    public function format_section_title($title)
    {
        return str_replace(['[lgt]', '[/lgt]'], ['<span class="ex">','</span>'], $title);
    }
}
