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
use Illuminate\Support\Str;

class NewsUpdateStyleTwo extends PageBuilderBase
{
    use RepeaterHelper;
    /**
     * preview_image
     * this method must have to implement by all widget to show a preview image at admin panel so that user know about the design which he want to use
     * @since 1.0.0
     * */
    public function preview_image()
    {
        return 'news-update/02.png';
    }

    /**
     * widget_title
     * this method must have to implement by all widget to register widget title
     * @since 1.0.0
     * */
    public function addon_title()
    {
        return __('News Update Area: 02');
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
        ]);
        $output .= Summernote::get([
            'name' => 'description',
            'label' => __('Description'),
            'value' => $widget_saved_values['description'] ?? null,
        ]);

        $blogs = Blog::where('status', 'publish')->pluck('title','id')->toArray();
        $output .= NiceSelect::get([
            'name' => 'blogs',
            'multiple' => true,
            'label' => __('Blogs'),
            'placeholder' =>  __('Select Blogs'),
            'options' => $blogs,
            'value' => $widget_saved_values['blogs'] ?? null,
            'info' => __('you can select item for products, if you want to show all product leave it empty')
        ]);
        $output .= Number::get([
            'name' => 'items',
            'label' => __('Items'),
            'value' => $widget_saved_values['items'] ?? null,
            'info' => __('enter how many item you want to show in frontend, leave it empty if you want to show all products'),
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

        $title = SanitizeInput::esc_html($settings['title']);
        $description = SanitizeInput::kses_basic($settings['description']);
        $items = SanitizeInput::esc_html($settings['items']);
        $blogs_ids = !empty($settings['blogs']) ? $settings['blogs'] : [];

        $blogs = Blog::query();

        if (!empty($blogs_ids)) {
            $blogs = $blogs->whereIn('id', $blogs_ids);
        }
        $blogs = $blogs->with('category')->where('status', 'publish');

        $news_update_markup = "";

        if (!empty($items)) {
            $all_blogs = $blogs->take($items)->get();
        } else {
            $all_blogs = $blogs->get();
        }

        foreach ($all_blogs as $blog) {
            $news_update_markup .= $this->render_new_update_markup($blog);
        }

        return <<<HTML
        <div class="fashion-blog-area-wrapper" data-padding-top="{$padding_top}" data-padding-bottom="{$padding_bottom}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 col-lg-5">
                        <div class="section-title-wrapper">
                            <h2 class="main-title">{$title}</h2>
                            <p class="sub-title">{$description}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container custom-container-1618">
                <div class="row fashion-blog-slider-main">
                    {$news_update_markup}
                </div>
            </div>
        </div>
HTML;

    }

    private function render_new_update_markup($blog = null): string
    {
        $settings = $this->get_settings();

        $blog_image = render_background_image_markup_by_attachment_id($blog->image);
        $datetime = $blog->created_at->format('d M Y');
        $blog_title = $blog->title;
        $blog_url = route('frontend.blog.single', $blog->slug);
        $blog_summary = Str::words(strip_tags($blog->blog_content), 20);

        $category_name = optional($blog->category)->name ?? 0;
        $category_id = optional($blog->category)->id ?? 0;
        $category_blog_route = route('frontend.blog.category', ['id' => $category_id, 'name' => $category_name]);

        $read_more_btn_text = SanitizeInput::esc_html($settings['read_more_btn_text']);

        return <<<HTML
        <div class="col-lg-12">
            <div class="single-fashion-blog-item">
                <div class="img-box blog-news-bg" {$blog_image}>
                </div>
                <div class="content">
                    <ul class="post-meta">
                        <li class="meta-item">
                            <a href="{$blog_url}">
                                <i class="las la-calendar icon"></i>
                                {$datetime}
                            </a>
                        </li>
                        <li class="meta-item">
                            <a href="{$category_blog_route}">
                                <i class="las la-tag icon"></i>
                                {$category_name}
                            </a>
                        </li>
                    </ul>
                    <h4 class="blog-title">
                        <a href="{$blog_url}">{$blog_title}</a>
                    </h4>
                    <p class="info">{$blog_summary}</p>
                    <div class="btn-wrapper">
                        <a href="{$blog_url}" class="borderless-btn">{$read_more_btn_text}</a>
                    </div>
                </div>
            </div>
        </div>
HTML;

    }

}
