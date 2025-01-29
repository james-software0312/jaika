<?php


namespace App\PageBuilder\Addons\Product;

use App\Campaign\Campaign;
use App\Campaign\CampaignProduct;
use App\Helpers\SanitizeInput;
use App\PageBuilder\Fields\ColorPicker;
use App\PageBuilder\Fields\Date;
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


class ProductSaleStyleTwo extends PageBuilderBase
{
    /**
     * @inheritDoc
     */
    public function addon_title()
    {
        return __('Product Sale: 02');
    }

    /**
     * @inheritDoc
     */
    public function preview_image()
    {
       return 'product/sale-02.png';
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

        $campaigns = CampaignProduct::select("products.title","products.id")
            ->join("products","products.id","campaign_products.product_id")
            ->join("campaigns","campaigns.id","campaign_products.campaign_id")
            ->where('campaigns.status', 'publish')->get()->pluck('title', 'id');

        $output .= Text::get([
            'name' => 'section_title',
            'label' => __('Section Title'),
            'value' => $widget_saved_values['section_title'] ?? null,
            'info' => __('For orange color text embrace with <b>[clr]</b> and <b>[/clr]</b>'),
        ]);

        $output .= Date::get([
            'name' => 'countdown_time',
            'label' => __('Ending Time'),
            'value' => $widget_saved_values['countdown_time'] ?? null,
        ]);

        $output .= NiceSelect::get([
            'name' => 'product',
            'label' => __('Product'),
            'placeholder' =>  __('Select Product'),
            'options' => $campaigns,
            'value' => $widget_saved_values['product'] ?? null,
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
        $ending_date = SanitizeInput::esc_html($settings['countdown_time']);
        $product = !empty($settings['product']) ? $settings['product'] : [] ;
        $padding_top = SanitizeInput::esc_html($settings['padding_top']);
        $padding_bottom = SanitizeInput::esc_html($settings['padding_bottom']);

        $cmProduct = CampaignProduct::where('product_id', $product)
            ->with('product', 'product.campaignProduct', 'product.inventory')
            ->with(['campaign' => function ($query){
                $query->select("title","id");
            }])
            ->with(['product' => function ($query) {
                $query->withAvg('rating', 'rating');
            }])->whereHas('product', fn($query) => $query->where('deleted_at', null))->first();

        $title = $this->format_section_title($section_title);

        return $this->renderBlade("product.product_sale_style_two",compact(["cmProduct","ending_date","title","padding_top","padding_bottom"]));
    }

    public function format_section_title($title)
    {
        return str_replace(['[clr]', '[/clr]'], ['<span class="color">','</span>'], $title);
    }
}
