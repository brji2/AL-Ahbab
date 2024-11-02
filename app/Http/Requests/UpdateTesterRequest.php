<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTesterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // dd($this);
        return [
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'username' => ['sometimes', 'required', 'string', 'max:255', Rule::unique('people', 'username')->ignore($this->person_id)],
            'birth_day' => ['sometimes', 'required', 'date'],
            'phone' => ['sometimes', 'required', 'string', 'max:255'],
            'sex' => ['sometimes', 'required'],
            'address'   => ['sometimes', 'required', 'string', 'max:255'],
            'IsMarried' => ['sometimes', 'required'],
            'institute_id' => 'sometimes',
            // 'institute_id' => ['exists:institutes,id'],
        ];
    }
}
