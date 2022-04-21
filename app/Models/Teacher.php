<?php

namespace App\Models;

use App\Traits\HasGender;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    use HasGender;

    protected $fillable = [
        'name',
        'gender',
    ];

    protected $casts = [
        'gender'=>'bool'
    ];
}
