<?php

namespace App\PageBuilder\Addons\Product;

use App\Helpers\SanitizeInput;
use App\PageBuilder\Fields\Image;
use App\PageBuilder\Fields\Slider;
use App\PageBuilder\Fields\Text;
use App\PageBuilder\PageBuilderBase;

class BannerStyleSix extends PageBuilderBase
{
    /**
     * @inheritDoc
     */
    public function preview_image()
    {
        return 'product/banner-06.png';
    }

    /**
     * @inheritDoc
     */
    public function addon_title()
    {
        return __('Banner: 06');
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

        // left
        $output .= Text::get([
            'name' => 'title',
            'label' => __('Title'),
            'value' => $widget_saved_values['title'] ?? null,
            'info' => "If you want to break the line than use this <b>[br/]</b> for produce line break"
        ]);
        $output .= Text::get([
            'name' => 'description',
            'label' => __('Description'),
            'value' => $widget_saved_values['description'] ?? null,
        ]);
        $output .= Image::get([
            'name' => 'banner_image',
            'label' => __('Banner Image'),
            'value' => $widget_saved_values['banner_image'] ?? null,
        ]);
        $output .= Image::get([
            'name' => 'banner_badge_image',
            'label' => __('Banner Badge Image'),
            'value' => $widget_saved_values['banner_badge_image'] ?? null,
        ]);
        $output .= Text::get([
            'name' => 'button_text',
            'label' => __('Button Text'),
            'value' => $widget_saved_values['button_text'] ?? null,
        ]);
        $output .= Text::get([
            'name' => 'button_url',
            'label' => __('Button Url'),
            'value' => $widget_saved_values['button_url'] ?? null,
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
        $padding_top = SanitizeInput::esc_html($settings['padding_top']);
        $padding_bottom = SanitizeInput::esc_html($settings['padding_bottom']);

        // left
        $title = SanitizeInput::esc_html($settings['title']);
        $description = SanitizeInput::esc_html($settings['description']);
        $image = SanitizeInput::esc_html($settings['banner_image']);
        $badge = SanitizeInput::esc_html($settings['banner_badge_image']);
        $url = SanitizeInput::esc_html($settings['button_url']);
        $btn_text = SanitizeInput::esc_html($settings['button_text']);

        // right
        return $this->renderBlade("product.banner_style_six",compact("title","description","image","badge","url","btn_text","padding_bottom","padding_top"));
    }
}