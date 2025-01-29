<?php


namespace App\MenuBuilder\MegaMenus;


use App\MenuBuilder\MegaMenuBase;
use App\Product\Product;

class ProductMegaMenu extends MegaMenuBase
{

    function model()
    {
        return 'App\Product\Product';
    }
    public function enable()
    {
        return true;
    }
    function render($ids, $lang)
    {
        //it will have all html markup for the mega menu
        $ids = explode(',', $ids);
        $output = '';
        if (empty($ids)) {
            return $output;
        }
        $output .= $this->body_start();

        $mega_menu_items = Product::with('campaignProduct')->whereIn('id', $ids)->get();

        foreach ($mega_menu_items as $post) {
            
            $campaign_product = getCampaignProductById($post->id);
            $sale_price = $campaign_product ? $campaign_product->campaign_price : $post->sale_price;
            $campaign_percentage = $campaign_product ? getPercentage($post->sale_price, $sale_price) : false;
        
            $campaign_percentage_markup = '';
            if($campaign_percentage){
                $campaign_percentage_markup ='<span class="discount-tag">-'.round($campaign_percentage, 2).'%</span>';
            }
        
        
            $output .= '<div class="col-lg-3 col-md-6">' . "\n";
            $output .= '<div class="xg-mega-menu-single-column-wrap">' . "\n";

            $output .= '<ul>' . "\n";

            $output .= '<li class="single-mega-menu-product-item">';
            $output .= '<div class="thumbnail">'.$campaign_percentage_markup.'<a href="' . route($this->route(), $post->slug) . '">' . render_image_markup_by_attachment_id($post->image, '', 'thumb') . '</a></div>';
            $output .= '<div class="content">';
            $output .= '<a href="' . route($this->route(), $post->slug) . '"><h4 class="title">' . $post->title . '</h4></a>';
            $sale_price = $post->sale_price == 0 ? __("Free") : float_amount_with_currency_symbol($sale_price);
            
            //show campagin price and percentage
            
               // campaign data check
        $campaign_product = !is_null($post->campaignProduct) ? $post->campaignProduct : getCampaignProductById($post->id);
        $sale_price = $campaign_product ? optional($campaign_product)->campaign_price : $post->sale_price;
        $deleted_price = !is_null($campaign_product) ? $post->sale_price : $post->price;
        $campaign_percentage = !is_null($campaign_product) ? getPercentage($post->sale_price, $sale_price) : false;
        
            $price = $post->price == 0 ? __("Free") : float_amount_with_currency_symbol($post->price);
            $output .= '<div class="price-wrap"><span class="price">' . float_amount_with_currency_symbol($sale_price) . '</span>';
            
            if ($deleted_price && $deleted_price > 0) {
                 $output .= '<del>'.float_amount_with_currency_symbol($deleted_price) .'</del>';
            }


            $output .= '</div></div>';
            $output .= '</li>';

            $output .= '</ul>' . "\n";
            $output .= '</div>' . "\n";
            $output .= '</div>' . "\n";
        }

        $output .= $this->body_end();
        // TODO: return all makrup data for render it to frontend
        return $output;
    }
    function slug()
    {
        // TODO: Implement name() method.
        return 'product_page_slug';
    }

    function category($id)
    {
        return null;
    }

    function route()
    {
        // TODO: Implement route() method.
        return 'frontend.products.single';
    }

    function routeParams()
    {
        // TODO: Implement routeParams() method.
        return ['slug'];
    }

    function name()
    {
        // TODO: Implement name() method.
        return 'product_page_name';
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
}
