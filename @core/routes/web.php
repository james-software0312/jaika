<?php

use App\Http\Controllers\Admin\LicenseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryMenuController;

Route::feeds();

/*

    Route::get("clear",function (){
        Artisan::call("cache:clear");
    });

*/

/**===========================================================================================================================
 *                          FRONTEND
 * ==========================================================================================================================*/
Route::group(['middleware' => ['setlang:frontend', 'globalVariable', 'maintains_mode']], function () {

    /**=============================
        SOCIAL LOGIN CALLBACK
    ==============================*/
    Route::group(['prefix' => 'facebook'], function () {
        Route::get('callback', 'SocialLoginController@facebook_callback')->name('facebook.callback');
        Route::get('redirect', 'SocialLoginController@facebook_redirect')->name('login.facebook.redirect');
    });
    Route::group(['prefix' => 'google'], function () {
        Route::get('callback', 'SocialLoginController@google_callback')->name('google.callback');
        Route::get('redirect', 'SocialLoginController@google_redirect')->name('login.google.redirect');
    });

    /*----------------------------------------
      FRONTEND: CUSTOM FORM BUILDER ROUTES
    -----------------------------------------*/
    Route::post('submit-custom-form', 'FrontendFormController@custom_form_builder_message')->name('frontend.form.builder.custom.submit');

    /**=============================
       STATIC PAGES ROUTES
    ==============================*/
    $about_page_slug = !empty(get_static_option('about_page_slug')) ? get_static_option('about_page_slug') : 'about';
    $faq_page_slug = !empty(get_static_option('faq_page_slug')) ? get_static_option('faq_page_slug') : 'faq';
    $contact_page_slug = !empty(get_static_option('contact_page_slug')) ? get_static_option('contact_page_slug') : 'contact';
    $blog_page_slug = !empty(get_static_option('blog_page_slug')) ? get_static_option('blog_page_slug') : 'blog';


    /**---------------------------------------------------------------------------------------------------------------------------
     *                          FRONTEND ROUTES
     * --------------------------------------------------------------------------------------------------------------------------*/
    Route::get('/', 'FrontendController@index')->name('homepage');
    Route::get('/p/{slug?}/{id}', 'FrontendController@dynamic_single_page')->name('frontend.dynamic.page');
    Route::get('/home/{id}', 'FrontendController@home_page_change')->name('homepage.demo');

    Route::get('/' . $about_page_slug, 'FrontendController@about_page')->name('frontend.about');

    Route::get('/' . $faq_page_slug, 'FrontendController@faq_page')->name('frontend.faq');
    Route::get('/' . $contact_page_slug, 'FrontendController@contact_page')->name('frontend.contact');
    Route::get("get-states",[\App\Http\Controllers\FrontendController::class,"get_states"])->name("frontend.user.country.state");

    // Newsletter
    Route::get('/subscriber/email-verify/{token}', 'FrontendController@subscriber_verify')->name('subscriber.verify');

    // Contact Route
    Route::post('/contact-message', 'FrontendFormController@send_contact_message')->name('frontend.contact.message');

    // Tax Info
    Route::get('country-info', 'FrontendController@getCountryInfo')->name('country.info.ajax');
    Route::get('state-info', 'FrontendController@getStateInfo')->name('state.info.ajax');

    // shipping
    Route::get('shipping-validate', 'FrontendController@validateCheckoutShipping')->name('shipping.validate.ajax');

    // different shipping route
    Route::post('new-shipping', 'FrontendController@addUserShippingAddress')->name('frontend.add.user.shipping.address');


    /**--------------------------------
            FRONT PAGE FILTER ROUTES
    ---------------------------------*/
    Route::match(["get","post"],'filter-top-rated', 'FrontendController@topRatedProducts')->name('frontend.products.filter.top.rated');
    Route::match(["get","post"],'filter-top-selling', 'FrontendController@topSellingProducts')->name('frontend.products.filter.top.selling');
    Route::match(["get","post"],'filter-new', 'FrontendController@newProducts')->name('frontend.products.filter.new');
    Route::post('filter-campaign', 'FrontendController@campaignProduct')->name('frontend.products.filter.campaign');
    Route::post('filter-discount', 'FrontendController@discountedProduct')->name('frontend.products.filter.discounted');

    Route::get('attribute-data', 'FrontendController@getProductAttributeHtml')->name('frontend.products.attribute.html');

    /**--------------------------------
            LANDING PAGES
    ---------------------------------*/
    Route::prefix('land')->group(function () {
        /**--------------------------------
                PRODUCT SHOP PAGES
        ---------------------------------*/
        Route::prefix('home')->group(function () {
            Route::get('01', 'LandingController@homeOne');
            Route::get('02', 'LandingController@homeTwo');
        });
        /**--------------------------------
                PRODUCT SHOP PAGES
        ---------------------------------*/
        Route::prefix('shop')->group(function () {
            Route::get('grid', 'LandingController@shopGrid')->name('land.shop.grid');
            Route::get('list', 'LandingController@shopList')->name('land.shop.list');
            Route::get('right-sidebar', 'LandingController@shopRightSidebar')->name('land.shop.sidebar.right');
            Route::get('left-sidebar', 'LandingController@shopLeftSidebar')->name('land.shop.sidebar.left');
        });
        /**--------------------------------
                BLOG PAGES
        ---------------------------------*/
        Route::prefix('blog')->group(function () {
            Route::get('grid', 'LandingController@blogGrid');
            Route::get('list', 'LandingController@blogList');
            Route::get('news-update', 'LandingController@blogNewsUpdate');
            Route::get('details', 'LandingController@blogDetails');
        });
    });

    /**--------------------------------
            PRODUCT ROUTES
    ---------------------------------*/
    $product_page_slug = get_static_option('product_page_slug') ?? 'product';
    Route::group(['prefix' => $product_page_slug, 'as' => 'frontend.products.'], function () use ($product_page_slug) {
        Route::get('/', 'FrontendController@products')->name('all');
        Route::get('/{slug}' , 'FrontendController@single_product_page')->name('single');

        Route::get('category/{id}/{title?}', 'FrontendController@products_category')->name('category');
        Route::get('subcategory/{id}/{any?}', 'FrontendController@products_subcategory')->name('subcategory');

        /**--------------------------------
                CART ROUTES
        ---------------------------------*/
        Route::group(['prefix' => 'cart'], function () {
            Route::get('/all', 'FrontendController@cartPage')->name('cart');
            Route::get('details', 'Product\ProductCartController@cartStatus')->name('cart.status.ajax');
            Route::get('summary-info', 'Product\ProductCartController@getCartInfoAjax')->name('cart.info.ajax');
            // Route::post('add', 'Product\ProductCartController@addToCart')->name('add.to.cart');
            Route::post('ajax/add-to-cart', 'Product\ProductCartController@addToCartAjax')->name('add.to.cart.ajax');
            Route::post('remove', 'Product\ProductCartController@removeCartItem')->name('cart.ajax.remove');
            Route::post('clear', 'Product\ProductCartController@clearCart')->name('cart.ajax.clear');
            Route::post('ajax/update', 'Product\ProductCartController@updateCart')->name('cart.update.ajax');
            Route::post('ajax/coupon', 'Product\ProductCartController@cartPageApplyCouponAjax')->name('cart.apply.coupon');
            // Route::post('ajax/shipping', 'Product\ProductCartController@ajax_shipping_apply')->name('shipping.apply');
        });
        /**--------------------------------
                WISHLIST ROUTES
        ---------------------------------*/
        Route::group(['prefix' => 'wishlist'], function () {
            Route::get('all', 'FrontendController@wishlistPage')->name('wishlist');
            Route::get('total', 'Product\ProductWishlistController@getTotalItem')->name('wishlist.total');
            Route::post('add', 'Product\ProductWishlistController@addToWishlist')->name('add.to.wishlist');
            Route::post('ajax-add', 'Product\ProductWishlistController@addToWishlistAjax')->name('add.to.wishlist.ajax');
            Route::post('remove', 'Product\ProductWishlistController@removeWishlistItem')->name('wishlist.ajax.remove');
            Route::post('clear', 'Product\ProductWishlistController@clearWishlist')->name('wishlist.ajax.clear');
            Route::post('send-to-cart', 'Product\ProductWishlistController@sendToCartAjax')->name('wishlist.send.to.cart');
        });
        /**--------------------------------
                COMPARE PRODUCT ROUTES
        ---------------------------------*/
        Route::group(['prefix' => 'compare'], function () {
            Route::get('all', 'FrontendController@productsComparePage')->name('compare');
            Route::post('add', 'Product\ProductCompareController@addToCompare')->name('add.to.compare');
            Route::post('remove', 'Product\ProductCompareController@removeFromCompare')->name('compare.ajax.remove');
            Route::post('clear', 'Product\ProductCompareController@clearCompare')->name('ajax.compare.update');
        });
        /**--------------------------------
                RATING ROUTES
        ---------------------------------*/
        Route::post('rate', 'FrontendController@product_rating_store')->name('ratings.store');
        /**--------------------------------
                RATING ROUTES
        ---------------------------------*/
        Route::get('campaign/all', 'FrontendController@allCampaignPage')->name('campaign.list');
        Route::get('campaign/{id}/{any?}', 'FrontendController@campaignPage')->name('campaign');
        /**--------------------------------
                PAYMENT SUCCESS/CANCEL ROUTES
        ---------------------------------*/
        Route::get('success/{id}', 'FrontendController@product_payment_success')->name('payment.success');
        Route::get('cancel/{id?}', 'FrontendController@product_payment_cancel')->name('payment.cancel');
    });

    /**--------------------------------
            CHECKOUT ROUTES
    ---------------------------------*/
    Route::get('checkout', 'FrontendController@checkoutPage')->name('frontend.checkout');
    Route::post('checkout', 'Product\ProductSellPaymentController@checkout');
    Route::post('checkout-continue', 'Product\ProductSellPaymentController@checkoutContinuePending')->name('frontend.checkout.continue');
    Route::post('checkout-cancel-order', 'Product\ProductSellPaymentController@cancelPayment')->name('frontend.checkout.cancel');
    Route::post('checkout-reorder', 'Product\ProductSellPaymentController@reorder')->name('frontend.checkout.reorder');
    Route::get('checkout-apply-coupon', 'Product\ProductCartController@checkoutPageApplyCouponAjax')->name('frontend.checkout.apply.coupon');
    Route::get('checkout-calculate', 'Product\ProductCartController@calculateCheckout')->name('frontend.checkout.calculate');

    /**----------------------------------------------------------------
            PRODUCT PAYMENT ROUTES
     -----------------------------------------------------------------*/
    Route::group(['as' => 'frontend.', 'namespace' => 'Product'], function () use ($product_page_slug) {
        /**--------------------------------
                PRODUCT PAYMENT IPN
        ---------------------------------*/
        Route::get('/product-paypal-ipn','ProductSellPaymentController@paypal_ipn')->name('paypal.ipn');
        Route::post('/product-paytm-ipn','ProductSellPaymentController@paytm_ipn')->name('paytm.ipn');
        Route::get('/product-stripe-ipn','ProductSellPaymentController@stripe_ipn')->name('stripe.ipn');
        Route::post('/product-razorpay-ipn','ProductSellPaymentController@razorpay_ipn')->name('razorpay.ipn');
        Route::get('/product-flullterwave-ipn','ProductSellPaymentController@flutterwave_ipn')->name('flutterwave.ipn');
        Route::get('/product-mollie-ipn','ProductSellPaymentController@mollie_ipn')->name('mollie.ipn');
        Route::get('/product-midtrans-ipn','ProductSellPaymentController@midtrans_ipn')->name('midtrans.ipn');
        Route::post('/product-payfast-ipn','ProductSellPaymentController@payfast_ipn')->name('payfast.ipn');
        Route::post('/product-cashfree-ipn','ProductSellPaymentController@cashfree_ipn')->name('cashfree.ipn');
        Route::post('/product-paystack-ipn','ProductSellPaymentController@paystack_ipn')->name('paystack.ipn');
        Route::get('/product-instamojo-ipn','ProductSellPaymentController@instamojo_ipn')->name('instamojo.ipn');
        Route::get('/product-marcadopago-ipn','ProductSellPaymentController@marcadopago_ipn')->name('marcadopago.ipn');
    });

    /**---------------------------------------------------------------------------------------------------------------------------
     *                   BLOG AREA FRONTEND ROUTES
     * ----------------------------------------------------------------------------------------------------------------------------*/
    //blog
    Route::get('/' . $blog_page_slug, 'FrontendController@blog_page')->name('frontend.blog');
    Route::get('/' . $blog_page_slug . '/{slug}', 'FrontendController@blog_single_page')->name('frontend.blog.single');
    Route::get('/' . $blog_page_slug . '-search', 'FrontendController@blog_search_page')->name('frontend.blog.search');
    Route::get('/' . $blog_page_slug . '-category/{id}/{any?}', 'FrontendController@category_wise_blog_page')->name('frontend.blog.category');
    Route::get('/' . $blog_page_slug . '-tags/{name}', 'FrontendController@tags_wise_blog_page')->name('frontend.blog.tags.page');

    /*----------------------------------
        FRONTEND: SUPPORT TICKET ROUTES
    ----------------------------------*/
    Route::group(['namespace' => 'Support'],function () {
        $support_ticket_page_slug = 'support'; // get_static_option('support_ticket_page_slug') ?? 'support';
        Route::get($support_ticket_page_slug, 'UserSupportTicketController@page')->name('frontend.support.ticket');
        Route::post($support_ticket_page_slug.'/new', 'UserSupportTicketController@store')->name('frontend.support.ticket.store');
    });


    /**---------------------------------------------------------------------------------------------------------------------------
     *                   USER DASHBOARD
     * ----------------------------------------------------------------------------------------------------------------------------*/
    Route::get('campaign/user', 'FrontendController@user_campaign')->name('frontend.campaign.user');

    Route::prefix('user-home')->middleware(['userEmailVerify', 'setlang:frontend', 'globalVariable', 'maintains_mode'])->group(function () {
        Route::get('/', 'UserDashboardController@user_index')->name('user.home');
        Route::get('/download/file/{id}', 'UserDashboardController@download_file')->name('user.dashboard.download.file');

        Route::get('/change-password', 'UserDashboardController@change_password')->name('user.home.change.password');
        Route::get('/edit-profile', 'UserDashboardController@edit_profile')->name('user.home.edit.profile');
        Route::post('/profile-update', 'UserDashboardController@user_profile_update')->name('user.profile.update');
        Route::post('/password-change', 'UserDashboardController@user_password_change')->name('user.password.change');
        Route::get('/support-tickets', 'UserDashboardController@support_tickets')->name('user.home.support.tickets');

        Route::get('support-ticket/view/{id}', 'UserDashboardController@support_ticket_view')->name('user.dashboard.support.ticket.view');
        Route::post('support-ticket/priority-change', 'UserDashboardController@support_ticket_priority_change')->name('user.dashboard.support.ticket.priority.change');
        Route::post('support-ticket/status-change', 'UserDashboardController@support_ticket_status_change')->name('user.dashboard.support.ticket.status.change');
        Route::post('support-ticket/message', 'UserDashboardController@support_ticket_message')->name('user.dashboard.support.ticket.message');


        /**------------------------------------
            Campaign log withdraw
        -------------------------------------*/
        Route::get('/campaign/log/withdraw', 'UserDashboardController@campaign_log_withdraw')->name('user.campaign.log.withdraw');
        Route::post('/campaign/withdraw/submit', 'UserDashboardController@campaign_withdraw_submit')->name('user.campaign.withdraw.submit');
        Route::post('/campaign/withdraw/check', 'UserDashboardController@campaign_withdraw_check')->name('user.campaign.withdraw.check');
        Route::get('/campaign/withdraw/view/{id}', 'UserDashboardController@campaign_withdraw_view')->name('user.campaign.withdraw.view');

        /**------------------------------------
            User Product Order
        -------------------------------------*/
        Route::prefix('orders')->name('user.product.order.')->group(function () {
            Route::get('all', 'UserDashboardController@allOrdersPage')->name('all');
            Route::get('/{item}', 'UserDashboardController@orderDetailsPage')->name('details');
        });

        /**------------------------------------
            User Shipping Address
        -------------------------------------*/
        Route::get('shipping-address', 'UserDashboardController@allShippingAddress')->name('user.shipping.address.all');
        Route::get('shipping-address/new', 'UserDashboardController@createShippingAddress')->name('user.shipping.address.new');
        Route::post('shipping-address/new', 'UserDashboardController@storeShippingAddress');
        Route::post('shipping-address/edit', 'UserDashboardController@editShippingAddress')->name('user.shipping.address.edit');
        Route::post('shipping-address/delete/{id}', 'UserDashboardController@deleteShippingAddress')->name('shipping.address.delete');


        /**---------------------------------------------------------------------------------------------------------------------------
         * MEDIA UPLOAD ROUTE
         * ----------------------------------------------------------------------------------------------------------------------------*/
        Route::group(['prefix' => 'media-upload', 'namespace' => 'User'], function () {
            Route::post('/', 'MediaUploadController@upload_media_file')->name('user.upload.media.file');
            Route::post('/all', 'MediaUploadController@all_upload_media_file')->name('user.upload.media.file.all');
            Route::post('/alt', 'MediaUploadController@alt_change_upload_media_file')->name('user.upload.media.file.alt.change');
            Route::post('/delete', 'MediaUploadController@delete_upload_media_file')->name('user.upload.media.file.delete');
            Route::post('/loadmore', 'MediaUploadController@loadmore_upload_media_file')->name('user.upload.media.file.loadmore');
        });
    });

    /**---------------------------------------------------------------------------------------------------------------------------
     * USER LOGIN - REGISTRATION
     * ----------------------------------------------------------------------------------------------------------------------------*/
    //user login
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('user.login');
    Route::post('/ajax-login', 'FrontendController@ajax_login')->name('user.ajax.login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::get('/login/forget-password', 'FrontendController@showUserForgetPasswordForm')->name('user.forget.password');
    Route::post('/login/forget-password', 'FrontendController@sendUserForgetPasswordMail');

    Route::get('/login/reset-password/{user}/{token}', 'FrontendController@showUserResetPasswordForm')->name('user.reset.password');
    Route::post('/login/reset-password', 'FrontendController@UserResetPassword')->name('user.reset.password.change');

    Route::post('/logout', 'Auth\LoginController@logout')->name('user.logout');
    Route::get('/user-logout', 'FrontendController@user_logout')->name('frontend.user.logout');
    //user register
    Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('user.register');
    Route::post('/register', 'Auth\RegisterController@register');
    //user email verify
    Route::get('/user/email-verify', 'UserDashboardController@user_email_verify_index')->name('user.email.verify');
    Route::post('/user/email-verify', 'UserDashboardController@user_email_verify');

    Route::get('/user/resend-verify-code', 'UserDashboardController@reset_user_email_verify_code')->name('user.resend.verify.mail');
    Route::post('/package-user/generate-invoice', 'FrontendController@generate_package_invoice')->name('frontend.package.invoice.generate');
});


Route::group(['middleware' => 'globalVariable'], function () {
    /**---------------------------------------------------------------------------------------------------------------------------
     *                          LANGUAGE CHANGE
     *----------------------------------------------------------------------------------------------------------------------------*/
    Route::get('/lang', 'FrontendController@lang_change')->name('frontend.langchange');
    Route::post('/subscribe-newsletter', 'FrontendController@subscribe_newsletter')->name('frontend.subscribe.newsletter');
    /**---------------------------------------------------------------------------------------------------------------------------
     *                          ADMIN LOGIN
     *----------------------------------------------------------------------------------------------------------------------------*/
    Route::middleware(['setlang:backend'])->group(function () {
        Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('admin.login');
        Route::get('/login/admin/forget-password', 'FrontendController@showAdminForgetPasswordForm')->name('admin.forget.password');
        Route::get('/login/admin/reset-password/{user}/{token}', 'FrontendController@showAdminResetPasswordForm')->name('admin.reset.password');
        Route::post('/login/admin/reset-password', 'FrontendController@AdminResetPassword')->name('admin.reset.password.change');
        Route::post('/login/admin/forget-password', 'FrontendController@sendAdminForgetPasswordMail');
        Route::get('/logout/admin', 'Admin\AdminDashboardController@adminLogout')->name('admin.logout');
        Route::post('/login/admin', 'Auth\LoginController@adminLogin');
    });
});



/**--------------------------------------------------------------------------------------------------------------------------------
 *                          ADMIN PANEL ROUTES
 *----------------------------------------------------------------------------------------------------------------------------------*/
Route::prefix('admin-home')->middleware(['setlang:backend', 'adminglobalVariable'])->group(function () {
// Route::prefix('admin-home')->middleware(['setlang:backend', 'adminglobalVariable'])->group(function () {
    //404 page manage
    Route::get('404-page-manage', 'Admin\Error404PageManage@error_404_page_settings')->name('admin.404.page.settings');
    Route::post('404-page-manage', 'Admin\Error404PageManage@update_error_404_page_settings');

    // maintains page
    Route::get('/maintains-page/settings', 'Admin\MaintainsPageController@maintains_page_settings')->name('admin.maintains.page.settings');
    Route::post('/maintains-page/settings', 'Admin\MaintainsPageController@update_maintains_page_settings');

    /*-----------------------------------
        Mobile Slider ROUTES
    ------------------------------------*/
    Route::group(['prefix' => 'slider', 'as' => 'admin.slider.'], function () {
        Route::get('/', 'SliderController@index')->name('index');
        Route::get('/create','SliderController@create')->name("create");
        Route::post('/store','SliderController@store')->name("store");
        Route::post('/delete/{id}','SliderController@delete')->name("delete");
        Route::get('/edit/{id}','SliderController@edit')->name("edit");
        Route::post('/update','SliderController@update')->name("update");
    });


    /*------------------------------------------
        PRODUCTS MODULES
     ------------------------------------------*/
    Route::prefix('products')->namespace('Product')->group(function () {
        /*-----------------------------------
            PRODUCTS ROUTES
        ------------------------------------*/
        Route::group(['as' => 'admin.products.'], function () {
            Route::get('/', 'ProductController@index')->name('all');
            Route::get('/new', 'ProductController@create')->name('new');
            Route::post('/new', 'ProductController@store');
            Route::get('edit/{item}', 'ProductController@edit')->name('edit');
            Route::post('update/{item}', 'ProductController@update')->name('update');
            Route::post('delete/{item}', 'ProductController@destroy')->name('delete');
            Route::post('clone/{item}', 'ProductController@clone')->name('clone');
            Route::post('/bulk-action', 'ProductController@bulk_action')->name('bulk.action');
        });

        /*-----------------------------------
            DELETED PRODUCTS ROUTES
        ------------------------------------*/
        Route::group(['prefix' => 'deleted', 'as' => 'admin.products.deleted.'], function () {
            Route::get('/', 'DeletedProductsController@index')->name('all');
            Route::post('restore/{item}', 'DeletedProductsController@restore')->name('restore');
            Route::post('delete/{item}', 'DeletedProductsController@destroy')->name('permanent.delete');
            Route::post('/bulk-action', 'DeletedProductsController@bulk_action')->name('bulk.action');
        });

        /*-----------------------------------
            PRODUCTS RATINGS ROUTES
        ------------------------------------*/
        Route::group(['prefix' => 'ratings', 'as' => 'admin.products.ratings.'], function () {
            Route::get('/', 'ProductRatingController@index')->name('all');
            Route::post('/approve', 'ProductRatingController@approve')->name('approve');
            Route::post('/delete/{rating}', 'ProductRatingController@destroy')->name('delete');
            Route::post('/bulk-action', 'ProductRatingController@bulk_action')->name('bulk.action');
        });
        /*--------------------------
              * variant
        --------------------------*/
        Route::group(['prefix' => 'attributes', 'as' => 'admin.products.attributes.'], function () {
            Route::get('/', 'ProductAttributeController@index')->name('all');
            Route::get('/new', 'ProductAttributeController@create')->name('store');
            Route::post('/new', 'ProductAttributeController@store');
            Route::get('/edit/{item}', 'ProductAttributeController@edit')->name('edit');
            Route::post('/update', 'ProductAttributeController@update')->name('update');
            Route::post('/delete/{item}', 'ProductAttributeController@destroy')->name('delete');
            Route::post('/bulk-action', 'ProductAttributeController@bulk_action')->name('bulk.action');
            Route::post('/details', 'ProductAttributeController@get_details')->name('details');
            Route::post('/by-lang', 'ProductAttributeController@get_all_variant_by_lang')->name('admin.products.variant.by.lang');
        });
        /*-----------------------------------
            PRODUCTS  ORDERS ROUTES
        ------------------------------------*/
        Route::group(['prefix' => 'product-order', 'as' => 'admin.product.order.'], function () {
            Route::get('/', 'ProductOrderController@orderLogs')->name('logs');
            Route::get('new-order', 'ProductOrderController@create')->name('new');
            Route::post('new-order', 'ProductOrderController@store');
            Route::get('view/{id}', 'ProductOrderController@show')->name('view');
            Route::post('delete/{id}', 'ProductOrderController@delete')->name('payment.delete');

            Route::post('filter-order', 'ProductOrderController@filterOrders')->name('filter'); // === later ===

            Route::post('/approve', 'ProductOrderController@product_order_payment_approve')->name('payment.approve');
            Route::post('/status-change', 'ProductOrderController@product_order_status_change')->name('status.change');
            Route::post('/bulk-action', 'ProductOrderController@product_order_bulk_action')->name('bulk.action');
            Route::post('/order-reminder', 'ProductOrderController@order_reminder')->name('reminder');

            Route::get('get-product-row', 'ProductOrderController@getProductRow')->name('product.row');
        });
        Route::get('generate-products-invoice', 'ProductOrderController@generateInvoice')->name('frontend.product.invoice.generate'); 

        Route::group(['prefix' => 'import', 'as' => 'admin.products.import.'], function () {
            Route::get('/', 'ProductImportController@import_settings')->name('all');
            Route::post('update-settings', 'ProductImportController@update_import_settings')->name('settings.update');
            Route::post('/', 'ProductImportController@import_to_database_settings')->name('to.database');
        });

        /*-----------------------------------
            PRODUCT CATEGORY  ROUTES
        ------------------------------------*/
        Route::group(['prefix' => 'categories', 'as' => 'admin.products.category.'], function () {
            Route::get('/', 'ProductCategoryController@index')->name('all');
            Route::get('get-list', 'ProductCategoryController@getList')->name('get.list');
            Route::post('new', 'ProductCategoryController@store')->name('new');
            Route::post('update', 'ProductCategoryController@update')->name('update');
            Route::post('delete/{item}', 'ProductCategoryController@destroy')->name('delete');
            Route::post('bulk-action', 'ProductCategoryController@bulk_action')->name('bulk.action');
        });

        /*-----------------------------------
            PRODUCT SUB-CATEGORY  ROUTES
        ------------------------------------*/
        Route::group(['prefix' => 'sub-categories', 'as' => 'admin.products.subcategory.'], function () {
            Route::get('/', 'ProductSubCategoryController@index')->name('all');
            Route::post('new', 'ProductSubCategoryController@store')->name('new');
            Route::post('update', 'ProductSubCategoryController@update')->name('update');
            Route::post('delete/{item}', 'ProductSubCategoryController@destroy')->name('delete');
            Route::post('bulk-action', 'ProductSubCategoryController@bulk_action')->name('bulk.action');

            Route::get('of-category/{id}', 'ProductSubCategoryController@getSubcategoriesOfCategory')->name('of.category');
        });

        /*-----------------------------------
            COUPON ROUTES
        ------------------------------------*/
        Route::group(['prefix' => 'coupons', 'as' => 'admin.products.coupon.'], function () {
            Route::get('/', 'ProductCouponController@index')->name('all');
            Route::post('new', 'ProductCouponController@store')->name('new');
            Route::post('update', 'ProductCouponController@update')->name('update');
            Route::post('delete/{item}', 'ProductCouponController@destroy')->name('delete');
            Route::post('bulk-action', 'ProductCouponController@bulk_action')->name('bulk.action');
            Route::get('check', 'ProductCouponController@check')->name('check');
            Route::get('get-products', 'ProductCouponController@allProductsAjax')->name('products');
        });

        /*-----------------------------------
            TAG ROUTES
        ------------------------------------*/
        Route::group(['prefix' => 'tags', 'as' => 'admin.products.tag.'], function () {
            Route::get('/', 'TagController@index')->name('all');
            Route::post('new', 'TagController@store')->name('new');
            Route::post('update', 'TagController@update')->name('update');
            Route::post('delete/{item}', 'TagController@destroy')->name('delete');
            Route::post('bulk-action', 'TagController@bulk_action')->name('bulk.action');
            Route::get('check', 'TagController@check')->name('check');
            Route::get('get-tags', 'TagController@getTagsAjax')->name('get.ajax');
        });

        /*-----------------------------------
            PRODUCT TAG ROUTES
        ------------------------------------*/
        Route::group(['prefix' => 'product-tags', 'as' => 'admin.products.product.tag.'], function () {
            Route::get('/', 'ProductTagController@index')->name('all');
            Route::post('new', 'ProductTagController@store')->name('new');
            Route::post('update', 'ProductTagController@update')->name('update');
            Route::post('delete/{item}', 'ProductTagController@destroy')->name('delete');
            Route::post('bulk-action', 'ProductTagController@bulk_action')->name('bulk.action');
            Route::get('check', 'ProductTagController@check')->name('check');
        });

        /*-----------------------------------
            INVENTORY ROUTES
        ------------------------------------*/
        Route::group(['prefix' => 'product-inventory', 'as' => 'admin.products.inventory.'], function () {
            Route::get('/', 'ProductInventoryController@index')->name('all');
            Route::get('edit/{item}', 'ProductInventoryController@edit')->name('edit');
            Route::post('update', 'ProductInventoryController@update')->name('update'); // [===== ??? =====]
            Route::post('delete', 'ProductInventoryController@destroy')->name('delete');
            Route::post('bulk-action', 'ProductInventoryController@bulk_action')->name('bulk.action');
        });
    });

    /*-----------------------------------
        SHIPPING ROUTES
    ------------------------------------*/
    Route::group(['prefix' => 'shipping'], function () {
        /*-----------------------------------
            ZONE ROUTES
        ------------------------------------*/
        Route::group(['prefix' => 'zone', 'as' => 'admin.shipping.zone.'], function () {
            Route::get('/', 'Shipping\ZoneController@index')->name('all');
            Route::post('new', 'Shipping\ZoneController@store')->name('new');
            Route::post('update', 'Shipping\ZoneController@update')->name('update');
            Route::post('delete/{item}', 'Shipping\ZoneController@destroy')->name('delete');
            Route::post('bulk-action', 'Shipping\ZoneController@bulk_action')->name('bulk.action');
        });
        /*-----------------------------------
            METHOD ROUTES
        ------------------------------------*/
        Route::group(['prefix' => 'method', 'as' => 'admin.shipping.method.'], function () {
            Route::get('/', 'Shipping\ShippingMethodController@index')->name('all');
            Route::get('new', 'Shipping\ShippingMethodController@create')->name('new');
            Route::post('new', 'Shipping\ShippingMethodController@store');
            Route::get('edit/{item}', 'Shipping\ShippingMethodController@edit')->name('edit');
            Route::post('update', 'Shipping\ShippingMethodController@update')->name('update');
            Route::post('delete/{item}', 'Shipping\ShippingMethodController@destroy')->name('delete');
            Route::post('bulk-action', 'Shipping\ShippingMethodController@bulk_action')->name('bulk.action');
            Route::post('make-default', 'Shipping\ShippingMethodController@makeDefault')->name('make.default');
        });
    });

    /*------------------------------------------
        CAMPAIGN MODULES
     ------------------------------------------*/
    Route::prefix('campaigns')->namespace('Campaign')->as('admin.campaigns.')->group(function () {
        Route::get('/', 'CampaignController@index')->name('all');
        Route::get('new', 'CampaignController@create')->name('new');
        Route::post('new', 'CampaignController@store');
        Route::get('edit/{item}', 'CampaignController@edit')->name('edit');
        Route::post('update', 'CampaignController@update')->name('update');
        Route::post('delete/{item}', 'CampaignController@destroy')->name('delete');
        Route::post('bulk-action', 'CampaignController@bulk_action')->name('bulk.action');
        // CAMPAIGN PRODUCT
        Route::post('delete-product', 'CampaignController@deleteProductSingle')->name('delete.product');
        Route::get('price', 'CampaignController@getProductPrice')->name('product.price');
    });

    /*-----------------------------------
        COUNTRY ROUTES
    ------------------------------------*/
    Route::group(['prefix' => 'country', 'namespace' => 'Country', 'as' => 'admin.country.'], function () {
        Route::get('/', 'CountryController@index')->name('all');
        Route::post('new', 'CountryController@store')->name('new');
        Route::post('update', 'CountryController@update')->name('update');
        Route::post('delete/{item}', 'CountryController@destroy')->name('delete');
        Route::post('bulk-action', 'CountryController@bulk_action')->name('bulk.action');
    });

    /*-----------------------------------
        STATE ROUTES
    ------------------------------------*/
    Route::group(['prefix' => 'state', 'namespace' => 'Country', 'as' => 'admin.state.'], function () {
        Route::get('/', 'StateController@index')->name('all');
        Route::post('new', 'StateController@store')->name('new');
        Route::post('update', 'StateController@update')->name('update');
        Route::post('delete/{item}', 'StateController@destroy')->name('delete');
        Route::post('bulk-action', 'StateController@bulk_action')->name('bulk.action');
        Route::get('country-state', 'StateController@getStateByCountry')->name('by.country');
    });

    /*-----------------------------------
        TAX ROUTES
    ------------------------------------*/
    Route::prefix('tax')->namespace('Tax')->group(function () {
        /*-----------------------------------
            COUNTRY TAX ROUTES
        ------------------------------------*/
        Route::group(['prefix' => 'country', 'as' => 'admin.tax.country.'], function () {
            Route::get('/', 'CountryTaxController@index')->name('all');
            Route::post('new', 'CountryTaxController@store')->name('new');
            Route::post('update', 'CountryTaxController@update')->name('update');
            Route::post('delete/{item}', 'CountryTaxController@destroy')->name('delete');
            Route::post('bulk-action', 'CountryTaxController@bulk_action')->name('bulk.action');
        });
        /*-----------------------------------
            STATE TAX ROUTES
        ------------------------------------*/
        Route::group(['prefix' => 'state', 'as' => 'admin.tax.state.'], function () {
            Route::get('/', 'StateTaxController@index')->name('all');
            Route::post('new', 'StateTaxController@store')->name('new');
            Route::post('update', 'StateTaxController@update')->name('update');
            Route::post('delete/{item}', 'StateTaxController@destroy')->name('delete');
            Route::post('bulk-action', 'StateTaxController@bulk_action')->name('bulk.action');
        });
    });

    /*-----------------------------------
        MODULE SETTING ROUTES
    ------------------------------------*/
    Route::group(['prefix' => 'page-settings', 'as' => 'admin.page.settings.'], function () {
        // wishlist
        Route::get('wishlist', 'Admin\ModulePageSettingsController@wishlistPageSettings')->name('wishlist');
        Route::post('wishlist', 'Admin\ModulePageSettingsController@storeWishlistPageSettings');
        // cart
        Route::get('cart', 'Admin\ModulePageSettingsController@cartPageSettings')->name('cart');
        Route::post('cart', 'Admin\ModulePageSettingsController@storeCartPageSettings');
        // checkout
        Route::get('checkout', 'Admin\ModulePageSettingsController@checkoutPageSettings')->name('checkout');
        Route::post('checkout', 'Admin\ModulePageSettingsController@storeCheckoutPageSettings');
        // compare
        Route::get('compare', 'Admin\ModulePageSettingsController@comparePageSettings')->name('compare');
        Route::post('compare', 'Admin\ModulePageSettingsController@storeComparePageSettings');
        // login/register
        Route::get('login-register', 'Admin\ModulePageSettingsController@userAuthPageSettings')->name('user.auth');
        Route::post('login-register', 'Admin\ModulePageSettingsController@storeUserAuthPageSettings');
        // products page
        Route::get('shop-page', 'Admin\ModulePageSettingsController@shopPage')->name('shop.page');
        Route::post('shop-page', 'Admin\ModulePageSettingsController@storeShopPage');
    });


    //HOME PAGE MANAGE
    Route::group(['prefix' => 'home-page-01', 'namespace' => 'Admin'], function () {

        Route::get('/latest-news', 'HomePageController@home_01_latest_news')->name('admin.homeone.latest.news');
        Route::post('/latest-news', 'HomePageController@home_01_update_latest_news');

        Route::get('/latest-event', 'HomePageController@home_01_latest_event')->name('admin.homeone.latest.event');
        Route::post('/latest-event', 'HomePageController@home_01_update_latest_event');

        Route::get('/feature-area', 'HomePageController@home_01_feature_area')->name('admin.homeone.feature.area');
        Route::post('/feature-area', 'HomePageController@home_01_update_feature_area');

        Route::get('/about-us', 'HomePageController@home_01_about_us')->name('admin.homeone.about.us');
        Route::post('/about-us', 'HomePageController@home_01_update_about_us');

        Route::get('/video-area', 'HomePageController@home_01_video_area')->name('admin.homeone.video.area');
        Route::post('/video-area', 'HomePageController@home_01_update_video_area');

        Route::get('/section-manage', 'HomePageController@home_01_section_manage')->name('admin.homeone.section.manage');
        Route::post('/section-manage', 'HomePageController@home_01_update_section_manage');

    });

    // WIDGET
    Route::group(['prefix' => 'widgets', 'namespace' => 'Admin'], function () {
        //widget manage
        Route::get('/all', 'WidgetsController@index')->name('admin.widgets');
        Route::post('/all', 'WidgetsController@new_widget')->name('admin.widgets.new');
        Route::post('/markup', 'WidgetsController@widget_markup')->name('admin.widgets.markup');
        Route::post('/update', 'WidgetsController@update_widget')->name('admin.widgets.update');
        Route::post('//update/order', 'WidgetsController@update_order_widget')->name('admin.widgets.update.order');
        Route::post('/delete', 'WidgetsController@delete_widget')->name('admin.widgets.delete');
    });

    // TOPBAR SETTINGS
    Route::group(['prefix' => 'topbar-settings', 'namespace' => 'Admin'], function () {
        Route::get('/all', "TopbarController@index")->name('admin.topbar.settings');
        Route::post('/all', 'TopbarController@store');
        Route::post('/update', 'TopbarController@update')->name('admin.topbar.update');
        Route::post('/delete/{id}', 'TopbarController@delete')->name('admin.topbar.delete');
        Route::post('/bulk-action', 'TopbarController@bulk_action')->name('admin.topbar.bulk.action');
    });

    //MENU MANAGE
    Route::group(['prefix' => 'menu', 'namespace' => 'Admin'], function () {
        Route::get('/', 'MenuController@index')->name('admin.menu');
        Route::post('/new-menu', 'MenuController@store_new_menu')->name('admin.menu.new');
        Route::get('/edit/{id}', 'MenuController@edit_menu')->name('admin.menu.edit');
        Route::post('/update/{id}', 'MenuController@update_menu')->name('admin.menu.update');
        Route::post('/delete/{id}', 'MenuController@delete_menu')->name('admin.menu.delete');
        Route::post('/default/{id}', 'MenuController@set_default_menu')->name('admin.menu.default');
        Route::post('/mega-menu', 'MenuController@mega_menu_item_select_markup')->name('admin.mega.menu.item.select.markup');
    });

    // Category Menu
    Route::group(['prefix' => 'category-menu', 'namespace' => 'Admin'], function () {
        Route::get('', 'CategoryMenuController@index')->name('admin.category.menu.settings');
        Route::post('/new-menu', 'CategoryMenuController@store_new_menu')->name('admin.category.menu.new');
        Route::get('/edit/{id}', 'CategoryMenuController@edit_menu')->name('admin.category.menu.edit');
        Route::post('/update/{id}', 'CategoryMenuController@update_menu')->name('admin.category.menu.update');
        Route::post('/delete/{id}', 'CategoryMenuController@delete_menu')->name('admin.category.menu.delete');
        Route::post('/default/{id}', 'CategoryMenuController@set_default_menu')->name('admin.category.menu.default');
        Route::post('/mega-menu', 'CategoryMenuController@mega_menu_item_select_markup')->name('admin.mega.category.menu.item.select.markup');
        Route::post('/render-sub-category',[CategoryMenuController::class,"fetch_sub_category"])->name("admin.category.menu.sub_category");
    });

    /**---------------------------------------------------------------------------------------------------------------------------
     *                           HOMEPAGE MANAGE
     * ----------------------------------------------------------------------------------------------------------------------------*/
    //homepage manage
    Route::prefix('home-page')->namespace('Admin')->group(function () {
        //header slider

        //Key Features
        Route::get('/key-features-area', 'HomePageController@key_features_section')->name('admin.home.key.features');
        Route::post('/key-features-area', 'HomePageController@update_key_features_section');

        //why-choose-us area
        Route::get('/why-choose-us-area-settings', 'HomePageController@why_choose_us_area')->name('admin.home.why.choose.us');
        Route::post('/why-choose-us-area-settings', 'HomePageController@update_why_choose_us_area');

        //call to action area
        Route::get('/call-to-action-settings', 'HomePageController@call_to_action_area')->name('admin.home.call.to.action');
        Route::post('/call-to-action-settings', 'HomePageController@update_call_to_action_area');


        //keyfeatures area
        Route::get('/keyfeatures-area-settings', 'HomePageController@keyfeatures_area')->name('admin.home.keyfeatures');
        Route::post('/keyfeatures-area-settings', 'HomePageController@update_keyfeatures_area');
        //price plan area
        Route::get('/price-plan-area-settings', 'HomePageController@price_plan_area')->name('admin.home.price.plan');
        Route::post('/price-plan-area-settings', 'HomePageController@update_price_plan_area');

        //latest blog area
        Route::get('/latest-blog-settings', 'HomePageController@latest_blog_area')->name('admin.home.blog.latest');
        Route::post('/latest-blog-settings', 'HomePageController@update_latest_blog_area');

        //section manage
        Route::get('/section-manage', 'HomePageController@section_manage')->name('admin.home.section.manage');
        Route::post('/section-manage', 'HomePageController@update_section_manage');
    });


    /**---------------------------------------------------------------------------------------------------------------------------
     *                           CONTACT PAGE MANAGE
     * ----------------------------------------------------------------------------------------------------------------------------*/
    Route::group(['prefix' => 'contact-page', 'namespace' => 'Admin'], function () {
        //contact page
        Route::get('/form-area', 'ContactPageController@contact_page_form_area')->name('admin.contact.page.form.area');
        Route::post('/form-area', 'ContactPageController@contact_page_update_form_area');
        Route::get('/map', 'ContactPageController@contact_page_map_area')->name('admin.contact.page.map');
        Route::post('/map', 'ContactPageController@contact_page_update_map_area');

        Route::get('/section-manage', 'ContactPageController@contact_page_section_manage')->name('admin.contact.page.section.manage');
        Route::post('/section-manage', 'ContactPageController@contact_page_update_section_manage');

        Route::get('/contact-info', 'ContactInfoController@index')->name('admin.contact.info');
        Route::post('/contact-info', 'ContactInfoController@store');
        Route::post('/contact-info/title', 'ContactInfoController@contact_info_title')->name('admin.contact.info.title');
        Route::post('/contact-info/update', 'ContactInfoController@update')->name('admin.contact.info.update');
        Route::post('/contact-info/delete/{id}', 'ContactInfoController@delete')->name('admin.contact.info.delete');
        Route::post('/contact-info/bulk-action', 'ContactInfoController@bulk_action')->name('admin.contact.info.bulk.action');
    });


    /**---------------------------------------------------------------------------------------------------------------------------
     *                           MEDIA UPLOAD ROUTE
     * ----------------------------------------------------------------------------------------------------------------------------*/
    Route::group(['prefix' => 'media-upload', 'namespace' => 'Admin'], function () {
        Route::post('/alt', 'MediaUploadController@alt_change_upload_media_file')->name('admin.upload.media.file.alt.change');
        Route::get('/page', 'MediaUploadController@all_upload_media_images_for_page')->name('admin.upload.media.images.page');
        Route::post('/delete', 'MediaUploadController@delete_upload_media_file')->name('admin.upload.media.file.delete');
    });


    /**---------------------------------------------------------------------------------------------------------------------------
     *                          ADMIN DASHBOARD ROUTES
     * ----------------------------------------------------------------------------------------------------------------------------*/
    Route::group(['namespace' => 'Admin'], function () {
        //admin Profile
        Route::get('/settings', 'AdminDashboardController@admin_settings')->name('admin.profile.settings');
        Route::get('/profile-update', 'AdminDashboardController@admin_profile')->name('admin.profile.update');
        Route::post('/profile-update', 'AdminDashboardController@admin_profile_update');
        Route::get('/password-change', 'AdminDashboardController@admin_password')->name('admin.password.change');
        Route::post('/password-change', 'AdminDashboardController@admin_password_chagne');
        //admin index
        Route::get('/', 'AdminDashboardController@adminIndex')->name('admin.home');
        Route::get('/dark-mode-toggle', 'AdminDashboardController@dark_mode_toggle')->name('admin.dark.mode.toggle');
    });

    /**---------------------------------------------------------------------------------------------------------------------------
     *                          ADMIN USER ROLE MANAGE
     * ----------------------------------------------------------------------------------------------------------------------------*/
    Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
        Route::get('/all', 'AdminRoleManageController@all_user')->name('admin.all.user');
        Route::get('/new-user', 'AdminRoleManageController@new_user')->name('admin.new.user');
        Route::post('/new-user', 'AdminRoleManageController@new_user_add');
        Route::get('/user-edit/{id}', 'AdminRoleManageController@user_edit')->name('admin.user.edit');
        Route::post('/user-update', 'AdminRoleManageController@user_update')->name('admin.user.update');
        Route::post('/user-password-change', 'AdminRoleManageController@user_password_change')->name('admin.user.password.change');
        Route::post('/delete-user/{id}', 'AdminRoleManageController@new_user_delete')->name('admin.delete.user');
        /**---------------------------
            ALL ADMIN ROLE ROUTES
        -----------------------------*/
        Route::get('/role', 'AdminRoleManageController@all_admin_role')->name('admin.all.admin.role');
        Route::get('/role/new', 'AdminRoleManageController@new_admin_role_index')->name('admin.role.new');
        Route::post('/role/new', 'AdminRoleManageController@store_new_admin_role');
        Route::get('/role/edit/{id}', 'AdminRoleManageController@edit_admin_role')->name('admin.user.role.edit');
        Route::post('/role/update', 'AdminRoleManageController@update_admin_role')->name('admin.user.role.update');
        Route::post('/role/delete/{id}', 'AdminRoleManageController@delete_admin_role')->name('admin.user.role.delete');
    });

    /**---------------------------------------------------------------------------------------------------------------------------
     *                          FRONTEND USER MANAGE
     * ----------------------------------------------------------------------------------------------------------------------------*/
    Route::group(['prefix' => 'frontend', 'namespace' => 'Admin'], function () {
        Route::get('/new-user', 'FrontendUserManageController@new_user')->name('admin.frontend.new.user');
        Route::post('/new-user', 'FrontendUserManageController@new_user_add');
        Route::post('/user-update', 'FrontendUserManageController@user_update')->name('admin.frontend.user.update');
        Route::post('/user-password-chnage', 'FrontendUserManageController@user_password_change')->name('admin.frontend.user.password.change');
        Route::post('/delete-user/{id}', 'FrontendUserManageController@new_user_delete')->name('admin.frontend.delete.user');
        Route::get('/all-user', 'FrontendUserManageController@all_user')->name('admin.all.frontend.user');
        Route::post('/all-user/bulk-action', 'FrontendUserManageController@bulk_action')->name('admin.all.frontend.user.bulk.action');
        Route::post('/all-user/email-status', 'FrontendUserManageController@email_status')->name('admin.all.frontend.user.email.status');
    });

    /**---------------------------------------------------------------------------------------------------------------------------
     *                          NEWSLETTER PAGE MANAGE
     * ----------------------------------------------------------------------------------------------------------------------------*/
    Route::group(['prefix' => 'newsletter', 'namespace' => 'Admin'], function () {
        //newsletter
        Route::get('/', 'NewsletterController@index')->name('admin.newsletter');
        Route::post('/delete/{id}', 'NewsletterController@delete')->name('admin.newsletter.delete');
        Route::post('/single', 'NewsletterController@send_mail')->name('admin.newsletter.single.mail');
        Route::get('/all', 'NewsletterController@send_mail_all_index')->name('admin.newsletter.mail');
        Route::post('/all', 'NewsletterController@send_mail_all');
        Route::post('/new', 'NewsletterController@add_new_sub')->name('admin.newsletter.new.add');
        Route::post('/bulk-action', 'NewsletterController@bulk_action')->name('admin.newsletter.bulk.action');
        Route::post('/newsletter/verify-mail-send', 'NewsletterController@verify_mail_send')->name('admin.newsletter.verify.mail.send');
    });

    /**---------------------------------------------------------------------------------------------------------------------------
     *                          BLOG PAGE MANAGE
     * ----------------------------------------------------------------------------------------------------------------------------*/
    Route::group(['prefix' => 'blog', 'namespace' => 'Admin'], function () {
        Route::get('/', 'BlogController@index')->name('admin.blog');
        Route::get('/new', 'BlogController@new_blog')->name('admin.blog.new');
        Route::post('/new', 'BlogController@store_new_blog');
        Route::post('/clone', 'BlogController@clone_blog')->name('admin.blog.clone');
        Route::get('/edit/{id}', 'BlogController@edit_blog')->name('admin.blog.edit');
        Route::post('/update/{id}', 'BlogController@update_blog')->name('admin.blog.update');
        Route::post('/delete/{id}', 'BlogController@delete_blog')->name('admin.blog.delete');
        Route::get('/category', 'BlogController@category')->name('admin.blog.category');
        Route::post('/category', 'BlogController@new_category');
        Route::post('/category/delete/{id}', 'BlogController@delete_category')->name('admin.blog.category.delete');
        Route::post('/category/update', 'BlogController@update_category')->name('admin.blog.category.update');
        Route::post('/category/bulk-action', 'BlogController@category_bulk_action')->name('admin.blog.category.bulk.action');
        Route::post('/blog-lang-by-cat', 'BlogController@Language_by_slug')->name('admin.blog.lang.cat');
        //blog page
        Route::get('/page-settings', 'BlogController@blog_page_settings')->name('admin.blog.page.settings');
        Route::post('/page-settings', 'BlogController@update_blog_page_settings');
        //blog single page
        Route::get('/single-settings', 'BlogController@blog_single_page_settings')->name('admin.blog.single.settings');
        Route::post('/single-settings', 'BlogController@update_blog_single_page_settings');
        //bulk action
        Route::post('/bulk-action', 'BlogController@bulk_action')->name('admin.blog.bulk.action');
    });

    /**---------------------------------------------------------------------------------------------------------------------------
     *                          FAQ ROUTES
     * ----------------------------------------------------------------------------------------------------------------------------*/
    Route::group(['prefix' => 'faq', 'namespace' => 'Admin'], function () {
        Route::get('/', 'FaqController@index')->name('admin.faq');
        Route::post('/', 'FaqController@store');
        Route::post('/update-faq', 'FaqController@update')->name('admin.faq.update');
        Route::post('/delete-faq/{id}', 'FaqController@delete')->name('admin.faq.delete');
        Route::post('/clone-faq', 'FaqController@clone')->name('admin.faq.clone');
        Route::post('/faq/bulk-action', 'FaqController@bulk_action')->name('admin.faq.bulk.action');
    });

    /**---------------------------------------------------------------------------------------------------------------------------
     *                          PAGES ROUTES
     * ----------------------------------------------------------------------------------------------------------------------------*/
    Route::group(['prefix' => 'page', 'namespace' => 'Admin'], function () {
        Route::get('/all', 'PagesController@index')->name('admin.page');
        Route::get('/new', 'PagesController@new_page')->name('admin.page.new');
        Route::post('/new', 'PagesController@store_new_page');
        Route::get('/edit/{id}', 'PagesController@edit_page')->name('admin.page.edit');
        Route::post('/update/{id}', 'PagesController@update_page')->name('admin.page.update');
        Route::post('/delete/{id}', 'PagesController@delete_page')->name('admin.page.delete');
        Route::post('/bulk-action', 'PagesController@bulk_action')->name('admin.page.bulk.action');
    });

    /**---------------------------------------------------------------------------------------------------------------------------
     *                          NAVBAR ROUTES
     * ----------------------------------------------------------------------------------------------------------------------------*/
    Route::group(['prefix' => 'appearance-settings/navbar', 'namespace' => 'Admin'], function () {
        Route::get('/all', 'NavbarController@navbar_settings')->name('admin.navbar.settings');
        Route::post('/all', 'NavbarController@update_navbar_settings');
    });

    /**---------------------------------------------------------------------------------------------------------------------------
     *                          HOME VARIANT ROUTES
     * ----------------------------------------------------------------------------------------------------------------------------*/
    Route::group(['prefix' => 'appearance-settings/home-variant', 'namespace' => 'Admin'], function () {
        Route::get('/select', "AdminDashboardController@home_variant")->name('admin.home.variant');
        Route::post('/select', "AdminDashboardController@update_home_variant");
    });

    /**---------------------------------------------------------------------------------------------------------------------------
     *                          TOP BAR ROUTES
     * ----------------------------------------------------------------------------------------------------------------------------*/
    Route::group(['prefix' => 'appearance-settings/topbar', 'namespace' => 'Admin'], function () {
        Route::get('/all', "TopbarController@topbar_settings")->name('admin.topbar.settings');
        Route::post('/all', "TopbarController@update_topbar_settings");
        Route::post('/settings/info-items', "TopbarController@update_topbar_info_items")->name('admin.topbar.info.item.store');
        Route::post('/new-social-item', 'TopbarController@new_social_item')->name('admin.new.social.item');
        Route::post('/update-social-item', 'TopbarController@update_social_item')->name('admin.update.social.item');
        Route::post('/delete-social-item/{id}', 'TopbarController@delete_social_item')->name('admin.delete.social.item');
    });

    /**---------------------------------------------------------------------------------------------------------------------------
     *                          GENERAL SETTINGS MANAGE
     * ----------------------------------------------------------------------------------------------------------------------------*/
    Route::group(['prefix' => 'general-settings', 'namespace' => 'Admin'], function () {
        // DATABASE UPGRADE
        Route::get('/database-upgrade', 'GeneralSettingsController@database_upgrade')->name('admin.general.database.upgrade');
        Route::post('/database-upgrade', 'GeneralSettingsController@database_upgrade_post');
        //general settings
        Route::get('/site-identity', 'GeneralSettingsController@site_identity')->name('admin.general.site.identity');
        
        Route::post('/reading', 'GeneralSettingsController@update_reading')->name("admin.general.update");
        Route::post('/site-identity', 'GeneralSettingsController@update_site_identity');

        Route::get('/basic-settings', 'GeneralSettingsController@basic_settings')->name('admin.general.basic.settings');
        Route::post('/basic-settings', 'GeneralSettingsController@update_basic_settings');

        Route::get('/color-settings', 'GeneralSettingsController@color_settings')->name('admin.general.color.settings');
        Route::post('/color-settings', 'GeneralSettingsController@update_color_settings');

        Route::get('/seo-settings', 'GeneralSettingsController@seo_settings')->name('admin.general.seo.settings');
        Route::post('/seo-settings', 'GeneralSettingsController@update_seo_settings');

        Route::get('/scripts', 'GeneralSettingsController@scripts_settings')->name('admin.general.scripts.settings');
        Route::post('/scripts', 'GeneralSettingsController@update_scripts_settings');

        Route::get('/email-template', 'GeneralSettingsController@email_template_settings')->name('admin.general.email.template');
        Route::post('/email-template', 'GeneralSettingsController@update_email_template_settings');

        Route::get('/typography-settings', 'GeneralSettingsController@typography_settings')->name('admin.general.typography.settings');
        Route::post('/typography-settings', 'GeneralSettingsController@update_typography_settings');

        Route::post('/typography-settings/single', 'GeneralSettingsController@get_single_font_variant')->name('admin.general.typography.single');
        Route::get('/cache-settings', 'GeneralSettingsController@cache_settings')->name('admin.general.cache.settings');
        Route::post('/cache-settings', 'GeneralSettingsController@update_cache_settings');

        Route::get('/page-settings', 'GeneralSettingsController@page_settings')->name('admin.general.page.settings');
        Route::post('/page-settings', 'GeneralSettingsController@update_page_settings');

        Route::get('/backup-settings', 'GeneralSettingsController@backup_settings')->name('admin.general.backup.settings');
        Route::post('/backup-settings', 'GeneralSettingsController@update_backup_settings');

        Route::post('/backup-settings/delete', 'GeneralSettingsController@delete_backup_settings')->name('admin.general.backup.settings.delete');
        Route::post('/backup-settings/restore', 'GeneralSettingsController@restore_backup_settings')->name('admin.general.backup.settings.restore');
        Route::get('/update-system', 'GeneralSettingsController@update_system')->name('admin.general.update.system');
        Route::post('/update-system', 'GeneralSettingsController@update_system_version');

        Route::get('/license-setting', 'GeneralSettingsController@license_settings')->name('admin.general.license.settings');
        Route::post('/license-setting', 'GeneralSettingsController@update_license_settings');

        Route::get('/custom-css', 'GeneralSettingsController@custom_css_settings')->name('admin.general.custom.css');
        Route::post('/custom-css', 'GeneralSettingsController@update_custom_css_settings');

        Route::get('/gdpr-settings', 'GeneralSettingsController@gdpr_settings')->name('admin.general.gdpr.settings');
        Route::post('/gdpr-settings', 'GeneralSettingsController@update_gdpr_cookie_settings');
        //update script
        Route::get('/update-script', 'ScriptUpdateController@index')->name('admin.general.script.update');
        Route::post('/update-script', 'ScriptUpdateController@update_script');
        //custom js
        Route::get('/custom-js', 'GeneralSettingsController@custom_js_settings')->name('admin.general.custom.js');
        Route::post('/custom-js', 'GeneralSettingsController@update_custom_js_settings');
        //smtp settings
        Route::get('/smtp-settings', 'GeneralSettingsController@smtp_settings')->name('admin.general.smtp.settings');
        Route::post('/smtp-settings', 'GeneralSettingsController@update_smtp_settings');
        Route::post('/smtp-settings/test', 'GeneralSettingsController@test_smtp_settings')->name('admin.general.smtp.settings.test');
        //payment gateway
        Route::get('/payment-settings', 'GeneralSettingsController@payment_settings')->name('admin.general.payment.settings');
        Route::post('/payment-settings', 'GeneralSettingsController@update_payment_settings');

        //popup
        Route::get('/popup-settings', 'GeneralSettingsController@popup_settings')->name('admin.general.popup.settings');
        Route::post('/popup-settings', 'GeneralSettingsController@update_popup_settings');
        //rss feed
        Route::get('/rss-settings', 'GeneralSettingsController@rss_feed_settings')->name('admin.general.rss.feed.settings');
        Route::post('/rss-settings', 'GeneralSettingsController@update_rss_feed_settings');

        //update script
        Route::get('/update-script', 'GeneralSettingsController@update_script_settings')->name('admin.general.update.script.settings')->permission('general-settings-update-script');
        Route::post('/update-script', 'GeneralSettingsController@sote_update_script_settings')->permission('general-settings-update-script');

        Route::get('/license-setting', 'GeneralSettingsController@license_settings')->name('admin.general.license.settings')->permission('general-settings-license');
        Route::post('/license-setting', 'GeneralSettingsController@update_license_settings')->permission('general-settings-license');

        //sitemap
        Route::get('/sitemap-settings', 'GeneralSettingsController@sitemap_settings')->name('admin.general.sitemap.settings');
        Route::post('/sitemap-settings', 'GeneralSettingsController@update_sitemap_settings');
        Route::post('/sitemap-settings/delete', 'GeneralSettingsController@delete_sitemap_settings')->name('admin.general.sitemap.settings.delete');


        Route::controller(LicenseController::class)->middleware('auth:admin')->group(function (){
            Route::post('/license-setting-verify', 'license_key_generate')->name('admin.general.license.key.generate');
            Route::get('/update-check', 'update_version_check')->name('admin.general.update.version.check');
            Route::post('/download-update/{productId}/{tenant}', 'updateDownloadLatestVersion')->name('admin.general.update.download.settings');
            Route::get('/software-update-setting', 'software_update_check_settings')->name('admin.general.software.update.settings');
        });
    });

    //language
    Route::group(['prefix' => 'languages', 'namespace' => 'Admin'], function () {
        Route::get('/', 'LanguageController@index')->name('admin.languages');
        Route::get('/words/frontend/{id}', 'LanguageController@frontend_edit_words')->name('admin.languages.words.frontend');
        Route::get('/words/backend/{id}', 'LanguageController@backend_edit_words')->name('admin.languages.words.backend');
        Route::post('/words/update/{id}', 'LanguageController@update_words')->name('admin.languages.words.update');
        Route::post('/new', 'LanguageController@store')->name('admin.languages.new');
        Route::post('/update', 'LanguageController@update')->name('admin.languages.update');
        Route::post('/delete/{id}', 'LanguageController@delete')->name('admin.languages.delete');
        Route::post('/default/{id}', 'LanguageController@make_default')->name('admin.languages.default');
        Route::post('/clone', 'LanguageController@clone_languages')->name('admin.languages.clone');
        Route::post('/add-new-string', 'LanguageController@add_new_string')->name('admin.languages.add.string');
        Route::post('/languages/regenerate-source-text','LanguageController@regenerate_source_text')->name('admin.languages.regenerate.source.texts');
    });

    /** ------------------------------------------
     *              PAGE BUILDER
      ------------------------------------------ */
    Route::group(['prefix' => 'page-builder', 'namespace' => 'Admin', 'middleware' => 'auth:admin'], function () {
        /*-------------------------
            HOME PAGE BUILDER
        -------------------------*/
        Route::get('/home-page', 'PageBuilderController@homepage_builder')->name('admin.home.page.builder');
        Route::post('/home-page', 'PageBuilderController@update_homepage_builder');
        /*-------------------------
            ABOUT PAGE BUILDER
        -------------------------*/
        Route::get('/about-page', 'PageBuilderController@aboutpage_builder')->name('admin.about.page.builder');
        Route::post('/about-page', 'PageBuilderController@update_aboutpage_builder');
        /*-------------------------
            CONTACT PAGE BUILDER
        -------------------------*/
        Route::get('/contact-page', 'PageBuilderController@contactpage_builder')->name('admin.contact.page.builder');
        Route::post('/contact-page', 'PageBuilderController@update_contactpage_builder');
        /*-------------------------
            FAQ PAGE BUILDER
        -------------------------*/
        Route::get('/faq-page', 'PageBuilderController@faqpage_builder')->name('admin.faq.page.builder');
        Route::post('/faq-page', 'PageBuilderController@update_faqpage_builder');
        /*-------------------------
            BLOG PAGE BUILDER
        -------------------------*/
        Route::get('/blog-page', 'PageBuilderController@blogpage_builder')->name('admin.blog.page.builder');
        Route::post('/blog-page', 'PageBuilderController@update_blogpage_builder');

        /*-------------------------
           DYNAMIC PAGE BUILDER
        -------------------------*/
        Route::get('/dynamic-page/{type}/{id}', 'PageBuilderController@dynamicpage_builder')->name('admin.dynamic.page.builder');
        Route::post('/dynamic-page', 'PageBuilderController@update_dynamicpage_builder')->name('admin.dynamic.page.builder.store');
    });

    /** ------------------------------------------
                FORM BUILDER ROUTES
    ------------------------------------------ */
    Route::prefix('form-builder')->group(function () {
        /*-------------------------
            CUSTOM FORM BUILDER
        --------------------------*/
        Route::group(['prefix' => 'custom'], function () {
            Route::get('/all', 'Admin\CustomFormBuilderController@all')->name('admin.form.builder.all');
            Route::post('/new', 'Admin\CustomFormBuilderController@store')->name('admin.form.builder.store');
            Route::get('/edit/{id}', 'Admin\CustomFormBuilderController@edit')->name('admin.form.builder.edit');
            Route::post('/update', 'Admin\CustomFormBuilderController@update')->name('admin.form.builder.update');
            Route::post('/delete/{id}', 'Admin\CustomFormBuilderController@delete')->name('admin.form.builder.delete');
            Route::post('/bulk-action', 'Admin\CustomFormBuilderController@bulk_action')->name('admin.form.builder.bulk.action');
        });

        /*-------------------------
         GET IN TOUCH FORM ROUTES
        --------------------------*/
        Route::get('/get-in-touch', 'FormBuilderController@get_in_touch_form_index')->name('admin.form.builder.get.in.touch');
        Route::post('/get-in-touch', 'FormBuilderController@update_get_in_touch_form');
        /*-------------------------
        SERVICE QUERY FORM ROUTES
       --------------------------*/
        Route::get('/service-query', 'FormBuilderController@service_query_index')->name('admin.form.builder.service.query');
        Route::post('/service-query', 'FormBuilderController@update_service_query');
        /*-------------------------
        CASE STUDY FORM ROUTES
       --------------------------*/
        Route::get('/case-study-query', 'FormBuilderController@case_study_query_index')->name('admin.form.builder.case.study.query');
        Route::post('/case-study-query', 'FormBuilderController@update_case_study_query');
        /*-------------------------
        QUOTE FORM ROUTES
       --------------------------*/
        Route::get('/quote-form', 'FormBuilderController@quote_form_index')->name('admin.form.builder.quote');
        Route::post('/quote-form', 'FormBuilderController@update_quote_form');

        /*-------------------------
        ORDER FORM ROUTES
       --------------------------*/
        Route::get('/order-form', 'FormBuilderController@order_form_index')->name('admin.form.builder.order');
        Route::post('/order-form', 'FormBuilderController@update_order_form');
        /*-------------------------
          CONTACT FORM ROUTES
          --------------------------*/
        Route::get('/contact-form', 'FormBuilderController@contact_form_index')->name('admin.form.builder.contact');
        Route::post('/contact-form', 'FormBuilderController@update_contact_form');

        /*-------------------------
           ESTIMATE FORM ROUTES
         --------------------------*/
        Route::get('/estimate', 'FormBuilderController@estimate_form_index')->name('admin.form.builder.estimate.form');
        Route::post('/estimate', 'FormBuilderController@update_estimate_form');
    });

    /*==============================================
                SUPPORT TICKET MODULE
    ==============================================*/
    Route::prefix('support-tickets')->namespace('Support')->group(function () {
        Route::get('/', 'AdminSupportTicketController@all_tickets')->name('admin.support.ticket.all');
        Route::get('/new', 'AdminSupportTicketController@new_ticket')->name('admin.support.ticket.new');
        Route::post('/new', 'AdminSupportTicketController@store_ticket');
        Route::post('/delete/{id}', 'AdminSupportTicketController@delete')->name('admin.support.ticket.delete');
        Route::get('/view/{id}', 'AdminSupportTicketController@view')->name('admin.support.ticket.view');
        Route::post('/bulk-action', 'AdminSupportTicketController@bulk_action')->name('admin.support.ticket.bulk.action');
        Route::post('/priority-change', 'AdminSupportTicketController@priority_change')->name('admin.support.ticket.priority.change');
        Route::post('/status-change', 'AdminSupportTicketController@status_change')->name('admin.support.ticket.status.change');
        Route::post('/send message', 'AdminSupportTicketController@send_message')->name('admin.support.ticket.send.message');
        /*-------------------------------------------------
            SUPPORT TICKET : PAGE SETTINGS ROUTES
        --------------------------------------------------*/
        Route::get('/page-settings', 'AdminSupportTicketController@page_settings')->name('admin.support.ticket.page.settings');
        Route::post('/page-settings', 'AdminSupportTicketController@update_page_settings');
        /*-------------------------------------------------
            SUPPORT TICKET : DEPARTMENT ROUTES
        --------------------------------------------------*/
        Route::group(['prefix' => 'department'],function () {
            Route::get('/', 'SupportDepartmentController@category')->name('admin.support.ticket.department');
            Route::post('/', 'SupportDepartmentController@new_category');
            Route::post('/delete/{id}', 'SupportDepartmentController@delete')->name('admin.support.ticket.department.delete');
            Route::post('/update', 'SupportDepartmentController@update')->name('admin.support.ticket.department.update');
            Route::post('/bulk-action', 'SupportDepartmentController@bulk_action')->name('admin.support.ticket.department.bulk.action');
        });
    });

    /*--------------------------
        PAGE BUILDER
    --------------------------*/
    Route::group(['namespace' => 'Admin'], function () {
        Route::post('/update', 'PageBuilderController@update_addon_content')->name('admin.page.builder.update');
        Route::post('/new', 'PageBuilderController@store_new_addon_content')->name('admin.page.builder.new');
        Route::post('/delete', 'PageBuilderController@delete')->name('admin.page.builder.delete');
        Route::post('/update-order', 'PageBuilderController@update_addon_order')->name('admin.page.builder.update.addon.order');
        Route::post('/get-admin-markup', 'PageBuilderController@get_admin_panel_addon_markup')->name('admin.page.builder.get.addon.markup');
    });
}); //End admin-home

