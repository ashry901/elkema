<?php

namespace App\Http\Requests;

//use App\Http\Enumerations\CategoryType;
use Illuminate\Foundation\Http\FormRequest;

class GeneralProductRequest extends FormRequest
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
            //'slug' => 'required|unique:products,slug',
            'categories'        => 'array|min:1', //[]
            'categories.*'      => 'numeric|exists:categories,id',
            'tags'              => 'nullable',
            'brand_id'          => 'required|exists:brands,id'
        ];
    }

}
