<?php

namespace App\Http\Controllers\Product;

use App\ContactModel;
use App\Helpers\FlashMsg;
use App\Http\Controllers\Controller;
use App\Product\Product;
use App\StockItemModel;
use App\Product\ProductAdditionalInformation;
use App\Product\ProductAttribute;
use App\Product\ProductCategory;
use App\Product\ProductInventory;
use App\Product\ProductSubCategory;
use App\Product\ProductTag;
use App\Product\Tag;
use App\WHSize;
use App\WHColor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Prophecy\Promise\ReturnPromise;

class ProductController extends Controller
{
    const BASE_URL = 'backend.products.product.';

    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:product-list|product-create|product-edit|product-delete|product-clone|product-view', ['only', ['index']]);
        $this->middleware('permission:product-create', ['only', ['create', 'store']]);
        $this->middleware('permission:product-edit', ['only', ['edit', 'update']]);
        $this->middleware('permission:product-delete', ['only', ['destroy', 'bulk_action']]);
        $this->middleware('permission:product-clone', ['only', ['clone']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact_users = ContactModel::all();
        $all_products = Product::with('category')->get();
        return view(self::BASE_URL.'all', compact('all_products','contact_users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_category = ProductCategory::all();
        $all_sub_category = ProductSubCategory::all();
        $all_attribute = ProductAttribute::all();
        $all_tags = Tag::all();
        $all_size = WHSize::all();
        return view(self::BASE_URL.'new', compact('all_category', 'all_sub_category', 'all_attribute', 'all_tags', 'all_size'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:191',
            'summary' => 'required|string',
            'description' => 'required|string',
            'category_id' => 'required|string',
            'sub_category_id' => 'nullable|array',
            'image' => 'required|string|max:191',
            'image_gallery' => 'nullable|string',
            'price' => 'nullable|string',
            'sale_price' => 'required|string',
            'badge' => 'nullable|string|max:191',
            'status' => 'required|string|max:191',
            'slug' => 'required|string|max:191',
            'tags' => 'nullable|string',
            'attribute_id' => 'nullable|array',
            'attribute_selected' => 'nullable|array',
            'attribute_name' => 'nullable|array',
            'sku' => 'required|string|max:191|unique:product_inventories,sku',
            'stock_count' => 'required|string|max:191',
        ]);

        $all_attribute = [];

        if (isset($request->attribute_id) && count($request->attribute_id)) {
            foreach ($request->attribute_id as $key => $attribute_id) {
                $all_attribute[$attribute_id][] = [
                    'type' => sanitize_html(optional($request->attribute_name)[$key]),
                    'name' => sanitize_html(optional($request->attribute_selected)[$key]),
                    'additional_price' => sanitize_html(optional($request->attr_additional_price)[$key]),
                    'attribute_image' => sanitize_html(optional($request->attribute_image)[$key]),
                ];
            }
        }

        try {
            DB::beginTransaction();

            $insert_product_data = [
                'title' => $request->sanitize_html('title'),
                'summary' => $request->sanitize_html('summary'),
                'description' => $request->description,
                'category_id' => $request->sanitize_html('category_id'),
                'image' => $request->sanitize_html('image'),
                'price' => (double) $request->sanitize_html('price') ?? 0,
                'sale_price' => $request->sanitize_html('sale_price'),
                'badge' => $request->sanitize_html('badge'),
                'status' => $request->sanitize_html('status'),
                'slug' => $this->getValidSlug($request->sanitize_html('slug')),
                'attributes' => $all_attribute,
            ];

            if ($request->sub_category_id) {
                $all_sub_category_id = [];
                foreach ($request->sub_category_id as $key => $sub_category_id) {
                    $all_sub_category_id[] = sanitize_html($sub_category_id);
                }
                $insert_product_data['sub_category_id'] = $all_sub_category_id;
            }


            if ($request->image_gallery) {
                $all_product_image_gallery = [];
                $all_gallery_image = explode('|', $request->image_gallery);
                $all_product_image_gallery = sanitizeArray($all_gallery_image);
                $insert_product_data['product_image_gallery'] = $all_product_image_gallery;
            }

            $product = Product::create($insert_product_data);

            $tags = $request->tags ? explode(',', $request->tags) : [];
            if ($tags) {
                foreach ($tags as $tag) {
                    $tag = Tag::firstOrCreate(['tag_text' => $tag]);
                    $product_tag = ProductTag::create([
                        'product_id' => $product->id,
                        'tag' => $tag->tag_text,
                    ]);
                }
            }

            if ($product->id && $request->info_title) {
                $this->insertAdditionalInformation($product->id, $request);

                ProductInventory::create([
                    'product_id' => $product->id,
                    'sku' => $request->sku,
                    'stock_count' => $request->stock_count,
                    'sold_count' => 0,
                ]);

                DB::commit();
                return back()->with(FlashMsg::create_succeed('Product'));
            }
        }
        catch (\Throwable $th) {
            DB::rollBack();
            return back()->with(FlashMsg::create_failed('Product'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $item)
    {
        $contact_users = ContactModel::where('status', 2)->get();
        $product = Product::where('id', $item->id)->with('additionalInfo', 'tags', 'inventory')->first();
        $all_category = ProductCategory::all();
        $all_sub_category = ProductSubCategory::all();
        $all_attribute = ProductAttribute::all()->groupBy('title')->map(fn($query) => $query[0]);
        $all_tags = Tag::all();
        $all_size = WHSize::all();
        $all_color = WHColor::all();
        return view(self::BASE_URL.'edit', compact('product', 'all_category', 'all_sub_category', 'all_attribute', 'all_tags', 'all_color', 'all_size', 'contact_users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $item)
    {
        
        $this->validate($request, [
            'title' => 'required|string|max:191',
            'summary' => 'required|string',
            'description' => 'required|string',
            'category_id' => 'required|string',
            'sub_category_id' => 'nullable|array',
            'image' => 'required|string|max:191',
            'image_gallery' => 'nullable|string',
            'price' => 'nullable|string',
            'sale_price' => 'required|string',
            'badge' => 'nullable|string|max:191',
            'status' => 'required|string|max:191',
            'slug' => 'required|string|max:191',
            'tags' => 'nullable|string',
            'attribute_id' => 'nullable|array',
            'attribute_selected' => 'nullable|array',
            'attribute_name' => 'nullable|array',
            'sku' => 'required|string|max:191',
            'stock_count' => 'required|string|max:191',
        ]);
        $stockItem = StockItemModel::where('product_id', $item->id)->firstOrFail();
        $data = $request->all();
        $stockItem->fill($data);
        $stockItem->save();
        if($request->set_news == 'on') {
            StockItemModel::where('product_id', $item->id)->update([
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        $all_attribute = [];
        if (isset($request->attribute_id) && count($request->attribute_id)) {
            foreach ($request->attribute_id as $key => $attribute_id) {
                $all_attribute[$attribute_id][] = [
                    'type' => sanitize_html(optional($request->attribute_name)[$key]),
                    'name' => sanitize_html(optional($request->attribute_selected)[$key]),
                    'additional_price' => sanitize_html(optional($request->attr_additional_price)[$key]),
                    'attribute_image' => sanitize_html(optional($request->attribute_image)[$key]),
                ];
            }
        }

        try {
            DB::beginTransaction();

            $update_product_data = [
                'title' => $request->sanitize_html('title'),
                'summary' => $request->sanitize_html('summary'),
                'description' => $request->description,
                'category_id' => $request->sanitize_html('category_id'),
                'image' => $request->sanitize_html('image'),
                'price' => (double) $request->sanitize_html('price') ?? 0,
                'sale_price' => $request->sanitize_html('sale_price'),
                'badge' => $request->sanitize_html('badge'),
                'status' => $request->sanitize_html('status'),
                'slug' => $this->getValidSlug($request->sanitize_html('slug'), 'update', $item->id),
                'attributes' => $all_attribute,
                'size' => $request['size'],
                'color' => $request['color'],
            ];

            if ($request->sub_category_id) {
                $all_sub_category_id = [];
                foreach ($request->sub_category_id as $key => $sub_category_id) {
                    $all_sub_category_id[] = sanitize_html($sub_category_id);
                }
                $update_product_data['sub_category_id'] = $all_sub_category_id;
            }

            if ($request->image_gallery) {
                $all_product_image_gallery = [];
                $all_gallery_image = explode('|', $request->image_gallery);
                $all_product_image_gallery = sanitizeArray($all_gallery_image);
                $update_product_data['product_image_gallery'] = $all_product_image_gallery;
            }

            $updated = $item->update($update_product_data);
            // dd($item);
            if($request->set_news == 'on'){
                Product::where('id', $item->id)->update([
                    'created_at' =>Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }

            $tags = $request->tags ? explode(',', $request->tags) : [];
            if ($tags) {
                ProductTag::where('product_id', $item->id)->delete();
                foreach ($tags as $tag) {
                    $tag = Tag::firstOrCreate(['tag_text' => $tag]);
                    $product_tag = ProductTag::create([
                        'product_id' => $item->id,
                        'tag' => $tag->tag_text,
                    ]);
                }
            }

            if ($request->info_title) {
                $this->updateAdditionalInformation($item->id, $request);
            }

            $inventory = ProductInventory::where('product_id', $item->id)->first();

            if ($inventory) {
                $inventory->update([
                    'sku' => $request->sku,
                    'stock_count' => $request->stock_count,
                ]);
            } else {
                ProductInventory::create([
                    'product_id' => $item->id,
                    'sku' => $request->sku,
                    'stock_count' => $request->stock_count,
                    'sold_count' => 0,
                ]);
            }

            DB::commit();
            return back()->with(FlashMsg::update_succeed('Product'));
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with(FlashMsg::update_failed('Product'));;
        }

        return $updated
            ? back()->with(FlashMsg::update_succeed('Product'))
            : back()->with(FlashMsg::update_failed('Product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $item)
    {
        return $item->delete()
            ? back()->with(FlashMsg::delete_succeed('Product'))
            : back()->with(FlashMsg::delete_failed('Product'));
    }

    public function clone(Product $item)
    {
        $new_item = $item->replicate();

        $rand_str = $item->slug . '-' . \Str::random();
        $new_item->title = $item->title;
        $new_item->slug =  $this->getValidSlug($rand_str);
        $new_item->status = 'draft';
        $new_item->save();

        return $new_item->save() 
            ? back()->with(FlashMsg::clone_succeed('Product'))
            : back()->with(FlashMsg::clone_failed('Product'));
    }

    public function bulk_action(Request $request)
    {
        Product::whereIn('id', $request->ids)->delete();    
        return 'ok';
    }

    public function getValidSlug(String $slug, String $type = 'insert', $id = null)
    {
        $slug = strtolower(trim($slug));
        $present_slug_taken = Product::where('slug', $slug)->count();

        if ($type == 'insert') {
            if ($present_slug_taken) {
                return $slug . '-' . rand(11111, 99999);
            }
            return $slug;
        }

        if ($type == 'update') {
            if (!$id) return false;

            $slug_changed = ! Product::where('slug', $slug)->where('id', $id)->count();

            if ($slug_changed && $present_slug_taken) {
                $new_slug = $slug . '-' . rand(11111, 99999);
                return $this->getValidSlug($new_slug, 'update', $id);
            }
            return $slug;
        }
    }

    public function getPrice(Request $request)
    {
        $product = Product::findOrFail($request->id);
        return response()->json(['price' => $product->price], 200);
    }

    /**============================================================================
     *                  ADDITIONAL INFORMATION FUNCTIONS
      ============================================================================*/
    public function insertAdditionalInformation($product_id, Request $request)
    {
        $this->validate($request, [
            'info_title' => 'nullable|array',
            'info_text' => 'nullable|array',
            'info_title.*' => 'nullable|string',
            'info_text.*' => 'nullable|string',
        ]);

        $bulk_insert_data = [];

        foreach ($request->info_title as $key => $info_title) {
            $sanitized_info_title = sanitize_html($info_title) ?? '';
            $sanitized_info_text = sanitize_html($request->info_text[$key]) ?? '';

            if (strlen($sanitized_info_title) && strlen($sanitized_info_text)) {
                $bulk_insert_data[] = [
                    'product_id' => $product_id,
                    'title' => $sanitized_info_title,
                    'text' => $sanitized_info_text,
                ];
            }
        }

        ProductAdditionalInformation::insert($bulk_insert_data);
    }

    public function updateAdditionalInformation($product_id, Request $request)
    {
        $d = ProductAdditionalInformation::where('product_id', $product_id)->delete();
        return $this->insertAdditionalInformation($product_id, $request);
    }
}