/**----------------------------------------------------------------------
    ADMIN MEDIA UPLOAD BUTTON, KEEP IT SEPARATED FOR DEMO PURPOSE
-----------------------------------------------------------------------*/
Route::group(['middleware' => ['setlang:backend', 'auth:admin'], 'prefix' => 'admin-home', 'namespace' => 'Admin'], function () {
    /* media upload */
    Route::post('media-upload', 'MediaUploadController@upload_media_file')->name('admin.upload.media.file');
    Route::post('media-upload/all', 'MediaUploadController@all_upload_media_file')->name('admin.upload.media.file.all');
    Route::post('/media-upload/loadmore', 'MediaUploadController@get_image_for_loadmore')->name('admin.upload.media.file.loadmore');
    // chart data
    Route::post('/chart', 'AdminDashboardController@get_chart_data')->name('admin.home.chart.data');
    Route::post('/chart/day', 'AdminDashboardController@get_chart_by_date_data')->name('admin.home.chart.data.by.day');
    Route::post('/chart/sale-count', 'AdminDashboardController@getSaleCountPerDayChartData')->name('admin.home.chart.sale.count.per.day');
    Route::post('/chart/order-count', 'AdminDashboardController@getOrderCountPerDayChartData')->name('admin.home.chart.order.count.per.day');

});
