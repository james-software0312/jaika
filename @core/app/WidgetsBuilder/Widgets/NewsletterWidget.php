<?php


namespace App\WidgetsBuilder\Widgets;


use App\Events;
use App\Language;
use App\Widgets;
use App\WidgetsBuilder\WidgetBase;
use Illuminate\Support\Facades\Blade;

class NewsletterWidget extends WidgetBase
{

    public function admin_render()
    {
        // TODO: Implement admin_render() method.
        $output = $this->admin_form_before();
        $output .= $this->admin_form_start();
        $output .= $this->default_fields();
        $widget_saved_values = $this->get_settings();

        $widget_title = $widget_saved_values['widget_title'] ?? '';
        $widget_description = $widget_saved_values['description'] ?? '';

        $output .= '<div class="form-group"><input type="text" name="widget_title" class="form-control" placeholder="' . __('Newsletter Title') . '" value="' . $widget_title . '"></div>';
        $output .= '<div class="form-group"><input type="text" name="description" class="form-control" placeholder="' . __('Newsletter Description') . '" value="' . $widget_description . '"></div>';


        $output .= $this->admin_form_submit_button();
        $output .= $this->admin_form_end();
        $output .= $this->admin_form_after();

        return $output;
    }


    public function frontend_render()
    {
        // TODO: Implement frontend_render() method.
        $widget_saved_values = $this->get_settings();
        $widget_title = sanitize_html($widget_saved_values['widget_title']) ??  '';
        $description = purify_html($widget_saved_values['description']) ??  '';

        $output = $this->widget_before(); //render widget before content

        // Blade::

        if (!empty($widget_title)) {
            $output .= '<h4 class="widget-title">'.purify_html($widget_title).'</h4>';
        }

        if (!empty($description)) {
            $output .= '<p class="info">'.purify_html($description).'</p>';
        }

        $output .= 
        '<div class="subscriber-form newsletter-form-wrap">
            <div class="form-message-show"></div>
            <form action="'.route('frontend.subscribe.newsletter').'" method="POST" class="email-subscribe">
                <input type="hidden" name="_token" value="'.csrf_token().'">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="' . __("Your mail here") . '">
                    <button type="submit" class="form-btn-2 ex submit-btn">
                        <i class="lar la-paper-plane"></i>
                    </button>
                </div>
            </form>
        </div>';

        $output .= $this->widget_after(); // render widget after content

        return $output;

    }

    public function widget_title()
    {
        // TODO: Implement widget_title() method.
        return __("Newsletter");
    }
}
