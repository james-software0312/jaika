<?php

namespace App\Http\Controllers;

use App\Action\CartAction;
use App\Action\CompareAction;
use App\Action\RegistrationAction;
use App\Admin;
use App\Campaign\CampaignProduct;
use App\ContactInfoItem;
use App\Faq;
use App\Helpers\HomePageStaticSettings;
use App\Http\Controllers\Controller;
use App\ImageGallery;
use App\ImageGalleryCategory;
use App\Language;
use App\Mail\AdminResetEmail;
use App\Mail\BasicMail;
use App\Mail\CallBack;
use App\Mail\ContactMessage;
use App\Mail\PlaceOrder;
use App\Menu;
use App\Newsletter;
use App\Page;
use App\Blog;
use App\BlogCategory;
use App\Campaign\Campaign;
use App\ContactModel;
use App\HeaderSlider;
use App\KeyFeatures;
use App\PageBuilder\Services\ProductRenderServices;
use App\StaticOption;
use App\User;
use App\Country\Country;
use App\Country\State;
use App\Helpers\CartHelper;
use App\Helpers\CompareHelper;
use App\Helpers\FlashMsg;
use App\Helpers\WishlistHelper;
use App\Product\Product;
use App\Product\ProductAttribute;
use App\Product\ProductCategory;
use App\Product\ProductRating;
use App\Product\ProductSellInfo;
use App\Product\ProductSubCategory;
use App\StockItemModel;
use App\Product\Tag;
use App\Shipping\ShippingMethod;
use App\Shipping\UserShippingAddress;
use App\Tax\CountryTax;
use App\Tax\StateTax;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Svg\Tag\Image;

class FrontendController extends Controller
{
    public function index()
    {
        // todo: check for custom page selection for homepage
        // todo: if has custom page for render as home page
        // todo: return dynamic pages blade along with data

        // todo: fetch static_option table row for dynamic page
        $page = StaticOption::where("option_name","home_page_identity")->select("id","option_value")->first();
        $default = StaticOption::where("option_name","default_home_page")->select("id","option_value")->first();
        if (!empty($page->option_value) && $default->option_value == "on") {
            $page_post = Page::where('id', $page->option_value)->first();

            return view('frontend.pages.dynamic-single', compact('page_post'));
        }

        $all_header_slider = HeaderSlider::all();
        $all_blog = Blog::where(['status' => 'publish'])->orderBy('id', 'desc')->take(get_static_option('home_page_01_latest_news_items'))->get();
        //make a function to call all static option by home page
        $static_field_data = StaticOption::whereIn('option_name', HomePageStaticSettings::get_home_field(get_static_option('home_page_variant')))->get()->mapWithKeys(function ($item) {
            return [$item->option_name => $item->option_value];
        })->toArray();

        return view('frontend.frontend-home')->with([
            'all_header_slider' => $all_header_slider,
            'all_blog' => $all_blog,
            'static_field_data' => $static_field_data,
        ]);
    }

    public function home_page_change($id)
    {
        $all_header_slider = HeaderSlider::all();
        $all_blog = Blog::where(['status' => 'publish'])->orderBy('id', 'desc')->take(get_static_option('home_page_01_latest_news_items'))->get(); //make a function to call all static option by home page
        $static_field_data = StaticOption::whereIn('option_name', HomePageStaticSettings::get_home_field($id))->get()->mapWithKeys(function ($item) {
            return [$item->option_name => $item->option_value];
        })->toArray();


        return view('frontend.frontend-home-demo')->with([
            'all_header_slider' => $all_header_slider,
            'all_blog' => $all_blog,
            'static_field_data' => $static_field_data,
            'home_page' => $id,
        ]);
    }


    public function flutterwave_pay_get()
    {
        return redirect_404_page();
    }

    /** ==================================================================
     *                  BLOG PAGES
      ==================================================================*/
    public function blog_page()
    {
        $all_recent_blogs = Blog::orderBy('id', 'desc')->take(get_static_option('blog_page_recent_post_widget_item'))->get();
        $all_blogs = Blog::orderBy('id', 'desc')->paginate(get_static_option('blog_page_item'));
        $all_category = BlogCategory::where(['status' => 'publish'])->orderBy('id', 'desc')->get();
        return view('frontend.pages.blog.blog')->with([
            'all_blogs' => $all_blogs,
            'all_categories' => $all_category,
            'all_recent_blogs' => $all_recent_blogs,
        ]);
    }

