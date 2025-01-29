<?php


namespace App\PageBuilder\Addons\Product;

use App\Helpers\LanguageHelper;
use App\Helpers\SanitizeInput;
use App\PageBuilder\Fields\IconPicker;
use App\PageBuilder\Fields\Image;
use App\PageBuilder\Fields\NiceSelect;
use App\PageBuilder\Fields\Number;
use App\PageBuilder\Fields\Select;
use App\PageBuilder\Fields\Slider;
use App\PageBuilder\Fields\Switcher;
use App\PageBuilder\Fields\Text;
use App\PageBuilder\Fields\Textarea;
use App\PageBuilder\PageBuilderBase;
use App\Product\Product;
use App\Product\ProductCategory;

class ProductColumnStyleOne extends PageBuilderBase
{
    /**
     * @inheritDoc
     */
    public function addon_title()
    {
        return __('Product Column: 01');
    }

    /**
     * @inheritDoc
     */
    public function preview_image()
    {
        return 'product/column-01.png';
    }

    public function admin_column_input_group($count_no, $products, $categories, $widget_saved_values)
    {
        $output = '<div class="all-field-wrap">';
        $output .= Text::get([
            'name' => 'section_title_'.$count_no,
            'label' => __('Section Title'),
            'value' => $widget_saved_values['section_title_'.$count_no] ?? null,
            'info' => __('For lighter text embrace with <b>[lgt]</b> and <b>[/lgt]</b>'),
        ]);
        $output .= NiceSelect::get([
            'name' => 'products_'.$count_no,
            'multiple' => true,
            'label' => __('Product'),
            'placeholder' =>  __('Select Product'),
            'options' => $products,
            'value' => $widget_saved_values['products_'.$count_no] ?? null,
            'info' => __('you can select products that you want to show, if you want to show all the products leave it empty')
        ]);
        $output .= NiceSelect::get([
            'name' => 'products_category_'.$count_no,
            'multiple' => true,
            'label' => __('Category'),
            'placeholder' =>  __('Select Category'),
            'options' => $categories,
            'value' => $widget_saved_values['products_category_'.$count_no] ?? null,
            'info' => __('You can select category that you want to show, if you want to show all the products leave it empty')
        ]);
        $output .= Select::get([
            'name' => 'order_by_'.$count_no,
            'label' => __('Order By'),
            'options' => [
                'id' => __('ID'),
                'created_at' => __('Date'),
                'sale_price' => __('Price'),
            ],
            'value' => $widget_saved_values['order_by_'.$count_no] ?? null,
            'info' => __('set order by')
        ]);
        $output .= Select::get([
            'name' => 'order_'.$count_no,
            'label' => __('Order'),
            'options' => [
                'asc' => __('Ascending'),
                'desc' => __('Descending'),
            ],
            'value' => $widget_saved_values['order_'.$count_no] ?? null,
            'info' => __('set product order')
        ]);
        $output .= '</div>';
        return $output;
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

        $products = Product::where(['status' => 'publish'])->get()->pluck('title', 'id')->toArray();
        $categories =  ProductCategory::where('status', 'publish')->get()->pluck('title', 'id')->toArray();

        $output .= $this->admin_column_input_group(1, $products, $categories, $widget_saved_values);
        $output .= $this->admin_column_input_group(2, $products, $categories, $widget_saved_values);
        $output .= $this->admin_column_input_group(3, $products, $categories, $widget_saved_values);

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
        
        $padding_top = SanitizeInput::esc_html($settings['padding_top']);
        $padding_bottom = SanitizeInput::esc_html($settings['padding_bottom']);

        $all_column_data = '';
        $all_column_data .= $this->getFrontendColumn(1, $settings);
        $all_column_data .= $this->getFrontendColumn(2, $settings);
        $all_column_data .= $this->getFrontendColumn(3, $settings);

        return <<<HTML
        <div class="top-best-off-sale-area-wrapper" data-padding-top="{$padding_top}" data-padding-bottom="{$padding_bottom}">
            <div class="container">
                <div class="row">
                    {$all_column_data}
                </div>
            </div>
        </div>
HTML;
    }

