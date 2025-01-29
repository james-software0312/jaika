<?php

namespace App\Shipping;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserShippingAddress extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'address'
    ];
}
