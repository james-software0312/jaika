<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModulePageSettings extends Model
{
    use HasFactory;
    protected $fillable = [
        'option_name',
        'option_value'
    ];
}
