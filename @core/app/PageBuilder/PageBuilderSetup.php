<?php


namespace App\PageBuilder;


use App\PageBuilder;
use App\PageBuilder\Addons\AboutSection\AboutSectionStyleOne;
use App\PageBuilder\Addons\Blog\GridStyleOne;
use App\PageBuilder\Addons\Blog\GridStyleTwo;
use App\PageBuilder\Addons\Blog\ListStyleOne;
use App\PageBuilder\Addons\Blog\NewsUpdatePageStyleOne;
use App\PageBuilder\Addons\Blog\NewsUpdateStyleOne;
use App\PageBuilder\Addons\Blog\NewsUpdateStyleTwo;
use App\PageBuilder\Addons\Brand\BrandLogoStyleOne;
use App\PageBuilder\Addons\Brand\BrandLogoStyleTwo;
use App\PageBuilder\Addons\categories\CategorySliderOne;
use App\PageBuilder\Addons\categories\CategorySliderTwo;
use App\PageBuilder\Addons\Common\ImageSectionStyleOne;
use App\PageBuilder\Addons\Common\ImageUrlSectionStyleOne;
use App\PageBuilder\Addons\Common\QuoteStyleOne;
use App\PageBuilder\Addons\Common\TextSectionStyleOne;
use App\PageBuilder\Addons\ContactArea\ContactAreaStyleOne;
use App\PageBuilder\Addons\ContactArea\MapAreaStyleOne;
use App\PageBuilder\Addons\Feedback\CustomerFeedbackStyleOne;
use App\PageBuilder\Addons\Header\HeaderSliderOne;
use App\PageBuilder\Addons\Header\HeaderSliderTwo;
use App\PageBuilder\Addons\Header\HeaderSliderThree;
use App\PageBuilder\Addons\Header\HeaderSliderFor;
use App\PageBuilder\Addons\Header\HeaderSliderFive;
use App\PageBuilder\Addons\IconBox\IconBoxStyleOne;
use App\PageBuilder\Addons\IconBox\IconBoxStyleTwo;
use App\PageBuilder\Addons\Product\BannerStyleFour;
use App\PageBuilder\Addons\Product\BannerStyleFive;
use App\PageBuilder\Addons\Product\BannerStyleSix;
use App\PageBuilder\Addons\Product\BannerStyleOne;
use App\PageBuilder\Addons\Product\BannerStyleThree;
use App\PageBuilder\Addons\Product\BannerStyleTwo;
use App\PageBuilder\Addons\Product\ProductColumnStyleOne;
use App\PageBuilder\Addons\Product\ProductFilterStyleOne;
use App\PageBuilder\Addons\Product\ProductFilterStyleTwo;
use App\PageBuilder\Addons\Product\ProductGridStyleOne;
use App\PageBuilder\Addons\Product\ProductGridStyleTwo;
use App\PageBuilder\Addons\Product\ProductGridStyleThree;
use App\PageBuilder\Addons\Product\ProductSaleStyleOne;
use App\PageBuilder\Addons\Product\ProductSaleStyleTwo;
use App\PageBuilder\Addons\Product\ProductSliderStyleOne;
use App\PageBuilder\Addons\Product\ProductSliderStyleTwo;
use App\PageBuilder\Addons\Product\ProductSliderStyleThree;
use App\PageBuilder\Addons\Product\ProductSliderStyleFor;
use App\PageBuilder\Addons\Product\ProductTest;
use App\PageBuilder\Addons\Product\TestProduct;

class PageBuilderSetup
{
    private static function registerd_widgets(): array
    {
        //check module wise widget by set condition
        return [
            HeaderSliderOne::class,
            HeaderSliderTwo::class,
            HeaderSliderThree::class,
            HeaderSliderFor::class,
            HeaderSliderFive::class,
            IconBoxStyleOne::class,
            IconBoxStyleTwo::class,
            BannerStyleOne::class,
            BannerStyleTwo::class,
            BannerStyleThree::class,
            BannerStyleFour::class,
            BannerStyleFive::class,
            BannerStyleSix::class,
            BrandLogoStyleOne::class,
            BrandLogoStyleTwo::class,
            CategorySliderOne::class,
            CategorySliderTwo::class,
            ProductSliderStyleOne::class,
            ProductSliderStyleTwo::class,
            ProductSliderStyleThree::class,
            ProductSliderStyleFor::class,
            ProductGridStyleOne::class,
            ProductGridStyleTwo::class,
            ProductGridStyleThree::class,
            ProductColumnStyleOne::class,
            ProductSaleStyleOne::class,
            ProductSaleStyleTwo::class,
            ProductFilterStyleOne::class,
            ProductFilterStyleTwo::class,
            ContactAreaStyleOne::class,
            MapAreaStyleOne::class,
            AboutSectionStyleOne::class,
            CustomerFeedbackStyleOne::class,
            NewsUpdateStyleOne::class,
            NewsUpdateStyleTwo::class,
            QuoteStyleOne::class,
            ImageSectionStyleOne::class,
            TextSectionStyleOne::class,
            ImageUrlSectionStyleOne::class,
            NewsUpdatePageStyleOne::class,
            GridStyleOne::class,
            GridStyleTwo::class,
            ListStyleOne::class,
            // =====================
            ProductTest::class,
            TestProduct::class,
        ];
    }

