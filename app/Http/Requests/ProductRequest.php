<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'              => 'required|max:100',
            'description'       => 'required|max:1000',
            'short_description' => 'nullable|max:500',
            'slug'              => 'required|unique:products,slug,'.$this->id,
        ];
    }
}
