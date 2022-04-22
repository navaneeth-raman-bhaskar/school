<?php

namespace App\Http\Requests;

use App\Models\Examination;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Term;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

class StoreExaminationRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'student_id' => ['required', Rule::exists(Student::class, 'id')],
            'subject_id' => ['required', Rule::exists(Subject::class, 'id')],
            'term_id' => ['required', Rule::exists(Term::class, 'id')],
            'min_mark' => ['required', 'numeric'],
            'max_mark' => ['required', 'numeric', 'gt:min_mark'],
            'mark' => ['required', 'numeric', 'lte:max_mark'],
        ];
    }

    public function attributes(): array
    {
        return [
            'min_mark' => 'Min Mark',
            'max_mark' => 'Max Mark',
            'student_id' => 'Student',
            'subject_id' => 'Subject',
            'term_id' => 'Term',
        ];
    }

    public function withValidator(Validator $validator)
    {
        $validator->after(
            function ($validator) {
                if (!$validator->errors()->isEmpty()) {
                    return;
                }
                $exists = Examination::where('id', '!=', $this->route('examination'))
                    ->whereStudentIdAndSubjectIdAndTermId($this->student_id, $this->subject_id, $this->term_id)->exists();
                if ($exists) {
                    $validator->errors()->add(
                        'student_id',
                        'Student Has already attempted this examination'
                    );
                }
            });
    }
}
