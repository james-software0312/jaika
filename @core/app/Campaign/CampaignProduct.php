<?php

namespace App\Campaign;

use App\Product\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'campaign_id',
        'product_id',
        'campaign_price',
        'units_for_sale',
        'start_date',
        'end_date',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function campaign()
    {
        return $this->belongsTo(Campaign::class, 'campaign_id', 'id');
    }
}
