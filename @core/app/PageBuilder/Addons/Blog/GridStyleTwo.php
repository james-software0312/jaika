<?php


namespace App\PageBuilder\Addons\Blog;

use App\Blog;
use App\Helpers\SanitizeInput;
use App\PageBuilder\Fields\IconPicker;
use App\PageBuilder\Fields\Image;
use App\PageBuilder\Fields\NiceSelect;
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
use HTML5;
use Illuminate\Support\Str;

class GridStyleTwo extends PageBuilderBase
{
    use RepeaterHelper;
    /**
     * preview_image
     * this method must have to implement by all widget to show a preview image at admin panel so that user know about the design which he want to use
     * @since 1.0.0
     * */
    public function preview_image()
    {
        return 'blog/02.png';
    }

    /**
     * widget_title
     * this method must have to implement by all widget to register widget title
     * @since 1.0.0
     * */
    public function addon_title()
    {
        return __('Blog Grid Page: 02');
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

        $blogs = Blog::where('status', 'publish')->pluck('title','id')->toArray();
        $output .= NiceSelect::get([
            'name' => 'blogs',
            'multiple' => true,
            'label' => __('Blogs'),
            'placeholder' =>  __('Select Blogs'),
            'options' => $blogs,
            'value' => $widget_saved_values['blogs'] ?? null,
            'info' => __('you can select item for blogs, if you want to show all blog leave it empty')
        ]);
        $output .= Number::get([
            'name' => 'items',
            'label' => __('Items'),
            'value' => $widget_saved_values['items'] ?? null,
            'info' => __('enter how many item you want to show per page, if you leave it empty 15 blogs will be shown per page'),
        ]);


        $output .= Text::get([
            'name' => 'read_more_btn_text',
            'label' => __('Read More Button Text'),
            'value' => $widget_saved_values['read_more_btn_text'] ?? null,
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

        $blog_items = isset($settings['blogs']) 
                        ? sanitizeArray($settings['blogs']) ?? [] 
                        : [];
        $items = SanitizeInput::esc_html($settings['items']);
        $readMoreBtnText = SanitizeInput::esc_html($settings['read_more_btn_text']) ?? __('Read More');

        $blogs = Blog::query()->with('category')->where(['status' => 'publish']);

        if (!empty($blog_items)) {
            $blogs->whereIn('id', $blog_items);
        }

        $all_blogs = [];
        if (!empty($items)) {
            $all_blogs = $blogs->paginate($items);
        } else {
            $all_blogs = $blogs->paginate();
        }


        return $this->renderBlade("blogs.grid_style_two",compact(["padding_bottom","padding_top","all_blogs"]));

        return view('PageBuilder.blog-grid-page')->with([
            'padding_top' => $padding_top,
            'padding_bottom' => $padding_bottom,
            'all_blogs' => $all_blogs,
            'readMoreBtnText' => $readMoreBtnText
        ])->render();

    }
}
