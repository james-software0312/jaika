<?php


namespace App\PageBuilder\Addons\Product;
use App\Helpers\LanguageHelper;
use App\Helpers\SanitizeInput;
use App\PageBuilder\Fields\IconPicker;
use App\PageBuilder\Fields\Image;
use App\PageBuilder\Fields\Number;
use App\PageBuilder\Fields\Select;
use App\PageBuilder\Fields\Slider;
use App\PageBuilder\Fields\Text;
use App\PageBuilder\Fields\Textarea;
use App\PageBuilder\PageBuilderBase;

class BannerStyleOne extends PageBuilderBase
{
    /**
     * @inheritDoc
     */
    public function addon_title()
    {
        return __('Banner: 01');
    }

    /**
     * @inheritDoc
     */
    public function preview_image()
    {
       return 'product/banner-01.png';
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
        $output .= '<div class="all-field-wrap">';
        $output .= Text::get([
            'name' => 'left_top_title',
            'label' => __('Left Top Title'),
            'value' => $widget_saved_values['left_top_title'] ?? null,
        ]);
        $output .= Text::get([
            'name' => 'left_main_title',
            'label' => __('Left Main Title'),
            'value' => $widget_saved_values['left_main_title'] ?? null,
        ]);
        $output .= Image::get([
            'name' => 'left_image',
            'label' => __('Left Banner Image'),
            'value' => $widget_saved_values['left_image'] ?? null,
        ]);
        $output .= Text::get([
            'name' => 'left_image_url',
            'label' => __('Left Banner Image Url'),
            'value' => $widget_saved_values['left_image_url'] ?? null,
        ]);
        $output .= Text::get([
            'name' => 'left_button_text',
            'label' => __('Left Button Text'),
            'value' => $widget_saved_values['left_button_text'] ?? null,
        ]);
        $output .= Text::get([
            'name' => 'left_button_url',
            'label' => __('Left Button Url'),
            'value' => $widget_saved_values['left_button_url'] ?? null,
        ]);
        $output .= '</div>';

        // right
        $output .= '<div class="all-field-wrap">';
        $output .= Text::get([
            'name' => 'right_top_title',
            'label' => __('Right Top Title'),
            'value' => $widget_saved_values['right_top_title'] ?? null,
        ]);
        $output .= Text::get([
            'name' => 'right_main_title',
            'label' => __('Right Main Title'),
            'value' => $widget_saved_values['right_main_title'] ?? null,
        ]);
        $output .= Image::get([
            'name' => 'right_image',
            'label' => __('Right Banner'),
            'value' => $widget_saved_values['right_image'] ?? null,
        ]);
        $output .= Text::get([
            'name' => 'right_image_url',
            'label' => __('Right Banner Url'),
            'value' => $widget_saved_values['right_image_url'] ?? null,
        ]);
        $output .= Text::get([
            'name' => 'right_button_text',
            'label' => __('Right Button Text'),
            'value' => $widget_saved_values['right_button_text'] ?? null,
        ]);
        $output .= Text::get([
            'name' => 'right_button_url',
            'label' => __('Right Button Url'),
            'value' => $widget_saved_values['right_button_url'] ?? null,
        ]);
        $output .= '</div>';

        $output .= Slider::get([
            'name' => 'padding_top',
            'label' => __('Padding Top'),
            'value' => $widget_saved_values['padding_top'] ?? 60,
            'max' => 200,
        ]);
        $output .= Slider::get([
            'name' => 'padding_bottom',
            'label' => __('Padding Bottom'),
            'value' => $widget_saved_values['padding_bottom'] ?? 60,
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
        $left_top_title = SanitizeInput::esc_html($settings['left_top_title']);
        $left_main_title = SanitizeInput::esc_html($settings['left_main_title']);
        $left_image_id = SanitizeInput::esc_html($settings['left_image']);
        $left_image_url = SanitizeInput::esc_html($settings['left_image_url']);
        $left_image_url = url($left_image_url);
        $left_image_markup = render_image_markup_by_attachment_id($left_image_id, null, 'full');
        $left_button_text = SanitizeInput::esc_html($settings['left_button_text']);
        $left_button_url = SanitizeInput::esc_html($settings['left_button_url']);
        $left_button_url = url($left_button_url);

        // right
        $right_top_title = SanitizeInput::esc_html($settings['right_top_title']);
        $right_main_title = SanitizeInput::esc_html($settings['right_main_title']);
        $right_image_id = SanitizeInput::esc_html($settings['right_image']);
        $right_image_url = SanitizeInput::esc_html($settings['right_image_url']);
        $right_image_url = url($right_image_url);
        $right_image_markup = render_image_markup_by_attachment_id($right_image_id,null,'full');
        $right_button_text = SanitizeInput::esc_html($settings['right_button_text']);
        $right_button_url = SanitizeInput::esc_html($settings['right_button_url']);
        $right_button_url = url($right_button_url);

        return <<<HTML
<div class="new-collection-area-wrapper" data-padding-top="{$padding_top}" data-padding-bottom="{$padding_bottom}">
    <div class="container">
        <div class="row new-collection-highlight">
            <div class="col-md-6 col-lg-6">
                <div class="single-item left">
                    <a href="{$left_image_url}">
                        {$left_image_markup}
                    </a>
                    <div class="info-box">
                        <p class="catg">{$left_top_title}</p>
                        <h4 class="offer-title">{$left_main_title}</h4>
                        <div class="btn-wrapper">
                            <a href="{$left_button_url}" class="borderless-btn">{$left_button_text}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="single-item right">
                    <a href="{$right_image_url}">
                        {$right_image_markup}
                    </a>
                    <div class="info-box">
                        <p class="catg">{$right_top_title}</p>
                        <h4 class="offer-title">{$right_main_title}</h4>
                        <div class="btn-wrapper">
                            <a href="{$right_button_url}" class="borderless-btn">{$right_button_text}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
HTML;

    }
}
