<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminLoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email'     => 'required|email',
            'password'  => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email.required'    => 'Please enter email',
            'email.email'       => 'Email is invalid',
            'password.required' => 'Please enter password'
        ];
    }
}
