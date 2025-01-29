<?php

namespace App\PageBuilder\Services;

use App\Helpers\SanitizeInput;
use App\PageBuilder\Fields\NiceSelect;
use App\PageBuilder\Fields\Number;
use App\PageBuilder\Fields\Select;
use App\Product\Product;
use App\Product\ProductCategory;

class ProductRenderServices
{
    public static function admin($widget_saved_values = null)
    {
        $output = "";

        $products = Product::where(['status' => 'publish'])->get()->pluck('title', 'id')->toArray();
        $output .= NiceSelect::get([
            'name' => 'products',
            'multiple' => true,
            'label' => __('Product'),
            'placeholder' => __('Select Product'),
            'options' => $products,
            'value' => $widget_saved_values['products'] ?? null,
            'info' => __('you can select products that you want to show, if you want to show all the products leave it empty')
        ]);

        $categories = ProductCategory::where('status', 'publish')->get()->pluck('title', 'id')->toArray();
        $output .= NiceSelect::get([
            'name' => 'product_categories',
            'multiple' => true,
            'label' => __('Category'),
            'placeholder' => __('Select Category'),
            'options' => $categories,
            'value' => $widget_saved_values['product_categories'] ?? null,
            'info' => __('You can select category that you want to show, if you want to show all the products leave it empty')
        ]);

        $output .= Select::get([
            'name' => 'order_by',
            'label' => __('Order By'),
            'options' => [
                'id' => __('ID'),
                'created_at' => __('Date'),
                'sale_price' => __('Price'),
            ],
            'value' => $widget_saved_values['order_by'] ?? null,
            'info' => __('set order by')
        ]);

        $output .= Select::get([
            'name' => 'order',
            'label' => __('Order'),
            'options' => [
                'asc' => __('Ascending'),
                'desc' => __('Descending'),
            ],
            'value' => $widget_saved_values['order'] ?? null,
            'info' => __('set product order')
        ]);

        $output .= Number::get([
            'name' => 'items',
            'label' => __('Items'),
            'value' => $widget_saved_values['items'] ?? null,
            'info' => __('enter how many item you want to show in frontend, leave it empty if you want to show all products'),
        ]);

        return $output;
    }

    public static function frontend($settings)
    {
        $order_by = SanitizeInput::esc_html($settings['order_by']) ?? null;
        $order = SanitizeInput::esc_html($settings['order']) ?? null;
        $items = SanitizeInput::esc_html($settings['items']) ?? null;
        $product_items = $settings['products'] ?? [];
        $product_categories = $settings['product_categories'] ?? [];

        $products = Product::query()->with('inventory', 'campaignProduct', 'campaignSoldProduct')->where(['status' => 'publish']);

        if (!empty($product_items)) {
            $products->whereIn('id', $product_items);
        }

        if (!empty($product_categories)) {
            $products->whereIn('category_id', $product_categories);
        }

        if ($order_by === 'rating') {
            $products = $products->with(['ratings','campaignProduct'])->get();
            $all_products = $products->sortByDesc(function ($products, $key) {
                return $products->ratings()->avg('ratings');
            });
        } else {
            $products->orderBy($order_by, $order);
        }

        if (!empty($items)) {
            $all_products = $products->take($items)->get();
        } else {
            $all_products = $products->get();
        }

        return $all_products;
    }

    public static function new_products($limit){
        return Product::where('status', 'publish')
            ->withAvg('rating', 'rating')
            ->with('inventory')
            ->orderBy('updated_at', 'DESC')
            ->take($limit)
            ->get();
    }
}