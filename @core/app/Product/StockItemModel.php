<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Model;

class StockItemModel extends Model
{
    protected $connection = "mysql_wh_prefix";
    protected $table = 'stockitem';

    protected $fillable = [
        'code', 
        'categoryid', 
        'unitid','warehouseid',
        'name',
        'quantity',
        'single_quantity',
        'photo',
        'description',  
        'itemsubtype', 
        'price', 
        'contactid',  
        'purchase_price', 
        'vat', 'size', 
        'unitconverter', 
        'unitconverterto', 
        'hidden_amount', 
        'unitconverter1', 
        'is_visible', 
        'is_delete', 
        'product_id', 
        'color'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}


