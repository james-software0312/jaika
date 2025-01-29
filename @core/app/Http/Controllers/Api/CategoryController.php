<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiHelpers;
use App\Actions\Media\MediaHelper;
use App\Helpers\FlashMsg;
use App\Http\Controllers\Controller;
use App\Mail\BasicMail;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Country\Country;
use App\Country\State;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Product\ProductCategory;


class CategoryController extends Controller
{
    /* 
    * fetch all country list from database
    */
    public function allCategory()
    {
        $categories = ProductCategory::select('id', 'title','image')->where('status','publish')->orderBy('title', 'asc')->get()->transform(function($item){
            $image_url = null;
            if(!empty($item->image)){
                $img_details = get_attachment_image_by_id($item->image);
                $image_url = $img_details['img_url'] ?? null;
            }
            $item->image_url = $image_url ?  : null;
            return $item;
        });
        
        return response()->success([
            'categories' => $categories
        ]);
    
    }
    
    /* 
    * fetch all state list based on provided country id from database
    */
    public function singleCategory($id)
    {
        if(empty($id)){
             return response()->error([
                'message' => __('provide a valid id')
            ]); 
        }
        // $validate = Validator::make($request->all(),[
        //     'email' => 'required|email|max:191',
        //     'password' => 'required',
        // ]);
        // if ($validate->fails()){
        //     return response()->error([
        //         'validation_errors' => $validate->messages()
        //     ]);
        // }
        $categories = ProductCategory::select('id', 'title','image')->where('id',$id)->first();
        
        if(!is_null($categories)){
            $image_url = null;
            if(!empty($categories->image)){
                $img_details = get_attachment_image_by_id($categories->image);
                $image_url = $img_details['img_url'] ?? null;
            }
            $categories->image_url = $image_url ?  : null;
        }
       
        
        return response()->success([
            'category' => $categories
        ]);
    
    }
    

}