    public function getFrontendColumn($count_no, $settings)
    {
        $settings = $this->get_settings();
        $section_title = SanitizeInput::esc_html($settings['section_title_' . $count_no]);
        $section_title = $this->format_section_title($section_title);
        $order_by = SanitizeInput::esc_html($settings['order_by_'.$count_no]);
        $order = SanitizeInput::esc_html($settings['order_'.$count_no]);
        $items = SanitizeInput::esc_html($settings['items_'.$count_no] ?? '');
        $product_items = $settings['products_'.$count_no] ?? [];
        $product_categories = $settings['products_category_'.$count_no] ?? [];

        $products = Product::query()->with('inventory', 'campaignProduct', 'campaignSoldProduct')->withAvg('rating', 'rating')->where(['status' => 'publish']);

        if (!empty($product_items)) {
            $products->whereIn('id', $product_items);
        }

        if (!empty($product_categories)) {
            $products->whereIn('category_id', $product_categories);
        }

        if ($order_by === 'rating') {
            $products = $products->with(['ratings','campaignProduct'])->get();
            $all_products = $products->sortByDesc(function ($products, $key) {
                return $products->ratings()->avg('ratings');
            });
        } else {
            $products->orderBy($order_by, $order);
        }

        if (!empty($items)) {
            $all_products = $products->take($items);
        } else {
            $all_products =  $products->get();
        }

        $output = '';
        foreach ($all_products as $key => $item) {
            $output .= $this->getColumnItem($item);
        }
        return <<<HTML
        <div class="col-md-6 col-lg-4">
            <div class="single-section-wrap">
                <div class="section-title-wrapper">
                    <h2 class="main-title">{$section_title}</h2>
                </div>
            </div>
            {$output}
        </div>
HTML;
    }

    public function getColumnItem($item)
    {
        $route = route('frontend.products.single', $item->slug);
        $image_markup = render_image_markup_by_attachment_id($item->image, '', 'p_grid');
        $title = $item->title;

        // campaign data
        $campaign_product = !is_null($item->campaignProduct) ? $item->campaignProduct : getCampaignProductById($item->id);
        $sale_price = $campaign_product ? optional($campaign_product)->campaign_price : $item->sale_price;
        $price = !is_null($campaign_product) ? $item->sale_price : $item->price;
        $campaign_percentage = !is_null($campaign_product) ? getPercentage($item->sale_price, $sale_price) : false;

        $sale_price = float_amount_with_currency_symbol($sale_price);
        $price = $price > 0 ? float_amount_with_currency_symbol($price) : '';

        $attributes = $item->attributes ? json_decode($item->attributes, true) : null;
        $add_to_cart_markup = "";
        if (is_array($attributes) && count($attributes)) {
            $route = route('frontend.products.single', $item->slug);
            $add_to_cart_markup = '<a href="'.$route.'"> <i class="las la-shopping-cart"></i></a>';
        } else {
            $add_to_cart_markup = '<a href="#" data-attributes="'.$item->attributes.'" data-id="'.$item->id.'" class="add_to_cart_ajax"><i class="las la-shopping-cart icon"></i></a>';
        }

        $add_to_wishlist_markup = "";
        if (is_array($attributes) && count($attributes)) {
            $route = route('frontend.products.single', $item->slug);
            $add_to_wishlist_markup = '<a href="'.$route.'"> <i class="lar la-heart icon"></i></a>';
        } else {
            $add_to_wishlist_markup = '<a href="#" data-attributes="'.$item->attributes.'" data-id="'.$item->id.'" class="add_to_wishlist_ajax"><i class="lar la-heart icon"></i></a>';
        }

        $add_to_compare = '<a href="#" data-id="'.$item->id.'" class="add_to_compare_ajax"> <i class="las la-retweet icon"></i></a>';

        $quick_view_data = getQuickViewDataMarkup($item);

        $quick_view_markup = '<a href="#" id="quickview" class="quick-view" '.$quick_view_data.'}><i class="lar la-eye icon"></i></a>';
        
        $campaign_percentage_markup = '';
        if($campaign_percentage){
            $campaign_percentage_markup ='<span class="discount-tag">-'.round($campaign_percentage, 2).'%</span>';
        }
        

        $hover_content = <<<HTML
        <div class="hover">
            <ul class="hover-list">
                <li class="item">
                    {$add_to_wishlist_markup}
                </li>
                <li class="item">
                    {$add_to_compare}
                </li>
                <li class="item">
                    {$add_to_cart_markup}
                </li>
                <li class="item">
                    {$quick_view_markup}
                </li>
            </ul>
        </div>
HTML;
$badge_markup = !empty($item->badge) ? '<span class="sale">' . $item->badge . '</span>' : '';

        $review_star = '<li class="price">';
        for ($i=0; $i < round($item->rating_avg_rating); $i++) { 
            $review_star .= '<i class="las la-star icon"></i>';
        }
        $review_star .= '</li>';

        return <<<HTML
            <div class="single-best-sele-item">
                <div class="product-img-box">
                {$campaign_percentage_markup}
                {$badge_markup}
                    <a href="{$route}">
                        {$image_markup}
                    </a>
                </div>
                <div class="product-details-wrap">
                    <h3 class="product-title"><a href="{$route}">{$title}</a></h3>
                    <div class="product-price-details">
                        <ul class="list">
                            <li class="price">{$sale_price}</li>
                            <li class="price"><del>{$price}</del></li>
                            {$review_star}
                        </ul>
                        {$hover_content}
                    </div>
                </div>
            </div>
HTML;
    }

    public function format_section_title($title)
    {
        return str_replace(['[lgt]', '[/lgt]'], ['<span class="ex">','</span>'], $title);
    }
}
