<?php

namespace App\Campaign;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'subtitle',
        'image',
        'status'
    ];
    
    public function products()
    {
        return $this->hasMany(CampaignProduct::class);
    }
}
