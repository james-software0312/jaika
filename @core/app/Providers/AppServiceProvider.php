<?php

namespace App\Providers;

use App\Cart\Cart;
use App\Importantlink;
use App\Language;
use App\UsefulLink;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        
    }


    public function boot()
    {
        Model::preventLazyLoading(! app()->isProduction());
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
        if (get_static_option('site_force_ssl_redirection') === 'on') {
            URL::forceScheme('https');
        }

        // load Page Builder view
        $this->loadViewsFrom(__DIR__.'/../PageBuilder/views','pagebuilder');
        $this->loadViewsFrom(__DIR__.'/../MenuBuilder/CategoryMenu/views','categorymenu');
    }
}
