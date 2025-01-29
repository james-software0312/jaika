<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Str;

class Demo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       $not_allow_path = [
        'admin-home',
        'user-home',
        'user/profile-update',
        'user/password-change'
        ];
        $allow_path = [
            'admin-home/chart',
            'admin-home/charts',
            'admin-home/chart/day',
            'admin-home/chart/sale-count',
            'admin-home/chart/order-count',
            'admin-home/media-upload/loadmore',
            'admin-home/media-upload/all',
            'admin-home/media-upload'
            ];
        $contains = Str::contains($request->path(), $not_allow_path);
        
        if($request->isMethod('POST') || $request->isMethod('PUT')) {
            
            if($contains && !in_array($request->path(),$allow_path)){
                if ($request->ajax()){
                    return response()->json(['type' => 'warning' , 'msg' => 'This is demonstration purpose only, you may not able to change few settings,']);
                }
                return redirect()->back()->with(['type' => 'warning' , 'msg' => 'This is demonstration purpose only, you may not able to change few settings,']);
            }
            
        }
        return $next($request);
    }
}
