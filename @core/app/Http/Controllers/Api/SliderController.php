<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SliderResource;
use App\Slider;

class SliderController extends Controller
{
    public function index()
    {
        return \Cache::remember("home-page-slider",60 * 60 * 24,function (){
            return SliderResource::collection(Slider::get());
        });
    }
}