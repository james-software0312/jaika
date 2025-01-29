<?php


namespace App\PageBuilder\Addons\Product;
use App\Helpers\SanitizeInput;
use App\PageBuilder\Fields\Date;
use App\PageBuilder\Fields\Image;
use App\PageBuilder\Fields\Slider;
use App\PageBuilder\Fields\Text;
use App\PageBuilder\PageBuilderBase;
use Carbon\Carbon;

class BannerStyleFour extends PageBuilderBase
{
    /**
     * @inheritDoc
     */
    public function preview_image()
    {
       return 'product/banner-04.png';
    }

    /**
     * @inheritDoc
     */
    public function addon_title()
    {
        return __('Banner: 04');
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
            'name' => 'subtitle',
            'label' => __('Subtitle'),
            'value' => $widget_saved_values['subtitle'] ?? null,
        ]);
        $output .= Text::get([
            'name' => 'title',
            'label' => __('Title One'),
            'value' => $widget_saved_values['title'] ?? null,
        ]);
        $output .= Image::get([
            'name' => 'left_image',
            'label' => __('Left Banner Image'),
            'value' => $widget_saved_values['left_image'] ?? null,
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
        $output .= Date::get([
            'name' => 'countdown_time',
            'label' => __('Countdown Time'),
            'value' => $widget_saved_values['countdown_time'] ?? null,
        ]);

        // right
        $output .= Image::get([
            'name' => 'right_image',
            'label' => __('Right Banner Image'),
            'value' => $widget_saved_values['right_image'] ?? null,
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
        $subtitle = SanitizeInput::esc_html($settings['subtitle']);
        $left_image_id = SanitizeInput::esc_html($settings['left_image']);
        $countdown_time = SanitizeInput::esc_html($settings['countdown_time']);
        $countdown_time = Carbon::parse($countdown_time)->format('Y-m-d H:i:s');

        $left_image_markup = render_image_markup_by_attachment_id($left_image_id, null, 'full');
        $button_text = SanitizeInput::esc_html($settings['button_text']);
        $button_url = SanitizeInput::esc_html($settings['button_url']);
        $button_url = url($button_url);

        // right
        $right_image_id = SanitizeInput::esc_html($settings['right_image']);
        $right_image_markup = render_image_markup_by_attachment_id($right_image_id,null,'full');

        // time texts translatable
        $days_text = __('Days');
        $hour_text = __('Min');
        $min_text = __('Min');
        $sec_text = __('Sec');

        return <<<HTML
<div class="call-to-action-area-wrapper index-02" data-padding-top="{$padding_top}" data-padding-bottom="{$padding_bottom}">
    <div class="container custom-container-1618">
        <div class="row position-relative">
            <div class="col-lg-7 upper-add">
                <div class="content-left">
                    <div class="img-box">
                        {$left_image_markup}
                    </div>
                    <div class="content">
                        <div class="content-inner">
                            <p class="catg">{$subtitle}</p>
                            <h3 class="offer-title"><span class="ex">{$title}</span></h3>
                            <div class="flash-countdown-ad flash-countdown index-02" data-date="{$countdown_time}">
                                <div class="single-box">
                                    <span class="counter-days item"></span>
                                    <span class="label item">{$days_text}</span>
                                </div>
                                <div class="single-box">
                                    <span class="counter-hours item"></span>
                                    <span class="label item">{$hour_text}</span>
                                </div>
                                <div class="single-box">
                                    <span class="counter-minutes item"></span>
                                    <span class="label item">{$min_text}</span>
                                </div>
                                <div class="single-box">
                                    <span class="counter-seconds item"></span>
                                    <span class="label item">{$sec_text}</span>
                                </div>
                            </div>
                            <div class="btn-wrapper">
                                <a href="{$button_url}" class="default-btn">{$button_text}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 ml-auto">
                <div class="content-right">
                    {$right_image_markup}
                </div>
            </div>
        </div>
    </div>
</div>

HTML;

    }
}
