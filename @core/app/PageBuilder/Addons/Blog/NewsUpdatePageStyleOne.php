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

class NewsUpdatePageStyleOne extends PageBuilderBase
{
    use RepeaterHelper;
    /**
     * preview_image
     * this method must have to implement by all widget to show a preview image at admin panel so that user know about the design which he want to use
     * @since 1.0.0
     * */
    public function preview_image()
    {
        return 'news-update/page-01.png';
    }

    /**
     * widget_title
     * this method must have to implement by all widget to register widget title
     * @since 1.0.0
     * */
    public function addon_title()
    {
        return __('Blog News Update Page: 01');
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
        $read_more_btn_text = SanitizeInput::esc_html($settings['read_more_btn_text']) ?? __('Read More');

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

        $news_update_markup = "";

        foreach ($all_blogs as $key => $blog) {
            $news_update_markup .= $this->renderNewsUpdateMarkup($blog, $read_more_btn_text);
        }

        $pagination_dynamic_markup = "<div class='pagination-default'>{$all_blogs->links()}</div>";

        $pagination_markup = <<<HTML
        <div class="row justify-content-center margin-top-30">
            <div class="col-lg-6">
                <div class="pagination">
                    {$pagination_dynamic_markup}
                </div>
            </div>
        </div>
HTML;


        return <<<HTML
        <div class="news-update-area-wrapper single-page" data-padding-top="{$padding_top}" data-padding-bottom="{$padding_bottom}" >
            <div class="container">
                <div class="row">
                    {$news_update_markup}
                </div>
                {$pagination_markup}
            </div>
        </div>
HTML;

    }

    private function renderNewsUpdateMarkup($blog = null, $read_more_btn_text = null): string
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

        $render_more_btn = $read_more_btn_text;

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
                <a href="{$blog_url}" class="borderless-btn">{$render_more_btn}</a>
            </div>
        </div>
    </div>
</div>
HTML;

    }
}
