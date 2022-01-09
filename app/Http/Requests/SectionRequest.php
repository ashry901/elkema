<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'              => 'required',
            'description'       => 'required|max:1000',
            'short_description' => 'nullable|max:500',
            'slug'              => 'required|unique:categories,slug,'.$this->id,
            'photo'             => 'required_without:id|mimes:jpg,jpeg,png'
        ];
    }
}
