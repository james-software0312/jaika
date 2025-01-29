<?php


namespace App\PageBuilder\Addons\Product;

use App\Campaign\CampaignProduct;
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

class ProductGridStyleOne extends PageBuilderBase
{
    /**
     * @inheritDoc
     */
    public function addon_title()
    {
        return __('Product Grid: 01');
    }

    /**
     * @inheritDoc
     */
    public function preview_image()
    {
        return 'product/grid-01.png';
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
            'info' => __('For lighter text embrace with <b>[lgt]</b> and <b>[/lgt]</b>'),
        ]);
        $output .= Text::get([
            'name' => 'section_subtitle',
            'label' => __('Section Subtitle'),
            'value' => $widget_saved_values['section_subtitle'] ?? null,
        ]);

        // left
        $output .= Text::get([
            'name' => 'left_side_subtitle',
            'label' => __('Left Image Subtitle'),
            'value' => $widget_saved_values['left_side_subtitle'] ?? null,
        ]);
        $output .= Text::get([
            'name' => 'left_side_title',
            'label' => __('Left Image Title'),
            'value' => $widget_saved_values['left_side_title'] ?? null,
        ]);
        $output .= Text::get([
            'name' => 'left_side_btn_text',
            'label' => __('Left Image Button Text'),
            'value' => $widget_saved_values['left_side_btn_text'] ?? null,
        ]);
        $output .= Text::get([
            'name' => 'left_side_btn_url',
            'label' => __('Left Image Button URL'),
            'value' => $widget_saved_values['left_side_btn_url'] ?? null,
        ]);
        $output .= Image::get([
            'name' => 'left_image',
            'label' => __('Left Image'),
            'value' => $widget_saved_values['left_image'] ?? null,
            'dimensions' => '	350x807'
        ]);
        $output .= Text::get([
            'name' => 'left_image_url',
            'label' => __('Left Image URL'),
            'value' => $widget_saved_values['left_image_url'] ?? null,
        ]);

        // Right
        $products = Product::where(['status' => 'publish'])->get()->pluck('title', 'id')->toArray();
        $output .= NiceSelect::get([
            'name' => 'products',
            'multiple' => true,
            'label' => __('Product'),
            'placeholder' =>  __('Select Product'),
            'options' => $products,
            'value' => $widget_saved_values['products'] ?? null,
            'info' => __('you can select products that you want to show, if you want to show all the products leave it empty')
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
        $section_subtitle = SanitizeInput::esc_html($settings['section_subtitle']);

        $left_side_subtitle = SanitizeInput::esc_html($settings['left_side_subtitle']);
        $left_side_title = SanitizeInput::esc_html($settings['left_side_title']);
        $left_side_btn_text = SanitizeInput::esc_html($settings['left_side_btn_text']);
        $left_side_btn_url = SanitizeInput::esc_html($settings['left_side_btn_url']);
        $left_side_btn_url = url($left_side_btn_url);
        $left_image = SanitizeInput::esc_html($settings['left_image']);
        $left_image_url = SanitizeInput::esc_html($settings['left_image_url']);
        $left_image_url = url($left_image_url);

        $order_by = SanitizeInput::esc_html($settings['order_by']);
        $order = SanitizeInput::esc_html($settings['order']);
        $items = SanitizeInput::esc_html($settings['items']);
        $padding_top = SanitizeInput::esc_html($settings['padding_top']);
        $padding_bottom = SanitizeInput::esc_html($settings['padding_bottom']);
        $product_items = $settings['products'] ?? [];
        $product_categories = $settings['product_categories'] ?? [];

        $products = Product::query()->with('inventory', 'campaignProduct', 'campaignSoldProduct')->where(['status' => 'publish']);

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
            $all_products = $products->take($items)->get();
        } else {
            $all_products =  $products->get();
        }

        $all_products_markup = '';
        foreach ($all_products as $item) {
            $all_products_markup .= $this->getGridItem($item);
        }

        $section_title_markup = '';
        $section_subtitle_markup = '';

        if (!empty($section_subtitle)) {
            $section_subtitle_markup = '<p class="sub-title">' . $section_subtitle . '</p>';
        }

        if (!empty($section_title)) {
            $section_title = $this->format_section_title($section_title);
            $section_title_markup .= <<<HTML
                <div class="col-md-7 col-lg-7">
                    <div class="section-title-wrapper">
                        <h2 class="main-title">{$section_title}</h2>
                        {$section_subtitle_markup}
                    </div>
                </div>
HTML;
        }

        $left_image_markup = '';
        if (!empty($left_image)) {
            $left_image = render_image_markup_by_attachment_id($left_image);
            $left_image_url = $left_image_url ? $left_image_url : '#';
            $left_image_markup .= '<a href="'.url($left_image_url).'">'.$left_image.'</a>';
        }

        return <<<HTML
        <div class="trendy-item-wrapper" data-padding-top="{$padding_top}" data-padding-bottom="{$padding_bottom}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="add-img-box">
                            {$left_image_markup}
                            <div class="content">
                                <p class="catg">{$left_side_subtitle}</p>
                                <h3 class="offer-title">{$left_side_title}</h3>
                                <div class="btn-wrapper">
                                    <a href="{$left_side_btn_url}" class="borderless-btn">{$left_side_btn_text}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row justify-content-center">
                            {$section_title_markup}
                        </div>
                        <div class="row product-row">
                            {$all_products_markup}
                        </div>
                    </div>
                </div>
            </div>
        </div>
HTML;
    }

    public function getGridItem($item)
    {
        $route = route('frontend.products.single', $item->slug);
        $image_markup = render_image_markup_by_attachment_id($item->image, '', 'p_grid');
        $title = $item->title;
        $badge_markup = !empty($item->badge) ? '<span class="sale">' . $item->badge . '</span>' : '';

        $attributes = $item->attributes ? json_decode($item->attributes, true) : null;
        $add_to_cart_markup = "";
        if ($attributes && count($attributes)) {
            $route = route('frontend.products.single', $item->slug);
            $add_to_cart_markup = '<li><a href="'.$route.'">' . __('View Options') . ' <i class="las la-eye"></i></a></li>';
        } else {
            $add_to_cart_markup = '<li><a href="#" data-attributes="'.$item->attributes.'" data-id="'.$item->id.'" class="add_to_cart_ajax">' . __('Add to Cart') . ' <i class="las la-shopping-cart icon"></i></a></li>';
        }

        $add_to_wishlist_markup = "";
        if ($attributes && count($attributes)) {
            $route = route('frontend.products.single', $item->slug);
            $add_to_wishlist_markup = '<li><a href="'.$route.'">' . __('Add to Wish List') . ' <i class="lar la-heart icon"></i></a></li>';
        } else {
            $add_to_wishlist_markup = '<li><a href="#" data-attributes="'.$item->attributes.'" data-id="'.$item->id.'" class="add_to_wishlist_ajax">' . __('Add to Wish List') . ' <i class="lar la-heart icon"></i></a></li>';
        }

        $quick_view_data = getQuickViewDataMarkup($item);
        $quick_view_markup = '<li><a href="#" id="quickview" class="quick-view" '.$quick_view_data.'}>'.__('Quickview').' <i class="lar la-eye icon"></i></a></li>';

        $add_to_compare = '<li><a href="#" data-id="'.$item->id.'" class="add_to_compare_ajax">'.__('Compare').' <i class="las la-retweet icon"></i></a></li>';

        // campaign data check
        $campaign_product = !is_null($item->campaignProduct) ? $item->campaignProduct : getCampaignProductById($item->id);
        $sale_price = $campaign_product ? optional($campaign_product)->campaign_price : $item->sale_price;
        $deleted_price = !is_null($campaign_product) ? $item->sale_price : $item->price;
        $campaign_percentage = !is_null($campaign_product) ? getPercentage($item->sale_price, $sale_price) : false;

        $price_markup = '<ul class="list"><li class="price">' . float_amount_with_currency_symbol($sale_price) . '</li>';
        if ($deleted_price && $deleted_price > 0) {
            $price_markup .= '<li class="price"><del>' . float_amount_with_currency_symbol($deleted_price) . '</del></li>';
        }
        $price_markup .= '</ul>';

        $campaign_percentage_markup = '';
        if($campaign_percentage) {
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

        return <<<HTML
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="single-product-item">
                    <div class="product-img-box">
                        <a href="{$route}">
                            {$image_markup}
                        </a>
                        {$hover_content}
                    </div>
                    <div class="product-details-wrap">
                        <h3 class="product-title"><a href="{$route}">{$title}</a></h3>
                        <div class="product-price-details">
                            {$price_markup}
                        </div>
                    </div>
                    {$campaign_percentage_markup}
                    {$badge_markup}
                </div>
            </div>
HTML;
    }

    public function format_section_title($title)
    {
        return str_replace(['[lgt]', '[/lgt]'], ['<span class="ex">','</span>'], $title);
    }
}
