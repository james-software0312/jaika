<?php

namespace App\PageBuilder\Services;

class ProductItemServices
{
    public static function product_hover_button($item){
        $attributes = $item->attributes ? json_decode($item->attributes, true) : null;
        $add_to_cart_markup = "";
        if (is_array($attributes) && count($attributes)) {
            $route = route('frontend.products.single', $item->slug);
            $add_to_cart_markup = '<a href="'.$route.'"> <i class="las la-shopping-cart"></i></a>';
        } else {
            $add_to_cart_markup = '<a href="#" data-attributes="'.$item->attributes.'" data-id="'.$item->id.'" class="add_to_cart_ajax"><i class="las la-shopping-cart icon"></i></a>';
        }

        $add_to_wishlist_markup = "";
        if (is_array($attributes) && count($attributes)) {
            $route = route('frontend.products.single', $item->slug);
            $add_to_wishlist_markup = '<a href="'.$route.'"> <i class="lar la-heart icon"></i></a>';
        } else {
            $add_to_wishlist_markup = '<a href="#" data-attributes="'.$item->attributes.'" data-id="'.$item->id.'" class="add_to_wishlist_ajax"><i class="lar la-heart icon"></i></a>';
        }

        $add_to_compare = '<a href="#" data-id="'.$item->id.'" class="add_to_compare_ajax"> <i class="las la-retweet icon"></i></a>';

        $quick_view_data = getQuickViewDataMarkup($item);

        $quick_view_markup = '<a href="#" id="quickview" class="quick-view" '.$quick_view_data.'}><i class="lar la-eye icon"></i></a>';

        return [
            'add_to_card_markup' => $add_to_cart_markup,
            'add_to_wishlist_markup' => $add_to_wishlist_markup,
            'add_to_compare' => $add_to_compare,
            'quick_view_data' => $quick_view_data,
        ];
    }
}