<?php

namespace App;

use App\Shipping\UserShippingAddress;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Country\Country;
use App\Country\State;
use App\Country\ProductSellInfo;

class User extends Authenticatable
{
    use Notifiable,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'image',
        'phone',
        'address',
        'country',
        'state',
        'city',
        'zipcode',
        'email_verified',
        'email_verify_token',
        'facebook_id',
        'google_id',
        'country_code',
        'vat_number',
        'without_vat_number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function shipping()
    {
        return $this->hasMany(UserShippingAddress::class);
    }
    public function country()
    {
        return $this->hasOne(Country::class,'id','country');
    }
    public function state()
    {
        return $this->hasOne(State::class,'id','state');
    }
    public function orders()
    {
        return $this->hasMany(ProductSellInfo::class,'id','user_id');
    }
}
