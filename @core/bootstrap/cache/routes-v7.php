<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w4LGgUgXnXg2by8Q',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor-payu/status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payu::redirect',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/xgpayment-gateway/authorizenet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'xg.payment.gateway.authorizenet',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/xgpayment-gateway/stipe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'xg.payment.gateway.stripe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/xgpayment-gateway/paystack' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'xg.payment.gateway.paystack',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/xgpayment-gateway/paystack-callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'xg.payment.gateway.paystack.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/license-activation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'license.activation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/license-activation-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'license.activation.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/check-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'check.system.update',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/get-currency-symbol' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BVVidalqFIx4LapF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/slider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xA07lV65HxP9sFQ5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/country' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::30yqwfSJEcUBrlqx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uMHWyIp1sqpeng82',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hKnwREKjyQn33xAA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/social/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t1JRruFBDLdyy5CE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/send-otp-in-mail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GZslTq9ASvlPAj30',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JoPeoEVTxa8Hl6GG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/order-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W3Mi8EG4p2dxn6b7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rLiihZO0Y01uOkX7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VHNaghifN1KD78ET',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NtMENTEJnjpUBRZL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/update-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iQcp6LM614dh0U8P',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/support-tickets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Uha5u5sf5x8PNIoX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/all-shipping-address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P0QVvDevFCZxwAXh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/store-shipping-address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R01yBb9n6Tf0S3t1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/ticket' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FMGBBzUtNyrKKfSW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/send-otp-in-mail/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0vagYSJUpoptfPFP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/get-department' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vVxNyLWknGzzvF3L',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/payment-status-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EZZh2gsEzhmHe3WK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WTLgNXSiblVOAyVb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/checkout/payment/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::69HH16NgEBT8yiWT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M11Oy2JAspBj3zdO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/subcategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vJOojFCrzb8LsqN4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/attributes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7GXx86dFKT2mMu8k',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GcnsBmFcQFkI1Gnm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yoiZDTa5znpf35rK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/products/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C1ZsUV2KHwbaCVnW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/admin/payment-gateway-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WGicIjoNTT0gQGKg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::egt8bi5fK8rCyUZV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/country-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TDK6R4NQqdLhujL6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/state-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pWYREKSRaAarfIib',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/checkout-calculate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GcOqXfWmSjMYaV0y',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/feeds' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feeds.main',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/facebook/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facebook.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/facebook/redirect' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login.facebook.redirect',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/google/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'google.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/google/redirect' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login.google.redirect',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/submit-custom-form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.form.builder.custom.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'homepage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.about',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.faq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.contact',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-states' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.user.country.state',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact-message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.contact.message',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/country-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'country.info.ajax',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/state-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'state.info.ajax',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shipping-validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipping.validate.ajax',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/new-shipping' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.add.user.shipping.address',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filter-top-rated' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.filter.top.rated',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filter-top-selling' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.filter.top.selling',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filter-new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.filter.new',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filter-campaign' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.filter.campaign',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filter-discount' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.filter.discounted',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/attribute-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.attribute.html',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/land/home/01' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0UmxAdg2uLfJhW83',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/land/home/02' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5VpkXAP43Q2WBjEl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/land/shop/grid' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'land.shop.grid',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/land/shop/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'land.shop.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/land/shop/right-sidebar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'land.shop.sidebar.right',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/land/shop/left-sidebar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'land.shop.sidebar.left',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/land/blog/grid' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DPPRZbCqFhCi5q6q',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/land/blog/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::veL1XEjGYw6JlyWw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/land/blog/news-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NDzHgE5H8QYy5th1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/land/blog/details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jBfrTpgJjbDy6ma5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/cart/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.cart',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/cart/details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.cart.status.ajax',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/cart/summary-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.cart.info.ajax',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/cart/ajax/add-to-cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.add.to.cart.ajax',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/cart/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.cart.ajax.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/cart/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.cart.ajax.clear',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/cart/ajax/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.cart.update.ajax',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/cart/ajax/coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.cart.apply.coupon',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/wishlist/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.wishlist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/wishlist/total' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.wishlist.total',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/wishlist/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.add.to.wishlist',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/wishlist/ajax-add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.add.to.wishlist.ajax',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/wishlist/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.wishlist.ajax.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/wishlist/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.wishlist.ajax.clear',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/wishlist/send-to-cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.wishlist.send.to.cart',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/compare/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.compare',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/compare/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.add.to.compare',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/compare/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.compare.ajax.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/compare/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.ajax.compare.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/campaign/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.campaign.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.checkout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yKoFz3Y51QW7jyc7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout-continue' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.checkout.continue',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout-cancel-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.checkout.cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout-reorder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.checkout.reorder',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout-apply-coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.checkout.apply.coupon',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout-calculate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.checkout.calculate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-paypal-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.paypal.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-paytm-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.paytm.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-stripe-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.stripe.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-razorpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.razorpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-flullterwave-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.flutterwave.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-mollie-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.mollie.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-midtrans-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.midtrans.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-payfast-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.payfast.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-cashfree-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.cashfree.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-paystack-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.paystack.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-instamojo-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.instamojo.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-marcadopago-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.marcadopago.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.blog',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog-search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.blog.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/support' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.support.ticket',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/support/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.support.ticket.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/campaign/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.campaign.user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.home.change.password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/edit-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.home.edit.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/profile-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/password-change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.password.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/support-tickets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.home.support.tickets',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/support-ticket/priority-change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard.support.ticket.priority.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/support-ticket/status-change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard.support.ticket.status.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/support-ticket/message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard.support.ticket.message',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/campaign/log/withdraw' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.campaign.log.withdraw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/campaign/withdraw/submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.campaign.withdraw.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/campaign/withdraw/check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.campaign.withdraw.check',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/orders/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.product.order.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/shipping-address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.shipping.address.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/shipping-address/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.shipping.address.new',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pwO7TvS5Vib9SA8r',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/shipping-address/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.shipping.address.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/media-upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.upload.media.file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/media-upload/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.upload.media.file.all',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/media-upload/alt' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.upload.media.file.alt.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/media-upload/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.upload.media.file.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/media-upload/loadmore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.upload.media.file.loadmore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tsqDdoEejVg2eji1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ajax-login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.ajax.login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login/forget-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.forget.password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NAy8foHZlJrFuSvZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.reset.password.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.user.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fZVSmPte2FM66QM2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/email-verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.email.verify',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Jk9cXS01FfnsQJcj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/resend-verify-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.resend.verify.mail',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package-user/generate-invoice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.package.invoice.generate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.langchange',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subscribe-newsletter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.subscribe.newsletter',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1NSmuh1OjjP9W7b5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login/admin/forget-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forget.password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Kj43mFmVHeKr6hCK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login/admin/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reset.password.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/404-page-manage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.404.page.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eUGrokv5a6kwadJY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/maintains-page/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.maintains.page.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W9j8CgMr0HVGMsvh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/slider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/slider/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/slider/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/slider/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.new',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/deleted' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.deleted.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/deleted/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.deleted.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/ratings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.ratings.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/ratings/approve' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.ratings.approve',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/ratings/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.ratings.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/attributes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.attributes.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/attributes/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.attributes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.attributes.',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/attributes/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.attributes.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/attributes/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.attributes.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/attributes/details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.attributes.details',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/attributes/by-lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.attributes.admin.products.variant.by.lang',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/product-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.order.logs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/product-order/new-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.order.new',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.order.',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/product-order/filter-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.order.filter',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/product-order/approve' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.order.payment.approve',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/product-order/status-change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.order.status.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/product-order/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.order.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/product-order/order-reminder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.order.reminder',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/product-order/get-product-row' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.order.product.row',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/generate-products-invoice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.invoice.generate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.import.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.import.to.database',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/import/update-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.import.settings.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.category.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/categories/get-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.category.get.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/categories/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.category.new',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/categories/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.category.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/categories/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.category.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/sub-categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.subcategory.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/sub-categories/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.subcategory.new',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/sub-categories/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.subcategory.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/sub-categories/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.subcategory.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/coupons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.coupon.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/coupons/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.coupon.new',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/coupons/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.coupon.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/coupons/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.coupon.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/coupons/check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.coupon.check',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/coupons/get-products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.coupon.products',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.tag.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/tags/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.tag.new',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/tags/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.tag.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/tags/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.tag.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/tags/check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.tag.check',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/tags/get-tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.tag.get.ajax',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/product-tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.product.tag.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/product-tags/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.product.tag.new',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/product-tags/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.product.tag.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/product-tags/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.product.tag.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/product-tags/check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.product.tag.check',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/product-inventory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.inventory.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/product-inventory/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.inventory.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/product-inventory/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.inventory.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/products/product-inventory/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.inventory.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/shipping/zone' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.zone.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/shipping/zone/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.zone.new',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/shipping/zone/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.zone.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/shipping/zone/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.zone.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/shipping/method' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.method.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/shipping/method/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.method.new',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.method.',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/shipping/method/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.method.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/shipping/method/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.method.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/shipping/method/make-default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.method.make.default',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/campaigns' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.campaigns.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/campaigns/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.campaigns.new',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.campaigns.',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/campaigns/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.campaigns.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/campaigns/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.campaigns.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/campaigns/delete-product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.campaigns.delete.product',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/campaigns/price' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.campaigns.product.price',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/country' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/country/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country.new',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/country/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/country/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/state' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.state.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/state/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.state.new',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/state/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.state.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/state/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.state.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/state/country-state' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.state.by.country',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/tax/country' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax.country.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/tax/country/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax.country.new',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/tax/country/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax.country.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/tax/country/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax.country.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/tax/state' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax.state.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/tax/state/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax.state.new',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/tax/state/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax.state.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/tax/state/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax.state.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/page-settings/wishlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.settings.wishlist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.settings.',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/page-settings/cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.settings.cart',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.settings.generated::piS5Vyn85zNhkFPz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/page-settings/checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.settings.checkout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.settings.generated::yF75ZbVUoHAZB6IN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/page-settings/compare' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.settings.compare',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.settings.generated::hDH8IEBj7xmzmDze',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/page-settings/login-register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.settings.user.auth',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.settings.generated::VqNnoUwtDyWBm3Id',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/page-settings/shop-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.settings.shop.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.settings.generated::WYrPqIPSrnJVfrNN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/home-page-01/latest-news' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.homeone.latest.news',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GTOpD8bAaOexiZCb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/home-page-01/latest-event' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.homeone.latest.event',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0KzBR0Xh5TsP7m13',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/home-page-01/feature-area' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.homeone.feature.area',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kT8PMS2g2BVB71Mm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/home-page-01/about-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.homeone.about.us',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Yto5dkhcQ7TMrj90',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/home-page-01/video-area' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.homeone.video.area',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uEOR5D34dUsOlKuk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/home-page-01/section-manage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.homeone.section.manage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ls5jmuhmudMzW7lc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/widgets/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.widgets',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.widgets.new',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/widgets/markup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.widgets.markup',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/widgets/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.widgets.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/widgets/update/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.widgets.update.order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/widgets/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.widgets.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/topbar-settings/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jORwZVXakYybBgIP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/topbar-settings/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.topbar.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/topbar-settings/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.topbar.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/menu/new-menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menu.new',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/menu/mega-menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.mega.menu.item.select.markup',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/category-menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.menu.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/category-menu/new-menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.menu.new',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/category-menu/mega-menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.mega.category.menu.item.select.markup',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/category-menu/render-sub-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.menu.sub_category',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/home-page/key-features-area' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.key.features',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xR8IYdWTuM7aNpMZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/home-page/why-choose-us-area-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.why.choose.us',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iVpXlvGpSemTvL1F',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/home-page/call-to-action-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.call.to.action',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UectBWdMNYUDuXfz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/home-page/keyfeatures-area-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.keyfeatures',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UIDDdR5HOVANKGmz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/home-page/price-plan-area-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.price.plan',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mxWff09NQB0Myig7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/home-page/latest-blog-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.blog.latest',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CVLwjVL0YhJuL2Ut',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/home-page/section-manage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.section.manage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vxg8dHdSufbM4Urq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/contact-page/form-area' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.page.form.area',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TOylM7kbPgm8tEc5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/contact-page/map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.page.map',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7ONxmrrjLcieyStY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/contact-page/section-manage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.page.section.manage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vlQ4y6bQIKUyZiZl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/contact-page/contact-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.info',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lh3lV2kjU3Mj8v0h',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/contact-page/contact-info/title' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.info.title',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/contact-page/contact-info/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.info.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/contact-page/contact-info/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.info.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/media-upload/alt' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.upload.media.file.alt.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/media-upload/page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.upload.media.images.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/media-upload/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.upload.media.file.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.profile.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/profile-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.profile.update',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Fq7ot8uE0HFM5kHl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/password-change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.password.change',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::946P2DFwdvmXMzYU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/dark-mode-toggle' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dark.mode.toggle',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/admin/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.all.user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/admin/new-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.new.user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Jbe8vRXVzeGtS6ch',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/admin/user-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/admin/user-password-change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.password.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/admin/role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.all.admin.role',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/admin/role/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.new',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zRbQW33AyXSzkmwL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/admin/role/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.role.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/frontend/new-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.frontend.new.user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QvaOLl76Dd9R1PlT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/frontend/user-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.frontend.user.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/frontend/user-password-chnage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.frontend.user.password.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/frontend/all-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.all.frontend.user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/frontend/all-user/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.all.frontend.user.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/frontend/all-user/email-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.all.frontend.user.email.status',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/newsletter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/newsletter/single' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter.single.mail',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/newsletter/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter.mail',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bvvgTNbqdx6lTN1e',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/newsletter/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter.new.add',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/newsletter/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/newsletter/newsletter/verify-mail-send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter.verify.mail.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/blog/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.new',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dUlWnX8vtR4DbKLe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/blog/clone' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.clone',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/blog/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.category',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CgEilOAeQyuf20M1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/blog/category/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.category.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/blog/category/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.category.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/blog/blog-lang-by-cat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.lang.cat',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/blog/page-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.page.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gLQvVNeD6uthaqVp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/blog/single-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.single.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::59f6zG250652I9gY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/blog/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::appxmtLcWRw05sEN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/faq/update-faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/faq/clone-faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.clone',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/faq/faq/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/page/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/page/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.new',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rILsjvSi8e6GgRs1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/page/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/appearance-settings/navbar/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.navbar.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L70IYpsSLAOyW5DG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/appearance-settings/home-variant/select' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.variant',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zIg79urCMike5Q1B',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/appearance-settings/topbar/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.topbar.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8Dg5ezgMgodEOPf0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/appearance-settings/topbar/settings/info-items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.topbar.info.item.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/appearance-settings/topbar/new-social-item' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.new.social.item',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/appearance-settings/topbar/update-social-item' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update.social.item',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/database-upgrade' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.database.upgrade',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sy76H13xdRJPEvrm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/site-identity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.site.identity',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DfheVjdF3srmk5FW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/reading' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/basic-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.basic.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v2wGfmyhvG9BYRLN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/color-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.color.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JFI016n3SQZ54Pdl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/seo-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.seo.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fs671W8n6D3wHYoH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/scripts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.scripts.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d9ylS5LwM0QO27Da',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/email-template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.email.template',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mbohqDYBic9fT77X',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/typography-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.typography.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1J4niTgNWzvkndVe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/typography-settings/single' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.typography.single',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/cache-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.cache.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GGv20jeIbHWaatdP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/page-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.page.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lQirhg9cesYEOxfX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/backup-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.backup.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8fh1DJrJ2WRd60sj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/backup-settings/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.backup.settings.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/backup-settings/restore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.backup.settings.restore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/update-system' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.update.system',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FRDrboodt05mG5l7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/license-setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.license.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wXEAHBVjpbqFzaKO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/custom-css' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.custom.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lp8RbsrbAEcf2IMy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/gdpr-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.gdpr.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gSxPan7SbtdH0gCG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/update-script' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.update.script.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KAFO0GSs6GpcLyRP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/custom-js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.custom.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JTSpyBxTKohaCvo2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/smtp-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.smtp.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UhhfK8oWsPzcrrGO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/smtp-settings/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.smtp.settings.test',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/payment-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.payment.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XEf9DPsU4aikuXoS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/popup-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.popup.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kNqYYTxzYVKG9ABa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/rss-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.rss.feed.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cMhhQNPHjsbkn8h4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/sitemap-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.sitemap.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MS5wr6y8ftjhe2jS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/sitemap-settings/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.sitemap.settings.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/license-setting-verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.license.key.generate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/update-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.update.version.check',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/software-update-setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.software.update.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/languages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/languages/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.new',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/languages/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/languages/clone' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.clone',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/languages/add-new-string' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.add.string',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/languages/languages/regenerate-source-text' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.regenerate.source.texts',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/page-builder/home-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.page.builder',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a7VFSGSi1Lw3HJUf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/page-builder/about-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.about.page.builder',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pLQAfBFIMHCcNUfn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/page-builder/contact-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.page.builder',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cK52egOv7qXQgDlh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/page-builder/faq-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.page.builder',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UtRUDNYAA9RfQlsp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/page-builder/blog-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.page.builder',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NHwkZ7FkCso4l8He',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/page-builder/dynamic-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dynamic.page.builder.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/form-builder/custom/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.builder.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/form-builder/custom/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.builder.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/form-builder/custom/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.builder.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/form-builder/custom/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.builder.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/form-builder/get-in-touch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.builder.get.in.touch',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EYMUC1IWTxG5USFt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/form-builder/service-query' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.builder.service.query',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g1K1Ecpn2rQiBSXm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/form-builder/case-study-query' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.builder.case.study.query',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VvEeUzoq9IwkNtSq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/form-builder/quote-form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.builder.quote',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fyNZ0FG5uL7bI1cs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/form-builder/order-form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.builder.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bn7CAFYuzMH4fzgz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/form-builder/contact-form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.builder.contact',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nba9WP9H0RvhpfQW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/form-builder/estimate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.builder.estimate.form',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KKsWMxiQ6fAdTWuf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/support-tickets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.ticket.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/support-tickets/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.ticket.new',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E5yq6j8Z0rtoPb7l',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/support-tickets/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.ticket.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/support-tickets/priority-change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.ticket.priority.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/support-tickets/status-change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.ticket.status.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/support-tickets/send message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.ticket.send.message',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/support-tickets/page-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.ticket.page.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZE6MyzWpATJDARXf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/support-tickets/department' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.ticket.department',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xWwM4w36X2dPLyLp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/support-tickets/department/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.ticket.department.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/support-tickets/department/bulk-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.ticket.department.bulk.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.builder.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.builder.new',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.builder.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/update-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.builder.update.addon.order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/get-admin-markup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.builder.get.addon.markup',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/media-upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.upload.media.file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/media-upload/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.upload.media.file.all',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/media-upload/loadmore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.upload.media.file.loadmore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/chart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.chart.data',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/chart/day' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.chart.data.by.day',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/chart/sale-count' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.chart.sale.count.per.day',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/chart/order-count' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.chart.order.count.per.day',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/download\\-update/([^/]++)/([^/]++)(*:116)|/a(?|pi/(?|v1/(?|s(?|tate/([^/]++)(*:158)|ubcategory/([^/]++)(*:185))|user/(?|order\\-list/([^/]++)(*:222)|s(?|upport\\-tickets/([^/]++)(*:258)|hipping\\-address/delete/([^/]++)(*:298))|ticket/(?|([^/]++)(*:325)|c(?|hat/(?|([^/]++)(*:352)|send/([^/]++)(*:373))|reate(*:387))|message\\-send(*:409)))|category/([^/]++)(*:436)|products/(?|type/([^/]++)(*:469)|([^/]++)(*:485)|category/([^/]++)(*:510)|subcategory/([^/]++)(*:538)))|(.*)(*:552))|dmin\\-home/(?|s(?|lider/(?|delete/([^/]++)(*:603)|edit/([^/]++)(*:624))|hipping/(?|zone/delete/([^/]++)(*:664)|method/(?|edit/([^/]++)(*:695)|delete/([^/]++)(*:718)))|tate/delete/([^/]++)(*:748)|upport\\-tickets/(?|de(?|lete/([^/]++)(*:793)|partment/delete/([^/]++)(*:825))|view/([^/]++)(*:847)))|p(?|roducts/(?|edit/([^/]++)(*:885)|update/([^/]++)(*:908)|delete(?|/([^/]++)(*:934)|d/(?|restore/([^/]++)(*:963)|delete/([^/]++)(*:986)))|c(?|lone/([^/]++)(*:1013)|ategories/delete/([^/]++)(*:1047)|oupons/delete/([^/]++)(*:1078))|ratings/delete/([^/]++)(*:1111)|attributes/(?|edit/([^/]++)(*:1147)|delete/([^/]++)(*:1171))|product\\-(?|order/(?|view/([^/]++)(*:1215)|delete/([^/]++)(*:1239))|tags/delete/([^/]++)(*:1269)|inventory/edit/([^/]++)(*:1301))|sub\\-categories/(?|delete/([^/]++)(*:1345)|of\\-category/([^/]++)(*:1375))|tags/delete/([^/]++)(*:1405))|age(?|/(?|edit/([^/]++)(*:1438)|update/([^/]++)(*:1462)|delete/([^/]++)(*:1486))|\\-builder/dynamic\\-page/([^/]++)/([^/]++)(*:1537)))|c(?|a(?|mpaigns/(?|edit/([^/]++)(*:1580)|delete/([^/]++)(*:1604))|tegory\\-menu/(?|edit/([^/]++)(*:1643)|update/([^/]++)(*:1667)|de(?|lete/([^/]++)(*:1694)|fault/([^/]++)(*:1717))))|o(?|untry/delete/([^/]++)(*:1754)|ntact\\-page/contact\\-info/delete/([^/]++)(*:1804)))|t(?|ax/(?|country/delete/([^/]++)(*:1848)|state/delete/([^/]++)(*:1878))|opbar\\-settings/delete/([^/]++)(*:1919))|menu/(?|edit/([^/]++)(*:1950)|update/([^/]++)(*:1974)|de(?|lete/([^/]++)(*:2001)|fault/([^/]++)(*:2024)))|a(?|dmin/(?|user\\-edit/([^/]++)(*:2066)|delete\\-user/([^/]++)(*:2096)|role/(?|edit/([^/]++)(*:2126)|delete/([^/]++)(*:2150)))|ppearance\\-settings/topbar/delete\\-social\\-item/([^/]++)(*:2217))|f(?|rontend/delete\\-user/([^/]++)(*:2260)|aq/delete\\-faq/([^/]++)(*:2292)|orm\\-builder/custom/(?|edit/([^/]++)(*:2337)|delete/([^/]++)(*:2361)))|newsletter/delete/([^/]++)(*:2398)|blog/(?|edit/([^/]++)(*:2428)|update/([^/]++)(*:2452)|delete/([^/]++)(*:2476)|category/delete/([^/]++)(*:2509))|general\\-settings/download\\-update/([^/]++)/([^/]++)(*:2571)|languages/(?|words/(?|frontend/([^/]++)(*:2619)|backend/([^/]++)(*:2644)|update/([^/]++)(*:2668))|de(?|lete/([^/]++)(*:2696)|fault/([^/]++)(*:2719)))))|/p(?|/([^/]++)/([^/]++)(*:2755)|roduct/(?|([^/]++)(*:2782)|ca(?|tegory/([^/]++)(?:/([^/]++))?(*:2825)|mpaign/([^/]++)(?:/([^/]++))?(*:2863)|ncel(?:/([^/]++))?(*:2890))|su(?|bcategory/([^/]++)(?:/([^/]++))?(*:2937)|ccess/([^/]++)(*:2960))|rate(*:2974)))|/home/([^/]++)(*:2999)|/subscriber/email\\-verify/([^/]++)(*:3042)|/blog(?|/([^/]++)(*:3068)|\\-(?|category/([^/]++)(?:/([^/]++))?(*:3113)|tags/([^/]++)(*:3135)))|/user\\-home/(?|download/file/([^/]++)(*:3183)|s(?|upport\\-ticket/view/([^/]++)(*:3224)|hipping\\-address/delete/([^/]++)(*:3265))|campaign/withdraw/view/([^/]++)(*:3306)|orders/([^/]++)(*:3330))|/login/(?|reset\\-password/([^/]++)/([^/]++)(*:3383)|admin/reset\\-password/([^/]++)/([^/]++)(*:3431)))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      116 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.download',
          ),
          1 => 
          array (
            0 => 'productId',
            1 => 'tenant',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      158 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::neywgYZgEUJIi4FJ',
          ),
          1 => 
          array (
            0 => 'country_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      185 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KtZXWO1kHciFE3fy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      222 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ubcmfeKVfXEfHkPo',
          ),
          1 => 
          array (
            0 => 'ProductSellInfo',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      258 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wv8ZNjwyRzKZKo2x',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      298 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YWHjeZz1qS6wbyRg',
          ),
          1 => 
          array (
            0 => 'shipping',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      325 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cJ2ZQXA2YMWjIlw5',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      352 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F5mil7ubdafje2d2',
          ),
          1 => 
          array (
            0 => 'ticket_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      373 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E1Yl9WQNDWjKAI2L',
          ),
          1 => 
          array (
            0 => 'ticket_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      387 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2lNH4HRaG7WB7kFL',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      409 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jldCuqILhRHL4plC',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      436 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t2nKOTxMMRBTeA6C',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      469 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hENHk15FJ8gRAnHK',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      485 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ulfkXzNC3KwToDXE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      510 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ITTwpRC21wSJC0xH',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      538 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sE7mxEWCQxoZCBGR',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      552 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mti2WNOlFSZBvCSV',
          ),
          1 => 
          array (
            0 => 'fallbackPlaceholder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      603 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      624 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      664 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.zone.delete',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      695 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.method.edit',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      718 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shipping.method.delete',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      748 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.state.delete',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      793 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.ticket.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      825 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.ticket.department.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      847 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.ticket.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      885 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.edit',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      908 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.update',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      934 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.delete',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      963 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.deleted.restore',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      986 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.deleted.permanent.delete',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1013 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.clone',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1047 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.category.delete',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1078 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.coupon.delete',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1111 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.ratings.delete',
          ),
          1 => 
          array (
            0 => 'rating',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1147 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.attributes.edit',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1171 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.attributes.delete',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1215 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.order.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1239 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.order.payment.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1269 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.product.tag.delete',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1301 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.inventory.edit',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1345 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.subcategory.delete',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1375 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.subcategory.of.category',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1405 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.products.tag.delete',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1438 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1462 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1486 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1537 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dynamic.page.builder',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1580 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.campaigns.edit',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1604 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.campaigns.delete',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1643 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.menu.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1667 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.menu.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1694 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.menu.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1717 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.menu.default',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1754 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.country.delete',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1804 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.info.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1848 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax.country.delete',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1878 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tax.state.delete',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1919 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.topbar.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1950 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menu.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1974 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menu.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2001 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menu.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2024 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menu.default',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2066 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2096 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delete.user',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2126 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.role.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2150 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.role.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2217 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delete.social.item',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2260 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.frontend.delete.user',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2292 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2337 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.builder.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2361 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.form.builder.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2398 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2428 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2452 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2476 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2509 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.category.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2571 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.update.download.settings',
          ),
          1 => 
          array (
            0 => 'productId',
            1 => 'tenant',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2619 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.words.frontend',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2644 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.words.backend',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2668 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.words.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2696 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2719 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.default',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2755 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.dynamic.page',
            'slug' => NULL,
          ),
          1 => 
          array (
            0 => 'slug',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2782 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.single',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2825 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.category',
            'title' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'title',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2863 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.campaign',
            'any' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'any',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2890 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.payment.cancel',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2937 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.subcategory',
            'any' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'any',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2960 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.payment.success',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2974 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.ratings.store',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2999 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'homepage.demo',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3042 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscriber.verify',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3068 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.blog.single',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3113 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.blog.category',
            'any' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'any',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3135 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.blog.tags.page',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3183 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard.download.file',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3224 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard.support.ticket.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3265 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipping.address.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3306 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.campaign.withdraw.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3330 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.product.order.details',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3383 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.reset.password',
          ),
          1 => 
          array (
            0 => 'user',
            1 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3431 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reset.password',
          ),
          1 => 
          array (
            0 => 'user',
            1 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w4LGgUgXnXg2by8Q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::w4LGgUgXnXg2by8Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payu::redirect' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vendor-payu/status',
      'action' => 
      array (
        'uses' => 'Tzsk\\Payu\\Controllers\\StatusController@__invoke',
        'controller' => 'Tzsk\\Payu\\Controllers\\StatusController',
        'as' => 'payu::redirect',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'xg.payment.gateway.authorizenet' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'xgpayment-gateway/authorizenet',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Xgenious\\Paymentgateway\\Http\\Controllers\\AuthorizeNetPaymentController@charge_customer',
        'controller' => 'Xgenious\\Paymentgateway\\Http\\Controllers\\AuthorizeNetPaymentController@charge_customer',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'xg.payment.gateway.authorizenet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'xg.payment.gateway.stripe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'xgpayment-gateway/stipe',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Xgenious\\Paymentgateway\\Http\\Controllers\\StripePaymentController@charge_customer',
        'controller' => 'Xgenious\\Paymentgateway\\Http\\Controllers\\StripePaymentController@charge_customer',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'xg.payment.gateway.stripe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'xg.payment.gateway.paystack' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'xgpayment-gateway/paystack',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Xgenious\\Paymentgateway\\Http\\Controllers\\PaystackPaymentController@redirect_to_gateway',
        'controller' => 'Xgenious\\Paymentgateway\\Http\\Controllers\\PaystackPaymentController@redirect_to_gateway',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'xg.payment.gateway.paystack',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'xg.payment.gateway.paystack.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'xgpayment-gateway/paystack-callback',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Xgenious\\Paymentgateway\\Http\\Controllers\\PaystackPaymentController@callback',
        'controller' => 'Xgenious\\Paymentgateway\\Http\\Controllers\\PaystackPaymentController@callback',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'xg.payment.gateway.paystack.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'license.activation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'license-activation',
      'action' => 
      array (
        'uses' => 'Xgenious\\XgApiClient\\Http\\Controllers\\ActivationController@licenseActivation',
        'controller' => 'Xgenious\\XgApiClient\\Http\\Controllers\\ActivationController@licenseActivation',
        'as' => 'license.activation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'license.activation.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'license-activation-update',
      'action' => 
      array (
        'uses' => 'Xgenious\\XgApiClient\\Http\\Controllers\\ActivationController@licenseActivationUpdate',
        'controller' => 'Xgenious\\XgApiClient\\Http\\Controllers\\ActivationController@licenseActivationUpdate',
        'as' => 'license.activation.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'check.system.update' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'check-update',
      'action' => 
      array (
        'uses' => 'Xgenious\\XgApiClient\\Http\\Controllers\\SystemUpgradeController@checkSystemUpdate',
        'controller' => 'Xgenious\\XgApiClient\\Http\\Controllers\\SystemUpgradeController@checkSystemUpdate',
        'as' => 'check.system.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.download' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'download-update/{productId}/{tenant}',
      'action' => 
      array (
        'uses' => 'Xgenious\\XgApiClient\\Http\\Controllers\\SystemUpgradeController@updateDownloadLatestVersion',
        'controller' => 'Xgenious\\XgApiClient\\Http\\Controllers\\SystemUpgradeController@updateDownloadLatestVersion',
        'as' => 'update.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BVVidalqFIx4LapF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/get-currency-symbol',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:339:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:120:"function (){
        $data = ["symbol" => \\site_currency_symbol()];
        return \\response()->success($data);
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000c610000000000000000";}";s:4:"hash";s:44:"KFoi9o8AuwFEGXn5f6SU3TP9Trc/xxsQdifD6kSmH/I=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::BVVidalqFIx4LapF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xA07lV65HxP9sFQ5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/slider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SliderController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\SliderController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::xA07lV65HxP9sFQ5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::30yqwfSJEcUBrlqx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CountryController@country',
        'controller' => 'App\\Http\\Controllers\\Api\\CountryController@country',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::30yqwfSJEcUBrlqx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::neywgYZgEUJIi4FJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/state/{country_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CountryController@stateByCountryId',
        'controller' => 'App\\Http\\Controllers\\Api\\CountryController@stateByCountryId',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::neywgYZgEUJIi4FJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uMHWyIp1sqpeng82' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@register',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::uMHWyIp1sqpeng82',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hKnwREKjyQn33xAA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@login',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::hKnwREKjyQn33xAA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::t1JRruFBDLdyy5CE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/social/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@socialLogin',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@socialLogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::t1JRruFBDLdyy5CE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GZslTq9ASvlPAj30' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/send-otp-in-mail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@sendOTP',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@sendOTP',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::GZslTq9ASvlPAj30',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JoPeoEVTxa8Hl6GG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@resetPassword',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@resetPassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::JoPeoEVTxa8Hl6GG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W3Mi8EG4p2dxn6b7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/order-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CheckoutController@order_list',
        'controller' => 'App\\Http\\Controllers\\Api\\CheckoutController@order_list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::W3Mi8EG4p2dxn6b7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ubcmfeKVfXEfHkPo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/order-list/{ProductSellInfo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\OrderController@details',
        'controller' => 'App\\Http\\Controllers\\Api\\OrderController@details',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::ubcmfeKVfXEfHkPo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rLiihZO0Y01uOkX7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@logout',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::rLiihZO0Y01uOkX7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VHNaghifN1KD78ET' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@profile',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::VHNaghifN1KD78ET',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NtMENTEJnjpUBRZL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@changePassword',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@changePassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::NtMENTEJnjpUBRZL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iQcp6LM614dh0U8P' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/update-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@updateProfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::iQcp6LM614dh0U8P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Uha5u5sf5x8PNIoX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/support-tickets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@allTickets',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@allTickets',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user/support-tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::Uha5u5sf5x8PNIoX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Wv8ZNjwyRzKZKo2x' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/support-tickets/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@viewTickets',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@viewTickets',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user/support-tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::Wv8ZNjwyRzKZKo2x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P0QVvDevFCZxwAXh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/all-shipping-address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@get_all_shipping_address',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@get_all_shipping_address',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::P0QVvDevFCZxwAXh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YWHjeZz1qS6wbyRg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/shipping-address/delete/{shipping}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@delete_shipping_address',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@delete_shipping_address',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::YWHjeZz1qS6wbyRg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R01yBb9n6Tf0S3t1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/store-shipping-address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@storeShippingAddress',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@storeShippingAddress',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::R01yBb9n6Tf0S3t1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FMGBBzUtNyrKKfSW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/ticket',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@get_all_tickets',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@get_all_tickets',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::FMGBBzUtNyrKKfSW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cJ2ZQXA2YMWjIlw5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/ticket/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@single_ticket',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@single_ticket',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::cJ2ZQXA2YMWjIlw5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F5mil7ubdafje2d2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/ticket/chat/{ticket_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@fetch_support_chat',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@fetch_support_chat',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::F5mil7ubdafje2d2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E1Yl9WQNDWjKAI2L' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/ticket/chat/send/{ticket_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@send_support_chat',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@send_support_chat',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::E1Yl9WQNDWjKAI2L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jldCuqILhRHL4plC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/ticket/message-send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@sendMessage',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@sendMessage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::jldCuqILhRHL4plC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0vagYSJUpoptfPFP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/send-otp-in-mail/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@sendOTPSuccess',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@sendOTPSuccess',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::0vagYSJUpoptfPFP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2lNH4HRaG7WB7kFL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/ticket/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@createTicket',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@createTicket',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::2lNH4HRaG7WB7kFL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vVxNyLWknGzzvF3L' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/get-department',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@get_department',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@get_department',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::vVxNyLWknGzzvF3L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EZZh2gsEzhmHe3WK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/payment-status-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'ServiceController@paymentStatusUpdate',
        'controller' => 'ServiceController@paymentStatusUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::EZZh2gsEzhmHe3WK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WTLgNXSiblVOAyVb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CheckoutController@checkout',
        'controller' => 'App\\Http\\Controllers\\Api\\CheckoutController@checkout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::WTLgNXSiblVOAyVb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::69HH16NgEBT8yiWT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/checkout/payment/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CheckoutController@payment_status_update',
        'controller' => 'App\\Http\\Controllers\\Api\\CheckoutController@payment_status_update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::69HH16NgEBT8yiWT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M11Oy2JAspBj3zdO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@allCategory',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@allCategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/category',
        'where' => 
        array (
        ),
        'as' => 'generated::M11Oy2JAspBj3zdO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::t2nKOTxMMRBTeA6C' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@singleCategory',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@singleCategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/category',
        'where' => 
        array (
        ),
        'as' => 'generated::t2nKOTxMMRBTeA6C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vJOojFCrzb8LsqN4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/subcategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SubCategoryController@allSubCategory',
        'controller' => 'App\\Http\\Controllers\\Api\\SubCategoryController@allSubCategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/subcategory',
        'where' => 
        array (
        ),
        'as' => 'generated::vJOojFCrzb8LsqN4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KtZXWO1kHciFE3fy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/subcategory/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SubCategoryController@singleSubCategory',
        'controller' => 'App\\Http\\Controllers\\Api\\SubCategoryController@singleSubCategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/subcategory',
        'where' => 
        array (
        ),
        'as' => 'generated::KtZXWO1kHciFE3fy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7GXx86dFKT2mMu8k' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/attributes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AttributesController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\AttributesController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::7GXx86dFKT2mMu8k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GcnsBmFcQFkI1Gnm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProductController@tags',
        'controller' => 'App\\Http\\Controllers\\Api\\ProductController@tags',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::GcnsBmFcQFkI1Gnm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yoiZDTa5znpf35rK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProductController@allProducts',
        'controller' => 'App\\Http\\Controllers\\Api\\ProductController@allProducts',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/products',
        'where' => 
        array (
        ),
        'as' => 'generated::yoiZDTa5znpf35rK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::C1ZsUV2KHwbaCVnW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/products/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProductController@search',
        'controller' => 'App\\Http\\Controllers\\Api\\ProductController@search',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/products',
        'where' => 
        array (
        ),
        'as' => 'generated::C1ZsUV2KHwbaCVnW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hENHk15FJ8gRAnHK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/products/type/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProductController@product_type',
        'controller' => 'App\\Http\\Controllers\\Api\\ProductController@product_type',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/products',
        'where' => 
        array (
        ),
        'as' => 'generated::hENHk15FJ8gRAnHK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ulfkXzNC3KwToDXE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/products/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProductController@details',
        'controller' => 'App\\Http\\Controllers\\Api\\ProductController@details',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/products',
        'where' => 
        array (
        ),
        'as' => 'generated::ulfkXzNC3KwToDXE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ITTwpRC21wSJC0xH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/products/category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProductController@singleProducts',
        'controller' => 'App\\Http\\Controllers\\Api\\ProductController@singleProducts',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/products',
        'where' => 
        array (
        ),
        'as' => 'generated::ITTwpRC21wSJC0xH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sE7mxEWCQxoZCBGR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/products/subcategory/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ProductController@singleProducts',
        'controller' => 'App\\Http\\Controllers\\Api\\ProductController@singleProducts',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1/products',
        'where' => 
        array (
        ),
        'as' => 'generated::sE7mxEWCQxoZCBGR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WGicIjoNTT0gQGKg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/admin/payment-gateway-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SiteSettingsController@payment_gateway_list',
        'controller' => 'App\\Http\\Controllers\\Api\\SiteSettingsController@payment_gateway_list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::WGicIjoNTT0gQGKg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::egt8bi5fK8rCyUZV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CouponController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\CouponController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::egt8bi5fK8rCyUZV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TDK6R4NQqdLhujL6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/country-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CheckoutController@getCountryInfo',
        'controller' => 'App\\Http\\Controllers\\Api\\CheckoutController@getCountryInfo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::TDK6R4NQqdLhujL6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pWYREKSRaAarfIib' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/state-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CheckoutController@getStateInfo',
        'controller' => 'App\\Http\\Controllers\\Api\\CheckoutController@getStateInfo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::pWYREKSRaAarfIib',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GcOqXfWmSjMYaV0y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/checkout-calculate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CheckoutController@calculateCheckout',
        'controller' => 'App\\Http\\Controllers\\Api\\CheckoutController@calculateCheckout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::GcOqXfWmSjMYaV0y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mti2WNOlFSZBvCSV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{fallbackPlaceholder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:302:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:84:"function(){
    return \\response()->json([\'message\' => \'Page Not Found.\'], 404);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000c600000000000000000";}";s:4:"hash";s:44:"7v8HSTpIi7wiO5HnDVgj2x+6nN91d42B5DpGptkZiGU=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::mti2WNOlFSZBvCSV',
      ),
      'fallback' => true,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'fallbackPlaceholder' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'feeds.main' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'feeds',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Spatie\\Feed\\Http\\FeedController@__invoke',
        'controller' => '\\Spatie\\Feed\\Http\\FeedController',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'feeds.main',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facebook.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facebook/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\SocialLoginController@facebook_callback',
        'controller' => 'App\\Http\\Controllers\\SocialLoginController@facebook_callback',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/facebook',
        'where' => 
        array (
        ),
        'as' => 'facebook.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.facebook.redirect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facebook/redirect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\SocialLoginController@facebook_redirect',
        'controller' => 'App\\Http\\Controllers\\SocialLoginController@facebook_redirect',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/facebook',
        'where' => 
        array (
        ),
        'as' => 'login.facebook.redirect',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'google.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'google/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\SocialLoginController@google_callback',
        'controller' => 'App\\Http\\Controllers\\SocialLoginController@google_callback',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/google',
        'where' => 
        array (
        ),
        'as' => 'google.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.google.redirect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'google/redirect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\SocialLoginController@google_redirect',
        'controller' => 'App\\Http\\Controllers\\SocialLoginController@google_redirect',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/google',
        'where' => 
        array (
        ),
        'as' => 'login.google.redirect',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.form.builder.custom.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'submit-custom-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendFormController@custom_form_builder_message',
        'controller' => 'App\\Http\\Controllers\\FrontendFormController@custom_form_builder_message',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.form.builder.custom.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'homepage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@index',
        'controller' => 'App\\Http\\Controllers\\FrontendController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'homepage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.dynamic.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'p/{slug?}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@dynamic_single_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@dynamic_single_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.dynamic.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'homepage.demo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@home_page_change',
        'controller' => 'App\\Http\\Controllers\\FrontendController@home_page_change',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'homepage.demo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@about_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@about_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.faq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@faq_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@faq_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.faq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@contact_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@contact_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.user.country.state' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-states',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@get_states',
        'controller' => 'App\\Http\\Controllers\\FrontendController@get_states',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.user.country.state',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscriber.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subscriber/email-verify/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@subscriber_verify',
        'controller' => 'App\\Http\\Controllers\\FrontendController@subscriber_verify',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'subscriber.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.contact.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact-message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendFormController@send_contact_message',
        'controller' => 'App\\Http\\Controllers\\FrontendFormController@send_contact_message',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.contact.message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'country.info.ajax' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'country-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@getCountryInfo',
        'controller' => 'App\\Http\\Controllers\\FrontendController@getCountryInfo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'country.info.ajax',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'state.info.ajax' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'state-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@getStateInfo',
        'controller' => 'App\\Http\\Controllers\\FrontendController@getStateInfo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'state.info.ajax',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipping.validate.ajax' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shipping-validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@validateCheckoutShipping',
        'controller' => 'App\\Http\\Controllers\\FrontendController@validateCheckoutShipping',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shipping.validate.ajax',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.add.user.shipping.address' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'new-shipping',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@addUserShippingAddress',
        'controller' => 'App\\Http\\Controllers\\FrontendController@addUserShippingAddress',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.add.user.shipping.address',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.filter.top.rated' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'filter-top-rated',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@topRatedProducts',
        'controller' => 'App\\Http\\Controllers\\FrontendController@topRatedProducts',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products.filter.top.rated',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.filter.top.selling' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'filter-top-selling',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@topSellingProducts',
        'controller' => 'App\\Http\\Controllers\\FrontendController@topSellingProducts',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products.filter.top.selling',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.filter.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'filter-new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@newProducts',
        'controller' => 'App\\Http\\Controllers\\FrontendController@newProducts',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products.filter.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.filter.campaign' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'filter-campaign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@campaignProduct',
        'controller' => 'App\\Http\\Controllers\\FrontendController@campaignProduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products.filter.campaign',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.filter.discounted' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'filter-discount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@discountedProduct',
        'controller' => 'App\\Http\\Controllers\\FrontendController@discountedProduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products.filter.discounted',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.attribute.html' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'attribute-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@getProductAttributeHtml',
        'controller' => 'App\\Http\\Controllers\\FrontendController@getProductAttributeHtml',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products.attribute.html',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0UmxAdg2uLfJhW83' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'land/home/01',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\LandingController@homeOne',
        'controller' => 'App\\Http\\Controllers\\LandingController@homeOne',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'land/home',
        'where' => 
        array (
        ),
        'as' => 'generated::0UmxAdg2uLfJhW83',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5VpkXAP43Q2WBjEl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'land/home/02',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\LandingController@homeTwo',
        'controller' => 'App\\Http\\Controllers\\LandingController@homeTwo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'land/home',
        'where' => 
        array (
        ),
        'as' => 'generated::5VpkXAP43Q2WBjEl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'land.shop.grid' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'land/shop/grid',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\LandingController@shopGrid',
        'controller' => 'App\\Http\\Controllers\\LandingController@shopGrid',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'land/shop',
        'where' => 
        array (
        ),
        'as' => 'land.shop.grid',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'land.shop.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'land/shop/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\LandingController@shopList',
        'controller' => 'App\\Http\\Controllers\\LandingController@shopList',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'land/shop',
        'where' => 
        array (
        ),
        'as' => 'land.shop.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'land.shop.sidebar.right' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'land/shop/right-sidebar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\LandingController@shopRightSidebar',
        'controller' => 'App\\Http\\Controllers\\LandingController@shopRightSidebar',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'land/shop',
        'where' => 
        array (
        ),
        'as' => 'land.shop.sidebar.right',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'land.shop.sidebar.left' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'land/shop/left-sidebar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\LandingController@shopLeftSidebar',
        'controller' => 'App\\Http\\Controllers\\LandingController@shopLeftSidebar',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'land/shop',
        'where' => 
        array (
        ),
        'as' => 'land.shop.sidebar.left',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DPPRZbCqFhCi5q6q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'land/blog/grid',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\LandingController@blogGrid',
        'controller' => 'App\\Http\\Controllers\\LandingController@blogGrid',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'land/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::DPPRZbCqFhCi5q6q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::veL1XEjGYw6JlyWw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'land/blog/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\LandingController@blogList',
        'controller' => 'App\\Http\\Controllers\\LandingController@blogList',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'land/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::veL1XEjGYw6JlyWw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NDzHgE5H8QYy5th1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'land/blog/news-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\LandingController@blogNewsUpdate',
        'controller' => 'App\\Http\\Controllers\\LandingController@blogNewsUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'land/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::NDzHgE5H8QYy5th1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jBfrTpgJjbDy6ma5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'land/blog/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\LandingController@blogDetails',
        'controller' => 'App\\Http\\Controllers\\LandingController@blogDetails',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'land/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::jBfrTpgJjbDy6ma5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@products',
        'controller' => 'App\\Http\\Controllers\\FrontendController@products',
        'as' => 'frontend.products.all',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.single' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@single_product_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@single_product_page',
        'as' => 'frontend.products.single',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/category/{id}/{title?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@products_category',
        'controller' => 'App\\Http\\Controllers\\FrontendController@products_category',
        'as' => 'frontend.products.category',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.subcategory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/subcategory/{id}/{any?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@products_subcategory',
        'controller' => 'App\\Http\\Controllers\\FrontendController@products_subcategory',
        'as' => 'frontend.products.subcategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.cart' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/cart/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@cartPage',
        'controller' => 'App\\Http\\Controllers\\FrontendController@cartPage',
        'as' => 'frontend.products.cart',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/cart',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.cart.status.ajax' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/cart/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCartController@cartStatus',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCartController@cartStatus',
        'as' => 'frontend.products.cart.status.ajax',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/cart',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.cart.info.ajax' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/cart/summary-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCartController@getCartInfoAjax',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCartController@getCartInfoAjax',
        'as' => 'frontend.products.cart.info.ajax',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/cart',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.add.to.cart.ajax' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/cart/ajax/add-to-cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCartController@addToCartAjax',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCartController@addToCartAjax',
        'as' => 'frontend.products.add.to.cart.ajax',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/cart',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.cart.ajax.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/cart/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCartController@removeCartItem',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCartController@removeCartItem',
        'as' => 'frontend.products.cart.ajax.remove',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/cart',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.cart.ajax.clear' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/cart/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCartController@clearCart',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCartController@clearCart',
        'as' => 'frontend.products.cart.ajax.clear',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/cart',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.cart.update.ajax' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/cart/ajax/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCartController@updateCart',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCartController@updateCart',
        'as' => 'frontend.products.cart.update.ajax',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/cart',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.cart.apply.coupon' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/cart/ajax/coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCartController@cartPageApplyCouponAjax',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCartController@cartPageApplyCouponAjax',
        'as' => 'frontend.products.cart.apply.coupon',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/cart',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.wishlist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/wishlist/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@wishlistPage',
        'controller' => 'App\\Http\\Controllers\\FrontendController@wishlistPage',
        'as' => 'frontend.products.wishlist',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/wishlist',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.wishlist.total' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/wishlist/total',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductWishlistController@getTotalItem',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductWishlistController@getTotalItem',
        'as' => 'frontend.products.wishlist.total',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/wishlist',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.add.to.wishlist' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/wishlist/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductWishlistController@addToWishlist',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductWishlistController@addToWishlist',
        'as' => 'frontend.products.add.to.wishlist',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/wishlist',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.add.to.wishlist.ajax' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/wishlist/ajax-add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductWishlistController@addToWishlistAjax',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductWishlistController@addToWishlistAjax',
        'as' => 'frontend.products.add.to.wishlist.ajax',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/wishlist',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.wishlist.ajax.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/wishlist/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductWishlistController@removeWishlistItem',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductWishlistController@removeWishlistItem',
        'as' => 'frontend.products.wishlist.ajax.remove',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/wishlist',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.wishlist.ajax.clear' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/wishlist/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductWishlistController@clearWishlist',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductWishlistController@clearWishlist',
        'as' => 'frontend.products.wishlist.ajax.clear',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/wishlist',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.wishlist.send.to.cart' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/wishlist/send-to-cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductWishlistController@sendToCartAjax',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductWishlistController@sendToCartAjax',
        'as' => 'frontend.products.wishlist.send.to.cart',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/wishlist',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.compare' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/compare/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@productsComparePage',
        'controller' => 'App\\Http\\Controllers\\FrontendController@productsComparePage',
        'as' => 'frontend.products.compare',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/compare',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.add.to.compare' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/compare/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCompareController@addToCompare',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCompareController@addToCompare',
        'as' => 'frontend.products.add.to.compare',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/compare',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.compare.ajax.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/compare/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCompareController@removeFromCompare',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCompareController@removeFromCompare',
        'as' => 'frontend.products.compare.ajax.remove',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/compare',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.ajax.compare.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/compare/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCompareController@clearCompare',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCompareController@clearCompare',
        'as' => 'frontend.products.ajax.compare.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'product/compare',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.ratings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/rate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@product_rating_store',
        'controller' => 'App\\Http\\Controllers\\FrontendController@product_rating_store',
        'as' => 'frontend.products.ratings.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.campaign.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/campaign/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@allCampaignPage',
        'controller' => 'App\\Http\\Controllers\\FrontendController@allCampaignPage',
        'as' => 'frontend.products.campaign.list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.campaign' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/campaign/{id}/{any?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@campaignPage',
        'controller' => 'App\\Http\\Controllers\\FrontendController@campaignPage',
        'as' => 'frontend.products.campaign',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.payment.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/success/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@product_payment_success',
        'controller' => 'App\\Http\\Controllers\\FrontendController@product_payment_success',
        'as' => 'frontend.products.payment.success',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.payment.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/cancel/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@product_payment_cancel',
        'controller' => 'App\\Http\\Controllers\\FrontendController@product_payment_cancel',
        'as' => 'frontend.products.payment.cancel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.checkout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@checkoutPage',
        'controller' => 'App\\Http\\Controllers\\FrontendController@checkoutPage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.checkout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yKoFz3Y51QW7jyc7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@checkout',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@checkout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::yKoFz3Y51QW7jyc7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.checkout.continue' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'checkout-continue',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@checkoutContinuePending',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@checkoutContinuePending',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.checkout.continue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.checkout.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'checkout-cancel-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@cancelPayment',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@cancelPayment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.checkout.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.checkout.reorder' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'checkout-reorder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@reorder',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@reorder',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.checkout.reorder',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.checkout.apply.coupon' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout-apply-coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCartController@checkoutPageApplyCouponAjax',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCartController@checkoutPageApplyCouponAjax',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.checkout.apply.coupon',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.checkout.calculate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout-calculate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCartController@calculateCheckout',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCartController@calculateCheckout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.checkout.calculate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.paypal.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-paypal-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@paypal_ipn',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@paypal_ipn',
        'as' => 'frontend.paypal.ipn',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.paytm.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product-paytm-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@paytm_ipn',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@paytm_ipn',
        'as' => 'frontend.paytm.ipn',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.stripe.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-stripe-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@stripe_ipn',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@stripe_ipn',
        'as' => 'frontend.stripe.ipn',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.razorpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product-razorpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@razorpay_ipn',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@razorpay_ipn',
        'as' => 'frontend.razorpay.ipn',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.flutterwave.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-flullterwave-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@flutterwave_ipn',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@flutterwave_ipn',
        'as' => 'frontend.flutterwave.ipn',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.mollie.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-mollie-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@mollie_ipn',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@mollie_ipn',
        'as' => 'frontend.mollie.ipn',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.midtrans.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-midtrans-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@midtrans_ipn',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@midtrans_ipn',
        'as' => 'frontend.midtrans.ipn',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.payfast.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product-payfast-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@payfast_ipn',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@payfast_ipn',
        'as' => 'frontend.payfast.ipn',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.cashfree.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product-cashfree-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@cashfree_ipn',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@cashfree_ipn',
        'as' => 'frontend.cashfree.ipn',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.paystack.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product-paystack-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@paystack_ipn',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@paystack_ipn',
        'as' => 'frontend.paystack.ipn',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.instamojo.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-instamojo-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@instamojo_ipn',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@instamojo_ipn',
        'as' => 'frontend.instamojo.ipn',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.marcadopago.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-marcadopago-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@marcadopago_ipn',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSellPaymentController@marcadopago_ipn',
        'as' => 'frontend.marcadopago.ipn',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.blog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@blog_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@blog_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.blog.single' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@blog_single_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@blog_single_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.blog.single',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.blog.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog-search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@blog_search_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@blog_search_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.blog.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.blog.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog-category/{id}/{any?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@category_wise_blog_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@category_wise_blog_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.blog.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.blog.tags.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog-tags/{name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@tags_wise_blog_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@tags_wise_blog_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.blog.tags.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.support.ticket' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'support',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\UserSupportTicketController@page',
        'controller' => 'App\\Http\\Controllers\\Support\\UserSupportTicketController@page',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.support.ticket',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.support.ticket.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'support/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\UserSupportTicketController@store',
        'controller' => 'App\\Http\\Controllers\\Support\\UserSupportTicketController@store',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.support.ticket.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.campaign.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'campaign/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@user_campaign',
        'controller' => 'App\\Http\\Controllers\\FrontendController@user_campaign',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.campaign.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@user_index',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@user_index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard.download.file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/download/file/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@download_file',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@download_file',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard.download.file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.home.change.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@change_password',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@change_password',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.home.change.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.home.edit.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/edit-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@edit_profile',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@edit_profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.home.edit.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/profile-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@user_profile_update',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@user_profile_update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.profile.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.password.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/password-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@user_password_change',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@user_password_change',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.password.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.home.support.tickets' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/support-tickets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@support_tickets',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@support_tickets',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.home.support.tickets',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard.support.ticket.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/support-ticket/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@support_ticket_view',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@support_ticket_view',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard.support.ticket.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard.support.ticket.priority.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/support-ticket/priority-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@support_ticket_priority_change',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@support_ticket_priority_change',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard.support.ticket.priority.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard.support.ticket.status.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/support-ticket/status-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@support_ticket_status_change',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@support_ticket_status_change',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard.support.ticket.status.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard.support.ticket.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/support-ticket/message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@support_ticket_message',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@support_ticket_message',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard.support.ticket.message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.campaign.log.withdraw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/campaign/log/withdraw',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@campaign_log_withdraw',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@campaign_log_withdraw',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.campaign.log.withdraw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.campaign.withdraw.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/campaign/withdraw/submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@campaign_withdraw_submit',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@campaign_withdraw_submit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.campaign.withdraw.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.campaign.withdraw.check' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/campaign/withdraw/check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@campaign_withdraw_check',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@campaign_withdraw_check',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.campaign.withdraw.check',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.campaign.withdraw.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/campaign/withdraw/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@campaign_withdraw_view',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@campaign_withdraw_view',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.campaign.withdraw.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.product.order.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/orders/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@allOrdersPage',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@allOrdersPage',
        'as' => 'user.product.order.all',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user-home/orders',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.product.order.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/orders/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@orderDetailsPage',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@orderDetailsPage',
        'as' => 'user.product.order.details',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'user-home/orders',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.shipping.address.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/shipping-address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@allShippingAddress',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@allShippingAddress',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.shipping.address.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.shipping.address.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/shipping-address/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@createShippingAddress',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@createShippingAddress',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.shipping.address.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pwO7TvS5Vib9SA8r' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/shipping-address/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@storeShippingAddress',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@storeShippingAddress',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'generated::pwO7TvS5Vib9SA8r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.shipping.address.edit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/shipping-address/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@editShippingAddress',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@editShippingAddress',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.shipping.address.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipping.address.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/shipping-address/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@deleteShippingAddress',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@deleteShippingAddress',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'shipping.address.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.upload.media.file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/media-upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\MediaUploadController@upload_media_file',
        'controller' => 'App\\Http\\Controllers\\User\\MediaUploadController@upload_media_file',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => 'user-home/media-upload',
        'where' => 
        array (
        ),
        'as' => 'user.upload.media.file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.upload.media.file.all' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/media-upload/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\MediaUploadController@all_upload_media_file',
        'controller' => 'App\\Http\\Controllers\\User\\MediaUploadController@all_upload_media_file',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => 'user-home/media-upload',
        'where' => 
        array (
        ),
        'as' => 'user.upload.media.file.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.upload.media.file.alt.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/media-upload/alt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\MediaUploadController@alt_change_upload_media_file',
        'controller' => 'App\\Http\\Controllers\\User\\MediaUploadController@alt_change_upload_media_file',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => 'user-home/media-upload',
        'where' => 
        array (
        ),
        'as' => 'user.upload.media.file.alt.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.upload.media.file.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/media-upload/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\MediaUploadController@delete_upload_media_file',
        'controller' => 'App\\Http\\Controllers\\User\\MediaUploadController@delete_upload_media_file',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => 'user-home/media-upload',
        'where' => 
        array (
        ),
        'as' => 'user.upload.media.file.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.upload.media.file.loadmore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/media-upload/loadmore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'userEmailVerify',
          5 => 'setlang:frontend',
          6 => 'globalVariable',
          7 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\MediaUploadController@loadmore_upload_media_file',
        'controller' => 'App\\Http\\Controllers\\User\\MediaUploadController@loadmore_upload_media_file',
        'namespace' => 'App\\Http\\Controllers\\User',
        'prefix' => 'user-home/media-upload',
        'where' => 
        array (
        ),
        'as' => 'user.upload.media.file.loadmore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.ajax.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax-login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@ajax_login',
        'controller' => 'App\\Http\\Controllers\\FrontendController@ajax_login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.ajax.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tsqDdoEejVg2eji1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tsqDdoEejVg2eji1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.forget.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@showUserForgetPasswordForm',
        'controller' => 'App\\Http\\Controllers\\FrontendController@showUserForgetPasswordForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.forget.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NAy8foHZlJrFuSvZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login/forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@sendUserForgetPasswordMail',
        'controller' => 'App\\Http\\Controllers\\FrontendController@sendUserForgetPasswordMail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NAy8foHZlJrFuSvZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.reset.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/reset-password/{user}/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@showUserResetPasswordForm',
        'controller' => 'App\\Http\\Controllers\\FrontendController@showUserResetPasswordForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.reset.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.reset.password.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@UserResetPassword',
        'controller' => 'App\\Http\\Controllers\\FrontendController@UserResetPassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.reset.password.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.user.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@user_logout',
        'controller' => 'App\\Http\\Controllers\\FrontendController@user_logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.user.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fZVSmPte2FM66QM2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fZVSmPte2FM66QM2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.email.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/email-verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@user_email_verify_index',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@user_email_verify_index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.email.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Jk9cXS01FfnsQJcj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/email-verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@user_email_verify',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@user_email_verify',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Jk9cXS01FfnsQJcj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.resend.verify.mail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/resend-verify-code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@reset_user_email_verify_code',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@reset_user_email_verify_code',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.resend.verify.mail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.package.invoice.generate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'package-user/generate-invoice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@generate_package_invoice',
        'controller' => 'App\\Http\\Controllers\\FrontendController@generate_package_invoice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.package.invoice.generate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.langchange' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@lang_change',
        'controller' => 'App\\Http\\Controllers\\FrontendController@lang_change',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.langchange',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.subscribe.newsletter' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subscribe-newsletter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@subscribe_newsletter',
        'controller' => 'App\\Http\\Controllers\\FrontendController@subscribe_newsletter',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.subscribe.newsletter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'setlang:backend',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showAdminLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showAdminLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.forget.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/admin/forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'setlang:backend',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@showAdminForgetPasswordForm',
        'controller' => 'App\\Http\\Controllers\\FrontendController@showAdminForgetPasswordForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.forget.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reset.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/admin/reset-password/{user}/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'setlang:backend',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@showAdminResetPasswordForm',
        'controller' => 'App\\Http\\Controllers\\FrontendController@showAdminResetPasswordForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.reset.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reset.password.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login/admin/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'setlang:backend',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@AdminResetPassword',
        'controller' => 'App\\Http\\Controllers\\FrontendController@AdminResetPassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.reset.password.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Kj43mFmVHeKr6hCK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login/admin/forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'setlang:backend',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@sendAdminForgetPasswordMail',
        'controller' => 'App\\Http\\Controllers\\FrontendController@sendAdminForgetPasswordMail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Kj43mFmVHeKr6hCK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'setlang:backend',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@adminLogout',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@adminLogout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1NSmuh1OjjP9W7b5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'globalVariable',
          2 => 'setlang:backend',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@adminLogin',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@adminLogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1NSmuh1OjjP9W7b5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.404.page.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/404-page-manage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Error404PageManage@error_404_page_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\Error404PageManage@error_404_page_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.404.page.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eUGrokv5a6kwadJY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/404-page-manage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Error404PageManage@update_error_404_page_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\Error404PageManage@update_error_404_page_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::eUGrokv5a6kwadJY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.maintains.page.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/maintains-page/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MaintainsPageController@maintains_page_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\MaintainsPageController@maintains_page_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.maintains.page.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W9j8CgMr0HVGMsvh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/maintains-page/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MaintainsPageController@update_maintains_page_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\MaintainsPageController@update_maintains_page_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::W9j8CgMr0HVGMsvh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.slider.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/slider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\SliderController@index',
        'controller' => 'App\\Http\\Controllers\\SliderController@index',
        'as' => 'admin.slider.index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/slider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.slider.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/slider/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\SliderController@create',
        'controller' => 'App\\Http\\Controllers\\SliderController@create',
        'as' => 'admin.slider.create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/slider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.slider.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/slider/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\SliderController@store',
        'controller' => 'App\\Http\\Controllers\\SliderController@store',
        'as' => 'admin.slider.store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/slider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.slider.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/slider/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\SliderController@delete',
        'controller' => 'App\\Http\\Controllers\\SliderController@delete',
        'as' => 'admin.slider.delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/slider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.slider.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/slider/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\SliderController@edit',
        'controller' => 'App\\Http\\Controllers\\SliderController@edit',
        'as' => 'admin.slider.edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/slider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.slider.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/slider/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\SliderController@update',
        'controller' => 'App\\Http\\Controllers\\SliderController@update',
        'as' => 'admin.slider.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/slider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@index',
        'as' => 'admin.products.all',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@create',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@create',
        'as' => 'admin.products.new',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@store',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@store',
        'as' => 'admin.products.',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/edit/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@edit',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@edit',
        'as' => 'admin.products.edit',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/update/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@update',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@update',
        'as' => 'admin.products.update',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@destroy',
        'as' => 'admin.products.delete',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.clone' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/clone/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@clone',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@clone',
        'as' => 'admin.products.clone',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductController@bulk_action',
        'as' => 'admin.products.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.deleted.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/deleted',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\DeletedProductsController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\DeletedProductsController@index',
        'as' => 'admin.products.deleted.all',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/deleted',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.deleted.restore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/deleted/restore/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\DeletedProductsController@restore',
        'controller' => 'App\\Http\\Controllers\\Product\\DeletedProductsController@restore',
        'as' => 'admin.products.deleted.restore',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/deleted',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.deleted.permanent.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/deleted/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\DeletedProductsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\DeletedProductsController@destroy',
        'as' => 'admin.products.deleted.permanent.delete',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/deleted',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.deleted.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/deleted/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\DeletedProductsController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Product\\DeletedProductsController@bulk_action',
        'as' => 'admin.products.deleted.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/deleted',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.ratings.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/ratings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductRatingController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductRatingController@index',
        'as' => 'admin.products.ratings.all',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/ratings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.ratings.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/ratings/approve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductRatingController@approve',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductRatingController@approve',
        'as' => 'admin.products.ratings.approve',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/ratings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.ratings.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/ratings/delete/{rating}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductRatingController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductRatingController@destroy',
        'as' => 'admin.products.ratings.delete',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/ratings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.ratings.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/ratings/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductRatingController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductRatingController@bulk_action',
        'as' => 'admin.products.ratings.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/ratings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.attributes.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/attributes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@index',
        'as' => 'admin.products.attributes.all',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/attributes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.attributes.store' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/attributes/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@create',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@create',
        'as' => 'admin.products.attributes.store',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/attributes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.attributes.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/attributes/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@store',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@store',
        'as' => 'admin.products.attributes.',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/attributes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.attributes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/attributes/edit/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@edit',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@edit',
        'as' => 'admin.products.attributes.edit',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/attributes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.attributes.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/attributes/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@update',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@update',
        'as' => 'admin.products.attributes.update',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/attributes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.attributes.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/attributes/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@destroy',
        'as' => 'admin.products.attributes.delete',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/attributes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.attributes.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/attributes/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@bulk_action',
        'as' => 'admin.products.attributes.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/attributes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.attributes.details' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/attributes/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@get_details',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@get_details',
        'as' => 'admin.products.attributes.details',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/attributes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.attributes.admin.products.variant.by.lang' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/attributes/by-lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@get_all_variant_by_lang',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductAttributeController@get_all_variant_by_lang',
        'as' => 'admin.products.attributes.admin.products.variant.by.lang',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/attributes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.order.logs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/product-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOrderController@orderLogs',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOrderController@orderLogs',
        'as' => 'admin.product.order.logs',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.order.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/product-order/new-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOrderController@create',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOrderController@create',
        'as' => 'admin.product.order.new',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.order.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-order/new-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOrderController@store',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOrderController@store',
        'as' => 'admin.product.order.',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.order.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/product-order/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOrderController@show',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOrderController@show',
        'as' => 'admin.product.order.view',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.order.payment.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-order/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOrderController@delete',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOrderController@delete',
        'as' => 'admin.product.order.payment.delete',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.order.filter' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-order/filter-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOrderController@filterOrders',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOrderController@filterOrders',
        'as' => 'admin.product.order.filter',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.order.payment.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-order/approve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOrderController@product_order_payment_approve',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOrderController@product_order_payment_approve',
        'as' => 'admin.product.order.payment.approve',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.order.status.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-order/status-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOrderController@product_order_status_change',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOrderController@product_order_status_change',
        'as' => 'admin.product.order.status.change',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.order.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-order/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOrderController@product_order_bulk_action',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOrderController@product_order_bulk_action',
        'as' => 'admin.product.order.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.order.reminder' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-order/order-reminder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOrderController@order_reminder',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOrderController@order_reminder',
        'as' => 'admin.product.order.reminder',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.order.product.row' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/product-order/get-product-row',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOrderController@getProductRow',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOrderController@getProductRow',
        'as' => 'admin.product.order.product.row',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.invoice.generate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/generate-products-invoice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductOrderController@generateInvoice',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductOrderController@generateInvoice',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.invoice.generate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.import.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductImportController@import_settings',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductImportController@import_settings',
        'as' => 'admin.products.import.all',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/import',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.import.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/import/update-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductImportController@update_import_settings',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductImportController@update_import_settings',
        'as' => 'admin.products.import.settings.update',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/import',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.import.to.database' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductImportController@import_to_database_settings',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductImportController@import_to_database_settings',
        'as' => 'admin.products.import.to.database',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/import',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.category.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@index',
        'as' => 'admin.products.category.all',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.category.get.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/categories/get-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@getList',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@getList',
        'as' => 'admin.products.category.get.list',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.category.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/categories/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@store',
        'as' => 'admin.products.category.new',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.category.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/categories/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@update',
        'as' => 'admin.products.category.update',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.category.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/categories/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@destroy',
        'as' => 'admin.products.category.delete',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.category.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/categories/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCategoryController@bulk_action',
        'as' => 'admin.products.category.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.subcategory.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/sub-categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSubCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSubCategoryController@index',
        'as' => 'admin.products.subcategory.all',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/sub-categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.subcategory.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/sub-categories/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSubCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSubCategoryController@store',
        'as' => 'admin.products.subcategory.new',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/sub-categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.subcategory.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/sub-categories/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSubCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSubCategoryController@update',
        'as' => 'admin.products.subcategory.update',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/sub-categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.subcategory.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/sub-categories/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSubCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSubCategoryController@destroy',
        'as' => 'admin.products.subcategory.delete',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/sub-categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.subcategory.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/sub-categories/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSubCategoryController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSubCategoryController@bulk_action',
        'as' => 'admin.products.subcategory.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/sub-categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.subcategory.of.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/sub-categories/of-category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductSubCategoryController@getSubcategoriesOfCategory',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductSubCategoryController@getSubcategoriesOfCategory',
        'as' => 'admin.products.subcategory.of.category',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/sub-categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.coupon.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/coupons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCouponController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCouponController@index',
        'as' => 'admin.products.coupon.all',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/coupons',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.coupon.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/coupons/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCouponController@store',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCouponController@store',
        'as' => 'admin.products.coupon.new',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/coupons',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.coupon.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/coupons/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCouponController@update',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCouponController@update',
        'as' => 'admin.products.coupon.update',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/coupons',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.coupon.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/coupons/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCouponController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCouponController@destroy',
        'as' => 'admin.products.coupon.delete',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/coupons',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.coupon.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/coupons/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCouponController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCouponController@bulk_action',
        'as' => 'admin.products.coupon.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/coupons',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.coupon.check' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/coupons/check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCouponController@check',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCouponController@check',
        'as' => 'admin.products.coupon.check',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/coupons',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.coupon.products' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/coupons/get-products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductCouponController@allProductsAjax',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductCouponController@allProductsAjax',
        'as' => 'admin.products.coupon.products',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/coupons',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.tag.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\TagController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\TagController@index',
        'as' => 'admin.products.tag.all',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.tag.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/tags/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\TagController@store',
        'controller' => 'App\\Http\\Controllers\\Product\\TagController@store',
        'as' => 'admin.products.tag.new',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.tag.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/tags/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\TagController@update',
        'controller' => 'App\\Http\\Controllers\\Product\\TagController@update',
        'as' => 'admin.products.tag.update',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.tag.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/tags/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\TagController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\TagController@destroy',
        'as' => 'admin.products.tag.delete',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.tag.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/tags/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\TagController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Product\\TagController@bulk_action',
        'as' => 'admin.products.tag.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.tag.check' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/tags/check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\TagController@check',
        'controller' => 'App\\Http\\Controllers\\Product\\TagController@check',
        'as' => 'admin.products.tag.check',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.tag.get.ajax' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/tags/get-tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\TagController@getTagsAjax',
        'controller' => 'App\\Http\\Controllers\\Product\\TagController@getTagsAjax',
        'as' => 'admin.products.tag.get.ajax',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.product.tag.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/product-tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductTagController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductTagController@index',
        'as' => 'admin.products.product.tag.all',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.product.tag.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-tags/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductTagController@store',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductTagController@store',
        'as' => 'admin.products.product.tag.new',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.product.tag.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-tags/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductTagController@update',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductTagController@update',
        'as' => 'admin.products.product.tag.update',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.product.tag.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-tags/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductTagController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductTagController@destroy',
        'as' => 'admin.products.product.tag.delete',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.product.tag.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-tags/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductTagController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductTagController@bulk_action',
        'as' => 'admin.products.product.tag.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.product.tag.check' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/product-tags/check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductTagController@check',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductTagController@check',
        'as' => 'admin.products.product.tag.check',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.inventory.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/product-inventory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductInventoryController@index',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductInventoryController@index',
        'as' => 'admin.products.inventory.all',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.inventory.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/products/product-inventory/edit/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductInventoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductInventoryController@edit',
        'as' => 'admin.products.inventory.edit',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.inventory.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-inventory/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductInventoryController@update',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductInventoryController@update',
        'as' => 'admin.products.inventory.update',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.inventory.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-inventory/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductInventoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductInventoryController@destroy',
        'as' => 'admin.products.inventory.delete',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.products.inventory.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/products/product-inventory/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Product\\ProductInventoryController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Product\\ProductInventoryController@bulk_action',
        'as' => 'admin.products.inventory.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Product',
        'prefix' => 'admin-home/products/product-inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shipping.zone.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/shipping/zone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipping\\ZoneController@index',
        'controller' => 'App\\Http\\Controllers\\Shipping\\ZoneController@index',
        'as' => 'admin.shipping.zone.all',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/shipping/zone',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shipping.zone.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/shipping/zone/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipping\\ZoneController@store',
        'controller' => 'App\\Http\\Controllers\\Shipping\\ZoneController@store',
        'as' => 'admin.shipping.zone.new',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/shipping/zone',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shipping.zone.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/shipping/zone/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipping\\ZoneController@update',
        'controller' => 'App\\Http\\Controllers\\Shipping\\ZoneController@update',
        'as' => 'admin.shipping.zone.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/shipping/zone',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shipping.zone.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/shipping/zone/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipping\\ZoneController@destroy',
        'controller' => 'App\\Http\\Controllers\\Shipping\\ZoneController@destroy',
        'as' => 'admin.shipping.zone.delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/shipping/zone',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shipping.zone.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/shipping/zone/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipping\\ZoneController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Shipping\\ZoneController@bulk_action',
        'as' => 'admin.shipping.zone.bulk.action',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/shipping/zone',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shipping.method.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/shipping/method',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@index',
        'controller' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@index',
        'as' => 'admin.shipping.method.all',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/shipping/method',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shipping.method.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/shipping/method/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@create',
        'controller' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@create',
        'as' => 'admin.shipping.method.new',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/shipping/method',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shipping.method.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/shipping/method/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@store',
        'controller' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@store',
        'as' => 'admin.shipping.method.',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/shipping/method',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shipping.method.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/shipping/method/edit/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@edit',
        'controller' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@edit',
        'as' => 'admin.shipping.method.edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/shipping/method',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shipping.method.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/shipping/method/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@update',
        'controller' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@update',
        'as' => 'admin.shipping.method.update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/shipping/method',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shipping.method.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/shipping/method/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@destroy',
        'controller' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@destroy',
        'as' => 'admin.shipping.method.delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/shipping/method',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shipping.method.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/shipping/method/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@bulk_action',
        'as' => 'admin.shipping.method.bulk.action',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/shipping/method',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shipping.method.make.default' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/shipping/method/make-default',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@makeDefault',
        'controller' => 'App\\Http\\Controllers\\Shipping\\ShippingMethodController@makeDefault',
        'as' => 'admin.shipping.method.make.default',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/shipping/method',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.campaigns.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/campaigns',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Campaign\\CampaignController@index',
        'controller' => 'App\\Http\\Controllers\\Campaign\\CampaignController@index',
        'as' => 'admin.campaigns.all',
        'namespace' => 'App\\Http\\Controllers\\Campaign',
        'prefix' => 'admin-home/campaigns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.campaigns.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/campaigns/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Campaign\\CampaignController@create',
        'controller' => 'App\\Http\\Controllers\\Campaign\\CampaignController@create',
        'as' => 'admin.campaigns.new',
        'namespace' => 'App\\Http\\Controllers\\Campaign',
        'prefix' => 'admin-home/campaigns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.campaigns.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/campaigns/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Campaign\\CampaignController@store',
        'controller' => 'App\\Http\\Controllers\\Campaign\\CampaignController@store',
        'as' => 'admin.campaigns.',
        'namespace' => 'App\\Http\\Controllers\\Campaign',
        'prefix' => 'admin-home/campaigns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.campaigns.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/campaigns/edit/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Campaign\\CampaignController@edit',
        'controller' => 'App\\Http\\Controllers\\Campaign\\CampaignController@edit',
        'as' => 'admin.campaigns.edit',
        'namespace' => 'App\\Http\\Controllers\\Campaign',
        'prefix' => 'admin-home/campaigns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.campaigns.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/campaigns/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Campaign\\CampaignController@update',
        'controller' => 'App\\Http\\Controllers\\Campaign\\CampaignController@update',
        'as' => 'admin.campaigns.update',
        'namespace' => 'App\\Http\\Controllers\\Campaign',
        'prefix' => 'admin-home/campaigns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.campaigns.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/campaigns/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Campaign\\CampaignController@destroy',
        'controller' => 'App\\Http\\Controllers\\Campaign\\CampaignController@destroy',
        'as' => 'admin.campaigns.delete',
        'namespace' => 'App\\Http\\Controllers\\Campaign',
        'prefix' => 'admin-home/campaigns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.campaigns.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/campaigns/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Campaign\\CampaignController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Campaign\\CampaignController@bulk_action',
        'as' => 'admin.campaigns.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Campaign',
        'prefix' => 'admin-home/campaigns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.campaigns.delete.product' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/campaigns/delete-product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Campaign\\CampaignController@deleteProductSingle',
        'controller' => 'App\\Http\\Controllers\\Campaign\\CampaignController@deleteProductSingle',
        'as' => 'admin.campaigns.delete.product',
        'namespace' => 'App\\Http\\Controllers\\Campaign',
        'prefix' => 'admin-home/campaigns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.campaigns.product.price' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/campaigns/price',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Campaign\\CampaignController@getProductPrice',
        'controller' => 'App\\Http\\Controllers\\Campaign\\CampaignController@getProductPrice',
        'as' => 'admin.campaigns.product.price',
        'namespace' => 'App\\Http\\Controllers\\Campaign',
        'prefix' => 'admin-home/campaigns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Country\\CountryController@index',
        'controller' => 'App\\Http\\Controllers\\Country\\CountryController@index',
        'as' => 'admin.country.all',
        'namespace' => 'App\\Http\\Controllers\\Country',
        'prefix' => 'admin-home/country',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/country/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Country\\CountryController@store',
        'controller' => 'App\\Http\\Controllers\\Country\\CountryController@store',
        'as' => 'admin.country.new',
        'namespace' => 'App\\Http\\Controllers\\Country',
        'prefix' => 'admin-home/country',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/country/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Country\\CountryController@update',
        'controller' => 'App\\Http\\Controllers\\Country\\CountryController@update',
        'as' => 'admin.country.update',
        'namespace' => 'App\\Http\\Controllers\\Country',
        'prefix' => 'admin-home/country',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/country/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Country\\CountryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Country\\CountryController@destroy',
        'as' => 'admin.country.delete',
        'namespace' => 'App\\Http\\Controllers\\Country',
        'prefix' => 'admin-home/country',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.country.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/country/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Country\\CountryController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Country\\CountryController@bulk_action',
        'as' => 'admin.country.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Country',
        'prefix' => 'admin-home/country',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.state.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/state',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Country\\StateController@index',
        'controller' => 'App\\Http\\Controllers\\Country\\StateController@index',
        'as' => 'admin.state.all',
        'namespace' => 'App\\Http\\Controllers\\Country',
        'prefix' => 'admin-home/state',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.state.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/state/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Country\\StateController@store',
        'controller' => 'App\\Http\\Controllers\\Country\\StateController@store',
        'as' => 'admin.state.new',
        'namespace' => 'App\\Http\\Controllers\\Country',
        'prefix' => 'admin-home/state',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.state.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/state/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Country\\StateController@update',
        'controller' => 'App\\Http\\Controllers\\Country\\StateController@update',
        'as' => 'admin.state.update',
        'namespace' => 'App\\Http\\Controllers\\Country',
        'prefix' => 'admin-home/state',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.state.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/state/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Country\\StateController@destroy',
        'controller' => 'App\\Http\\Controllers\\Country\\StateController@destroy',
        'as' => 'admin.state.delete',
        'namespace' => 'App\\Http\\Controllers\\Country',
        'prefix' => 'admin-home/state',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.state.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/state/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Country\\StateController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Country\\StateController@bulk_action',
        'as' => 'admin.state.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Country',
        'prefix' => 'admin-home/state',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.state.by.country' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/state/country-state',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Country\\StateController@getStateByCountry',
        'controller' => 'App\\Http\\Controllers\\Country\\StateController@getStateByCountry',
        'as' => 'admin.state.by.country',
        'namespace' => 'App\\Http\\Controllers\\Country',
        'prefix' => 'admin-home/state',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tax.country.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/tax/country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Tax\\CountryTaxController@index',
        'controller' => 'App\\Http\\Controllers\\Tax\\CountryTaxController@index',
        'as' => 'admin.tax.country.all',
        'namespace' => 'App\\Http\\Controllers\\Tax',
        'prefix' => 'admin-home/tax/country',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tax.country.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/tax/country/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Tax\\CountryTaxController@store',
        'controller' => 'App\\Http\\Controllers\\Tax\\CountryTaxController@store',
        'as' => 'admin.tax.country.new',
        'namespace' => 'App\\Http\\Controllers\\Tax',
        'prefix' => 'admin-home/tax/country',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tax.country.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/tax/country/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Tax\\CountryTaxController@update',
        'controller' => 'App\\Http\\Controllers\\Tax\\CountryTaxController@update',
        'as' => 'admin.tax.country.update',
        'namespace' => 'App\\Http\\Controllers\\Tax',
        'prefix' => 'admin-home/tax/country',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tax.country.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/tax/country/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Tax\\CountryTaxController@destroy',
        'controller' => 'App\\Http\\Controllers\\Tax\\CountryTaxController@destroy',
        'as' => 'admin.tax.country.delete',
        'namespace' => 'App\\Http\\Controllers\\Tax',
        'prefix' => 'admin-home/tax/country',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tax.country.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/tax/country/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Tax\\CountryTaxController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Tax\\CountryTaxController@bulk_action',
        'as' => 'admin.tax.country.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Tax',
        'prefix' => 'admin-home/tax/country',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tax.state.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/tax/state',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Tax\\StateTaxController@index',
        'controller' => 'App\\Http\\Controllers\\Tax\\StateTaxController@index',
        'as' => 'admin.tax.state.all',
        'namespace' => 'App\\Http\\Controllers\\Tax',
        'prefix' => 'admin-home/tax/state',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tax.state.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/tax/state/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Tax\\StateTaxController@store',
        'controller' => 'App\\Http\\Controllers\\Tax\\StateTaxController@store',
        'as' => 'admin.tax.state.new',
        'namespace' => 'App\\Http\\Controllers\\Tax',
        'prefix' => 'admin-home/tax/state',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tax.state.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/tax/state/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Tax\\StateTaxController@update',
        'controller' => 'App\\Http\\Controllers\\Tax\\StateTaxController@update',
        'as' => 'admin.tax.state.update',
        'namespace' => 'App\\Http\\Controllers\\Tax',
        'prefix' => 'admin-home/tax/state',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tax.state.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/tax/state/delete/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Tax\\StateTaxController@destroy',
        'controller' => 'App\\Http\\Controllers\\Tax\\StateTaxController@destroy',
        'as' => 'admin.tax.state.delete',
        'namespace' => 'App\\Http\\Controllers\\Tax',
        'prefix' => 'admin-home/tax/state',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tax.state.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/tax/state/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Tax\\StateTaxController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Tax\\StateTaxController@bulk_action',
        'as' => 'admin.tax.state.bulk.action',
        'namespace' => 'App\\Http\\Controllers\\Tax',
        'prefix' => 'admin-home/tax/state',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.settings.wishlist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page-settings/wishlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@wishlistPageSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@wishlistPageSettings',
        'as' => 'admin.page.settings.wishlist',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/page-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.settings.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page-settings/wishlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@storeWishlistPageSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@storeWishlistPageSettings',
        'as' => 'admin.page.settings.',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/page-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.settings.cart' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page-settings/cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@cartPageSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@cartPageSettings',
        'as' => 'admin.page.settings.cart',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/page-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.settings.generated::piS5Vyn85zNhkFPz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page-settings/cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@storeCartPageSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@storeCartPageSettings',
        'as' => 'admin.page.settings.generated::piS5Vyn85zNhkFPz',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/page-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.settings.checkout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page-settings/checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@checkoutPageSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@checkoutPageSettings',
        'as' => 'admin.page.settings.checkout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/page-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.settings.generated::yF75ZbVUoHAZB6IN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page-settings/checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@storeCheckoutPageSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@storeCheckoutPageSettings',
        'as' => 'admin.page.settings.generated::yF75ZbVUoHAZB6IN',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/page-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.settings.compare' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page-settings/compare',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@comparePageSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@comparePageSettings',
        'as' => 'admin.page.settings.compare',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/page-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.settings.generated::hDH8IEBj7xmzmDze' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page-settings/compare',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@storeComparePageSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@storeComparePageSettings',
        'as' => 'admin.page.settings.generated::hDH8IEBj7xmzmDze',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/page-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.settings.user.auth' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page-settings/login-register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@userAuthPageSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@userAuthPageSettings',
        'as' => 'admin.page.settings.user.auth',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/page-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.settings.generated::VqNnoUwtDyWBm3Id' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page-settings/login-register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@storeUserAuthPageSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@storeUserAuthPageSettings',
        'as' => 'admin.page.settings.generated::VqNnoUwtDyWBm3Id',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/page-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.settings.shop.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page-settings/shop-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@shopPage',
        'controller' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@shopPage',
        'as' => 'admin.page.settings.shop.page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/page-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.settings.generated::WYrPqIPSrnJVfrNN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page-settings/shop-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@storeShopPage',
        'controller' => 'App\\Http\\Controllers\\Admin\\ModulePageSettingsController@storeShopPage',
        'as' => 'admin.page.settings.generated::WYrPqIPSrnJVfrNN',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/page-settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.homeone.latest.news' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page-01/latest-news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_latest_news',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_latest_news',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page-01',
        'where' => 
        array (
        ),
        'as' => 'admin.homeone.latest.news',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GTOpD8bAaOexiZCb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page-01/latest-news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_update_latest_news',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_update_latest_news',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page-01',
        'where' => 
        array (
        ),
        'as' => 'generated::GTOpD8bAaOexiZCb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.homeone.latest.event' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page-01/latest-event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_latest_event',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_latest_event',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page-01',
        'where' => 
        array (
        ),
        'as' => 'admin.homeone.latest.event',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0KzBR0Xh5TsP7m13' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page-01/latest-event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_update_latest_event',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_update_latest_event',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page-01',
        'where' => 
        array (
        ),
        'as' => 'generated::0KzBR0Xh5TsP7m13',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.homeone.feature.area' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page-01/feature-area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_feature_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_feature_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page-01',
        'where' => 
        array (
        ),
        'as' => 'admin.homeone.feature.area',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kT8PMS2g2BVB71Mm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page-01/feature-area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_update_feature_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_update_feature_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page-01',
        'where' => 
        array (
        ),
        'as' => 'generated::kT8PMS2g2BVB71Mm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.homeone.about.us' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page-01/about-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_about_us',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_about_us',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page-01',
        'where' => 
        array (
        ),
        'as' => 'admin.homeone.about.us',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Yto5dkhcQ7TMrj90' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page-01/about-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_update_about_us',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_update_about_us',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page-01',
        'where' => 
        array (
        ),
        'as' => 'generated::Yto5dkhcQ7TMrj90',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.homeone.video.area' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page-01/video-area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_video_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_video_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page-01',
        'where' => 
        array (
        ),
        'as' => 'admin.homeone.video.area',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uEOR5D34dUsOlKuk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page-01/video-area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_update_video_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_update_video_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page-01',
        'where' => 
        array (
        ),
        'as' => 'generated::uEOR5D34dUsOlKuk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.homeone.section.manage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page-01/section-manage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_section_manage',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_section_manage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page-01',
        'where' => 
        array (
        ),
        'as' => 'admin.homeone.section.manage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ls5jmuhmudMzW7lc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page-01/section-manage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_update_section_manage',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@home_01_update_section_manage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page-01',
        'where' => 
        array (
        ),
        'as' => 'generated::ls5jmuhmudMzW7lc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.widgets' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/widgets/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WidgetsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\WidgetsController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/widgets',
        'where' => 
        array (
        ),
        'as' => 'admin.widgets',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.widgets.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/widgets/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WidgetsController@new_widget',
        'controller' => 'App\\Http\\Controllers\\Admin\\WidgetsController@new_widget',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/widgets',
        'where' => 
        array (
        ),
        'as' => 'admin.widgets.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.widgets.markup' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/widgets/markup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WidgetsController@widget_markup',
        'controller' => 'App\\Http\\Controllers\\Admin\\WidgetsController@widget_markup',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/widgets',
        'where' => 
        array (
        ),
        'as' => 'admin.widgets.markup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.widgets.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/widgets/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WidgetsController@update_widget',
        'controller' => 'App\\Http\\Controllers\\Admin\\WidgetsController@update_widget',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/widgets',
        'where' => 
        array (
        ),
        'as' => 'admin.widgets.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.widgets.update.order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/widgets/update/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WidgetsController@update_order_widget',
        'controller' => 'App\\Http\\Controllers\\Admin\\WidgetsController@update_order_widget',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/widgets',
        'where' => 
        array (
        ),
        'as' => 'admin.widgets.update.order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.widgets.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/widgets/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WidgetsController@delete_widget',
        'controller' => 'App\\Http\\Controllers\\Admin\\WidgetsController@delete_widget',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/widgets',
        'where' => 
        array (
        ),
        'as' => 'admin.widgets.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jORwZVXakYybBgIP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/topbar-settings/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TopbarController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\TopbarController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/topbar-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::jORwZVXakYybBgIP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.topbar.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/topbar-settings/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TopbarController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\TopbarController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/topbar-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.topbar.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.topbar.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/topbar-settings/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TopbarController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\TopbarController@delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/topbar-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.topbar.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.topbar.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/topbar-settings/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TopbarController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Admin\\TopbarController@bulk_action',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/topbar-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.topbar.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenuController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenuController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/menu',
        'where' => 
        array (
        ),
        'as' => 'admin.menu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menu.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/menu/new-menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenuController@store_new_menu',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenuController@store_new_menu',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/menu',
        'where' => 
        array (
        ),
        'as' => 'admin.menu.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menu.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/menu/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenuController@edit_menu',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenuController@edit_menu',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/menu',
        'where' => 
        array (
        ),
        'as' => 'admin.menu.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menu.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/menu/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenuController@update_menu',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenuController@update_menu',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/menu',
        'where' => 
        array (
        ),
        'as' => 'admin.menu.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menu.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/menu/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenuController@delete_menu',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenuController@delete_menu',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/menu',
        'where' => 
        array (
        ),
        'as' => 'admin.menu.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menu.default' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/menu/default/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenuController@set_default_menu',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenuController@set_default_menu',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/menu',
        'where' => 
        array (
        ),
        'as' => 'admin.menu.default',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.mega.menu.item.select.markup' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/menu/mega-menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenuController@mega_menu_item_select_markup',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenuController@mega_menu_item_select_markup',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/menu',
        'where' => 
        array (
        ),
        'as' => 'admin.mega.menu.item.select.markup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.menu.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/category-menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/category-menu',
        'where' => 
        array (
        ),
        'as' => 'admin.category.menu.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.menu.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/category-menu/new-menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@store_new_menu',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@store_new_menu',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/category-menu',
        'where' => 
        array (
        ),
        'as' => 'admin.category.menu.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.menu.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/category-menu/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@edit_menu',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@edit_menu',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/category-menu',
        'where' => 
        array (
        ),
        'as' => 'admin.category.menu.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.menu.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/category-menu/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@update_menu',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@update_menu',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/category-menu',
        'where' => 
        array (
        ),
        'as' => 'admin.category.menu.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.menu.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/category-menu/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@delete_menu',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@delete_menu',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/category-menu',
        'where' => 
        array (
        ),
        'as' => 'admin.category.menu.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.menu.default' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/category-menu/default/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@set_default_menu',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@set_default_menu',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/category-menu',
        'where' => 
        array (
        ),
        'as' => 'admin.category.menu.default',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.mega.category.menu.item.select.markup' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/category-menu/mega-menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@mega_menu_item_select_markup',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@mega_menu_item_select_markup',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/category-menu',
        'where' => 
        array (
        ),
        'as' => 'admin.mega.category.menu.item.select.markup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.menu.sub_category' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/category-menu/render-sub-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@fetch_sub_category',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryMenuController@fetch_sub_category',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/category-menu',
        'where' => 
        array (
        ),
        'as' => 'admin.category.menu.sub_category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.key.features' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page/key-features-area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@key_features_section',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@key_features_section',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'admin.home.key.features',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xR8IYdWTuM7aNpMZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page/key-features-area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_key_features_section',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_key_features_section',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'generated::xR8IYdWTuM7aNpMZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.why.choose.us' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page/why-choose-us-area-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@why_choose_us_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@why_choose_us_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'admin.home.why.choose.us',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iVpXlvGpSemTvL1F' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page/why-choose-us-area-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_why_choose_us_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_why_choose_us_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'generated::iVpXlvGpSemTvL1F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.call.to.action' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page/call-to-action-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@call_to_action_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@call_to_action_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'admin.home.call.to.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UectBWdMNYUDuXfz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page/call-to-action-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_call_to_action_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_call_to_action_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'generated::UectBWdMNYUDuXfz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.keyfeatures' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page/keyfeatures-area-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@keyfeatures_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@keyfeatures_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'admin.home.keyfeatures',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UIDDdR5HOVANKGmz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page/keyfeatures-area-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_keyfeatures_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_keyfeatures_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'generated::UIDDdR5HOVANKGmz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.price.plan' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page/price-plan-area-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@price_plan_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@price_plan_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'admin.home.price.plan',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mxWff09NQB0Myig7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page/price-plan-area-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_price_plan_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_price_plan_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'generated::mxWff09NQB0Myig7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.blog.latest' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page/latest-blog-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@latest_blog_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@latest_blog_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'admin.home.blog.latest',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CVLwjVL0YhJuL2Ut' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page/latest-blog-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_latest_blog_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_latest_blog_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'generated::CVLwjVL0YhJuL2Ut',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.section.manage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page/section-manage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@section_manage',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@section_manage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'admin.home.section.manage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vxg8dHdSufbM4Urq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page/section-manage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_section_manage',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomePageController@update_section_manage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/home-page',
        'where' => 
        array (
        ),
        'as' => 'generated::vxg8dHdSufbM4Urq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.page.form.area' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/contact-page/form-area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContactPageController@contact_page_form_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContactPageController@contact_page_form_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/contact-page',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.page.form.area',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TOylM7kbPgm8tEc5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/contact-page/form-area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContactPageController@contact_page_update_form_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContactPageController@contact_page_update_form_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/contact-page',
        'where' => 
        array (
        ),
        'as' => 'generated::TOylM7kbPgm8tEc5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.page.map' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/contact-page/map',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContactPageController@contact_page_map_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContactPageController@contact_page_map_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/contact-page',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.page.map',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7ONxmrrjLcieyStY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/contact-page/map',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContactPageController@contact_page_update_map_area',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContactPageController@contact_page_update_map_area',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/contact-page',
        'where' => 
        array (
        ),
        'as' => 'generated::7ONxmrrjLcieyStY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.page.section.manage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/contact-page/section-manage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContactPageController@contact_page_section_manage',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContactPageController@contact_page_section_manage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/contact-page',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.page.section.manage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vlQ4y6bQIKUyZiZl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/contact-page/section-manage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContactPageController@contact_page_update_section_manage',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContactPageController@contact_page_update_section_manage',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/contact-page',
        'where' => 
        array (
        ),
        'as' => 'generated::vlQ4y6bQIKUyZiZl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.info' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/contact-page/contact-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContactInfoController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContactInfoController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/contact-page',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.info',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lh3lV2kjU3Mj8v0h' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/contact-page/contact-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContactInfoController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContactInfoController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/contact-page',
        'where' => 
        array (
        ),
        'as' => 'generated::lh3lV2kjU3Mj8v0h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.info.title' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/contact-page/contact-info/title',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContactInfoController@contact_info_title',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContactInfoController@contact_info_title',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/contact-page',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.info.title',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.info.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/contact-page/contact-info/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContactInfoController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContactInfoController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/contact-page',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.info.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.info.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/contact-page/contact-info/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContactInfoController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContactInfoController@delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/contact-page',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.info.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.info.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/contact-page/contact-info/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContactInfoController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContactInfoController@bulk_action',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/contact-page',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.info.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.upload.media.file.alt.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/media-upload/alt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MediaUploadController@alt_change_upload_media_file',
        'controller' => 'App\\Http\\Controllers\\Admin\\MediaUploadController@alt_change_upload_media_file',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/media-upload',
        'where' => 
        array (
        ),
        'as' => 'admin.upload.media.file.alt.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.upload.media.images.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/media-upload/page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MediaUploadController@all_upload_media_images_for_page',
        'controller' => 'App\\Http\\Controllers\\Admin\\MediaUploadController@all_upload_media_images_for_page',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/media-upload',
        'where' => 
        array (
        ),
        'as' => 'admin.upload.media.images.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.upload.media.file.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/media-upload/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MediaUploadController@delete_upload_media_file',
        'controller' => 'App\\Http\\Controllers\\Admin\\MediaUploadController@delete_upload_media_file',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/media-upload',
        'where' => 
        array (
        ),
        'as' => 'admin.upload.media.file.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.profile.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@admin_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@admin_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.profile.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/profile-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@admin_profile',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@admin_profile',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.profile.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Fq7ot8uE0HFM5kHl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/profile-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@admin_profile_update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@admin_profile_update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::Fq7ot8uE0HFM5kHl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.password.change' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/password-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@admin_password',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@admin_password',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.password.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::946P2DFwdvmXMzYU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/password-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@admin_password_chagne',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@admin_password_chagne',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::946P2DFwdvmXMzYU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@adminIndex',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@adminIndex',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dark.mode.toggle' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/dark-mode-toggle',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@dark_mode_toggle',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@dark_mode_toggle',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.dark.mode.toggle',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.all.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/admin/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@all_user',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@all_user',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.all.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.new.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/admin/new-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@new_user',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@new_user',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.new.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Jbe8vRXVzeGtS6ch' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/admin/new-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@new_user_add',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@new_user_add',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Jbe8vRXVzeGtS6ch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/admin/user-edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@user_edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@user_edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/admin/user-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@user_update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@user_update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.password.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/admin/user-password-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@user_password_change',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@user_password_change',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.password.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delete.user' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/admin/delete-user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@new_user_delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@new_user_delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.delete.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.all.admin.role' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/admin/role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@all_admin_role',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@all_admin_role',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.all.admin.role',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.role.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/admin/role/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@new_admin_role_index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@new_admin_role_index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.role.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zRbQW33AyXSzkmwL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/admin/role/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@store_new_admin_role',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@store_new_admin_role',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::zRbQW33AyXSzkmwL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.role.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/admin/role/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@edit_admin_role',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@edit_admin_role',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.role.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.role.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/admin/role/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@update_admin_role',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@update_admin_role',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.role.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.role.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/admin/role/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@delete_admin_role',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminRoleManageController@delete_admin_role',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.role.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.frontend.new.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/frontend/new-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@new_user',
        'controller' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@new_user',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/frontend',
        'where' => 
        array (
        ),
        'as' => 'admin.frontend.new.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QvaOLl76Dd9R1PlT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/frontend/new-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@new_user_add',
        'controller' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@new_user_add',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/frontend',
        'where' => 
        array (
        ),
        'as' => 'generated::QvaOLl76Dd9R1PlT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.frontend.user.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/frontend/user-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@user_update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@user_update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/frontend',
        'where' => 
        array (
        ),
        'as' => 'admin.frontend.user.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.frontend.user.password.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/frontend/user-password-chnage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@user_password_change',
        'controller' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@user_password_change',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/frontend',
        'where' => 
        array (
        ),
        'as' => 'admin.frontend.user.password.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.frontend.delete.user' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/frontend/delete-user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@new_user_delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@new_user_delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/frontend',
        'where' => 
        array (
        ),
        'as' => 'admin.frontend.delete.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.all.frontend.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/frontend/all-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@all_user',
        'controller' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@all_user',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/frontend',
        'where' => 
        array (
        ),
        'as' => 'admin.all.frontend.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.all.frontend.user.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/frontend/all-user/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@bulk_action',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/frontend',
        'where' => 
        array (
        ),
        'as' => 'admin.all.frontend.user.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.all.frontend.user.email.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/frontend/all-user/email-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@email_status',
        'controller' => 'App\\Http\\Controllers\\Admin\\FrontendUserManageController@email_status',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/frontend',
        'where' => 
        array (
        ),
        'as' => 'admin.all.frontend.user.email.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/newsletter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NewsletterController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\NewsletterController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/newsletter',
        'where' => 
        array (
        ),
        'as' => 'admin.newsletter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/newsletter/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NewsletterController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\NewsletterController@delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/newsletter',
        'where' => 
        array (
        ),
        'as' => 'admin.newsletter.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter.single.mail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/newsletter/single',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NewsletterController@send_mail',
        'controller' => 'App\\Http\\Controllers\\Admin\\NewsletterController@send_mail',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/newsletter',
        'where' => 
        array (
        ),
        'as' => 'admin.newsletter.single.mail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter.mail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/newsletter/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NewsletterController@send_mail_all_index',
        'controller' => 'App\\Http\\Controllers\\Admin\\NewsletterController@send_mail_all_index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/newsletter',
        'where' => 
        array (
        ),
        'as' => 'admin.newsletter.mail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bvvgTNbqdx6lTN1e' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/newsletter/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NewsletterController@send_mail_all',
        'controller' => 'App\\Http\\Controllers\\Admin\\NewsletterController@send_mail_all',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/newsletter',
        'where' => 
        array (
        ),
        'as' => 'generated::bvvgTNbqdx6lTN1e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter.new.add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/newsletter/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NewsletterController@add_new_sub',
        'controller' => 'App\\Http\\Controllers\\Admin\\NewsletterController@add_new_sub',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/newsletter',
        'where' => 
        array (
        ),
        'as' => 'admin.newsletter.new.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/newsletter/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NewsletterController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Admin\\NewsletterController@bulk_action',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/newsletter',
        'where' => 
        array (
        ),
        'as' => 'admin.newsletter.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter.verify.mail.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/newsletter/newsletter/verify-mail-send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NewsletterController@verify_mail_send',
        'controller' => 'App\\Http\\Controllers\\Admin\\NewsletterController@verify_mail_send',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/newsletter',
        'where' => 
        array (
        ),
        'as' => 'admin.newsletter.verify.mail.send',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/blog/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@new_blog',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@new_blog',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dUlWnX8vtR4DbKLe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@store_new_blog',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@store_new_blog',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::dUlWnX8vtR4DbKLe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.clone' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog/clone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@clone_blog',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@clone_blog',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.clone',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/blog/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@edit_blog',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@edit_blog',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@update_blog',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@update_blog',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@delete_blog',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@delete_blog',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/blog/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@category',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@category',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CgEilOAeQyuf20M1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@new_category',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@new_category',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::CgEilOAeQyuf20M1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.category.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog/category/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@delete_category',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@delete_category',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.category.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.category.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog/category/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@update_category',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@update_category',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.category.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.category.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog/category/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@category_bulk_action',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@category_bulk_action',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.category.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.lang.cat' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog/blog-lang-by-cat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@Language_by_slug',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@Language_by_slug',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.lang.cat',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.page.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/blog/page-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@blog_page_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@blog_page_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.page.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gLQvVNeD6uthaqVp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog/page-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@update_blog_page_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@update_blog_page_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::gLQvVNeD6uthaqVp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.single.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/blog/single-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@blog_single_page_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@blog_single_page_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.single.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::59f6zG250652I9gY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog/single-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@update_blog_single_page_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@update_blog_single_page_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::59f6zG250652I9gY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@bulk_action',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/blog',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/faq',
        'where' => 
        array (
        ),
        'as' => 'admin.faq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::appxmtLcWRw05sEN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/faq',
        'where' => 
        array (
        ),
        'as' => 'generated::appxmtLcWRw05sEN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/faq/update-faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/faq',
        'where' => 
        array (
        ),
        'as' => 'admin.faq.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/faq/delete-faq/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/faq',
        'where' => 
        array (
        ),
        'as' => 'admin.faq.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq.clone' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/faq/clone-faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@clone',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@clone',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/faq',
        'where' => 
        array (
        ),
        'as' => 'admin.faq.clone',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/faq/faq/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@bulk_action',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/faq',
        'where' => 
        array (
        ),
        'as' => 'admin.faq.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PagesController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PagesController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page',
        'where' => 
        array (
        ),
        'as' => 'admin.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PagesController@new_page',
        'controller' => 'App\\Http\\Controllers\\Admin\\PagesController@new_page',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page',
        'where' => 
        array (
        ),
        'as' => 'admin.page.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rILsjvSi8e6GgRs1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PagesController@store_new_page',
        'controller' => 'App\\Http\\Controllers\\Admin\\PagesController@store_new_page',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page',
        'where' => 
        array (
        ),
        'as' => 'generated::rILsjvSi8e6GgRs1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PagesController@edit_page',
        'controller' => 'App\\Http\\Controllers\\Admin\\PagesController@edit_page',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page',
        'where' => 
        array (
        ),
        'as' => 'admin.page.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PagesController@update_page',
        'controller' => 'App\\Http\\Controllers\\Admin\\PagesController@update_page',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page',
        'where' => 
        array (
        ),
        'as' => 'admin.page.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PagesController@delete_page',
        'controller' => 'App\\Http\\Controllers\\Admin\\PagesController@delete_page',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page',
        'where' => 
        array (
        ),
        'as' => 'admin.page.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PagesController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Admin\\PagesController@bulk_action',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page',
        'where' => 
        array (
        ),
        'as' => 'admin.page.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.navbar.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/appearance-settings/navbar/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NavbarController@navbar_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\NavbarController@navbar_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/appearance-settings/navbar',
        'where' => 
        array (
        ),
        'as' => 'admin.navbar.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L70IYpsSLAOyW5DG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/appearance-settings/navbar/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NavbarController@update_navbar_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\NavbarController@update_navbar_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/appearance-settings/navbar',
        'where' => 
        array (
        ),
        'as' => 'generated::L70IYpsSLAOyW5DG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.variant' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/appearance-settings/home-variant/select',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@home_variant',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@home_variant',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/appearance-settings/home-variant',
        'where' => 
        array (
        ),
        'as' => 'admin.home.variant',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zIg79urCMike5Q1B' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/appearance-settings/home-variant/select',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@update_home_variant',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@update_home_variant',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/appearance-settings/home-variant',
        'where' => 
        array (
        ),
        'as' => 'generated::zIg79urCMike5Q1B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.topbar.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/appearance-settings/topbar/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TopbarController@topbar_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\TopbarController@topbar_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/appearance-settings/topbar',
        'where' => 
        array (
        ),
        'as' => 'admin.topbar.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8Dg5ezgMgodEOPf0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/appearance-settings/topbar/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TopbarController@update_topbar_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\TopbarController@update_topbar_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/appearance-settings/topbar',
        'where' => 
        array (
        ),
        'as' => 'generated::8Dg5ezgMgodEOPf0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.topbar.info.item.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/appearance-settings/topbar/settings/info-items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TopbarController@update_topbar_info_items',
        'controller' => 'App\\Http\\Controllers\\Admin\\TopbarController@update_topbar_info_items',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/appearance-settings/topbar',
        'where' => 
        array (
        ),
        'as' => 'admin.topbar.info.item.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.new.social.item' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/appearance-settings/topbar/new-social-item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TopbarController@new_social_item',
        'controller' => 'App\\Http\\Controllers\\Admin\\TopbarController@new_social_item',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/appearance-settings/topbar',
        'where' => 
        array (
        ),
        'as' => 'admin.new.social.item',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update.social.item' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/appearance-settings/topbar/update-social-item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TopbarController@update_social_item',
        'controller' => 'App\\Http\\Controllers\\Admin\\TopbarController@update_social_item',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/appearance-settings/topbar',
        'where' => 
        array (
        ),
        'as' => 'admin.update.social.item',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delete.social.item' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/appearance-settings/topbar/delete-social-item/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TopbarController@delete_social_item',
        'controller' => 'App\\Http\\Controllers\\Admin\\TopbarController@delete_social_item',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/appearance-settings/topbar',
        'where' => 
        array (
        ),
        'as' => 'admin.delete.social.item',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.database.upgrade' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/database-upgrade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@database_upgrade',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@database_upgrade',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.database.upgrade',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sy76H13xdRJPEvrm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/database-upgrade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@database_upgrade_post',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@database_upgrade_post',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::sy76H13xdRJPEvrm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.site.identity' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/site-identity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@site_identity',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@site_identity',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.site.identity',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/reading',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_reading',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_reading',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DfheVjdF3srmk5FW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/site-identity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_site_identity',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_site_identity',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::DfheVjdF3srmk5FW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.basic.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/basic-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@basic_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@basic_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.basic.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v2wGfmyhvG9BYRLN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/basic-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_basic_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_basic_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::v2wGfmyhvG9BYRLN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.color.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/color-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@color_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@color_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.color.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JFI016n3SQZ54Pdl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/color-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_color_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_color_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::JFI016n3SQZ54Pdl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.seo.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/seo-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@seo_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@seo_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.seo.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fs671W8n6D3wHYoH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/seo-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_seo_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_seo_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::fs671W8n6D3wHYoH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.scripts.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/scripts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@scripts_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@scripts_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.scripts.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d9ylS5LwM0QO27Da' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/scripts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_scripts_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_scripts_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::d9ylS5LwM0QO27Da',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.email.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/email-template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@email_template_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@email_template_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.email.template',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mbohqDYBic9fT77X' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/email-template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_email_template_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_email_template_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::mbohqDYBic9fT77X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.typography.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/typography-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@typography_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@typography_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.typography.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1J4niTgNWzvkndVe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/typography-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_typography_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_typography_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::1J4niTgNWzvkndVe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.typography.single' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/typography-settings/single',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@get_single_font_variant',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@get_single_font_variant',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.typography.single',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.cache.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/cache-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@cache_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@cache_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.cache.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GGv20jeIbHWaatdP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/cache-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_cache_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_cache_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::GGv20jeIbHWaatdP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.page.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/page-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@page_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@page_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.page.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lQirhg9cesYEOxfX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/page-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_page_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_page_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::lQirhg9cesYEOxfX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.backup.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/backup-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@backup_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@backup_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.backup.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8fh1DJrJ2WRd60sj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/backup-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_backup_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_backup_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::8fh1DJrJ2WRd60sj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.backup.settings.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/backup-settings/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@delete_backup_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@delete_backup_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.backup.settings.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.backup.settings.restore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/backup-settings/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@restore_backup_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@restore_backup_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.backup.settings.restore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.update.system' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/update-system',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_system',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_system',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.update.system',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FRDrboodt05mG5l7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/update-system',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_system_version',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_system_version',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::FRDrboodt05mG5l7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.license.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/license-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'permission:general-settings-license',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@license_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@license_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.license.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wXEAHBVjpbqFzaKO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/license-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'permission:general-settings-license',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_license_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_license_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::wXEAHBVjpbqFzaKO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.custom.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/custom-css',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@custom_css_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@custom_css_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.custom.css',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lp8RbsrbAEcf2IMy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/custom-css',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_custom_css_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_custom_css_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::lp8RbsrbAEcf2IMy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.gdpr.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/gdpr-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@gdpr_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@gdpr_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.gdpr.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gSxPan7SbtdH0gCG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/gdpr-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_gdpr_cookie_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_gdpr_cookie_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::gSxPan7SbtdH0gCG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.update.script.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/update-script',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'permission:general-settings-update-script',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_script_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_script_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.update.script.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KAFO0GSs6GpcLyRP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/update-script',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'permission:general-settings-update-script',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@sote_update_script_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@sote_update_script_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::KAFO0GSs6GpcLyRP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.custom.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/custom-js',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@custom_js_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@custom_js_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.custom.js',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JTSpyBxTKohaCvo2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/custom-js',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_custom_js_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_custom_js_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::JTSpyBxTKohaCvo2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.smtp.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/smtp-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@smtp_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@smtp_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.smtp.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UhhfK8oWsPzcrrGO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/smtp-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_smtp_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_smtp_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::UhhfK8oWsPzcrrGO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.smtp.settings.test' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/smtp-settings/test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@test_smtp_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@test_smtp_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.smtp.settings.test',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.payment.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/payment-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@payment_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@payment_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.payment.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XEf9DPsU4aikuXoS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/payment-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_payment_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_payment_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::XEf9DPsU4aikuXoS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.popup.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/popup-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@popup_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@popup_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.popup.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kNqYYTxzYVKG9ABa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/popup-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_popup_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_popup_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::kNqYYTxzYVKG9ABa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.rss.feed.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/rss-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@rss_feed_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@rss_feed_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.rss.feed.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cMhhQNPHjsbkn8h4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/rss-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_rss_feed_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_rss_feed_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::cMhhQNPHjsbkn8h4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.sitemap.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/sitemap-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@sitemap_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@sitemap_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.sitemap.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MS5wr6y8ftjhe2jS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/sitemap-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_sitemap_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@update_sitemap_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'generated::MS5wr6y8ftjhe2jS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.sitemap.settings.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/sitemap-settings/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@delete_sitemap_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingsController@delete_sitemap_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.sitemap.settings.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.license.key.generate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/license-setting-verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LicenseController@license_key_generate',
        'controller' => 'App\\Http\\Controllers\\Admin\\LicenseController@license_key_generate',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.license.key.generate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.update.version.check' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/update-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LicenseController@update_version_check',
        'controller' => 'App\\Http\\Controllers\\Admin\\LicenseController@update_version_check',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.update.version.check',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.update.download.settings' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/download-update/{productId}/{tenant}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LicenseController@updateDownloadLatestVersion',
        'controller' => 'App\\Http\\Controllers\\Admin\\LicenseController@updateDownloadLatestVersion',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.update.download.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.software.update.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/software-update-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LicenseController@software_update_check_settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\LicenseController@software_update_check_settings',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/general-settings',
        'where' => 
        array (
        ),
        'as' => 'admin.general.software.update.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/languages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/languages',
        'where' => 
        array (
        ),
        'as' => 'admin.languages',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.words.frontend' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/languages/words/frontend/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@frontend_edit_words',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@frontend_edit_words',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/languages',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.words.frontend',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.words.backend' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/languages/words/backend/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@backend_edit_words',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@backend_edit_words',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/languages',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.words.backend',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.words.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/languages/words/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@update_words',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@update_words',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/languages',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.words.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/languages/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/languages',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/languages/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/languages',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/languages/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/languages',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.default' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/languages/default/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@make_default',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@make_default',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/languages',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.default',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.clone' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/languages/clone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@clone_languages',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@clone_languages',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/languages',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.clone',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.add.string' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/languages/add-new-string',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@add_new_string',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@add_new_string',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/languages',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.add.string',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.regenerate.source.texts' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/languages/languages/regenerate-source-text',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@regenerate_source_text',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@regenerate_source_text',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/languages',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.regenerate.source.texts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.page.builder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page-builder/home-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@homepage_builder',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@homepage_builder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.home.page.builder',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::a7VFSGSi1Lw3HJUf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page-builder/home-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_homepage_builder',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_homepage_builder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::a7VFSGSi1Lw3HJUf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.about.page.builder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page-builder/about-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@aboutpage_builder',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@aboutpage_builder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.about.page.builder',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pLQAfBFIMHCcNUfn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page-builder/about-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_aboutpage_builder',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_aboutpage_builder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::pLQAfBFIMHCcNUfn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.page.builder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page-builder/contact-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@contactpage_builder',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@contactpage_builder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.page.builder',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cK52egOv7qXQgDlh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page-builder/contact-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_contactpage_builder',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_contactpage_builder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::cK52egOv7qXQgDlh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq.page.builder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page-builder/faq-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@faqpage_builder',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@faqpage_builder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.faq.page.builder',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UtRUDNYAA9RfQlsp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page-builder/faq-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_faqpage_builder',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_faqpage_builder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::UtRUDNYAA9RfQlsp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.page.builder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page-builder/blog-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@blogpage_builder',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@blogpage_builder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.page.builder',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NHwkZ7FkCso4l8He' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page-builder/blog-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_blogpage_builder',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_blogpage_builder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::NHwkZ7FkCso4l8He',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dynamic.page.builder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page-builder/dynamic-page/{type}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@dynamicpage_builder',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@dynamicpage_builder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.dynamic.page.builder',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dynamic.page.builder.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page-builder/dynamic-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
          3 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_dynamicpage_builder',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_dynamicpage_builder',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin-home/page-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.dynamic.page.builder.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.builder.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/form-builder/custom/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomFormBuilderController@all',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomFormBuilderController@all',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder/custom',
        'where' => 
        array (
        ),
        'as' => 'admin.form.builder.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.builder.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/form-builder/custom/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomFormBuilderController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomFormBuilderController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder/custom',
        'where' => 
        array (
        ),
        'as' => 'admin.form.builder.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.builder.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/form-builder/custom/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomFormBuilderController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomFormBuilderController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder/custom',
        'where' => 
        array (
        ),
        'as' => 'admin.form.builder.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.builder.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/form-builder/custom/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomFormBuilderController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomFormBuilderController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder/custom',
        'where' => 
        array (
        ),
        'as' => 'admin.form.builder.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.builder.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/form-builder/custom/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomFormBuilderController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomFormBuilderController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder/custom',
        'where' => 
        array (
        ),
        'as' => 'admin.form.builder.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.builder.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/form-builder/custom/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomFormBuilderController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomFormBuilderController@bulk_action',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder/custom',
        'where' => 
        array (
        ),
        'as' => 'admin.form.builder.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.builder.get.in.touch' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/form-builder/get-in-touch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@get_in_touch_form_index',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@get_in_touch_form_index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.form.builder.get.in.touch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EYMUC1IWTxG5USFt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/form-builder/get-in-touch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@update_get_in_touch_form',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@update_get_in_touch_form',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::EYMUC1IWTxG5USFt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.builder.service.query' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/form-builder/service-query',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@service_query_index',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@service_query_index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.form.builder.service.query',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g1K1Ecpn2rQiBSXm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/form-builder/service-query',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@update_service_query',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@update_service_query',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::g1K1Ecpn2rQiBSXm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.builder.case.study.query' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/form-builder/case-study-query',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@case_study_query_index',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@case_study_query_index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.form.builder.case.study.query',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VvEeUzoq9IwkNtSq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/form-builder/case-study-query',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@update_case_study_query',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@update_case_study_query',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::VvEeUzoq9IwkNtSq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.builder.quote' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/form-builder/quote-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@quote_form_index',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@quote_form_index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.form.builder.quote',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fyNZ0FG5uL7bI1cs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/form-builder/quote-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@update_quote_form',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@update_quote_form',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::fyNZ0FG5uL7bI1cs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.builder.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/form-builder/order-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@order_form_index',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@order_form_index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.form.builder.order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bn7CAFYuzMH4fzgz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/form-builder/order-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@update_order_form',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@update_order_form',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::bn7CAFYuzMH4fzgz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.builder.contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/form-builder/contact-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@contact_form_index',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@contact_form_index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.form.builder.contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nba9WP9H0RvhpfQW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/form-builder/contact-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@update_contact_form',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@update_contact_form',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::nba9WP9H0RvhpfQW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.form.builder.estimate.form' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/form-builder/estimate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@estimate_form_index',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@estimate_form_index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'admin.form.builder.estimate.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KKsWMxiQ6fAdTWuf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/form-builder/estimate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FormBuilderController@update_estimate_form',
        'controller' => 'App\\Http\\Controllers\\FormBuilderController@update_estimate_form',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'admin-home/form-builder',
        'where' => 
        array (
        ),
        'as' => 'generated::KKsWMxiQ6fAdTWuf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.ticket.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/support-tickets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@all_tickets',
        'controller' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@all_tickets',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets',
        'where' => 
        array (
        ),
        'as' => 'admin.support.ticket.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.ticket.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/support-tickets/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@new_ticket',
        'controller' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@new_ticket',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets',
        'where' => 
        array (
        ),
        'as' => 'admin.support.ticket.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E5yq6j8Z0rtoPb7l' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/support-tickets/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@store_ticket',
        'controller' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@store_ticket',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::E5yq6j8Z0rtoPb7l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.ticket.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/support-tickets/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@delete',
        'controller' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@delete',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets',
        'where' => 
        array (
        ),
        'as' => 'admin.support.ticket.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.ticket.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/support-tickets/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@view',
        'controller' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@view',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets',
        'where' => 
        array (
        ),
        'as' => 'admin.support.ticket.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.ticket.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/support-tickets/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@bulk_action',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets',
        'where' => 
        array (
        ),
        'as' => 'admin.support.ticket.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.ticket.priority.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/support-tickets/priority-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@priority_change',
        'controller' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@priority_change',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets',
        'where' => 
        array (
        ),
        'as' => 'admin.support.ticket.priority.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.ticket.status.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/support-tickets/status-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@status_change',
        'controller' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@status_change',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets',
        'where' => 
        array (
        ),
        'as' => 'admin.support.ticket.status.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.ticket.send.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/support-tickets/send message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@send_message',
        'controller' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@send_message',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets',
        'where' => 
        array (
        ),
        'as' => 'admin.support.ticket.send.message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.ticket.page.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/support-tickets/page-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@page_settings',
        'controller' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@page_settings',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets',
        'where' => 
        array (
        ),
        'as' => 'admin.support.ticket.page.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZE6MyzWpATJDARXf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/support-tickets/page-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@update_page_settings',
        'controller' => 'App\\Http\\Controllers\\Support\\AdminSupportTicketController@update_page_settings',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::ZE6MyzWpATJDARXf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.ticket.department' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/support-tickets/department',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\SupportDepartmentController@category',
        'controller' => 'App\\Http\\Controllers\\Support\\SupportDepartmentController@category',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets/department',
        'where' => 
        array (
        ),
        'as' => 'admin.support.ticket.department',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xWwM4w36X2dPLyLp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/support-tickets/department',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\SupportDepartmentController@new_category',
        'controller' => 'App\\Http\\Controllers\\Support\\SupportDepartmentController@new_category',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets/department',
        'where' => 
        array (
        ),
        'as' => 'generated::xWwM4w36X2dPLyLp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.ticket.department.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/support-tickets/department/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\SupportDepartmentController@delete',
        'controller' => 'App\\Http\\Controllers\\Support\\SupportDepartmentController@delete',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets/department',
        'where' => 
        array (
        ),
        'as' => 'admin.support.ticket.department.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.ticket.department.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/support-tickets/department/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\SupportDepartmentController@update',
        'controller' => 'App\\Http\\Controllers\\Support\\SupportDepartmentController@update',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets/department',
        'where' => 
        array (
        ),
        'as' => 'admin.support.ticket.department.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.ticket.department.bulk.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/support-tickets/department/bulk-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\SupportDepartmentController@bulk_action',
        'controller' => 'App\\Http\\Controllers\\Support\\SupportDepartmentController@bulk_action',
        'namespace' => 'App\\Http\\Controllers\\Support',
        'prefix' => 'admin-home/support-tickets/department',
        'where' => 
        array (
        ),
        'as' => 'admin.support.ticket.department.bulk.action',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.builder.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_addon_content',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_addon_content',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.page.builder.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.builder.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@store_new_addon_content',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@store_new_addon_content',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.page.builder.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.builder.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.page.builder.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.builder.update.addon.order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/update-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_addon_order',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@update_addon_order',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.page.builder.update.addon.order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.builder.get.addon.markup' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/get-admin-markup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'adminglobalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@get_admin_panel_addon_markup',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageBuilderController@get_admin_panel_addon_markup',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.page.builder.get.addon.markup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.upload.media.file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/media-upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MediaUploadController@upload_media_file',
        'controller' => 'App\\Http\\Controllers\\Admin\\MediaUploadController@upload_media_file',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.upload.media.file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.upload.media.file.all' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/media-upload/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MediaUploadController@all_upload_media_file',
        'controller' => 'App\\Http\\Controllers\\Admin\\MediaUploadController@all_upload_media_file',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.upload.media.file.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.upload.media.file.loadmore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/media-upload/loadmore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MediaUploadController@get_image_for_loadmore',
        'controller' => 'App\\Http\\Controllers\\Admin\\MediaUploadController@get_image_for_loadmore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.upload.media.file.loadmore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.chart.data' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/chart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@get_chart_data',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@get_chart_data',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.home.chart.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.chart.data.by.day' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/chart/day',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@get_chart_by_date_data',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@get_chart_by_date_data',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.home.chart.data.by.day',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.chart.sale.count.per.day' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/chart/sale-count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@getSaleCountPerDayChartData',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@getSaleCountPerDayChartData',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.home.chart.sale.count.per.day',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.chart.order.count.per.day' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/chart/order-count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:backend',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@getOrderCountPerDayChartData',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDashboardController@getOrderCountPerDayChartData',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.home.chart.order.count.per.day',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
