<?php

namespace App\Enums;

class CouponEnum
{
    /**
     * Return values for discount_on field
     */
    public static function discountOptions()
    {
        return [
            'all' => __('All Products'),
            'category' => __('Category'),
            'subcategory' => __('Subcategory'),
            'product' => __('Product'),
        ];
    }
}
