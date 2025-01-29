<?php


namespace App\PageBuilder\Addons\Product;

use App\Campaign\Campaign;
use App\Campaign\CampaignProduct;
use App\Helpers\SanitizeInput;
use App\PageBuilder\Fields\IconPicker;
use App\PageBuilder\Fields\Image;
use App\PageBuilder\Fields\NiceSelect;
use App\PageBuilder\Fields\Number;
use App\PageBuilder\Fields\Repeater;
use App\PageBuilder\Fields\Select;
use App\PageBuilder\Fields\Slider;
use App\PageBuilder\Fields\Text;
use App\PageBuilder\Fields\Textarea;
use App\PageBuilder\Helpers\RepeaterField;
use App\PageBuilder\PageBuilderBase;
use App\Product\Product;
use App\Product\ProductCategory;


class ProductSaleStyleOne extends PageBuilderBase
{
    /**
     * @inheritDoc
     */
    public function addon_title()
    {
        return __('Product Sale: 01');
    }

    /**
     * @inheritDoc
     */
    public function preview_image()
    {
       return 'product/sale-01.png';
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

        $campaigns = Campaign::where('status', 'publish')->get()->pluck('title', 'id')->toArray();

        $output .= Text::get([
            'name' => 'section_title',
            'label' => __('Section Title'),
            'value' => $widget_saved_values['section_title'] ?? null,
            'info' => __('For lighter text embrace with <b>[lgt]</b> and <b>[/lgt]</b>'),
        ]);

        $output .= NiceSelect::get([
            'name' => 'campaign',
            'label' => __('Campaign'),
            'placeholder' =>  __('Select Campaign'),
            'options' => $campaigns,
            'value' => $widget_saved_values['campaign'] ?? null,
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
        $campaign = !empty($settings['campaign']) ? $settings['campaign'] : [] ;
        $padding_top = SanitizeInput::esc_html($settings['padding_top']);
        $padding_bottom = SanitizeInput::esc_html($settings['padding_bottom']);

        $campaign_products = CampaignProduct::where('campaign_id', $campaign)->with('product', 'product.campaignProduct', 'product.inventory')->with(['product' => function ($query) {
            $query->withAvg('rating', 'rating');
        }])->whereHas('product', fn($query) => $query->where('deleted_at', null))->get();

        $see_all_text = __('see all');
        $formatted_title = $this->format_section_title($section_title);

        $campaign_product_markup = '';

        foreach ($campaign_products as $campaign_product) {
            $route = route('frontend.products.single', ['slug' => optional($campaign_product->product)->slug ?? '']);
            $image_background_markup = render_background_image_markup_by_attachment_id(optional($campaign_product->product)->image, 'grid') ;
            $image_url = "";
            $image_id = optional($campaign_product->product)->image;
            if ($image_id) {
                $image_details = get_attachment_image_by_id($image_id);
                if (!empty($image_details)) {
                    $image_url = $image_details['img_url'];
                }
            }
            $title = optional($campaign_product->product)->title ?? "";
            $summary = optional($campaign_product->product)->summary ?? "";
            $price = optional($campaign_product->product)->sale_price ? optional($campaign_product->product)->sale_price : ''; // i have edit it price to sale_price column
            $sale_price = float_amount_with_currency_symbol($campaign_product->campaign_price) ;
            $sale_percentage = (int) $this->salePercentage($campaign_product->product->sale_price, $campaign_product->campaign_price);
            $avg_rating = optional($campaign_product->product)->rating_avg_rating ?? "";
            $product_id = optional($campaign_product->product)->id;
            $product_price = optional($campaign_product->product)->sale_price;

            $campaign_percentage = getCampaignPricePercentage($campaign, $product_id, $product_price);
            $sale_percentage_markup = $sale_percentage != 100 ? '<span class="sale">'.$campaign_percentage.'%</span>' : '';

            $add_to_cart_markup = "";
            if ($product_id) {
                // cart
                $item = $campaign_product->product;
                $attributes = $item->attributes ? json_decode($item->attributes, true) : null;

                if (is_array($attributes) && count($attributes)) {
                    $item_route = route('frontend.products.single', $item->slug);
                    $add_to_cart_markup = '<a href="'.$item_route.'" class="add-to-cart">'.__('View Options').'</a>';
                } else {
                    $add_to_cart_markup = '<a href="#" data-attributes="'.$item->attributes.'" data-id="'.$item->id.'" class="add-to-cart add_to_cart_ajax">'.__('Add to Cart').'</a>';
                }

                // quick view
                $quick_view_data = getQuickViewDataMarkup($item);
            }

            $end_date = $campaign_product->end_date ?? "";
            
            $regular_price_markup = !empty($price) && $price > 0 ? '<li class="price"> <del>'.float_amount_with_currency_symbol($price).'</del></li>' : '';

            $campaign_product_markup .= <<<HTML
<div class="col-12 col-sm-8 col-md-6 col-lg-4">
    <div class="single-flash-item single-product-item">
        <div class="sale-product-img-box" {$image_background_markup}>
            <a href="{$route}">
                <!--  -->
            </a>
        </div>
        <div class="flash-countdown-1 flash-countdown" data-date="{$end_date}">
            <div class="single-box">
                <span class="counter-days item"></span>
                <span class="label item">Days</span>
            </div>
            <div class="single-box">
                <span class="counter-hours item"></span>
                <span class="label item">Hour</span>
            </div>
            <div class="single-box">
                <span class="counter-minutes item"></span>
                <span class="label item">Min</span>
            </div>
            <div class="single-box">
                <span class="counter-seconds item"></span>
                <span class="label item">Sec</span>
            </div>
        </div>
        <div class="product-details-wrap">
            <h3 class="product-title">
                <a href="{$route}">{$title}</a>
            </h3>
            <div class="product-price-details">
                <ul class="list">
                    <li class="price">{$sale_price}</li>
                    
                   {$regular_price_markup}
                    
                </ul>
                <div class="hover">
                    <ul class="list">
                        <li class="price">
                            {$add_to_cart_markup}
                        </li>
                        <li class="price">
                            <a href="#" id="quickview" class="quick-view" {$quick_view_data}>Quick View</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {$sale_percentage_markup}
    </div>
</div>
HTML;
        }
        $campaign_page_url = route('frontend.products.campaign', $campaign);
        return <<<HTML
<div class="flash-sale-area-wrapper" data-padding-top="{$padding_top}" data-padding-bottom="{$padding_bottom}">
    <div class="container">
        <div class="row position-relative">
            <div class="col-lg-7">
                <div class="section-title-wrapper">
                    <h2 class="main-title">{$formatted_title}</h2>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="btn-wrapper see-all">
                    <a href="{$campaign_page_url}" class="see-all-btn">{$see_all_text} <i class="las la-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            {$campaign_product_markup}
        </div>
    </div>
</div>
HTML;

    }

    public function salePercentage($price, $sale_price)
    {
        if ($price && $sale_price) {
            return $sale_price / $price * 100;
        }
    }

    public function format_section_title($title)
    {
        return str_replace(['[lgt]', '[/lgt]'], ['<span class="ex">','</span>'], $title);
    }
}
