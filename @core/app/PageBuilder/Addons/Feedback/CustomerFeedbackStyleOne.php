<?php


namespace App\PageBuilder\Addons\Feedback;

use App\Helpers\SanitizeInput;
use App\PageBuilder\Fields\IconPicker;
use App\PageBuilder\Fields\Image;
use App\PageBuilder\Fields\Repeater;
use App\PageBuilder\Fields\Select;
use App\PageBuilder\Fields\Slider;
use App\PageBuilder\Fields\Summernote;
use App\PageBuilder\Fields\Text;
use App\PageBuilder\Fields\Textarea;
use App\PageBuilder\Helpers\RepeaterField;
use App\PageBuilder\Helpers\Traits\RepeaterHelper;
use App\PageBuilder\PageBuilderBase;

class CustomerFeedbackStyleOne extends PageBuilderBase
{
    use RepeaterHelper;
    /**
     * preview_image
     * this method must have to implement by all widget to show a preview image at admin panel so that user know about the design which he want to use
     * @since 1.0.0
     * */
    public function preview_image()
    {
        return 'feedback-section/01.png';
    }

    /**
     * widget_title
     * this method must have to implement by all widget to register widget title
     * @since 1.0.0
     * */
    public function addon_title()
    {
        return __('Feedback Area: 01');
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

        $output .= Text::get([
            'name' => 'title',
            'label' => __('Title'),
            'value' => $widget_saved_values['title'] ?? null,
            'info' => __('For lighter text embrace with <b>[lgt]</b> and <b>[/lgt]</b>'),
        ]);
        $output .= Summernote::get([
            'name' => 'description',
            'label' => __('Description'),
            'value' => $widget_saved_values['description'] ?? null,
        ]);

        $output .= Repeater::get([
            'multi_lang' => false,
            'settings' => $widget_saved_values,
            'id' => 'header_style_one',
            'fields' => [
                [
                    'type' => RepeaterField::IMAGE,
                    'name' => 'user_image',
                    'label' => __('User Image'),
                    'dimensions' => '255×132'
                ],
                [
                    'type' => RepeaterField::TEXTAREA,
                    'name' => 'testimonial_text',
                    'label' => __('Testimonial Text'),
                ],
                [
                    'type' => RepeaterField::TEXT,
                    'name' => 'user_name',
                    'label' => __('User Name'),
                ],
            ]
        ]);

        $output .= Slider::get([
            'name' => 'padding_top',
            'label' => __('Padding Top'),
            'value' => $widget_saved_values['padding_top'] ?? 60,
            'max' => 500,
        ]);
        $output .= Slider::get([
            'name' => 'padding_bottom',
            'label' => __('Padding Bottom'),
            'value' => $widget_saved_values['padding_bottom'] ?? 60,
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
        $padding_top = SanitizeInput::esc_html($settings['padding_top']);
        $padding_bottom = SanitizeInput::esc_html($settings['padding_bottom']);
        $title = SanitizeInput::esc_html($settings['title']);
        $title = $this->format_section_title($title);
        $description = SanitizeInput::kses_basic($settings['description']);

        $testimonial_markup = "";

        $this->args['settings'] = RepeaterField::remove_default_fields($settings);
        foreach ($this->args['settings'] as $key => $setting){
            if (is_array($setting)){
                $this->args['repeater'] = $setting;
                $array_lang_item = $setting[array_key_last($setting)];
                if (!empty($array_lang_item) && is_array($array_lang_item) && count($array_lang_item) > 0) {
                    foreach ($array_lang_item as $index => $value) {
                        $testimonial_markup .= $this->render_slider_markup($index); // for multiple array index
                    }
                } else {
                    $testimonial_markup .= $this->render_slider_markup(); // for only one index of array
                }
            }
        }

        return <<<HTML
<div class="customer-feedback-area-wrapper" data-padding-top="{$padding_top}" data-padding-bottom="{$padding_bottom}" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title-wrapper">
                    <h2 class="main-title">{$title}</h2>
                    <p class="sub-title">{$description}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row feedback-slider-main">
            {$testimonial_markup}
        </div>
    </div>
</div>
HTML;

    }

    private function render_slider_markup(int $index = null): string
    {
        $settings = $this->get_settings();

        $user_image = render_image_markup_by_attachment_id($this->get_repeater_field_value('user_image', $index));
        $testimonial_text = $this->get_repeater_field_value('testimonial_text', $index);
        $user_name = $this->get_repeater_field_value('user_name', $index);

        return <<<HTML
<div class="col-lg-12">
    <div class="single-cust-feedback-item">
        <div class="content">
            <span class="quote">
                <i class="las la-quote-left icon"></i>
            </span>
            <p class="feedback-info">{$testimonial_text}</p>
            <span class="customer-name">{$user_name}</span>
        </div>
        <div class="img-box">
            {$user_image}
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