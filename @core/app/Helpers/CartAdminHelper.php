<?php

namespace App\Helpers;

use App\Product\Product;

class CartAdminHelper {
    public static function addAllItemsToCart($request)
    {
        $all_products = $request->products;

        if (!is_array($all_products) || !count($all_products)) {
            return json_encode([]);
        }

        foreach ($request->count_arr as $count) {
            $product_attributes = isset($request->product_attributes[$count]) ? $request->product_attributes[$count] : [];
            $products_count = isset($request->products_count[$count]) ? $request->products_count[$count] : 1;

            foreach ($product_attributes as $id => $attributes) {
                $quantity = $products_count;

                if (is_string($attributes)) {
                    $attributes = json_decode($attributes, true);
                    CartHelper::add((int) $id, (int) $quantity, $attributes);
                } else if (is_array($attributes)) {
                    $product = Product::find($id);
                    $attribute = [];
                    $attribute['price'] = optional($product)->sale_price;
                    foreach ($attributes as $key => $value) {
                        $attr_arr = json_decode($value, true);
                        $attribute[$key] = $attr_arr[$key];
                        $attribute['price'] = $attribute['price'] + $attr_arr['price'];
                    }
                    CartHelper::add((int) $id, (int) $quantity, $attribute);
                }
            }
        }

        return CartHelper::getItems();
    }
}
