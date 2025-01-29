<?php

namespace App\Http\Controllers\Api;

use App\Country\Country;
use App\Country\State;
use App\Http\Controllers\Controller;
use App\Http\Services\Api\ProductServices;
use App\Product\ProductSellInfo;
use App\Shipping\UserShippingAddress;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $id = auth('sanctum')->user()->id;
        $all_orders = ProductSellInfo::select(["id","payment_status","status","created_at","total_amount"])
            ->where('user_id', $id)->orderBy('id', 'DESC')
            ->paginate()->withQueryString();

        return response()->success($all_orders);
    }

    public function details(ProductSellInfo $ProductSellInfo){
        $id = auth('sanctum')->user()->id;

        $user_shipping_address = null;
        if (!empty($ProductSellInfo->shipping_address_id)) {
            $user_shipping_address = UserShippingAddress::find($ProductSellInfo->shipping_address_id);
        }

        $country = Country::select("name")->find($ProductSellInfo->country);
        $state = State::select("name")->find($ProductSellInfo->state);

        $ids = [];

        foreach(json_decode($ProductSellInfo->order_details) as $items){
            foreach($items as $item){
                $ids[] = $item->id;
            }
        }

        $product = \App\Product\Product::select(["id","title","image","price","sale_price","badge","slug","attributes"])->whereIn("id",$ids)->get()
            ->transform(function ($item){
            // campaign data check
            $campaign_product = !is_null($item->campaignProduct) ? $item->campaignProduct : getCampaignProductById($item->id);
            $sale_price = $campaign_product ? optional($campaign_product)->campaign_price : $item->sale_price;
            $deleted_price = !is_null($campaign_product) ? $item->sale_price : $item->price;
            $campaign_percentage = !is_null($campaign_product) ? getPercentage($item->sale_price, $sale_price) : false;

            $attributes = $item->attributes ? json_decode($item->attributes,true) : null;

            $item->price = $deleted_price;
            $item->sale_price = $sale_price;
            $item->attributes = ProductServices::prepare_attributes($attributes);
            $item->campaign_percentage = $campaign_percentage;


            $item->image = get_attachment_image_by_id($item->image)['img_url'];
            return $item;
        });

        return response()->success(["order_info" => $ProductSellInfo,"shipping_address" => $user_shipping_address,"product" => $product,"country" => optional($country)->name ?? null,"state" => optional($state)->name]);
    }
}
