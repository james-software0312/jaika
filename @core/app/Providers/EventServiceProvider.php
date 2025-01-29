<?php

namespace App\Providers;

use App\Listeners\ClearCartOnUserLogout;
use Illuminate\Auth\Events\Logout;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\ProductOrdered;
use App\Events\SupportMessage;
use App\Listeners\ProductOrderDBUpdate;
use App\Listeners\ProductOrderMailUser;
use App\Listeners\SupportSendMailToAdmin;
use App\Listeners\SupportSendMailToUser;

class EventServiceProvider extends ServiceProvider
{

    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
         Logout::class => [
            ClearCartOnUserLogout::class
        ],
        ProductOrdered::class => [
            ProductOrderMailUser::class,
            ProductOrderDBUpdate::class,
        ],
        SupportMessage::class => [
            SupportSendMailToAdmin::class,
            SupportSendMailToUser::class,
        ],
    ];

    public function boot()
    {
        parent::boot();

    }
}
