<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'      => 'required',
            'short_dis'  => 'required',
            'long_dis'   => 'required',
            'slug'       => 'required|unique:abouts,slug,'.$this->id,
            'photo'      => 'required_without:id|mimes:jpg,jpeg,png|max:1024'
        ];
    }
}
