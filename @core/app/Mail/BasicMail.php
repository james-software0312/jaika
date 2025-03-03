<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BasicMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    public function __construct($args)
    {
        $this->data = $args;
    }

    public function build()
    {
        // dd(get_static_option('site_title'));
        return $this->from(get_static_option('site_global_email'), get_static_option('site_title'))
            ->subject($this->data['subject'])
            ->view('mail.basic-mail-template');
    }
}
