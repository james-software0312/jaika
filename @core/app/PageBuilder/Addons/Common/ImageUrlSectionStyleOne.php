<?php

namespace App\PageBuilder\Addons\Common;


use App\Faq;
use App\FormBuilder;
use App\Helpers\FormBuilderCustom;
use App\Helpers\SanitizeInput;
use App\PageBuilder\Fields\Image;
use App\PageBuilder\Fields\Select;
use App\PageBuilder\Fields\Slider;
use App\PageBuilder\Fields\Switcher;
use App\PageBuilder\Fields\Text;
use App\PageBuilder\Helpers\Traits\RepeaterHelper;
use App\PageBuilder\PageBuilderBase;

class ImageUrlSectionStyleOne extends PageBuilderBase
{
    use RepeaterHelper;

    /**
     * widget_title
     * this method must have to implement by all widget to register widget title
     * @since 1.0.0
     * */
    public function addon_title()
    {
        return __('Image-URL Section: 01');
    }

    /**
     * preview_image
     * this method must have to implement by all widget to show a preview image at admin panel so that user know about the design which he want to use
     * @since 1.0.0
     * */
    public function preview_image()
    {
        return 'common/image-01.png';
    }

    /**
     * admin_render
     * this method must have to implement by all widget to render admin panel widget content
     * @since 1.0.0
     * */
    public function admin_render()
    {
        $output = $this->admin_form_before();
        $output .= $this->admin_form_start();
        $output .= $this->default_fields();
        $widget_saved_values = $this->get_settings();

        $output .= Image::get([
            'name' => 'section_image',
            'label' => __('Image'),
            'value' => $widget_saved_values['section_image'] ?? null,
        ]);

        $output .= Text::get([
            'name' => 'section_image_url',
            'label' => __('URL'),
            'value' => $widget_saved_values['section_image_url'] ?? null,
        ]);

        $output .= Switcher::get([
            'name' => 'is_open_in_new_tab',
            'label' => __('Enable/Disable Open in New Tab'),
            'value' => $widget_saved_values['is_open_in_new_tab'] ?? null,
        ]);

        $output .= Slider::get([
            'name' => 'padding_top',
            'label' => __('Padding Top'),
            'value' => $widget_saved_values['padding_top'] ?? 120,
            'max' => 500,
        ]);
        $output .= Slider::get([
            'name' => 'padding_bottom',
            'label' => __('Padding Bottom'),
            'value' => $widget_saved_values['padding_bottom'] ?? 120,
            'max' => 500,
        ]);

        $output .= $this->admin_form_submit_button();
        $output .= $this->admin_form_end();
        $output .= $this->admin_form_after();

        return $output;
    }

    /**
     * frontend_render
     * this method must have to implement by all widget to render frontend widget content
     * @since 1.0.0
     * */
    public function frontend_render(): string
    {
        $settings = $this->get_settings();

        $padding_top = SanitizeInput::esc_html($settings['padding_top']) ?? '';
        $padding_bottom = SanitizeInput::esc_html($settings['padding_bottom']) ?? '';
        $section_image = SanitizeInput::esc_html($settings['section_image']) ?? '';
        $is_open_in_new_tab = isset($settings['is_open_in_new_tab']) ? SanitizeInput::esc_html($settings['is_open_in_new_tab']) : '';
        $section_image_url = SanitizeInput::esc_html($settings['section_image_url']) ?? '';
        $section_image_url = url($section_image_url);

        $is_open_in_new_tab_markup = '';

        if (!empty($is_open_in_new_tab)){
            $is_open_in_new_tab_markup = 'target="_blank"';
        }

        $image_markup = render_image_markup_by_attachment_id($section_image);

    return <<<HTML
<div class="image-area-wrapper" data-padding-top="{$padding_top}" data-padding-bottom="{$padding_bottom}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="//{$section_image_url}" {$is_open_in_new_tab_markup}>
                    {$image_markup}
                </a>
            </div>
        </div>
    </div>
</div>
HTML;
    }
}
