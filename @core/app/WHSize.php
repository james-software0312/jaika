<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WHSize extends Model
{
    use HasFactory;
    protected $connection = "mysql_wh_prefix";
    protected $table = 'size';
    protected $fillable = ['name'];
}
