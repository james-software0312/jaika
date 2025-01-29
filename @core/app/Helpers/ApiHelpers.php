<?php

namespace App\Helpers;
use Illuminate\Support\Facades\Validator;

class ApiHelpers
{
    public static function Validation($validate){
        if ($validate->fails()){
            return response()->error([
                'validation_errors' => $validate->messages()
            ]);
        }
    }
}