<?php

namespace App\Models;

use App\Traits\HasStore;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;
    use HasStore;

    protected $fillable = [
        'name'
    ];
}
