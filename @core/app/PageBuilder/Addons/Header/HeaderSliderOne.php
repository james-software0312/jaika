<?php


namespace App\PageBuilder\Addons\Header;


use App\Helpers\LanguageHelper;
use App\Helpers\SanitizeInput;
use App\PageBuilder\Fields\ColorPicker;
use App\PageBuilder\Fields\IconPicker;
use App\PageBuilder\Fields\Image;
use App\PageBuilder\Fields\Repeater;
use App\PageBuilder\Fields\Slider;
use App\PageBuilder\Fields\Text;
use App\PageBuilder\Fields\Textarea;
use App\PageBuilder\Helpers\RepeaterField;
use App\PageBuilder\Helpers\Traits\RepeaterHelper;
use App\PageBuilder\PageBuilderBase;

class HeaderSliderOne extends PageBuilderBase
{
    use RepeaterHelper;
    /**
     * preview_image
     * this method must have to implement by all widget to show a preview image at admin panel so that user know about the design which he want to use
     * @since 1.0.0
     * */
    public function preview_image()
    {
        return 'header/01.jpg';
    }

    /**
     * widget_title
     * this method must have to implement by all widget to register widget title
     * @since 1.0.0
     * */
    public function addon_title()
    {
        return __('Header Slider: 01');
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

        $output .= Repeater::get([
            'multi_lang' => false,
            'settings' => $widget_saved_values,
            'id' => 'header_style_one',
            'fields' => [
                [
                    'type' => RepeaterField::TEXT,
                    'name' => 'title',
                    'label' => __('Title'),
                    'info' => __('For bolder text embrace with <b>[bld]</b> and <b>[/bld]</b>')
                ],
                [
                    'type' => RepeaterField::TEXTAREA,
                    'name' => 'description',
                    'label' => __('Description')
                ],
                [
                    'type' => RepeaterField::TEXT,
                    'name' => 'button_text',
                    'label' => __('Button Text')
                ],
                [
                    'type' => RepeaterField::TEXT,
                    'name' => 'button_url',
                    'label' => __('Button Url')
                ],
                [
                    'type' => RepeaterField::IMAGE,
                    'name' => 'background_image',
                    'label' => __('Background Image'),
                    'dimensions' => '1920x1080'
                ],
            ]
        ]);
        $output .= ColorPicker::get([
            'name' => 'title_color',
            'label' => __('Title Color'),
            'value' => $widget_saved_values['title_color'] ?? '',
        
        ]);
        $output .= Slider::get([
            'name' => 'padding_top',
            'label' => __('Padding Top'),
            'value' => $widget_saved_values['padding_top'] ?? 290,
            'max' => 500,
        ]);
        $output .= Slider::get([
            'name' => 'padding_bottom',
            'label' => __('Padding Bottom'),
            'value' => $widget_saved_values['padding_bottom'] ?? 303,
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
        $output = '<div class="header-area-wrapper header-slider-main global-carousel-init" data-loop="true" data-desktopitem="1" data-mobileitem="1" data-tabletitem="1" data-dots="false" data-nav="true"  data-autoplay="true" data-stagepadding="0" data-margin="0">';
        $all_settings = $this->get_settings();

        $this->args['settings'] = RepeaterField::remove_default_fields($all_settings);
        foreach ($this->args['settings'] as $key => $setting){
            if (is_array($setting)){
                $this->args['repeater'] = $setting;
                $array_lang_item = $setting[array_key_last($setting)];
                if (!empty($array_lang_item) && is_array($array_lang_item) && count($array_lang_item) > 0) {
                    foreach ($array_lang_item as $index => $value) {

                        $output .= $this->render_slider_markup($index); // for multiple array index
                    }
                } else {
                    $output .= $this->render_slider_markup(); // for only one index of array
                }
            }
        }

        $output .= '</div>';
        return $output;
    }

    private function render_slider_markup(int $index = null): string
    {
        $settings = $this->get_settings();
        $title_color = $settings['title_color'];
        $title = $this->get_repeater_field_value('title', $index);
        $title = $this->format_section_title($title);
        $description = $this->get_repeater_field_value('description', $index);
        $button_text = $this->get_repeater_field_value('button_text', $index);
        $button_url = $this->get_repeater_field_value('button_url', $index);
        $button_icon = $this->get_repeater_field_value('button_icon', $index);
        $background_image = render_background_image_markup_by_attachment_id($this->get_repeater_field_value('background_image', $index));
        $padding_top = SanitizeInput::esc_html($settings['padding_top']);
        $padding_bottom = SanitizeInput::esc_html($settings['padding_bottom']);
        //<span class="ex">Summer</span> Collection 01

        $button_markup = '';
        if (!empty($button_text) && !empty($button_url)){
            $icon_markup = !empty($button_icon) ? '<i class="'.$button_icon.'"></i>' : '';
            $button_markup = '<div class="btn-wrapper">  <a href="'.url($button_url).'" class="default-btn active">'.$button_text.' '.$icon_markup.'</a> </div>';
        }
        return <<<HTML
 <div class="header-area header-bg" {$background_image} data-padding-top="{$padding_top}" data-padding-bottom="{$padding_bottom}"> 
    <div class="container nav-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-inner-content">
                    <h1 class="header-main-title" style="color:{$title_color}"> {$title} </h1>
                    <p class="header-sub-title">{$description}</p>
                    {$button_markup}
                </div>
            </div>
        </div>
    </div>
</div>
HTML;

    }

    public function format_section_title($title)
    {
        return str_replace(['[bld]', '[/bld]'], ['<span class="ex">','</span>'], $title);
    }

}