    public function category_wise_blog_page($id)
    {
        $all_blogs = Blog::where(['blog_categories_id' => $id])->orderBy('id', 'desc')->paginate(get_static_option('blog_page_item'));
        if (empty($all_blogs)) {
            abort(404);
        }
        $all_recent_blogs = Blog::orderBy('id', 'desc')->take(get_static_option('blog_page_recent_post_widget_item'))->get();
        $all_category = BlogCategory::where(['status' => 'publish'])->orderBy('id', 'desc')->get();
        $category_name = BlogCategory::where(['id' => $id, 'status' => 'publish'])->first()->name;
        return view('frontend.pages.blog.blog-category')->with([
            'all_blogs' => $all_blogs,
            'all_categories' => $all_category,
            'category_name' => $category_name,
            'all_recent_blogs' => $all_recent_blogs,
        ]);
    }

    public function tags_wise_blog_page($tag)
    {
        $all_blogs = Blog::Where('tags', 'LIKE', '%' . $tag . '%')
            ->orderBy('id', 'desc')->paginate(get_static_option('blog_page_item'));
        if (empty($all_blogs)) {
            abort(404);
        }
        $all_recent_blogs = Blog::orderBy('id', 'desc')->take(get_static_option('blog_page_recent_post_widget_item'))->get();
        $all_category = BlogCategory::where(['status' => 'publish'])->orderBy('id', 'desc')->get();
        return view('frontend.pages.blog.blog-tags')->with([
            'all_blogs' => $all_blogs,
            'all_categories' => $all_category,
            'tag_name' => $tag,
            'all_recent_blogs' => $all_recent_blogs,
        ]);
    }

    public function blog_search_page(Request $request)
    {
        $all_recent_blogs = Blog::orderBy('id', 'desc')->take(get_static_option('blog_page_recent_post_widget_item'))->get();
        $all_category = BlogCategory::where(['status' => 'publish'])->orderBy('id', 'desc')->get();
        $all_blogs = Blog::Where('title', 'LIKE', '%' . $request->search . '%')
            ->orderBy('id', 'desc')->paginate(get_static_option('blog_page_item'));

        return view('frontend.pages.blog.blog-search')->with([
            'all_blogs' => $all_blogs,
            'all_categories' => $all_category,
            'search_term' => $request->search,
            'all_recent_blogs' => $all_recent_blogs,
        ]);
    }

    public function blog_single_page($slug)
    {
        $blog_post = Blog::where('slug', $slug)->first();
        if (empty($blog_post)) {
            abort('404');
        }
        $all_recent_blogs = Blog::orderBy('id', 'desc')->paginate(get_static_option('blog_page_recent_post_widget_item'));
        $all_category = BlogCategory::where(['status' => 'publish'])->orderBy('id', 'desc')->get();

        $all_related_blog = Blog::Where('blog_categories_id', $blog_post->blog_categories_id)->orderBy('id', 'desc')->take(6)->get();

        $blog_post->increment('visit_count');

        return view('frontend.pages.blog.blog-single')->with([
            'blog_post' => $blog_post,
            'all_categories' => $all_category,
            'all_recent_blogs' => $all_recent_blogs,
            'all_related_blog' => $all_related_blog,
        ]);
    }


    public function dynamic_single_page($slug)
    {
        $page_post = Page::where('slug', $slug)->first();

        if ($page_post->id) {
            return view('frontend.pages.dynamic-single', compact('page_post'));
        }

        abort(404);
    }

    /** ===================================================================
     *                  ADMIN AUTH FUNCTIONS
      ===================================================================*/
    public function showAdminForgetPasswordForm()
    {
        return view('auth.admin.forget-password');
    }

