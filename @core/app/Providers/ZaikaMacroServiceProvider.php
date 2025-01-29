<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Mews\Purifier\Facades\Purifier;
use Illuminate\Support\Facades\Response;

class ZaikaMacroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Request::macro('sanitize_html', function ($value) {
            return htmlspecialchars(strip_tags(Request::get($value)));
        });

        Request::macro('custom_html', function ($value) {
            return Purifier::clean(Request::get($value));
        });
        Response::macro('success',function ($data){
            return response()->json($data,201);
        });
        Response::macro('error',function ($data){
            return response()->json($data,404);
        });
    }
}
