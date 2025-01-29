<?php

namespace App\Http\Resources;

use App\Http\Services\Api\ProductServices;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request) : array
    {
        // campaign data check
        $campaign_product = !is_null($this->campaignProduct) ? $this->campaignProduct : getCampaignProductById($this->id);
        $sale_price = $campaign_product ? optional($campaign_product)->campaign_price : $this->sale_price;
        $deleted_price = !is_null($campaign_product) ? $this->sale_price : $this->price;
        $campaign_percentage = !is_null($campaign_product) ? getPercentage($this->sale_price, $sale_price) : false;
        $attributes = $this->attributes ? json_decode($this->attributes, true) : null;
        $product_image_gallery = $this->product_image_gallery ? json_decode($this->product_image_gallery, true) : null;

        $gallery_image = [];
        if(!empty($product_image_gallery)){
            foreach($product_image_gallery as $image){
                $gallery_image[] = [get_attachment_image_by_id($image)["img_url"] ?? null];
            }
        }

        return [
            "prd_id" => $this->id,
            "title" => $this->title,
            "sort_description" => $this->summary,
            "description" => $this->description,
            "category" => ProductServices::prepareCategory($this->category->toArray()),
            "sub_categories" => ProductServices::prepareSubCategory($this->getSubcategory()),
            "attributes" => ProductServices::prepare_attributes($attributes),
            "discount_price" => $sale_price,
            "price" => $deleted_price,
            "campaign_percentage" => round($campaign_percentage,2),
            "campaign_start_date" => $campaign_product["start_date"] ?? null,
            "campaign_end_date" => $campaign_product["end_date"] ?? null,
            "stock_count" => optional($this->inventory)->stock_count ?? 0,
            "sku" => optional($this->inventory)->sku,
            "avg_ratting" => $this->rating_avg_rating,
            "image" => get_attachment_image_by_id($this->image)["img_url"] ?? null,
            "image_gallery" => $gallery_image,
            "badge" => $this->badge ?? null,
            "review" => $this->rating
        ];
    }
}
