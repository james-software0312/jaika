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
use App\Product\ProductCategory;

class HeaderSliderTwo extends PageBuilderBase
{
    use RepeaterHelper;
    /**
     * preview_image
     * this method must have to implement by all widget to show a preview image at admin panel so that user know about the design which he want to use
     * @since 1.0.0
     * */
    public function preview_image()
    {
        return 'header/02.png';
    }

    /**
     * widget_title
     * this method must have to implement by all widget to register widget title
     * @since 1.0.0
     * */
    public function addon_title()
    {
        return __('Header Slider: 02');
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
                    'name' => 'subtitle',
                    'label' => __('Subtitle'),
                ],
                [
                    'type' => RepeaterField::TEXTAREA,
                    'name' => 'title',
                    'label' => __('Title')
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
        $output = '';
        $all_settings = $this->get_settings();

        $this->args['settings'] = RepeaterField::remove_default_fields($all_settings);
        // dd($this->args['settings']);
        foreach ($this->args['settings'] as $key => $setting){
            if (is_array($setting)){
                $this->args['repeater'] = $setting;
                $array_lang_item = $setting[array_key_last($setting)];
                // $array_lang_item = [
                //     0 => 907,
                //     1 => 908,
                //     2 => 909
                // ];
                if (!empty($array_lang_item) && is_array($array_lang_item) && count($array_lang_item) > 0) {
                    foreach ($array_lang_item as $index => $value) {
                        $output .= $this->render_slider_markup($index); // for multiple array index
                    }
                } 
                else {
                    $output .= $this->render_slider_markup(); // for only one index of array
                }
            }
        }

        return <<<HTML
        <div class="header-area-wrapper header-slider-main-index-02 index-02">
            {$output}
        </div>
HTML;
    }

    private function render_slider_markup(int $index = null): string
    {
        $settings = $this->get_settings();
        $title_color = $settings['title_color'];
        $subtitle = $this->get_repeater_field_value('subtitle', $index);
        // dd($index);
        $title = $this->get_repeater_field_value('title', $index);
        $button_text = $this->get_repeater_field_value('button_text', $index);
        $button_url = $this->get_repeater_field_value('button_url', $index);
        $button_icon = $this->get_repeater_field_value('button_icon', $index);
        // dd($index);
        $im = $this->get_repeater_field_value('background_image', $index); 
        if($index == 0) $im = 907;
        else if($index == 1) $im =908;
        $background_image = render_background_image_markup_by_attachment_id($this->get_repeater_field_value('background_image', $index));
        $background_image = render_background_image_markup_by_attachment_id($im);
        $padding_top = SanitizeInput::esc_html($settings['padding_top']);
        $padding_bottom = SanitizeInput::esc_html($settings['padding_bottom']);

        $button_markup = '';
        if (!empty($button_text) && !empty($button_url)){
            $icon_markup = !empty($button_icon) ? '<i class="'.$button_icon.'"></i>' : '';
            $button_markup = '<div class="btn-wrapper"> <a href="'.url($button_url).'" class="borderless-btn">'.$button_text.'</a></div>';
        }
        // $categories = ProductCategory::all();
        // Fetch all categories
        $allCategories = ProductCategory::all();

        // Build a nested structure
        $categories = $this->buildCategoryTree($allCategories);
        // dd($categories);
        // dd($categories);
        $category_html = $this->generate_category_tree_html($categories, null);
        return <<<HTML
        <div class="header-area header-bg" {$background_image} > 

            <!-- <div class = "row" style = "width:20%; background-color: red; height: 100%"> -->
                <div style = "height:100%; background-color:white; width:20%; padding:20px;" class = "d-none d-lg-block">
                    {$category_html}
                </div>
            <!-- </div> -->
        </div>
HTML;

    }

    private function generate_category_tree_html($categories, $selectedCat)
    {
        $html = '';
        $html = '<form id="categoryForm" method="GET" action="'.route('frontend.products.all').'">';
        foreach ($categories as $category) {
            $isSelected = $this->isCategorySelected($category, $selectedCat);
            $html .= '
            <div id="accordion" style = "padding:10px;">
                <div class="card p-0 border-0 custom-category-list" style = "width:90%;">
                    <div class="card-header p-0" id="heading-'.$category->id.'">
                        <h5 class="mb-0">
                            <div class="single-checkbox-wrap" style = "padding:4px;">
                              <label>
                                <input type="radio" name="cat" class="radio" value="'.$category->id.'"
                                    '.($selectedCat == $category->id ? 'checked' : '').' onchange="document.getElementById(\'categoryForm\').submit();">
                                <span class="checkmark">'.$category->title.'</span>
                            </label>';

            if ($category->children->isNotEmpty()) {
                $html .= '
                    <button class="sub-category-btn py-0 px-0 m-0" data-toggle="collapse"
                            data-target="#collapse-'.$category->id.'"
                            aria-expanded="'.($isSelected ? 'true' : 'false').'"
                            aria-controls="collapse-'.$category->id.'">
                        +
                    </button>';
            }

            $html .= '
                            </div>
                        </h5>
                    </div>';

            if ($category->children->isNotEmpty()) {
                $html .= '
                    <div id="collapse-'.$category->id.'" class="collapse '.($isSelected ? 'show' : '').'"
                        aria-labelledby="heading-'.$category->id.'" data-parent="#accordion">
                        <div class="card-body p-0">
                            <div class="widget-check-box checkbox-catagory ml-4">
                                '.$this->generate_category_tree_html($category->children, $selectedCat).'
                            </div>
                        </div>
                    </div>';
            }

            $html .= '</div></div>';
        }

        return $html;
    }

    private function isCategorySelected($category, $selectedCat)
    {
        if ($category->id == $selectedCat) {
            return true;
        }

        foreach ($category->children as $child) {
            if ($this->isCategorySelected($child, $selectedCat)) {
                return true;
            }
        }

        return false;
    }

    private function buildCategoryTree($categories, $parentId = null)
    {
        return $categories
            ->where('parent_id', $parentId)
            ->where('status', 'publish')
            ->map(function ($category) use ($categories) {
                $category->children = $this->buildCategoryTree($categories, $category->id);
                return $category;
            });
    }
}