    public function sendAdminForgetPasswordMail(Request $request)
    {
        $this->validate($request, ['username' => 'required|string:max:191']);

        $user_info = Admin::where('username', $request->username)->orWhere('email', $request->username)->first();

        if (!empty($user_info)) {
            $token_id = Str::random(30);
            $existing_token = DB::table('password_resets')->where('email', $user_info->email)->delete();
            if (empty($existing_token)) {
                DB::table('password_resets')->insert(['email' => $user_info->email, 'token' => $token_id]);
            }
            $message = 'Here is you password reset link, If you did not request to reset your password just ignore this mail. <a class="btn" href="' . route('admin.reset.password', ['user' => $user_info->username, 'token' => $token_id]) . '">Click Reset Password</a>';
            $data = [
                'username' => $user_info->username,
                'message' => $message
            ];

            try {
                Mail::to($user_info->email)->send(new AdminResetEmail($data));
            } catch (\Exception $e) {
                return redirect()->back()->with([
                    'msg' => $e->getMessage(),
                    'type' => 'success'
                ]);
            }

            return redirect()->back()->with([
                'msg' => __('Check Your Mail For Reset Password Link'),
                'type' => 'success'
            ]);
        }
        return redirect()->back()->with([
            'msg' => __('Your Username or Email Is Wrong!!!'),
            'type' => 'danger'
        ]);
    }

    public function showAdminResetPasswordForm($username, $token)
    {
        return view('auth.admin.reset-password')->with([
            'username' => $username,
            'token' => $token
        ]);
    }

    public function AdminResetPassword(Request $request)
    {
        $this->validate($request, [
            'token' => 'required',
            'username' => 'required',
            'password' => 'required|string|min:8|confirmed'
        ]);
        $user_info = Admin::where('username', $request->username)->first();
        $user = Admin::findOrFail($user_info->id);
        $token_iinfo = DB::table('password_resets')->where(['email' => $user_info->email, 'token' => $request->token])->first();
        if (!empty($token_iinfo)) {
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->route('admin.login')->with(['msg' => __('Password Changed Successfully'), 'type' => 'success']);
        }

        return redirect()->back()->with(['msg' => __('Somethings Going Wrong! Please Try Again or Check Your Old Password'), 'type' => 'danger']);
    }

    public function lang_change(Request $request)
    {
        session()->put('lang', $request->lang);
        return redirect()->route('homepage');
    }

    /** ======================================================================================
     *                  OTHER PAGE FUNCTIONS
      ======================================================================================*/
    public function about_page()
    {
        return view('frontend.pages.about');
    }

    public function faq_page()
    {
        $all_faq = Faq::where(['status' => 'publish'])->get();
        return view('frontend.pages.faq-page')->with([
            'all_faqs' => $all_faq
        ]);
    }

    public function contact_page()
    {
        $all_contact_info = ContactInfoItem::get();
        return view('frontend.pages.contact-page')->with([
            'all_contact_info' => $all_contact_info
        ]);
    }

    public function request_quote()
    {
        return view('frontend.pages.quote-page');
    }

    public function products_category($id, $any = "")
    {
        $default_item_count = get_static_option('default_item_count');
        $all_products = Product::where(['status' => 'publish', 'category_id' => $id])
            ->orderBy('id', 'desc')
            ->paginate($default_item_count);

        $category_name = ProductCategory::find($id)->title;

        if (empty($category_name)) {
            abort(404);
        }

        return view('frontend.pages.product.category')->with([
            'all_products' => $all_products,
            'category_name' => $category_name,
        ]);
    }

    public function products_subcategory($id, $any = "")
    {
        $default_item_count = get_static_option('default_item_count');
        $all_products = Product::where('status', 'publish')
            ->whereJsonContains('sub_category_id', "$id")
            ->orderBy('id', 'desc')
            ->paginate($default_item_count);

        $category_name = ProductSubCategory::find($id)->title;

        if (empty($category_name)) {
            abort(404);
        }

        return view('frontend.pages.product.subcategory')->with([
            'all_products' => $all_products,
            'category_name' => $category_name,
        ]);
    }

