<?php

namespace App\Http\Requests;

use App\Services\Gender;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreTeacherRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:35'],
            'gender' => ['required', Rule::in(Gender::keys())]
        ];
    }

}
