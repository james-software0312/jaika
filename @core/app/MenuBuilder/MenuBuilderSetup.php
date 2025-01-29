<?php


namespace App\MenuBuilder;


class MenuBuilderSetup extends MenuBuilderBase
{

    public function  static_pages_list()
    {
        // TODO: Implement static_pages_list() method.
        return [
            'about',
            'faq',
            'product',
            'blog',
            'contact',
        ];
    }

    function register_dynamic_menus()
    {
        // TODO: Implement register_dynamic_menus() method.
        return [
            'product' => [
                'model' => 'App\Product\Product',
                'name' => 'product_page_name',
                'route' => 'frontend.products.single',
                'route_params' => ['slug'],
                'title_param' => 'title',
                'query' => 'no_lang' //old_lang|new_lang
            ],
            'pages' => [
                'model' => 'App\Page',
                'name' => 'pages_page_name',
                'route' => 'frontend.dynamic.page',
                'route_params' => ['slug','id'],
                'title_param' => 'title',
                'query' => 'no_lang' //old_lang|new_lang
            ],
            'blog' => [
                'model' => 'App\Blog',
                'name' => 'blog_page_name',
                'route' => 'frontend.blog.single',
                'route_params' => ['slug'],
                'title_param' => 'title',
                'query' => 'no_lang' //old_lang|new_lang|no_lang
            ],
        ];
    }

    function category_menu_register_dynamic_menus()
    {
        // TODO: Implement register_dynamic_menus() method.
        return [
            'product_category' => [
                'menu_type' => 'category_menu',
                'model' => 'App\Product\ProductCategory',
                'menu_name' => __('Product Categories'),
                'route' => 'frontend.products.category',
                'route_params' => ['id','title'],
                'title_param' => 'title',
                'query' => 'no_lang' //old_lang|new_lang|no_lang
            ],
        ];
    }

}