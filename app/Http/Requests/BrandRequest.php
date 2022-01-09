<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'  => 'required',
            'slug'  => 'required|unique:brands,slug,'.$this->id,
            'photo' => 'required_without:id|mimes:jpg,jpeg,png|max:1024'
        ];


    }

    public function messages()
    {
        return [
            //'Marble' => 'Marble',
        ];
    }
}
