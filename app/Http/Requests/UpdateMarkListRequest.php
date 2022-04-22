<?php


namespace App\Http\Requests;


use App\Models\Subject;
use App\Models\Term;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateMarkListRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules()
    {
        return [
            'exam' => ['required', 'array'],
            'exam.*' => ['required', 'array'],
            'exam.*.subject_id' => ['required', Rule::exists(Subject::class, 'id')],
            'exam.*.term_id' => ['required', Rule::exists(Term::class, 'id')],
            'exam.*.min_mark' => ['required', 'numeric'],
            'exam.*.max_mark' => ['required', 'numeric', 'gt:exam.*.min_mark'],
            'exam.*.mark' => ['required', 'numeric', 'lte:exam.*.max_mark'],
        ];
    }

    public function attributes(): array
    {
        return [
            'exam.*.min_mark' => 'Min Mark',
            'exam.*.max_mark' => 'Max Mark',
            'exam.*.student_id' => 'Student',
            'exam.*.subject_id' => 'Subject',
            'exam.*.term_id' => 'Term',
        ];
    }
}