    public static function get_admin_panel_widgets(): string
    {
        $widgets_markup = '';
        $widget_list = self::registerd_widgets();
        foreach ($widget_list as $widget) {
            try {
                $widget_instance = new  $widget();
            } catch (\Exception $e) {
                $msg = $e->getMessage();
                throw new \ErrorException($msg);
            }
            if ($widget_instance->enable()) {
                $widgets_markup .= self::render_admin_addon_item([
                    'addon_name' => $widget_instance->addon_name(),
                    'addon_namespace' => $widget_instance->addon_namespace(), // new added
                    'addon_title' => $widget_instance->addon_title(),
                    'preview_image' => $widget_instance->get_preview_image($widget_instance->preview_image())
                ]);
            }
        }
        return $widgets_markup;
    }

    private static function render_admin_addon_item($args): string
    {
        return '<li class="ui-state-default widget-handler" data-name="' . $args['addon_name'] . '" data-namespace="' . base64_encode($args['addon_namespace']) . '">
                    <h4 class="top-part"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>' . $args['addon_title'] . $args['preview_image'] . '</h4>
                </li>';
    }

    public static function render_widgets_by_name_for_admin($args)
    {
        $widget_class = $args['namespace'];
        $instance = new $widget_class($args);
        if ($instance->enable()) {
            return $instance->admin_render();
        }
    }

    public static function render_widgets_by_name_for_frontend($args)
    {
        $widget_class = $args['namespace'];
        $instance = new $widget_class($args);
        //   if($args['id'] ==64) dd($args) ;
        // dd($args['name']);
        // if ($args['id'] == 73) dd($instance);
        if ($instance->enable()) {
            return $instance->frontend_render();
        }
    }

    public static function render_frontend_pagebuilder_content_by_location($location): string
    {
        $output = '';
        $all_widgets = PageBuilder::where(['addon_location' => $location])->orderBy('addon_order', 'ASC')->get();
        foreach ($all_widgets as $widget) {
            $output .= self::render_widgets_by_name_for_frontend([
                'name' => $widget->addon_name,
                'namespace' => $widget->addon_namespace,
                'location' => $location,
                'id' => $widget->id,
                'column' => $args['column'] ?? false
            ]);
        }
        return $output;
    }

    public static function get_saved_addons_by_location($location): string
    {
        $output = '';
        $all_widgets = PageBuilder::where(['addon_location' => $location])->orderBy('addon_order', 'asc')->get();
        foreach ($all_widgets as $widget) {
            
            $output .= self::render_widgets_by_name_for_admin([
                'name' => $widget->addon_name,
                'namespace' => $widget->addon_namespace,
                'id' => $widget->id,
                'type' => 'update',
                'order' => $widget->addon_order,
                'page_type' => $widget->addon_page_type,
                'page_id' => $widget->addon_page_id,
                'location' => $widget->addon_location
            ]);
        }

        return $output;
    }

    public static function get_saved_addons_for_dynamic_page($page_type, $page_id): string
    {
        $output = '';
        $all_widgets = PageBuilder::where(['addon_page_type' => $page_type, 'addon_page_id' => $page_id])->orderBy('addon_order', 'asc')->get();
        foreach ($all_widgets as $widget) {
            $output .= self::render_widgets_by_name_for_admin([
                'name' => $widget->addon_name,
                'namespace' => $widget->addon_namespace,
                'id' => $widget->id,
                'type' => 'update',
                'order' => $widget->addon_order,
                'page_type' => $widget->addon_page_type,
                'page_id' => $widget->addon_page_id,
                'location' => $widget->addon_location
            ]);
        }

        return $output;
    }

    public static function render_frontend_pagebuilder_content_for_dynamic_page($page_type, $page_id): string
    {
        $output = '';
        $all_widgets = PageBuilder::where(['addon_page_type' => $page_type, 'addon_page_id' => $page_id])->orderBy('addon_order', 'asc')->get();
        foreach ($all_widgets as $widget) {
            // if($widget->id ==73) dd($widget) ;
            // if ( $widget->id !=73 && $widget->id !=59 && $widget->id !=61 && $widget->id !=64 && $widget->id !=65 && $widget->id !=66 && $widget->id !=67)dd($widget);
            if ($widget->id !=61 && $widget->id !=65 && $widget->id !=66 && $widget->id !=67 && $widget->id !=68) $output .= self::render_widgets_by_name_for_frontend([
                'name' => $widget->addon_name,
                'namespace' => $widget->addon_namespace,
                'id' => $widget->id,
                'column' => $args['column'] ?? false
            ]);
            // else $output .= "<br><br>";
        }
        return $output;
    }
}
