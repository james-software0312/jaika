<?php

namespace App\Tax;

use App\Country\Country;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryTax extends Model
{
    use HasFactory;
    protected $fillable = [
        'country_id',
        'tax_percentage'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
