<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ProductQty;

class SliderImagesRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //'photo' => 'required_without:id|mimes:jpg,jpeg,png',
            'document'   => 'required|array|min:1',
            'document.*' => 'required|string',
        ];
    }
}
