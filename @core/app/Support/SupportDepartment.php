<?php

namespace App\Support;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportDepartment extends Model
{
    use HasFactory;

    protected $table = 'support_departments';
    protected $fillable = [
        'name',
        'status'
    ];
}
