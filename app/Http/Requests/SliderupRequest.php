<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderupRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'description' => 'required',
            'slug' => 'required|unique:sliderups,slug,'.$this->id,
            'picture' => 'required_without:id|mimes:jpg,jpeg,png|max:1999'
        ];
    }
}
