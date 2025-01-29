<?php

namespace App\PageBuilder\Addons\Common;


use App\Faq;
use App\FormBuilder;
use App\Helpers\FormBuilderCustom;
use App\Helpers\LanguageHelper;
use App\Helpers\SanitizeInput;
use App\PageBuilder\Fields\ColorPicker;

use App\PageBuilder\Fields\NiceSelect;
use App\PageBuilder\Fields\Notice;
use App\PageBuilder\Fields\Number;
use App\PageBuilder\Fields\Repeater;
use App\PageBuilder\Fields\Select;
use App\PageBuilder\Fields\Slider;
use App\PageBuilder\Fields\Summernote;
use App\PageBuilder\Fields\Text;
use App\PageBuilder\Fields\Textarea;
use App\PageBuilder\Helpers\RepeaterField;
use App\PageBuilder\Helpers\Traits\RepeaterHelper;
use App\PageBuilder\PageBuilderBase;

class QuoteStyleOne extends PageBuilderBase
{
    use RepeaterHelper;

    /**
     * preview_image
     * this method must have to implement by all widget to show a preview image at admin panel so that user know about the design which he want to use
     * @since 1.0.0
     * */
    public function preview_image()
    {
        return 'common/faq-01.png';
    }

    /**
     * widget_title
     * this method must have to implement by all widget to register widget title
     * @since 1.0.0
     * */
    public function addon_title()
    {
        return __('Quote: 01');
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

        $faqs = Faq::get()->pluck('title','id')->toArray();
        $output .= NiceSelect::get([
            'name' => 'faq_ids',
            'multiple' => true,
            'label' => __('Select Faq'),
            'placeholder' => __('Select faq'),
            'options' => $faqs,
            'value' => $widget_saved_values['faq_ids'] ?? null,
        ]);

        $output .= Text::get([
            'name' => 'ask_question_form_title',
            'label' => __('Form Title'),
            'value' => $widget_saved_values['ask_question_form_title'] ?? null,
        ]);

        $custom_form = FormBuilder::all()->pluck('title','id')->toArray();

        $output .= Select::get([
            'name' => 'custom_form_id',
            'label' => __('Custom Form'),
            'placeholder' => __('Select Form'),
            'options' => $custom_form,
            'value' => $widget_saved_values['custom_form_id'] ?? null,
        ]);

        $output .= Notice::get([
            'type' => 'secondary',
            'text' => __('Section Settings')
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

        $padding_top = SanitizeInput::esc_html($settings['padding_top']);
        $padding_bottom = SanitizeInput::esc_html($settings['padding_bottom']);

        $custom_form_id = SanitizeInput::esc_html($settings['custom_form_id']);
        $ask_question_form_title = SanitizeInput::esc_html($settings['ask_question_form_title']);
        $faq_ids = $settings['faq_ids'] ?? [];

        $custom_form_markup = FormBuilderCustom::render_form($custom_form_id,null,null,'logistics-btn','logistic-quote-form');

        $faq_markup = '';
        $faq_items = Faq::query();

        if (!empty($faq_ids)) {
            $faq_items->whereIn('id',$faq_ids);
        }

        $faq_items = $faq_items->get();

        foreach ($faq_items as $index => $faq){
            $faq_markup .= $this->getFaqItem($index, $faq);
        }

    return <<<HTML
<div class="faq-area-wrapper" data-padding-top="{$padding_top}" data-padding-bottom="{$padding_bottom}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- faq accordion start -->
                <div class="faq-accordion">
                    <div class="accordion" id="accordionExample">
                        {$faq_markup}
                    </div>
                </div>
                <!-- faq accordion end -->
            </div>
            <div class="col-lg-6">
                <div class="ask-wrapper">
                    <h4 class="title">{$ask_question_form_title}</h4>
                    {$custom_form_markup}
                </div>
            </div>
        </div>
    </div>
</div>
HTML;

    }

    public function getFaqItem($index, $faq)
    {
        $title = SanitizeInput::esc_html($faq->title);
        $description = SanitizeInput::kses_basic($faq->description);
        $aria_expanded = 'false';
        $collapse = '';

        if ($faq->is_open == 'on') {
            $aria_expanded = 'true';
            $collapse = 'show';
        }

        return <<<HTML
<div class="card">
    <div class="card-header" id="headingOne">
        <h5 class="mb-0">
            <a href="#" class="accordion-btn btn-link" data-toggle="collapse"
                data-target="#faq_collapse_{$index}" aria-expanded="{$aria_expanded}" aria-controls="faq_collapse_{$index}">
                {$title}
                <span class="color-1">
                    <i class="las la-angle-down"></i>
                    <i class="las la-angle-up"></i>
                </span>
            </a>
        </h5>
    </div>

    <div id="faq_collapse_{$index}" class="collapse {$collapse}" aria-labelledby="headingOne"
        data-parent="#accordionExample">
        <div class="card-body">
            <p class="info">{$description}</p>
        </div>
    </div>
</div>
HTML;
    }
}
