<?php

namespace App\Http\Controllers\Product;

use App\Helpers\FlashMsg;
use App\Http\Controllers\Controller;
use App\Product\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:product-category-list|product-category-create|product-category-edit|product-category-delete', ['only', ['index']]);
        $this->middleware('permission:product-category-create', ['only', ['store']]);
        $this->middleware('permission:product-category-edit', ['only', ['update']]);
        $this->middleware('permission:product-category-delete', ['only', ['destroy', 'bulk_action']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ProductCategory::leftJoin('media_uploads', 'media_uploads.id', '=', 'product_categories.image')
            ->select('product_categories.*', 'media_uploads.path')
            ->get()
            ->toArray();
        // $all_category = ProductCategory::all();
        return view('backend.products.category.all');
    }

    public function getList()
    {
        $categories = ProductCategory::leftJoin('media_uploads', 'media_uploads.id', '=', 'product_categories.image')
            ->select('product_categories.*', 'media_uploads.path')
            ->get()
            ->toArray();
        return response()->json($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|string|max:191|unique:product_categories',
            'status' => 'required|string|max:191',
            'image' => 'nullable|string|max:191',
        ]);

        $product_category = ProductCategory::create([
            'title' => $request->title,
            'status' => $request->status,
            'image' => $request->image,
            'parent_id' => $request->parent_id ? $request->parent_id : null,
        ]);

        return $product_category->id
            ? back()->with(FlashMsg::create_succeed(__('Product Category')))
            : back()->with(FlashMsg::create_failed(__('Product Category')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $productCategory)
    {
        $this->validate($request,[
            'title' => 'required|string|max:191',
            'status' => 'required|string|max:191',
            'image' => 'nullable|string|max:191',
        ]);

        $updated = ProductCategory::find($request->edit_id)->update([
            'title' => $request->title,
            'status' => $request->status,
            'image' => $request->image,
        ]);

        return $updated
            ? back()->with(FlashMsg::update_succeed(__('Product Category')))
            : back()->with(FlashMsg::update_failed(__('Product Category')));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $item)
    {
        return $item->delete();
    }

    public function bulk_action(Request $request){
        ProductCategory::WhereIn('id', $request->ids)->delete();
        return response()->json(['status' => 'ok']);
    }
}
