<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'status',
        'parent_id',
        'image'
    ];

    public function subcategory()
    {
        return $this->hasMany(ProductSubCategory::class, 'category_id', 'id');
    }

    public function product(){
        return $this->hasOne(Product::class,"category_id","id");
    }
}
