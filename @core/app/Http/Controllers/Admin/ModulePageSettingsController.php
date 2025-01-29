<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FlashMsg;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModulePageSettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /** ==============================================
     *              WISHLIST SETTINGS
      ============================================== */
    public function wishlistPageSettings()
    {
        return view('backend.settings.wishlist');
    }

    public function storeWishlistPageSettings(Request $request)
    {
        $all_field_rules = [
            'empty_wishlist_image' => 'nullable|string',
            'empty_wishlist_text' => 'nullable|string',
            'send_to_cart_text' => 'nullable|string',
            'clear_wishlist_text' => 'nullable|string',
        ];
        $this->validateAndInsert($request, $all_field_rules);
        return back()->with(FlashMsg::settings_update());
    }

    /** ==============================================
     *              CART SETTINGS
      ============================================== */
    public function cartPageSettings()
    {
        return view('backend.settings.cart');
    }

    public function storeCartPageSettings(Request $request)
    {
        $all_field_rules = [
            'empty_cart_text' => 'nullable|string',
            'back_to_home_text' => 'nullable|string',
            'empty_cart_image' => 'nullable|string',
            'clear_cart_text' => 'nullable|string',
            'update_cart_text' => 'nullable|string',
            'cart_continue_shopping_text' => 'nullable|string',
            'cart_coupon_discount_title' => 'nullable|string',
            'cart_coupon_discount_subtitle' => 'nullable|string',
            'cart_coupon_discount_placeholder' => 'nullable|string',
            'cart_apply_coupon_text' => 'nullable|string',
            'cart_total_title' => 'nullable|string',
            'cart_sub_total_text' => 'nullable|string',
            'cart_proceed_to_checkout_text' => 'nullable|string',
        ];
        $this->validateAndInsert($request, $all_field_rules);
        return back()->with(FlashMsg::settings_update());
    }

    /** ==============================================
     *              CHECKOUT SETTINGS
      ============================================== */
    public function checkoutPageSettings()
    {
        return view('backend.settings.checkout');
    }

    public function storeCheckoutPageSettings(Request $request)
    {
        $all_field_rules = [
            'returning_customer_text' => 'nullable|string',
            'toggle_login_text' => 'nullable|string',
            'checkout_page_terms_text' => 'nullable|string',
            'checkout_page_terms_link_url' => 'nullable|string',
            'signin_title' => 'nullable|string',
            'signin_subtitle' => 'nullable|string',
            'remember_text' => 'nullable|string',
            'remember_signin_btn_text' => 'nullable|string',
            'have_coupon_text' => 'nullable|string',
            'enter_coupon_text' => 'nullable|string',
            'coupon_title' => 'nullable|string',
            'coupon_subtitle' => 'nullable|string',
            'coupon_placeholder' => 'nullable|string',
            'apply_coupon_btn_text' => 'nullable|string',
            'checkout_page_title' => 'nullable|string',
            'create_account_text' => 'nullable|string',
            'ship_to_another_text' => 'nullable|string',
            'order_summary_title' => 'nullable|string',
            'subtotal_text' => 'nullable|string',
            'shipping_text' => 'nullable|string',
            'vat_text' => 'nullable|string',
            'discount_text' => 'nullable|string',
            'coupon_text' => 'nullable|string',
            'total_text' => 'nullable|string',
            'proceed_to_checkout_btn_text' => 'nullable|string',
            'return_to_cart_btn_text' => 'nullable|string',
            'checkout_page_no_product_text' => 'nullable|string',
            'back_to_home_btn_text' => 'nullable|string',
            'shipping_option_invalid_msg' => 'nullable|string',
        ];
        $this->validateAndInsert($request, $all_field_rules);
        return back()->with(FlashMsg::settings_update());
    }

    /** ==============================================
     *              COMPARE SETTINGS
      ============================================== */
    public function comparePageSettings()
    {
        return view('backend.settings.compare');
    }

    public function storeComparePageSettings(Request $request)
    {
        $all_field_rules = [
            'compare_title' => 'nullable|string',
            'compare_subtitle' => 'nullable|string',
            'compare_empty_image' => 'nullable|string',
            'compare_empty_text' => 'nullable|string',
        ];
        $this->validateAndInsert($request, $all_field_rules);
        return back()->with(FlashMsg::settings_update());
    }

    /** ==============================================
     *              LOGIN/REGISTER SETTINGS
      ============================================== */
    public function userAuthPageSettings()
    {
        return view('backend.settings.userAuth');
    }

    public function storeUserAuthPageSettings(Request $request)
    {
        $all_field_rules = [
            'user_auth_page_logo' => 'nullable|string',
            'toc_page_link' => 'nullable|string',
            'privacy_policy_link' => 'nullable|string',
            'user_auth_page_side_image' => 'nullable|string'
        ];
        $this->validateAndInsert($request, $all_field_rules);

        $social_links = [];

        foreach ($request->social_icon_link as $key => $socialIconLink) {
            if ($socialIconLink) {
                $social_links[] = [
                    'icon' => $request->social_icon_icon[$key],
                    'link' => $request->social_icon_link[$key],
                ];
            }
        }

        update_static_option('user_auth_page_social_links', json_encode($social_links));
        return back()->with(FlashMsg::settings_update());
    }

    public function shopPage()
    {
        return view('backend.settings.shopPage');
    }

    public function storeShopPage(Request $request)
    {
        $all_field_rules = [
            'sidebar_visibility' => 'nullable|string',
            'sidebar_position' => 'nullable|string',
            'default_item_count' => 'nullable|string',
            'shop_column_count' => 'nullable|string',

            'shop_product_search' => 'nullable|string',
            'shop_filter_by_price' => 'nullable|string',
            'shop_filter_by_category' => 'nullable|string',
            'shop_filter_by_attributes' => 'nullable|string',
            'shop_filter_by_average_rating' => 'nullable|string',
            'shop_filter_by_tags' => 'nullable|string',
        ];
        $this->validateAndInsert($request, $all_field_rules);
        return back()->with(FlashMsg::settings_update());
    }

    /** ==============================================
     *              HELPER FUNCTIONS
      ============================================== */
    private function validateAndInsert($request, $all_field_rules)
    {
        $this->validate($request, $all_field_rules);
        foreach ($all_field_rules as $filed => $rule) {
            update_static_option($filed, $request->$filed);
        }
    }
}