    public function subscribe_newsletter(Request $request)
    {
        $this->validate($request, ['email' => 'required|string|email|max:191|unique:newsletters']);

        $verify_token = Str::random(32);

        Newsletter::create([
            'email' => $request->email,
            'verified' => 0,
            'token' => $verify_token
        ]);

        $message = __('Verify your email to get all news from ') . get_static_option('site_title') . '<div class="btn-wrap"> <a class="anchor-btn" href="' . route('subscriber.verify', ['token' => $verify_token]) . '">' . __('verify email') . '</a></div>';

        $data = [
            'message' => $message,
            'subject' => __('verify your email')
        ];

        try {
            //send verify mail to newsletter subscriber
            Mail::to($request->email)->send(new BasicMail($data));
        } catch (\Throwable $th) {
            return response()->json(FlashMsg::explain('success', __('Thanks for Subscribe Our Newsletter')));
        }

        return response()->json(FlashMsg::explain('success', __('Thanks for Subscribe Our Newsletter')));
    }

    public function subscriber_verify(Request $request)
    {
        $newsletter = Newsletter::where('token', $request->token)->first();
        $title = __('Sorry');
        $description = __('your token is expired');
        if (!is_null($newsletter)) {
            Newsletter::where('token', $request->token)->update([
                'verified' => 1
            ]);
            $title = __('Thanks');
            $description = __('we are really thankful to you for subscribe our newsletter');
        }
        return view('frontend.thankyou', compact('title', 'description'));
    }

    public function showUserForgetPasswordForm()
    {
        return view('frontend.user.forget-password');
    }

