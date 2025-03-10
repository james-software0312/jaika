<?php


namespace App\PaymentGateway;


use App\PaymentGateway\Gateways\FlutterWaveRave;
use App\PaymentGateway\Gateways\MolliePay;
use App\PaymentGateway\Gateways\Paypal;
use App\PaymentGateway\Gateways\PaystackPay;
use App\PaymentGateway\Gateways\Paytm;
use App\PaymentGateway\Gateways\Razorpay;
use App\PaymentGateway\Gateways\StripePay;

class PaymentGatewaySetup
{

    public static function gateway_settings()
    {
        return [
            'paypal' => [
                'client_id',
                'status',
                'logo'
            ],
            'manual_payment',
            'mollie',
            'paytm',
            'stripe',
            'razorpay',
            'flutterwave',
            'paystack'
        ];
    }

    public static function paypal()
    {
        return new Paypal();
    }

    public static function paytm()
    {
        return new Paytm();
    }

    public static function stripe()
    {
        return new StripePay();
    }

    public static function paystack()
    {
        return new PaystackPay();
    }

    public static function razorpay()
    {
        return new Razorpay();
    }

    public static function flutterwaverev()
    {
        return new FlutterWaveRave();
    }

    public static function mollie()
    {
        return new MolliePay();
    }

    public static function gateway_list()
    {
        return [
            // 'paypal',
            // 'mollie',
            // 'paytm',
            // 'stripe',
            // 'razorpay',
            // 'flutterwave',
            // 'paystack',
            // 'midtrans',
            // 'payfast',
            // 'cashfree',
            // 'instamojo',
            // 'marcadopago',
            // 'manual_payment',
            'bank_payment',
            // 'cheque_payment',
        ];
    }

    public static function renderFrontendFormContent($cash_on_delivery = false)
    {
        $output = '<div class="payment-gateway-wrapper">';
        if (empty(get_static_option('site_payment_gateway'))) {
            return;
        }

        $all_gateway = PaymentGatewaySetup::gateway_list();

        $output .= '<input type="hidden" name="selected_payment_gateway" value="' . get_static_option('site_default_payment_gateway') . '">';
        $output .= '<span style="font-weight:bold;"> METODA PLATNOSCI </span>';
        $output .= '<ul>';

        if (!empty(get_static_option('cash_on_delivery_gateway'))) {
            // $output .= '<li data-gateway="cash_on_delivery" ><div class="img-select">';
            // $output .= render_image_markup_by_attachment_id(get_static_option('cash_on_delivery_preview_logo'));
            // $output .= '<a href="#"  class="cart add_to_cart" style="background-color: #FF6280; color:white; padding:10px;">'. __("cash") .'</a>';
            // $output .= '</div></li>';
            $output .= '<li data-gateway="cash_on_delivery" ><div class="img-select" style="background-color: #FF6280; color:white; padding:10px;">';
            // $output .= render_image_markup_by_attachment_id(get_static_option('cash_on_delivery_preview_logo'));
            $output .= '<a href="#"  class="cart add_to_cart" >'. __("cash") .'</a>';
            $output .= '</div></li>';
        }
        
        foreach ($all_gateway as $gateway) {
            if (!empty(get_static_option($gateway . '_gateway'))) :
                $class = (get_static_option('site_default_payment_gateway') == $gateway) ? 'class="selected"' : '';
                
                $output .= '<li data-gateway="' . $gateway . '" ' . $class . '><div class="img-select" style="background-color: #FF6280; color:white;  padding:10px;">';
                $output .= '<a href="#"  class="cart add_to_cart" >'. __("bank") .'</a>';
                // $output .= render_image_markup_by_attachment_id(get_static_option($gateway . '_preview_logo'));
                $output .= '</div></li>';
            endif;
        }

        $output .= '</ul>';
        $output .= '</div>';

        return $output;
    }
}
