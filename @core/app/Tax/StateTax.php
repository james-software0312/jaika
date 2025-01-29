<?php

namespace App\Tax;

use App\Country\State;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StateTax extends Model
{
    use HasFactory;
    protected $fillable = [
        'state_id',
        'tax_percentage'
    ];

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
