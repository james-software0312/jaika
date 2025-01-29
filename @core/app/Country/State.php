<?php

namespace App\Country;

use App\Tax\StateTax;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'country_id',
        'status',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function tax()
    {
        return $this->hasOne(StateTax::class, 'state_id', 'id');
    }
}
