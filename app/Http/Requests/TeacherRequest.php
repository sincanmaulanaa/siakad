<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nip' => ['required', 'min:4'],
            'name' => ['required', 'min:4'],
            'gender' => ['required', 'min:4'],
            'address' => ['required', 'min:4'],
        ];
    }
}
