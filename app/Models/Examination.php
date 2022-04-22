<?php

namespace App\Models;

use App\Traits\HasStore;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Examination extends Pivot
{
    use HasStore;

    protected $fillable = [
        'student_id',
        'subject_id',
        'term_id',
        'mark',
        'min_mark',
        'max_mark',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function term(): BelongsTo
    {
        return $this->belongsTo(Term::class);
    }
}
