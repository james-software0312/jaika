<?php

use App\Http\Controllers\Api\AttributesController;
use App\Http\Controllers\Api\CheckoutController;
use App\Http\Controllers\Api\SiteSettingsController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\SubCategoryController;
use App\Http\Controllers\Api\ProductController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['prefix'=> 'v1' ],function(){
    Route::get("/get-currency-symbol",function (){
        $data = ["symbol" => site_currency_symbol()];
        return response()->success($data);
    });

    Route::get("/slider",[\App\Http\Controllers\Api\SliderController::class,"index"]);

    Route::get('/country',[CountryController::class,'country']);
    Route::get('/state/{country_id}',[CountryController::class,'stateByCountryId']);
    
    Route::post('/register',[UserController::class,'register']);
    Route::post('/login',[UserController::class,'login']);
    Route::post('social/login',[UserController::class,'socialLogin']);
    Route::post('/send-otp-in-mail',[UserController::class,'sendOTP']);
    Route::post('/reset-password',[UserController::class,'resetPassword']);


    Route::group(['prefix' => 'user/','middleware' => 'auth:sanctum'],function (){
        Route::get("/order-list",[\App\Http\Controllers\Api\OrderController::class,"index"]);
        Route::get("/order-list/{ProductSellInfo}",[\App\Http\Controllers\Api\OrderController::class,"details"]);
        Route::post('logout',[UserController::class,'logout']);
        Route::get('profile',[UserController::class,'profile']);
        Route::post('change-password',[UserController::class,'changePassword']);
        Route::post('update-profile',[UserController::class,'updateProfile']);
        Route::group(['prefix' => 'support-tickets'],function(){
            Route::post('/',[UserController::class,'allTickets']);
            Route::post('/{id}',[UserController::class,'viewTickets']);
        });

        /* Add shipping method */
        Route::get("/all-shipping-address",[UserController::class,"get_all_shipping_address"]);
        Route::get("/shipping-address/delete/{shipping}",[UserController::class,"delete_shipping_address"]);
        Route::post("/store-shipping-address",[UserController::class,"storeShippingAddress"]);
        Route::get("/ticket",[UserController::class,"get_all_tickets"]);
        Route::get("/ticket/{id}",[UserController::class,"single_ticket"]);
        Route::get("/ticket/chat/{ticket_id}",[UserController::class,"fetch_support_chat"]);
        Route::post("/ticket/chat/send/{ticket_id}",[UserController::class,"send_support_chat"]);
      
        Route::post('ticket/message-send',[UserController::class,'sendMessage']);
        Route::post('/send-otp-in-mail/success',[UserController::class,'sendOTPSuccess']);
        Route::post('ticket/create',[UserController::class,'createTicket']);
        Route::get("/get-department",[UserController::class,"get_department"]);
        Route::post('payment-status-update',[ServiceController::class,'paymentStatusUpdate']);

        // Checkout routes
        Route::post("checkout",[CheckoutController::class,"checkout"]);
        // Update payment status
        Route::post("checkout/payment/update",[CheckoutController::class,"payment_status_update"]);
        // get all order list
        Route::get("order-list",[CheckoutController::class,"order_list"]);
    });
    
    /* category */
    Route::group(['prefix' => 'category'],function(){
        Route::get('/',[CategoryController::class,'allCategory']);
        Route::get('/{id}',[CategoryController::class,'singleCategory']);
    });
    
    /* sub category */
    Route::group(['prefix' => 'subcategory'],function(){
        Route::get('/',[SubCategoryController::class,'allSubCategory']);
        Route::get('/{id}',[SubCategoryController::class,'singleSubCategory']);
    });

    /* Attributes */
    Route::get('/attributes',[AttributesController::class,'index']);
    Route::get('/tags',[ProductController::class,"tags"]);

    /* products */
     Route::group(['prefix' => 'products'],function(){
        Route::get('/',[ProductController::class,'allProducts']);
        Route::get('/search',[ProductController::class,'search']);
        Route::get('/type/{type}',[ProductController::class,'product_type']);
        Route::get('/{id}',[ProductController::class,'details']);
        Route::post('/category/{id}',[ProductController::class,'singleProducts']);
        Route::post('/subcategory/{id}',[ProductController::class,'singleProducts']);
    });
    
    Route::get("admin/payment-gateway-list",[SiteSettingsController::class,"payment_gateway_list"]);

     /* Coupon Route */
    Route::post('coupon',[\App\Http\Controllers\Api\CouponController::class,"index"]);

    // Tax Info 'FrontendController@getCountryInfo'  'FrontendController@getStateInfo'  'Product\ProductCartController@calculateCheckout'
    Route::get('country-info', [CheckoutController::class,"getCountryInfo"]);
    Route::get('state-info',  [CheckoutController::class,"getStateInfo"]);
    Route::get('checkout-calculate', [CheckoutController::class,"calculateCheckout"]);
});

Route::fallback(function(){
    return response()->json(['message' => 'Page Not Found.'], 404);
});