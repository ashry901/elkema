<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OptionsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|max:100',
            'price' => 'required|numeric|min:0',
            'product_id' => 'required|exists:products,id',
            'attribute_id' => 'required|exists:attributes,id',
        ];
    }

    public function messages()
    {
        return [
            'name.required'             => 'Please Enter Name',
            'price.required'            => 'Please Enter Price',
            'product_id.required'       => 'Please Enter Product',
            'attribute_id.required'     => 'Please Enter Attribute'
        ];
    }

}
