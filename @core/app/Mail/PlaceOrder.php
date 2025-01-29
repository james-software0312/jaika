<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class PlaceOrder extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public $subject;
    public $message;
    public $order_details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $subject, $message, $order_details)
    {
        $this->data = $data;
        $this->subject = $subject;
        $this->message = $message;
        $this->order_details = $order_details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail = $this->from(get_static_option('site_global_email'), get_static_option('site_title'))
            ->subject(__($this->subject))
            ->view('mail.order', [
                'mail_message' => $this->message ?? 'You order has been placed',
                'order_details' => $this->order_details,
                'payment_meta' => optional($this->data)->payment_meta,
            ]);

        return $mail;
    }
}
