<?php

namespace App\Http\Requests;

use App\Models\Teacher;
use App\Services\Gender;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreStudentRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:35'],
            'age' => ['required', 'integer'],
            'teacher_id' => ['required', Rule::exists(Teacher::class, 'id')],
            'gender' => ['required', Rule::in(Gender::keys())]
        ];
    }

    public function attributes(): array
    {
        return [
            'teacher_id' => 'Teacher in charge'
        ];
    }
}
