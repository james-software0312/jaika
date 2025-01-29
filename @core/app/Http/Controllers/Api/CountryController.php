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

class CountryController extends Controller
{
    /* 
    * fetch all country list from database
    */
    public function country()
    {
        $country = Country::select('id', 'name')->orderBy('name', 'asc')->get();
        
        return response()->success([
            'countries' => $country
        ]);
    
    }
    
    /* 
    * fetch all state list based on provided country id from database
    */
    public function stateByCountryId($id)
    {
        if(empty($id)){
             return response()->error([
                'message' => __('provide a valid country id')
            ]); 
        }

        $state = State::select('id', 'name','country_id')->where('country_id',$id)->orderBy('name', 'asc')->get();
        
        return response()->success([
            'state' => $state
        ]);
    
    }
    

}
