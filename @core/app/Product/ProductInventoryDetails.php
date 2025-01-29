<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInventoryDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'inventory_id',
        'attribute_id',
        'attribute_value',
        'stock_count',
    ];
}
