<?php

namespace App\Models;

use App\Traits\HasGender;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;
    use HasGender;

    protected $fillable = [
        'name',
        'age',
        'gender',
        'teacher_id'
    ];

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

    public function markLists(): HasMany
    {
        return $this->hasMany(Examination::class);
    }
}
