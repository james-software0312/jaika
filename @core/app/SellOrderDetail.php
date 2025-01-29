<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellOrderDetail extends Model
{
    use HasFactory;
    protected $connection = "mysql_wh_prefix";
    protected $table = 'sell_order_detail';

    protected $fillable = [
        'stockitemid', 
        'warehouseid', 
        'contactid',
        'reference',
        'selldate',
        'price',
        'discount',
        'quantity',  
        'unitid', 
        'description', 
    ];
}
