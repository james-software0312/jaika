<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Faq;
use App\Language;
use App\MediaUpload;
use App\Blog;
use App\Campaign\Campaign;
use App\ContactInfoItem;
use App\SocialIcons;
use App\User;
use App\Http\Controllers\Controller;
use App\Product\Product;
use App\Product\ProductSellInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:home_variant',['only' => ['home_variant','update_home_variant']]);
    }

    public function adminIndex()
    {
        // pills
        $total_admin = Admin::count();
        $total_user = User::count();
        $all_blogs_count = Blog::count();
        $all_products_count = Product::count();
        $all_completed_sell_count = ProductSellInfo::where('status', 'complete')->count();
        $all_pending_sell_count = ProductSellInfo::where('status', 'pending')->count();
        $total_ongoing_campaign = Campaign::where('status', 'publish')->count();
        $total_sold_amount = ProductSellInfo::where('status', 'complete')->sum('total_amount');

        // charts
        $sell_per_month = ProductSellInfo::select('id', 'created_at')
                                        ->where('status', 'complete')
                                        ->get()
                                        ->groupBy(fn ($query) => Carbon::parse($query->created_at)->format('m'));
        $user_enroll_per_month = User::select('id', 'created_at')
                                        ->get()
                                        ->groupBy(fn ($query) => Carbon::parse($query->created_at)->format('m'));

        return view('backend.admin-home')->with([
            'total_admin' => $total_admin,
            'total_user' => $total_user,
            'all_blogs_count' => $all_blogs_count,
            'all_products_count' => $all_products_count,
            'all_completed_sell_count' => $all_completed_sell_count,
            'total_ongoing_campaign' => $total_ongoing_campaign,
            'all_pending_sell_count' => $all_pending_sell_count,
            'total_sold_amount' => float_amount_with_currency_symbol($total_sold_amount),

            'sell_per_month' => $sell_per_month,
            'user_enroll_per_month' => $user_enroll_per_month,
        ]);
    }
    
    public function get_chart_data(Request $request) {
        /* -------------------------------------
            TOTAL RAISED BY MONTH CHART DATA
        ------------------------------------- */
        $all_sell_amount = ProductSellInfo::select('total_amount','created_at')
                                        ->whereYear('created_at', date('Y'))
                                        ->where(['status' => 'complete'])
                                        ->get()
                                        ->groupBy(function ($query){
                                            return Carbon::parse($query->created_at)->format('M');
                                        })->toArray();

        $chart_labels = [];
        $chart_data= [];

        foreach ($all_sell_amount as $month => $amount) {
            $chart_labels[] = $month;
            $chart_data[] =  array_sum(array_column($amount,'total_amount'));
        }

        return response()->json( [
            'labels' => $chart_labels,
            'data' => $chart_data
        ]);
    }

    public function get_chart_by_date_data(Request $request) { 
        /* -----------------------------------------------------
           TOTAL RAISED BY Per Day In last 30 days
       -------------------------------------------------------- */
        $all_sales_total_per_month = ProductSellInfo::select('total_amount','created_at')
                                                ->where(['status' => 'complete'])
                                                ->whereDate('created_at', '>', Carbon::now()->subDays(30))
                                                ->get()
                                                ->groupBy(function ($query){
                                                    return Carbon::parse($query->created_at)->format("D, d M 'y");
                                                })->toArray();
        $chart_labels = [];
        $chart_data= [];
        foreach ($all_sales_total_per_month as $month => $amount){
            $chart_labels[] = $month;
            $chart_data[] =  array_sum(array_column($amount,'total_amount'));
        }

        return response()->json( [
            'labels' => $chart_labels,
            'data' => $chart_data
        ]);
    }

    public function getSaleCountPerDayChartData(Request $request) { 
        /* -----------------------------------------------------
           TOTAL SALES Per Day In last 30 days
       -------------------------------------------------------- */
        $chart_labels = [];
        $chart_data= [];

        $all_sales_per_day = ProductSellInfo::select('id', 'created_at')
                                    ->where(['status' => 'complete'])
                                    ->whereDate('created_at', '>', Carbon::now()->subDays(30))
                                    ->get()
                                    ->groupBy(function ($query){
                                        return Carbon::parse($query->created_at)->format("D, d M 'y");
                                    })->toArray();

        foreach ($all_sales_per_day as $date => $sales){
            $chart_labels[] = $date;
            $chart_data[] =  count($sales);
        }

        return response()->json( [
            'labels' => $chart_labels,
            'data' => $chart_data
        ]);
    }

    public function getOrderCountPerDayChartData(Request $request) { 
        /* -----------------------------------------------------
           TOTAL SALES Per Day In last 30 days
       -------------------------------------------------------- */
        $chart_labels = [];
        $chart_data= [];

        $all_sales_per_day = ProductSellInfo::select('id', 'created_at')
                                    ->whereDate('created_at', '>', Carbon::now()->subDays(30))
                                    ->get()
                                    ->groupBy(function ($query){
                                        return Carbon::parse($query->created_at)->format("D, d M 'y");
                                    })->toArray();

        foreach ($all_sales_per_day as $date => $sales){
            $chart_labels[] = $date;
            $chart_data[] =  count($sales);
        }

        return response()->json( [
            'labels' => $chart_labels,
            'data' => $chart_data
        ]);
    }

    public function logged_user_details(){
        $old_details = '';
        if (empty($old_details)){
            $old_details = User::findOrFail(Auth::guard('web')->user()->id);
        }
        return $old_details;
    }

    public function admin_settings()
    {
        return view('auth.admin.settings');
    }

     public function admin_profile_update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:191',
            'email' => 'required|email|max:191',
            'image' => 'nullable|string|max:191'
        ]);
        Admin::find(Auth::user()->id)->update(['name' => $request->name, 'email' => $request->email, 'image' => $request->image]);

        return redirect()->back()->with(['msg' => __('Profile Update Success'), 'type' => 'success']);
    }


    public function admin_password_chagne(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required|string',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $user = Admin::findOrFail(Auth::id());

        if (Hash::check($request->old_password, $user->password)) {

            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();

            return redirect()->route('admin.login')->with(['msg' => __('Password Changed Successfully'), 'type' => 'success']);
        }

        return redirect()->back()->with(['msg' => __('Somethings Going Wrong! Please Try Again or Check Your Old Password'), 'type' => 'danger']);
    }

    public function adminLogout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with(['msg' => __('You Logged Out !!'), 'type' => 'danger']);
    }

    public function admin_profile()
    {
        return view('auth.admin.edit-profile');
    }

    public function admin_password()
    {
        return view('auth.admin.change-password');
    }

    public function contact()
    {
        $all_contact_info_items = ContactInfoItem::all();
        return view('backend.pages.contact')->with([
            'all_contact_info_item' => $all_contact_info_items
        ]);
    }

    public function update_contact(Request $request)
    {
        $this->validate($request, [
            'page_title' => 'required|string|max:191',
            'get_title' => 'required|string|max:191',
            'get_description' => 'required|string',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        update_static_option('contact_page_title', $request->page_title);
        update_static_option('contact_page_get_title', $request->get_title);
        update_static_option('contact_page_get_description', $request->get_description);
        update_static_option('contact_page_latitude', $request->latitude);
        update_static_option('contact_page_longitude', $request->longitude);

        return redirect()->back()->with(['msg' => __('Contact Page Info Update Success'), 'type' => 'success']);
    }


    public function blog_page()
    {
        $all_languages =  Language::orderBy('default','desc')->get();
        return view('backend.pages.blog')->with(['all_languages' => $all_languages]);
    }

    public function blog_page_update(Request $request)
    {

            $this->validate($request, [
                'blog_page_title' => 'nullable',
                'blog_page_item' => 'nullable',
                'blog_page_category_widget_title' => 'nullable',
                'blog_page_recent_post_widget_title' => 'nullable',
                'blog_page_recent_post_widget_item' => 'nullable',
            ]);
            $blog_page_title = 'blog_page_title';
            $blog_page_item = 'blog_page_item';
            $blog_page_category_widget_title = 'blog_page_category_widget_title';
            $blog_page_recent_post_widget_title = 'blog_page_recent_post_widget_title';
            $blog_page_recent_post_widget_item = 'blog_page_recent_post_widget_item';

            update_static_option('blog_page_title', $request->$blog_page_title);
            update_static_option('blog_page_item', $request->$blog_page_item);
            update_static_option('blog_page_category_widget_title', $request->$blog_page_category_widget_title);
            update_static_option('blog_page_recent_post_widget_title', $request->$blog_page_recent_post_widget_title);
            update_static_option('blog_page_recent_post_widget_item', $request->$blog_page_recent_post_widget_item);


        return redirect()->back()->with(['msg' => __('Blog Settings Update Success'), 'type' => 'success']);
    }


    public function home_variant()
    {
        return view('backend.pages.home.home-variant');
    }

    public function update_home_variant(Request $request)
    {
        $this->validate($request, [
            'home_page_variant' => 'required|string'
        ]);
        update_static_option('home_page_variant', $request->home_page_variant);
        return redirect()->back()->with(['msg' => __('Home Variant Settings Updated..'), 'type' => 'success']);
    }

    public function admin_set_static_option(Request $request)
    {
        $this->validate($request,[
            'static_option' => 'required|string',
            'static_option_value' => 'required|string',
        ]);
        set_static_option($request->static_option,$request->static_option_value);
        return 'ok';
    }

    public function admin_get_static_option(Request $request)
    {
        $this->validate($request,[
            'static_option' => 'required|string'
        ]);
        $data = get_static_option($request->static_option);
        return response()->json($data);
    }

    public function admin_update_static_option(Request $request)
    {
        $this->validate($request,[
            'static_option' => 'required|string',
            'static_option_value' => 'required|string',
        ]);
        update_static_option($request->static_option,$request->static_option_value);
        return 'ok';
    }

    public function dark_mode_toggle(Request $request){
        if($request->mode == 'off'){
            update_static_option('site_admin_dark_mode','on');
        }
        if($request->mode == 'on'){
            update_static_option('site_admin_dark_mode','off');
        }

        return response()->json(['status'=>'done']);
    }

}
