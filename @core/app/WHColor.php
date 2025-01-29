<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WHColor extends Model
{
    use HasFactory;
    protected $connection = "mysql_wh_prefix";
    protected $table = 'colors';
    protected $fillable = ['name'];
}
