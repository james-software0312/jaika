<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogCategory;
use App\Product\Product;
use App\Product\ProductAttribute;
use App\Product\ProductCategory;
use App\Product\Tag;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /** ============================================================================
     *                                  BLOG PAGES
      ============================================================================ */
    public function blogGrid()
    {
        $all_recent_blogs = Blog::orderBy('id', 'desc')->take(get_static_option('blog_page_recent_post_widget_item'))->get();
        $all_blogs = Blog::orderBy('id', 'desc')->paginate(get_static_option('blog_page_item'));
        $all_category = BlogCategory::where(['status' => 'publish'])->orderBy('id', 'desc')->get();
        return view('landing.blog.grid')->with([
            'all_blogs' => $all_blogs,
            'all_categories' => $all_category,
            'all_recent_blogs' => $all_recent_blogs,
        ]);
    }

    public function blogList()
    {
        $all_recent_blogs = Blog::orderBy('id', 'desc')->take(get_static_option('blog_page_recent_post_widget_item'))->get();
        $all_blogs = Blog::orderBy('id', 'desc')->paginate(get_static_option('blog_page_item'));
        $all_category = BlogCategory::where(['status' => 'publish'])->orderBy('id', 'desc')->get();
        return view('landing.blog.grid')->with([
            'all_blogs' => $all_blogs,
            'all_categories' => $all_category,
            'all_recent_blogs' => $all_recent_blogs,
        ]);
    }

    public function blogNewsUpdate()
    {
        $all_recent_blogs = Blog::orderBy('id', 'desc')->take(get_static_option('blog_page_recent_post_widget_item'))->get();
        $all_blogs = Blog::orderBy('id', 'desc')->paginate(get_static_option('blog_page_item'));
        $all_category = BlogCategory::where(['status' => 'publish'])->orderBy('id', 'desc')->get();
        return view('landing.blog.grid')->with([
            'all_blogs' => $all_blogs,
            'all_categories' => $all_category,
            'all_recent_blogs' => $all_recent_blogs,
        ]);
    }

    public function blogDetails()
    {
        $all_recent_blogs = Blog::orderBy('id', 'desc')->take(get_static_option('blog_page_recent_post_widget_item'))->get();
        $all_blogs = Blog::orderBy('id', 'desc')->paginate(get_static_option('blog_page_item'));
        $all_category = BlogCategory::where(['status' => 'publish'])->orderBy('id', 'desc')->get();
        return view('landing.blog.grid')->with([
            'all_blogs' => $all_blogs,
            'all_categories' => $all_category,
            'all_recent_blogs' => $all_recent_blogs,
        ]);
    }

    function homeOne() {
        return redirect(url('p/home-style-01/3'));
    }

    function homeTwo() {
        return redirect(url('p/home-style-02/7'));
    }

    /** ============================================================================
     *                                  PRODUCT PAGES
      ============================================================================ */
    public function shopGrid(Request $request)
    {
        $item_style = isset($request->s) && $request->s == 'list' ? 'list' : 'grid';
        return $this->calculateShopData($request, $item_style, null);
    }

    public function shopList(Request $request)
    {
        $item_style = isset($request->s) && $request->s == 'grid' ? 'grid' : 'list';
        return $this->calculateShopData($request, $item_style, null);
    }

    public function shopRightSidebar(Request $request)
    {
        $item_style = isset($request->s) && $request->s == 'list' ? 'list' : 'grid';
        return $this->calculateShopData($request, $item_style, 'right');
    }

    public function shopLeftSidebar(Request $request)
    {
        $item_style = isset($request->s) && $request->s == 'list' ? 'list' : 'grid';
        return $this->calculateShopData($request, $item_style, 'left');
    }

    /** ============================================================================
     *                                  HELPER FUNCTION
      ============================================================================ */
    private function calculateShopData($request, $item_style, $sidebar_position)
    {
        $all_category = ProductCategory::where('status', 'publish')->with('subcategory')->get();
        $all_attributes = ProductAttribute::all();
        $all_tags = Tag::all();
        $maximum_available_price = Product::query()->max('price');

        $min_price = $request->pr_min ? $request->pr_min : Product::query()->min('price');
        $max_price = $request->pr_max ? $request->pr_max : $maximum_available_price;

        $style = isset($item_style) && $item_style == 'list' ? 'list' : 'grid';

        $display_item_count = $request->count ?? get_static_option('default_item_count') ?? 5;
        $all_products = Product::query()->with('inventory')->withAvg('rating', 'rating')->where('status', 'publish');

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
                foreach ($filter_attributes as $attr) {
                    if (isset($attr['id']) && isset($attr['attribute'])) {
                        $all_products->whereJsonContains('attributes->' . $attr['id'], $attr['attribute']);
                    }
                }
            }
        }

        // filter by rating
        if ($request->rt) {
            $rating = $request->rt;
            $all_products->whereHas('rating', function ($query) use ($rating) {
                $query->where('rating', $rating);
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
        $sort_by = isset($request->sort) ? $request->sort : 'default';

        if ($sort_by == 'popularity') {
            $all_products->orderBy('sold_count', 'DESC');
        } else if ($sort_by == 'latest') {
            $all_products->orderBy('created_at', 'DESC');
        } else if ($sort_by == 'price_low') {
            $all_products->orderBy('price', 'ASC');
        } else if ($sort_by == 'price_high') {
            $all_products->orderBy('price', 'DESC');
        }

        $all_products = $all_products->paginate($display_item_count);

        return view('landing.shop', compact(
            'all_attributes',
            'all_category',
            'all_tags',
            'all_products',
            'min_price',
            'max_price',
            'display_item_count',
            'sort_by',
            'maximum_available_price',
            'style',
            'sidebar_position'
        ));
    }
}
