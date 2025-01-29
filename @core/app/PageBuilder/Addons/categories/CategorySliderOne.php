<?php

namespace App\PageBuilder\Addons\categories;

use App\Helpers\SanitizeInput;
use App\PageBuilder\Fields\NiceSelect;
use App\PageBuilder\Fields\Repeater;
use App\PageBuilder\Fields\Slider;
use App\PageBuilder\Helpers\RepeaterField;
use App\PageBuilder\Helpers\Traits\RepeaterHelper;
use App\PageBuilder\PageBuilderBase;
use App\Product\ProductCategory;

class CategorySliderOne extends PageBuilderBase
{
    use RepeaterHelper;
    /**
     * @inheritDoc
     */
    public function preview_image()
    {
        return 'category-slider/01.png';
    }

    /**
     * @inheritDoc
     */
    public function addon_title()
    {
        return __('Category Slider: 01');
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

        $categories = ProductCategory::where('status', 'publish')->get()->pluck('title', 'id')->toArray();
        $output .= NiceSelect::get([
            'name' => 'product_categories',
            'multiple' => true,
            'label' => __('Category'),
            'placeholder' => __('Select Category'),
            'options' => $categories,
            'value' => $widget_saved_values['product_categories'] ?? null,
            'info' => __('You can select category that you want to show, if you want to show all the products leave it empty')
        ]);

        $output .= Slider::get([
            'name' => 'padding_top',
            'label' => __('Padding Top'),
            'value' => $widget_saved_values['padding_top'] ?? 50,
            'max' => 200,
        ]);

        $output .= Slider::get([
            'name' => 'padding_bottom',
            'label' => __('Padding Bottom'),
            'value' => $widget_saved_values['padding_bottom'] ?? 50,
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
        $padding_top = SanitizeInput::esc_html($settings['padding_top']);
        $padding_bottom = SanitizeInput::esc_html($settings['padding_bottom']);

        $categories = $this->prepareForFetchingData($settings["product_categories"] ?? []); // this method will run query by using model

        return $this->renderBlade("category.category_slider_one", compact(["padding_top", "padding_bottom", "categories"]));
    }

    private function prepareForFetchingData($categories){
        $data = null;

        if(!empty($categories)){
            $data = ProductCategory::select("title","id","image")->withCount("product")->where('status', 'publish')->whereIn("id",$categories)->get();
        }else{
            $data = ProductCategory::select("title","id","image")->withCount("product")->where('status', 'publish')->get();
        }

        return $data;
    }
}