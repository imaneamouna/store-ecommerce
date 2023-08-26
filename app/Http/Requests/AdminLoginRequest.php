<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminLoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => "required|email",
            'password' => "required",
        ];
    }

    public function messages()
    {
        //return parent::messages(); //TODO CAHNGE THE AUTAGENEEATRED STUB // i do override to this method
        return [
            'email.required'=>'يجب ادخال الايميل',
            'email.email'=>'تنسيق البريد الإلكتروني غير صحيح',
            'password.required'=>'يجب ادخال كلمه المرور',

        ];
    }
}
