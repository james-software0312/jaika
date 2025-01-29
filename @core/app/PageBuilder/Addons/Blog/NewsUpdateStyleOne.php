<?php


namespace App\PageBuilder\Addons\Blog;

use App\Blog;
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
use Illuminate\Support\Str;

class NewsUpdateStyleOne extends PageBuilderBase
{
    use RepeaterHelper;
    /**
     * preview_image
     * this method must have to implement by all widget to show a preview image at admin panel so that user know about the design which he want to use
     * @since 1.0.0
     * */
    public function preview_image()
    {
        return 'news-update/01.png';
    }

    /**
     * widget_title
     * this method must have to implement by all widget to register widget title
     * @since 1.0.0
     * */
    public function addon_title()
    {
        return __('News Update Area: 01');
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

        $output .= Select::get([
            'name' => 'blog_post_1',
            'label' => __('Blog post 1'),
            'placeholder' => __('Select form'),
            'options' => Blog::where('status', 'publish')->pluck('title','id')->toArray(),
            'value' =>   $widget_saved_values['blog_post_1'] ?? []
        ]);
        $output .= Select::get([
            'name' => 'blog_post_2',
            'label' => __('Blog post 2'),
            'placeholder' => __('Select form'),
            'options' => Blog::where('status', 'publish')->pluck('title','id')->toArray(),
            'value' =>   $widget_saved_values['blog_post_2'] ?? []
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

        $blog_post_1 = SanitizeInput::esc_html($settings['blog_post_1']);
        $blog_post_2 = SanitizeInput::esc_html($settings['blog_post_2']);

        $blog_1 = Blog::find($blog_post_1);
        $blog_2 = Blog::find($blog_post_2);

        $news_update_markup = "";

        if ($blog_1 && $blog_1->id) {
            $news_update_markup .= $this->render_new_update_markup($blog_1);
        }

        if ($blog_2 && $blog_2->id) {
            $news_update_markup .= $this->render_new_update_markup($blog_2);
        }

        return <<<HTML
<div class="news-update-area-wrapper" data-padding-top="{$padding_top}" data-padding-bottom="{$padding_bottom}" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="section-title-wrapper">
                    <h2 class="main-title">{$title}</h2>
                    <p class="sub-title">{$description}</p>
                </div>
            </div>
        </div>
        <div class="row">
            {$news_update_markup}
        </div>
    </div>
</div>
HTML;

    }

    private function render_new_update_markup($blog = null): string
    {
        $settings = $this->get_settings();

        $blog_image = render_image_markup_by_attachment_id($blog->image);
        $datetime = $blog->created_at->format('d M Y');
        $blog_title = $blog->title;
        $blog_url = route('frontend.blog.single', $blog->slug);
        $blog_summary = Str::words(strip_tags($blog->blog_content), 20);

        $category_name = optional($blog->category)->name ?? 0;
        $category_id = optional($blog->category)->id ?? 0;
        $category_blog_route = route('frontend.blog.category', ['id' => $category_id, 'name' => $category_name]);

        return <<<HTML
<div class="col-lg-6">
    <div class="single-news-update-item">
        <div class="img-box">
            {$blog_image}
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
                <a href="{$blog_url}" class="borderless-btn">read more</a>
            </div>
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