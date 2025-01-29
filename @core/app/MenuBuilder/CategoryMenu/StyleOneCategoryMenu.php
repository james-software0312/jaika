<?php


namespace App\MenuBuilder\CategoryMenu;


use App\Blog;
use App\BlogCategory;
use App\MenuBuilder\CategoryMenuBase;
use App\MenuBuilder\MegaMenuBase;
use App\PageBuilder\Helpers\Traits\RenderMegaMenuView;
use App\Product\ProductCategory;
use App\Product\ProductSubCategory;

class StyleOneCategoryMenu extends CategoryMenuBase
{
    use RenderMegaMenuView;

    function model(){
        return 'App\Product\ProductCategory';
    }

    function render($ids,$lang,$subcat_id=null,$title = null)
    {
        //it will have all html markup for the mega menu frontend
        $ids = explode(',',$ids);
        $sub_ids = explode(',',$subcat_id);
        $output = '';
        if (empty($ids)){
            return $output;
        }

        $mega_menu_items = ProductSubCategory::whereIn('id',$sub_ids)->get();
        return $this->renderMegaMenuViews("style_one_category_menu",compact("mega_menu_items","title"));
    }

    function category($id)
    {
        $category = BlogCategory::where(['id' => $id])->first();
        return $category->name ?? __('Uncategorized');
    }

    function route()
    {
        // TODO: Implement route() method.
        return 'frontend.blog.single';
    }

    function routeParams()
    {
        // TODO: Implement routeParams() method.
        return ['slug'];
    }

    function name()
    {
        // TODO: Implement name() method.
        return __('Category Mega Menus');
    }

    function enable()
    {
        // TODO: Implement enable() method.
        return true;
    }

    function query_type()
    {
        // TODO: Implement query_type() method.
        return 'no_lang'; // old_lang|new_lang
    }
    function title_param()
    {
        // TODO: Implement title_param() method.
        return 'title';
    }
    function slug()
    {
        // TODO: Implement name() method.
        return 'blog_page_slug';
    }
}