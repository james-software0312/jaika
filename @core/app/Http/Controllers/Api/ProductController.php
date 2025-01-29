<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiHelpers;
use App\Actions\Media\MediaHelper;
use App\Helpers\FlashMsg;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductDetailResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\TagsResource;
use App\Http\Services\Api\ProductServices;
use App\Mail\BasicMail;
use App\Product\ProductAttribute;
use App\Product\ProductCategory;
use App\Product\ProductSubCategory;
use App\Product\ProductTag;
use App\Product\Tag;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Country\Country;
use App\Country\State;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Product\Product;


class ProductController extends Controller
{
    /* 
    * fetch all country list from database
    */
    public function allProducts()
    {
        //type=best_selling 
        //this will accept few get param for sort prodcut or get prodcut based on various thing, eg: best selling product, best rated prodcut, sortby: low to high, high to low etc
        
        $products = Product::with(['category', 'inventory', 'campaignProduct'])->where('status','publish')->orderBy('title', 'asc')->get()->transform(function($item){
            $image_url = null;
            if(!empty($item->image)){
                $img_details = get_attachment_image_by_id($item->image);
                $image_url = $img_details['img_url'] ?? null;
            }
            $item->image_url = $image_url ?  : null;
            $item->subcategories = $item->getSubcategory();
            
            //prodcut image gallery 
            $product_image_galleries = [];
            $product_image_gallery = !is_null($item->product_image_gallery) ? json_decode($item->product_image_gallery) : [];
            
            //todo need calculation for campaign price and stock
            
            if(is_array($product_image_gallery) ){
                foreach($product_image_gallery as  $prod_image){
                    $gal_image_url = null;
                    if(!empty($prod_image)){
                        $gal_img_details = get_attachment_image_by_id($prod_image);
                        $gal_image_url = $gal_img_details['img_url'] ?? null;
                    }
                    if($gal_image_url){
                        $product_image_galleries[] = $gal_image_url;
                    }
                }
            }
            $item->product_image_galleries = $product_image_gallery;
            
            
            return $item;
        });
        
        return response()->success([
            'products' => $products
        ]);
    
    }
    
    /* 
    * fetch all state list based on provided country id from database
    */
    public function singleProducts($id)
    {
        if(empty($id)){
             return response()->error([
                'message' => __('provide a valid id')
            ]); 
        }
       
      $products = Product::with(['category', 'inventory', 'campaignProduct'])->where('id',$id)->first();
        
        if(!is_null($products)){
           $image_url = null;
            if(!empty($products->image)){
                $img_details = get_attachment_image_by_id($products->image);
                $image_url = $img_details['img_url'] ?? null;
            }
            $products->image_url = $image_url ?  : null;
            $products->subcategories = $products->getSubcategory();
            
            //prodcut image gallery 
            $product_image_galleries = [];
            $product_image_gallery = !is_null($products->product_image_gallery) ? json_decode($products->product_image_gallery) : [];
            
            //todo need calculation for campaign price and stock
            
            if(is_array($product_image_gallery) ){
                foreach($product_image_gallery as  $prod_image){
                    $gal_image_url = null;
                    if(!empty($prod_image)){
                        $gal_img_details = get_attachment_image_by_id($prod_image);
                        $gal_image_url = $gal_img_details['img_url'] ?? null;
                    }
                    if($gal_image_url){
                        $product_image_galleries[] = $gal_image_url;
                    }
                }
            }
            $products->product_image_galleries = $product_image_gallery;
        }
       
        
        return response()->success([
            'product' => $products
        ]);
    
    }
    
    public function product_type($type){
        // check product type and fetch product that are related to this type
        // check every single product are campaign or not
        // check product has attributes or not
        // check product stock
        // check product on sale or not
        return ProductResource::collection(ProductServices::get_all_product($type))->response()->setStatusCode(201);
    }

    public function details($id){
        // get all product information that are required for product details page
        $product = ProductServices::product_detail($id);

        return new ProductDetailResource($product);

        $response = !empty($product) ? new ProductDetailResource($product) : null;
        return !empty($product) ? response()->success($response) : response()->error(["message" => __("Product not found")]);
    }

    public function tags(){
        return TagsResource::collection(ProductTag::select("id","tag")->get())->response()->setStatusCode(201);
    }

    public function search(){
        $request = request();
        $all_category = ProductCategory::select(["id","title"])->where('status', 'publish')->with('subcategory')->get();
        $all_attributes = ProductAttribute::all();
        $all_tags = Tag::all();
        $maximum_available_price = Product::query()->max('price');
        $sub_cat_details = ProductSubCategory::with('category')->find($request->subcat);
        $cat = optional(optional($sub_cat_details)->category)->id;

        $min_price = $request->pr_min ? $request->pr_min : Product::query()->min('price');
        $max_price = $request->pr_max ? $request->pr_max : $maximum_available_price;

        $style = isset($request->s) && $request->s == 'list' ? 'list' : 'grid';

        $display_item_count = $request->count ?? get_static_option('default_item_count') ?? 5;

        $all_products = Product::with('inventory')
            ->withAvg('rating', 'rating')
            ->where('status', 'publish');

        // search title
        if ($request->q) {
            $all_products->where('title', 'LIKE', "%$request->q%");
        }

        // category search
        if ($request->cat) {
            $all_products->where('category_id', $request->cat);
        }

        // subcategory search
        if ($request->subcat) {
            $all_products->whereJsonContains('sub_category_id', $request->subcat);
        }

        if ($min_price && $min_price > 0) {
            $all_products->where('price', '>=', $min_price);
        }

        if ($max_price) {
            $all_products->where('price', '<=', $max_price);
        }

        // filter by attribute
        if ($request->attr) {
            $filter_attributes = json_decode($request->attr, true);
            if (is_array($filter_attributes)) {
                return $filter_attributes;
                foreach ($filter_attributes as $attr) {
                    if (isset($attr['id']) && isset($attr['attribute'])) {
                        $all_products->where('attributes', 'LIKE', "%{$attr['id']}%{$attr['attribute']}%");
                    }
                }
            }
        }

        // filter by rating
        if ($request->rt) {
            $rating = $request->rt;
            $all_products->whereHas('rating', function ($query) use ($rating) {
                $query->where('rating','<=', $rating);
            });
        }

        // filter by tag
        if ($request->t) {
            $tag = $request->t;
            $all_products->whereHas('tags', function ($query) use ($tag) {
                $query->where('tag', $tag);
            });
        }

        // sort
        $sort_by = $request->sort ?? 'default';

        if ($sort_by == 'popularity') {
            $all_products->orderBy('sold_count', 'DESC');
        }elseif($sort_by == 'latest' || $sort_by == 'default') {
            $all_products->orderBy('created_at', 'DESC');
        }elseif($sort_by == 'price_low') {
            $all_products->orderBy('sale_price', 'ASC');
        }elseif($sort_by == 'price_high') {
            $all_products->orderBy('sale_price','desc');
        }

        // get selected limit data
        $display_item_count = $display_item_count ?? 15;
        $all_products = $all_products->paginate($display_item_count)->withQueryString();

        $pagination = [
            "current_page" => $all_products->currentPage(),
            "last_page" => $all_products->lastPage(),
            "per_page" => $all_products->perPage(),
            "path" => $all_products->path(),
            "links" => $all_products->getUrlRange(0,$all_products->lastPage())
        ];

        return ProductResource::collection($all_products)->response([$pagination])->setStatusCode(201);
    }
}
