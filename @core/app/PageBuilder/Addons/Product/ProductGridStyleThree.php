<?php

namespace App\PageBuilder\Addons\Product;

use App\Helpers\SanitizeInput;
use App\PageBuilder\Fields\Image;
use App\PageBuilder\Fields\NiceSelect;
use App\PageBuilder\Fields\Number;
use App\PageBuilder\Fields\Select;
use App\PageBuilder\Fields\Slider;
use App\PageBuilder\Fields\Text;
use App\PageBuilder\PageBuilderBase;
use App\PageBuilder\Services\ProductRenderServices;
use App\Product\Product;
use App\Product\ProductCategory;

class ProductGridStyleThree extends PageBuilderBase
{
    /**
     * @inheritDoc
     */
    public function addon_title()
    {
        return __('Product Grid: 03');
    }

    /**
     * @inheritDoc
     */
    public function preview_image()
    {
        return 'product/grid-03.png';
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
            'name' => 'image_title',
            'label' => __('Image Title'),
            'value' => $widget_saved_values['image_title'] ?? null,
        ]);

        $output .= Text::get([
            'name' => 'btn_text',
            'label' => __('Button Text'),
            'value' => $widget_saved_values['btn_text'] ?? null,
        ]);

        $output .= Text::get([
            'name' => 'btn_url',
            'label' => __('Button URL'),
            'value' => $widget_saved_values['btn_url'] ?? null,
        ]);

        $output .= Image::get([
            'name' => 'banner_image',
            'label' => __('Banner Image'),
            'value' => $widget_saved_values['banner_image'] ?? null,
            'dimensions' => '450 × 1058'
        ]);

        $output .= Select::get([
            'name' => 'image_position',
            'label' => __('Image Position'),
            'options' => [
                'left' => __('Left'),
                'right' => __('Right'),
            ],
            'value' => $widget_saved_values['image_position'] ?? null,
            'info' => __('set order by')
        ]);

//        echo ProductRenderServices::admin($widget_saved_values);

        $output .= ProductRenderServices::admin($widget_saved_values);

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

        $image_title = SanitizeInput::esc_html($settings['image_title'] ?? '');
        $btn_text = SanitizeInput::esc_html($settings['btn_text'] ?? '');
        $btn_url = SanitizeInput::esc_html($settings['btn_url'] ?? '');
        $banner_image = SanitizeInput::esc_html($settings['banner_image'] ?? '');
        $image_position = SanitizeInput::esc_html($settings['image_position'] ?? '');

        $padding_top = SanitizeInput::esc_html($settings['padding_top'] ?? '');
        $padding_bottom = SanitizeInput::esc_html($settings['padding_bottom'] ?? '');

        $all_products = ProductRenderServices::frontend($settings);

        return $this->renderBlade('product.product_grid_three', [
            'image_title' => $image_title,
            'btn_text' => $btn_text,
            'btn_url' => $btn_url,
            'banner_image' => $banner_image,
            'image_position' => $image_position,
            'padding_top' => $padding_top,
            'padding_bottom' => $padding_bottom,
            'all_products' => $all_products,
        ]);
    }

    public function format_section_title($title)
    {
        return str_replace(['[lgt]', '[/lgt]'], ['<span class="ex">','</span>'], $title);
    }
}