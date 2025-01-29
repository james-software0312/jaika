<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellOrder extends Model
{
    use HasFactory;
    protected $connection = "mysql_wh_prefix";
    protected $table = 'sell_order';

    protected $fillable = [ 
        'warehouseid', 
        'contactid',
        'selldate',
        'show_reference',
        'pre_order',
        'selldate',
        'discount',  
        'discount_type', 
        'description', 
        'confirmed',
        'withinvoice',
        'hidden',
        'signed',
        'creator',
        'payment_type',
    ];
}