    public function sendUserForgetPasswordMail(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string:max:191'
        ]);
        $user_info = User::where('username', $request->username)->orWhere('email', $request->username)->first();
        if (!empty($user_info)) {
            $token_id = Str::random(30);
            $existing_token = DB::table('password_resets')->where('email', $user_info->email)->delete();
            if (empty($existing_token)) {
                DB::table('password_resets')->insert(['email' => $user_info->email, 'token' => $token_id]);
            }
            $message = __('Here is you password reset link, If you did not request to reset your password just ignore this mail.') . ' <a class="btn" href="' . route('user.reset.password', ['user' => $user_info->username, 'token' => $token_id]) . '">' . __('Click Reset Password') . '</a>';
            $data = [
                'username' => $user_info->username,
                'message' => $message
            ];
            try {
                Mail::to($user_info->email)->send(new AdminResetEmail($data));
            } catch (\Exception $e) {
                return redirect()->back()->with([
                    'type' => 'danger',
                    'msg' => $e->getMessage()
                ]);
            }

            return redirect()->back()->with([
                'msg' => __('Check Your Mail For Reset Password Link'),
                'type' => 'success'
            ]);
        }
        return redirect()->back()->with([
            'msg' => __('Your Username or Email Is Wrong!!!'),
            'type' => 'danger'
        ]);
    }

    public function showUserResetPasswordForm($username, $token)
    {
        return view('frontend.user.reset-password')->with([
            'username' => $username,
            'token' => $token
        ]);
    }

    public function UserResetPassword(Request $request)
    {
        $this->validate($request, [
            'token' => 'required',
            'username' => 'required',
            'password' => 'required|string|min:8|confirmed'
        ]);
        $user_info = User::where('username', $request->username)->first();
        $user = User::findOrFail($user_info->id);
        $token_iinfo = DB::table('password_resets')->where(['email' => $user_info->email, 'token' => $request->token])->first();
        if (!empty($token_iinfo)) {
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->route('user.login')->with(['msg' => __('Password Changed Successfully'), 'type' => 'success']);
        }

        return redirect()->back()->with(['msg' => __('Somethings Going Wrong! Please Try Again or Check Your Old Password'), 'type' => 'danger']);
    }

    public function ajax_login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string',
            'password' => 'required|min:6'
        ], [
            'username.required'   => __('username required'),
            'password.required' => __('password required'),
            'password.min' => __('password length must be 6 characters')
        ]);

        if (Auth::guard('web')->attempt(['username' => $request->username, 'password' => $request->password], $request->get('remember'))) {
            return response()->json([
                'msg' => __('login Success Redirecting'),
                'type' => 'danger',
                'status' => 'valid'
            ]);
        }
        return response()->json([
            'msg' => __('Username Or Password Doest Not Matched !!!'),
            'type' => 'danger',
            'status' => 'invalid'
        ]);
    }

    public function user_campaign()
    {
        if (Auth::guard('web')->check()) {
            return redirect()->route('user.campaign.new');
        }
        return view('frontend.user.login')->with(['title' => __('Login To Create New Campaign')]);
    }

    /** ======================================================================
     *                  USER SHIPPING ADDRESS
     * ======================================================================*/
    public function addUserShippingAddress(Request $request)
    {
        if (!auth('web')->check()) {
            return back()->with(FlashMsg::explain('danger', __('Please login to add new address')));
        }

        $this->validate($request, [
            'name' => 'required|string|max:191',
            'address' => 'required|string|max:191',
        ]);

        $UserShippingAddress = UserShippingAddress::create([
            'user_id' => auth('web')->user()->id,
            'name' => $request->name,
            'address' => $request->address
        ]);

      return redirect()->route('user.shipping.address.all');
    }

    /** ======================================================================
     *                  FRONTEND PRODUCT FUNCTIONS
     * ======================================================================*/
    public function single_product_page($slug)
    {
        // dd($slug);
        $product = Product::where('slug', $slug)->with('additionalInfo')->first();
        $unit = StockItemModel::where('product_id', $product->id)
        // ->select('unitconverter')
        ->first();
        if ($product) {
            $sub_category_arr = json_decode($product->sub_category_id, true);

            $related_products = Product::whereJsonContains('sub_category_id', $sub_category_arr)
                ->with('campaignProduct', 'campaignSoldProduct')
                ->where('id', '!=', $product->id)->get();

            $user = auth('web')->user();
            $user_has_item = false;

            if (!$related_products->count()) {
                $related_products = Product::where('category_id', $product->category_id)->with('inventory', 'campaignProduct', 'campaignSoldProduct')->where('id', '!=', $product->id)->get();
            }

            if ($user) {
                $user_has_item = !ProductSellInfo::where('user_id', $user->id)->where('product_id', $product->id)->count();
            }
            $ratings = ProductRating::where('product_id', $product->id)->where('status', 1)->with('user')->get();
            $avg_rating = $ratings->count() ? round($ratings->sum('rating') / $ratings->count()) : null;
            return view('frontend.product.details', compact('product', 'related_products', 'user_has_item', 'ratings', 'avg_rating', 'unit'));
        }
        return abort(404);
    }

    public function products(Request $request)
    {

        // Fetch all categories
        $allCategories = ProductCategory::all();

        // Build a nested structure
        $categories = $this->buildCategoryTree($allCategories);
        $all_category = ProductCategory::select("id","title")->where('status', 'publish')->with('subcategory')->get();
        $all_attributes = ProductAttribute::all();
        $all_tags = Tag::all();
        $maximum_available_price = Product::query()->max('price');
        $sub_cat_details = ProductSubCategory::with('category')->find($request->subcat);
        $cat = optional(optional($sub_cat_details)->category)->id;

        $min_price = $request->pr_min ? $request->pr_min : Product::query()->min('price');
        $max_price = $request->pr_max ? $request->pr_max : $maximum_available_price;

        $style = isset($request->s) && $request->s == 'list' ? 'list' : 'grid';

        $display_item_count = $request->count ?? get_static_option('default_item_count') ?? 5;
        $all_products = Product::query()
        ->with('inventory')
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
        $sort_by = isset($request->sort) ? $request->sort : 'default';

        if ($sort_by == 'popularity') {
            $all_products->orderBy('sold_count', 'DESC');
        } else if ($sort_by == ('latest' || 'default')) {
            $all_products->orderBy('created_at', 'DESC');
        } else if ($sort_by == 'price_low') {
            $all_products->orderBy('price', 'ASC');
        } else if ($sort_by == 'price_high') {
            $all_products->orderBy('price', 'DESC');
        }

        $all_products = $all_products->paginate($display_item_count)->withQueryString();
        
        if ($all_products->count() <= $display_item_count) {
            $request->page = 1;
        }


        return view('frontend.product.all', compact(
            'all_products',
            'style',
            'all_category',
            'all_attributes',
            'min_price',
            'max_price',
            'display_item_count',
            'sort_by',
            'all_tags',
            'maximum_available_price',
            'cat',
            'categories',
        ));
    }

    // Helper function to build a category tree recursively
    private function buildCategoryTree($categories, $parentId = null)
    {
        return $categories
            ->where('parent_id', $parentId)
            ->where('status', 'publish')
            ->map(function ($category) use ($categories) {
                $category->children = $this->buildCategoryTree($categories, $category->id);
                return $category;
            });
    }

    public function getProductAttributeHtml(Request $request)
    {
        $product = Product::where('slug', $request->slug)->first();

        if ($product) {
            return view('frontend.partials.product-attributes', compact('product'));
        }
    }

    /** ======================================================================*                  CART FUNCTIONS
     * ======================================================================*/
    public function cartPage(Request $request)
    {
        $default_shipping_cost = CartAction::getDefaultShippingCost();
        $all_cart_items = CartHelper::getItems();
        
        // validate stock count here ...
        CartAction::validateItemQuantity();

        $all_cart_items = CartHelper::getItems();
        $products = Product::whereIn('id', array_keys($all_cart_items))->get();

        $subtotal = CartAction::getCartTotalAmount($all_cart_items, $products);
        $total = CartAction::calculateCoupon($request, $subtotal, $products);

        return view('frontend.cart.all', compact('all_cart_items', 'products', 'subtotal', 'total'));
    }

    public function checkoutPage(Request $request)
    {
        $default_shipping_cost = CartAction::getDefaultShippingCost();
        $default_shipping = CartAction::getDefaultShipping();
        $user = getUserByGuard('web');

        $all_user_shipping = [];

        if (auth('web')->check()) {
            $all_user_shipping = UserShippingAddress::where('user_id', auth('web')->user()->id)->get();
        }

        $countries = Country::where('status', 'publish')->get();

        // if not campaign
        $all_cart_items = CartHelper::getItems();
        $products = Product::whereIn('id', array_keys($all_cart_items))->get();

        $subtotal = CartAction::getCartTotalAmount($all_cart_items, $products);
        $subtotal_with_tax = $subtotal + $default_shipping_cost;
        $total = CartAction::calculateCoupon($request, $subtotal_with_tax, $products);
        $coupon_amount = CartAction::calculateCoupon($request, $subtotal_with_tax, $products, 'DISCOUNT');

        $tax_data = CartAction::getDefaultTax($subtotal);
        $tax = $tax_data['tax'];
        $tax_percentage = $tax_data['tax_percentage'];

        $setting_text = StaticOption::select('option_name', 'option_value')->whereIn('option_name', [
            'returning_customer_text',
            'toggle_login_text',
            'checkout_page_terms_text',
            'checkout_page_terms_link_url',
            'signin_title',
            'signin_subtitle',
            'remember_text',
            'remember_signin_btn_text',
            'have_coupon_text',
            'enter_coupon_text',
            'coupon_title',
            'coupon_subtitle',
            'coupon_placeholder',
            'apply_coupon_btn_text',
            'checkout_page_title',
            'create_account_text',
            'order_summary_title',
            'subtotal_text',
            'shipping_text',
            'vat_text',
            'discount_text',
            'coupon_text',
            'total_text',
            'proceed_to_checkout_btn_text',
            'return_to_cart_btn_text',
        ])->pluck('option_value', 'option_name')->toArray();

        return view('frontend.cart.checkout', compact(
            'all_cart_items',
            'all_user_shipping',
            'products',
            'subtotal',
            'countries',
            'default_shipping_cost',
            'default_shipping',
            'total',
            'user',
            'coupon_amount',
            'tax',
            'tax_percentage',
            'setting_text'
        ));
    }

    /** ======================================================================
     *                  WISHLIST FUNCTIONS
     * ======================================================================*/
    public function wishlistPage(Request $request)
    {
        $all_wishlist_items = WishlistHelper::getItems();
        $products = Product::whereIn('id', array_keys($all_wishlist_items))->get();
        return view('frontend.wishlist.all', compact('all_wishlist_items', 'products'));
    }

    /** ======================================================================
     *                  COMPARE FUNCTIONS
     * ======================================================================*/
    public function productsComparePage(Request $request)
    {
        $request->validate(['index' => 'nullable|numeric']);

        $all_compare_items = CompareHelper::getItems();
        $all_compare_items = array_reverse($all_compare_items);

        $index = isset($request->index) ? (int) $request->index : 1;
        $index = $index > 0 ? $index - 1 : 0; // array index

        $display_compare_items = [];

        if (isset($all_compare_items[$index])) {
            $display_compare_items = [
                $all_compare_items[$index]
            ];
        }

        if (isset($all_compare_items[$index + 1])) {
            $display_compare_items[] = $all_compare_items[$index + 1];
        }

        $products = Product::with('additionalInfo', 'category', 'inventory','rating')
            ->withAvg('rating', 'rating')
            ->whereIn('id', $display_compare_items)
            ->get();
        $product_ids = $products->pluck('id')->toArray();

        $categories = CompareAction::getCategories($products);
        $all_ratings = CompareAction::getRatings($products);

        return view('frontend.compare.all', compact(
            'display_compare_items',
            'products',
            'product_ids',
            'categories',
            'all_ratings'
        ));
    }

    /** ======================================================================
     *                  PAYMENT STATUS FUNCTIONS
     * ======================================================================*/
    public function product_payment_success($id)
    {
        $extract_id = substr($id, 6);
        $extract_id = substr($extract_id, 0, -6);

        $payment_details = ProductSellInfo::findOrFail($extract_id);

        return view('frontend.payment.payment-success')->with([
            'payment_details' => $payment_details,
        ]);
    }

    public function product_payment_cancel($id='')
    {
        return view('frontend.payment.payment-cancel');
    }

    /** ======================================================================
     *                  PRODUCTS FILTER FUNCTIONS
     * ======================================================================*/
    public function topRatedProducts(Request $req)
    {
        $products = Product::where('status', 'publish')
            ->withAvg('rating', 'rating')
            ->with('inventory')
            ->orderBy('rating_avg_rating', 'DESC')
            ->take(8)
            ->get();

        if(($req->style ?? "") == "two"){
            return view("frontend.partials.product_filter_style_two",compact("products"))->render();
        }

        return view('frontend.partials.filter-item', compact('products'));
    }

    public function topSellingProducts(Request $req)
    {
        $products = Product::where('status', 'publish')
            ->withAvg('rating', 'rating')
            ->with('inventory')
            ->orderBy('sold_count', 'DESC')
            ->take(8)
            ->get();

        if(($req->style ?? "") == "two"){
            return view("frontend.partials.product_filter_style_two",compact("products"))->render();
        }

        return view('frontend.partials.filter-item', compact('products'));
    }

    public function newProducts(Request $req)
    {
        $products = ProductRenderServices::new_products(8);

        if(isset($req->style) && $req->style == "two"){
            return view("frontend.partials.product_filter_style_two",compact("products"))->render();
        }

        return view('frontend.partials.filter-item', compact('products'));
    }

    public function campaignProduct(Request $req){
        $limit = $this->validated_item_count($req);
        $products = Product::where('status', 'publish')
            ->withAvg('rating', 'rating')
            ->join("campaign_products","campaign_products.product_id","=","products.id")
            ->orderBy('campaign_products.id', 'DESC')
            ->where("campaign_products.end_date",">",date("Y-m-d H:i:s"))
            ->take($limit)
            ->get();

        return view("frontend.partials.product_filter_style_two",compact("products"))->render();
    }

    public function discountedProduct(Request $req){
        $limit = $this->validated_item_count($req);

        $products = Product::where("status","publish")
            ->withAvg('rating', 'rating')
            ->with("inventory")
            ->where("price" ,">","0")
            ->orderBy("products.id","DESC")
            ->take($limit)
            ->get();

        return view("frontend.partials.product_filter_style_two",compact("products"))->render();
    }

    private function validated_item_count($req){
        if($req->limit ?? false){
            $data = Validator::make($req->all(),["limit" => "required"]);

            return $data->safe()->only("limit")["limit"];
        }

        return null;
    }
    /** ======================================================================
     *                          CAMPAIGN PAGE
     * ======================================================================*/
    public function allCampaignPage()
    {
        $all_campaigns = Campaign::where('status', 'publish')->get();
        return view('frontend.campaign.all-campaign', compact('all_campaigns'));
    }

    public function campaignPage($id, $any = "")
    {
        $campaign = Campaign::with(['products', 'products.product'])->findOrFail($id);
        $products = optional($campaign->products);
        return view('frontend.campaign.index', compact('campaign'));
    }

    public function flashSalePage()
    {
        # code...
    }

    /** =====================================================================
     *                          AJAX FUNCTIONS
       ===================================================================== */
    public function getCountryInfo(Request $request)
    { 
        $this->validate($request, ['id' => 'required|exists:countries']);

        $country_tax = CountryTax::where('country_id', $request->id)->first();
        $shipping_options = getCountryShippingCost('country', $request->id);
        $default_shipping = CartAction::getDefaultShipping();
        $default_shipping_cost = CartAction::getDefaultShippingCost();
        $states = State::select('id', 'name')->where('country_id', $request->id)->get();

        $all_cart_items = CartHelper::getItems();
        $products = Product::whereIn('id', array_keys($all_cart_items))->get();
        $subtotal = CartAction::getCartTotalAmount($all_cart_items, $products);

        $tax = $country_tax ? $subtotal / 100 * $country_tax->tax_percentage : 0;

        return response()->json([
            'tax' => $tax,
            'tax_percentage' => optional($country_tax)->tax_percentage,
            'states' => $states,
            'shipping_options' => $shipping_options,
            'default_shipping' => $default_shipping,
            'default_shipping_cost' => $default_shipping_cost,
        ], 200);
    }

    public function getStateInfo(Request $request)
    {
        $this->validate($request, ['id' => 'required|exists:states']);

        $state_tax = StateTax::where('state_id', $request->id)->first();
        $default_shipping = CartAction::getDefaultShipping();
        $default_shipping_cost = CartAction::getDefaultShippingCost();
        $shipping_options = getCountryShippingCost('state', $request->id);

        $all_cart_items = CartHelper::getItems();
        $products = Product::whereIn('id', array_keys($all_cart_items))->get();
        $subtotal = CartAction::getCartTotalAmount($all_cart_items, $products);

        $tax = $state_tax ? $subtotal / 100 * $state_tax->tax_percentage : 0;

        return response()->json([
            'tax' => $tax,
            'tax_percentage' => optional($state_tax)->tax_percentage,
            'shipping_options' => $shipping_options,
            'default_shipping' => $default_shipping,
            'default_shipping_cost' => $default_shipping_cost,
        ], 200);
    }

     /**
     * Store a newly created resource in storage. 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function product_rating_store(Request $request)
    {
        $user = auth('web')->user();
        if (!$user) {
            return back()->with(FlashMsg::explain('danger', __('Login to submit rating')));
        }

        $this->validate($request, [
            'id' => 'required|exists:products',
            'rating' => 'required|string',
            'comment' => 'required|string',
        ]);

        $rating = abs($request->rating) == 0 ? 1 : abs($request->rating);

        if ($request->rating > 5) {
            $rating = 5;
        }

        // ensure rating not inserted before
        $user_rated_already = !! ProductRating::where('product_id', $request->id)->where('user_id', $user->id)->count();
        if ($user_rated_already) {
            return back()->with(FlashMsg::explain('danger', __('You have rated before')));
        }

        $rating = ProductRating::create([
            'product_id' => $request->id,
            'user_id' => $user->id,
            'status' => 0,
            'rating' => $rating,
            'review_msg' => $request->comment,
        ]);

        return $rating->id
            ? back()->with(FlashMsg::create_succeed('rating'))
            : back()->with(FlashMsg::create_failed('rating'));
    }

    /**
     * Validate cart against selected shipping method's minimum amount
     */
    public function validateCheckoutShipping(Request $request)
    {
        $request->validate(['id' => 'required|exists:shipping_method_options,shipping_method_id']);
        $is_valid = CartAction::validateSelectedShipping($request->id, $request->coupon);
        return response()->json([
            'status' => $is_valid ? 'success' : 'fail'
        ]);
    }

    public function get_states(Request $request){
        $states = \App\Country\State::select("id","name")->where("country_id",request()->country_id)->get();
        return view("frontend.user.states",compact("states"))->render();
    }
}
