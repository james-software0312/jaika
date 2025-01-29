<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Product\ProductAttribute;
use Illuminate\Http\Request;

class AttributesController extends Controller
{
    public function index(){
        // get all attributes
        $attributes = ProductAttribute::all();
        $new_attributes = [];
        foreach($attributes as $item){
            $new_attributes[$item->title] = json_decode($item->terms) + ["id" => $item->id];
        }

        return response()->success($new_attributes);
    }
}
