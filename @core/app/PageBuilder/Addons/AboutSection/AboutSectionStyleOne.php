<?php


namespace App\PageBuilder\Addons\AboutSection;

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

class AboutSectionStyleOne extends PageBuilderBase
{
    use RepeaterHelper;
    /**
     * preview_image
     * this method must have to implement by all widget to show a preview image at admin panel so that user know about the design which he want to use
     * @since 1.0.0
     * */
    public function preview_image()
    {
        return 'about-section/01.png';
    }

    /**
     * widget_title
     * this method must have to implement by all widget to register widget title
     * @since 1.0.0
     * */
    public function addon_title()
    {
        return __('About Area: 01');
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
            'name' => 'subtitle',
            'label' => __('Subtitle'),
            'value' => $widget_saved_values['subtitle'] ?? null,
        ]);
        $output .= Text::get([
            'name' => 'title',
            'label' => __('Title'),
            'value' => $widget_saved_values['title'] ?? null,
        ]);
        $output .= Text::get([
            'name' => 'button_text',
            'label' => __('Button Text'),
            'value' => $widget_saved_values['button_text'] ?? null,
        ]);
        $output .= Text::get([
            'name' => 'button_url',
            'label' => __('Button URL'),
            'value' => $widget_saved_values['button_url'] ?? null,
        ]);
        $output .= Summernote::get([
            'name' => 'description',
            'label' => __('Description'),
            'value' => $widget_saved_values['description'] ?? null,
        ]);
        $output .= Image::get([
            'name' => 'left_image',
            'label' => __('Left Image'),
            'value' => $widget_saved_values['left_image'] ?? null,
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
        $subtitle = SanitizeInput::esc_html($settings['subtitle']);
        $title = SanitizeInput::esc_html($settings['title']);
        $button_text = SanitizeInput::esc_html($settings['button_text']);
        $button_url = SanitizeInput::esc_url($settings['button_url']);
        $description = SanitizeInput::kses_basic($settings['description']);
        $left_image = render_image_markup_by_attachment_id($settings['left_image'], '', 'full');
        $button_markup = '';
        if (!empty($button_url) && !empty($button_text)){
            $button_markup .= ' <div class="btn-wrapper"><a href="'.url($button_url).'" class="borderless-btn">'.$button_text.'</a></div>';
        }

        return <<<HTML
<div class="about-us-stylish-blog-wrapper" data-padding-top="{$padding_top}" data-padding-bottom="{$padding_bottom}" >
    <div class="container about-us-stylish-blog-inner">
        <div class="row">
            <div class="col-md-8 col-lg-8">
                <div class="img-box">
                    {$left_image}
                </div>
            </div>
            <div class="col-md-7 col-lg-6 ml-auto left-content">
                <div class="content">
                    <span class="topic-title">{$subtitle}</span>
                    <h3 class="title">{$title}</h3>
                    <p class="info">
                        {$description}
                    </p>
                   {$button_markup}
                </div>
            </div>
        </div>
    </div>
</div>
HTML;

    }
}
