<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    use HasFactory;
    protected $connection = "mysql_wh_prefix";
    protected $table = 'contact';

    protected $fillable = [
        'name',
        'surname',
        'company',
        'address',
        'city',
        'postal_code',
        'country',
        'email',
        'phone',
        'vat_number',
        'whatsapp',
        'description',
        'status'
    ];
}
