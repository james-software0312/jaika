<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\StaticOption;
use Illuminate\Http\Request;

class SiteSettingsController extends Controller
{
    public function payment_gateway_list(Request $request)
    {
        if ($request->header("x-api-key") !== "b8f4a0ba4537ad6c3ee41ec0a43549d1") {
            return response()->json(["error" => "Unauthenticated."], 401);
        }

        $option_key = [
            // paypal
            'paypal_preview_logo',
            'paypal_mode',
            'paypal_sandbox_client_id',
            'paypal_sandbox_client_secret',
            'paypal_sandbox_app_id',
            'paypal_live_app_id',
            'paypal_payment_action',
            'paypal_live_client_id',
            'paypal_live_client_secret',
            'paypal_gateway',
            'paypal_test_mode',
            // razorpay
            'razorpay_preview_logo',
            'razorpay_key',
            'razorpay_secret',
            'razorpay_api_key',
            'razorpay_api_secret',
            'razorpay_gateway',
            // stripe
            'stripe_preview_logo',
            'stripe_publishable_key',
            'stripe_secret_key',
            'stripe_public_key',
            'stripe_gateway',
            // paytm
            'paytm_gateway',
            'paytm_preview_logo',
            'paytm_merchant_key',
            'paytm_merchant_mid',
            'paytm_merchant_website',
            'paytm_test_mode',
            // paystack
            'paystack_merchant_email',
            'paystack_preview_logo',
            'paystack_public_key',
            'paystack_secret_key',
            'paystack_gateway',
            // mollie
            'mollie_preview_logo',
            'mollie_public_key',
            'mollie_gateway',
            // marcado_pago
            'marcado_pagp_client_id',
            'marcado_pago_client_secret',
            'marcado_pago_test_mode',
            // cash on delivery (COD)
            'cash_on_delivery_gateway',
            'cash_on_delivery_preview_logo',
            // flutterwave
            'flutterwave_preview_logo',
            'flutterwave_gateway',
            'flw_public_key',
            'flw_secret_key',
            'flw_secret_hash',
            // midtrans
            'midtrans_preview_logo',
            'midtrans_merchant_id',
            'midtrans_server_key',
            'midtrans_client_key',
            'midtrans_environment',
            'midtrans_gateway',
            'midtrans_test_mode',
            // payfast
            'payfast_preview_logo',
            'payfast_merchant_id',
            'payfast_merchant_key',
            'payfast_passphrase',
            'payfast_merchant_env',
            'payfast_itn_url',
            'payfast_gateway',
            // cashfree
            'cashfree_preview_logo',
            'cashfree_test_mode',
            'cashfree_app_id',
            'cashfree_secret_key',
            'cashfree_gateway',
            // instamojo
            'instamojo_preview_logo',
            'instamojo_client_id',
            'instamojo_client_secret',
            'instamojo_username',
            'instamojo_password',
            'instamojo_test_mode',
            'instamojo_gateway',
            // marcadopago
            'marcadopago_preview_logo',
            'marcado_pago_client_id',
            'marcadopago_gateway',
            'marcadopago_test_mode',
            // site global
            'site_global_currency',
            'site_global_payment_gateway',
            // site manual
            'site_manual_payment_name',
            'site_manual_payment_description',
            // manual payment
            'manual_payment_preview_logo',
            'manual_payment_gateway',
            // Bank payment
            'bank_payment_preview_logo',
            'bank_payment_gateway',
            'site_bank_payment_name',
            'site_bank_payment_description',
            // Cheque payment
            'cheque_payment_preview_logo',
            'cheque_payment_gateway',
            'site_cheque_payment_name',
            'site_cheque_payment_description',
            // exchange rate
            'site_usd_to_ngn_exchange_rate',
            'site_euro_to_ngn_exchange_rate',
            'site_currency_symbol_position',
            'site_default_payment_gateway',
            // others
        ];

        $static_option = StaticOption::select("option_name", "option_value")->whereIn("option_name", $option_key)->get()->transform(function ($item) {
            if (in_array($item->option_name, ['paypal_preview_logo', 'razorpay_preview_logo', 'stripe_preview_logo', 'paytm_preview_logo', 'paystack_preview_logo', 'mollie_preview_logo', 'cash_on_delivery_preview_logo', 'flutterwave_preview_logo', 'midtrans_preview_logo', 'payfast_preview_logo', 'cashfree_preview_logo', 'instamojo_preview_logo', 'marcadopago_preview_logo', 'manual_payment_preview_logo', 'bank_payment_preview_logo', 'cheque_payment_preview_logo'])) {
                $item->option_value = get_attachment_image_by_id($item->option_value)["img_url"];
            }

            return $item;
        });

        $final_array = [];

        // get only paypal data
        $site_option = $static_option->whereIn("option_name", [
            'site_global_currency',
            'site_global_payment_gateway'
        ]);

        // prepare for paypal
        $site_global = [];
        foreach ($site_option as $item) {
            $site_global[$item->option_name] = $item->option_value;
        }

        // assign paypal
        $final_array["site_setting"] = $site_global;

        // get only paypal data
        $exchange_rate_option = $static_option->whereIn("option_name", [
            'site_usd_to_ngn_exchange_rate',
            'site_euro_to_ngn_exchange_rate',
            'site_currency_symbol_position',
            'site_default_payment_gateway',
        ]);

        // prepare for paypal
        $exchange_rate = [];
        foreach ($exchange_rate_option as $item) {
            $exchange_rate[$item->option_name] = $item->option_value;
        }

        // assign paypal
        $final_array["exchange_rate"] = $exchange_rate;

        // get only paypal data
        $cheque_payment_option = $static_option->whereIn("option_name", [
            'cheque_payment_preview_logo',
            'cheque_payment_gateway',
            'site_cheque_payment_name',
            'site_cheque_payment_description',
        ]);

        // prepare for paypal
        $cheque_payment = [];
        foreach ($cheque_payment_option as $item) {
            $cheque_payment[$item->option_name] = $item->option_value;
        }

        // assign paypal
        $final_array["cheque_payment"] = $cheque_payment;

        // get only paypal data
        $bank_payment_option = $static_option->whereIn("option_name", [
            'bank_payment_preview_logo',
            'bank_payment_gateway',
            'site_bank_payment_name',
            'site_bank_payment_description',
        ]);

        // prepare for paypal
        $bank_payment = [];
        foreach ($bank_payment_option as $item) {
            $bank_payment[$item->option_name] = $item->option_value;
        }

        // assign paypal
        $final_array["bank_payment"] = $bank_payment;

        // get only paypal data
        $manual_payment_option = $static_option->whereIn("option_name", [
            'manual_payment_preview_logo',
            'manual_payment_gateway',
        ]);

        // prepare for paypal
        $manual_payment = [];
        foreach ($manual_payment_option as $item) {
            $manual_payment[$item->option_name] = $item->option_value;
        }

        // assign paypal
        $final_array["manual_payment"] = $manual_payment;

        // get only paypal data
        $paypal_option = $static_option->whereIn("option_name", ["paypal_preview_logo", "site_default_payment_gateway", "paypal_gateway", "paypal_gateway", "paypal_sandbox_client_id", "paypal_sandbox_client_secret", "paypal_sandbox_client_secret", "paypal_live_app_id", "paypal_payment_action", "paypal_live_client_id", "paypal_live_client_secret"]);

        // prepare for paypal
        $paypal = [];
        foreach ($paypal_option as $item) {
            $paypal[$item->option_name] = $item->option_value;
        }

        // assign paypal
        $final_array["paypal"] = $paypal;

        // get only paypal data

        $marcadopago_option = $static_option->whereIn("option_name", [
            'marcadopago_preview_logo',
            'marcado_pago_client_id',
            'marcadopago_gateway',
            'marcadopago_test_mode',
        ]);

        // prepare for paypal
        $marcadopago = [];
        foreach ($marcadopago_option as $item) {
            $marcadopago[$item->option_name] = $item->option_value;
        }

        // assign paypal
        $final_array["marcadopago"] = $marcadopago;

        $cashfree_option = $static_option->whereIn("option_name", [
            'cashfree_preview_logo',
            'cashfree_test_mode',
            'cashfree_app_id',
            'cashfree_secret_key',
            'cashfree_gateway',
        ]);

        // prepare for paypal
        $cashfree = [];
        foreach ($cashfree_option as $item) {
            $cashfree[$item->option_name] = $item->option_value;
        }

        // assign paypal
        $final_array["cashfree"] = $cashfree;

        $cash_on_delivery_option = $static_option->whereIn("option_name", [
            'cash_on_delivery_gateway',
            'cash_on_delivery_preview_logo',
        ]);

        // prepare for paypal
        $cash_on_delivery = [];
        foreach ($cash_on_delivery_option as $item) {
            $cash_on_delivery[$item->option_name] = $item->option_value;
        }

        // assign paypal
        $final_array["cash_on_delivery"] = $cash_on_delivery;

        $flutterwave_option = $static_option->whereIn("option_name", [
            'flutterwave_preview_logo',
            'flutterwave_gateway',
            'flw_public_key',
            'flw_secret_key',
            'flw_secret_hash',
        ]);

        // prepare for paypal
        $flutterwave = [];
        foreach ($flutterwave_option as $item) {
            $flutterwave[$item->option_name] = $item->option_value;
        }

        // assign paypal
        $final_array["flutterwave"] = $flutterwave;

        $instamojo_option = $static_option->whereIn("option_name", [
            'instamojo_preview_logo',
            'instamojo_client_id',
            'instamojo_client_secret',
            'instamojo_username',
            'instamojo_password',
            'instamojo_test_mode',
            'instamojo_gateway',
        ]);

        // prepare for paypal
        $instamojo = [];
        foreach ($instamojo_option as $item) {
            $instamojo[$item->option_name] = $item->option_value;
        }

        // assign paypal
        $final_array["instamojo"] = $instamojo;

        $payfast_option = $static_option->whereIn("option_name", [
            'payfast_preview_logo',
            'payfast_merchant_id',
            'payfast_merchant_key',
            'payfast_passphrase',
            'payfast_merchant_env',
            'payfast_itn_url',
            'payfast_gateway',
        ]);

        // prepare for paypal
        $payfast = [];
        foreach ($payfast_option as $item) {
            $payfast[$item->option_name] = $item->option_value;
        }

        // assign paypal
        $final_array["payfast"] = $payfast;

        $midtrans_option = $static_option->whereIn("option_name", [
            'midtrans_preview_logo',
            'midtrans_merchant_id',
            'midtrans_server_key',
            'midtrans_client_key',
            'midtrans_environment',
            'midtrans_gateway',
            'midtrans_test_mode',
        ]);

        // prepare for paypal
        $midtrans = [];
        foreach ($midtrans_option as $item) {
            $midtrans[$item->option_name] = $item->option_value;
        }

        // assign paypal
        $final_array["midtrans"] = $midtrans;

        // get only paypal data
        $paystack_option = $static_option->whereIn("option_name", [
            'paystack_merchant_email',
            'paystack_preview_logo',
            'paystack_public_key',
            'paystack_secret_key',
            'paystack_gateway'
        ]);

        // prepare for paypal
        $paystack = [];
        foreach ($paystack_option as $item) {
            $paystack[$item->option_name] = $item->option_value;
        }

        // assign paypal
        $final_array["paystack"] = $paystack;

        // get only paypal data
        $mollie_option = $static_option->whereIn("option_name", [
            'mollie_preview_logo',
            'mollie_public_key',
            'mollie_gateway',
        ]);

        // prepare for paypal
        $mollie = [];
        foreach ($mollie_option as $item) {
            $mollie[$item->option_name] = $item->option_value;
        }

        // assign paypal
        $final_array["mollie"] = $mollie;

        // get only paypal data
        $paytm_option = $static_option->whereIn("option_name", ["paytm_preview_logo", "paytm_merchant_key", "paytm_merchant_mid", "paytm_merchant_website", "paytm_test_mode", "paytm_gateway"]);

        $paytm = [];
        foreach ($paytm_option as $item) {
            $paytm[$item->option_name] = $item->option_value;
        }

        $final_array["paytm"] = $paytm;

        // get only paypal data
        $razorpay_option = $static_option->whereIn("option_name", [
            'razorpay_preview_logo',
            'razorpay_key',
            'razorpay_secret',
            'razorpay_api_key',
            'razorpay_api_secret',
            'razorpay_gateway',
        ]);

        $razorpay = [];
        foreach ($razorpay_option as $item) {
            $razorpay[$item->option_name] = $item->option_value;
        }

        $final_array["razorpay"] = $razorpay;

        // get only paypal data
        $stripe_option = $static_option->whereIn("option_name", [
            'stripe_preview_logo',
            'stripe_publishable_key',
            'stripe_secret_key',
            'stripe_public_key',
            'stripe_gateway',
        ]);

        $stripe = [];
        foreach ($stripe_option as $item) {
            $stripe[$item->option_name] = $item->option_value;
        }

        $final_array["stripe"] = $stripe;

        return $final_array;
    }
}
