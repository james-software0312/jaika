<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryMenu extends Model
{
    use HasFactory;
    protected $table = 'category_menus';
    protected $fillable = ['title','content','status'];
}
