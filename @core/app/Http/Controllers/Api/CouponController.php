<?php

namespace App\Http\Controllers\Api;

use App\Action\CartAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CouponIndexRequest;
use App\Product\Product;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index(CouponIndexRequest $request){
        // product ids
        $ids = json_decode($request->ids);
        $products = Product::whereIn('id', array_column($ids,"id"))->get();
        $subtotal = $request->total_amount;

        $coupon_amount = CartAction::calculateApiCoupon($request, $subtotal, $products, 'DISCOUNT');

        return ["coupon_amount" => $coupon_amount];
    }
}
