<?php


namespace App\PageBuilder\Addons\Brand;
use App\Brand;
use App\Helpers\SanitizeInput;
use App\PageBuilder\Fields\ColorPicker;
use App\PageBuilder\Fields\Number;
use App\PageBuilder\Fields\Repeater;
use App\PageBuilder\Fields\Select;
use App\PageBuilder\Fields\Slider;
use App\PageBuilder\Helpers\RepeaterField;
use App\PageBuilder\Helpers\Traits\RepeaterHelper;
use App\PageBuilder\PageBuilderBase;

class BrandLogoStyleOne extends PageBuilderBase
{
    use RepeaterHelper;
    /**
     * @inheritDoc
     */
    public function preview_image()
    {
       return 'brand/brand-logo-01.png';
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

        $output .= Repeater::get([
            'multi_lang' => false,
            'settings' => $widget_saved_values,
            'id' => 'header_style_one',
            'fields' => [
                [
                    'type' => RepeaterField::IMAGE,
                    'name' => 'logo_image',
                    'label' => __('Background Image'),
                    'dimensions' => '255×132'
                ],
                [
                    'type' => RepeaterField::TEXT,
                    'name' => 'logo_url',
                    'label' => __('Brand URL'),
                ],
            ]
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

        $brand_data = "";

        $this->args['settings'] = RepeaterField::remove_default_fields($settings);
        foreach ($this->args['settings'] as $key => $setting){
            if (is_array($setting)){
                $this->args['repeater'] = $setting;
                $array_lang_item = $setting[array_key_last($setting)];
                if (!empty($array_lang_item) && is_array($array_lang_item) && count($array_lang_item) > 0) {
                    foreach ($array_lang_item as $index => $value) {

                        $brand_data .= $this->render_slider_markup($index); // for multiple array index
                    }
                } else {
                    $brand_data .= $this->render_slider_markup(); // for only one index of array
                }
            }
        }

        return <<<HTML
<div class="brand-area-wrapper">
    <div class="container">
        <div class="row">
            {$brand_data}
        </div>
    </div>
</div>
HTML;

    }

    private function render_slider_markup(int $index = null): string
    {
        $settings = $this->get_settings();

        $logo_url = $this->get_repeater_field_value('logo_url', $index);
        $logo_image = render_image_markup_by_attachment_id($this->get_repeater_field_value('logo_image', $index));

        return <<<HTML
<div class="col-sm-6 col-md-3 col-lg-3">
    <div class="single-brand-icon-box">
        <a href="{$logo_url}">
            {$logo_image}
        </a>
    </div>
</div>
HTML;

    }

    /**
     * @inheritDoc
     */
    public function addon_title()
    {
        return __('Brand Slider: 01');
    }
}