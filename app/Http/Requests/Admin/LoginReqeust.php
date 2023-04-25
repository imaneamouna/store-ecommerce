<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LoginReqeust extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'Email' => 'required|email',
            'Password' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'Email.required' => 'البريد الإلكتروني مطلوب.',
            'Email.email' => 'ادخل عنوان بريد إلكتروني صالح.',
            'Password.required' => 'كلمة المرور مطلوبة.'
        ];
    }
}
