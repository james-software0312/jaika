<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInventory extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'sku',
        'stock_count',
        'sold_count',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function details()
    {
        return $this->hasMany(ProductInventoryDetails::class, 'inventory_id', 'id');
    }
}
