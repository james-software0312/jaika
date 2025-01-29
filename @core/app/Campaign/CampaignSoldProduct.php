<?php

namespace App\Campaign;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignSoldProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'sold_count',
        'total_amount',
    ];
}
