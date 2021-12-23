<?php

namespace App\Http\Requests;

use App\Http\Enumerations\CategoryType;
use Illuminate\Foundation\Http\FormRequest;

class ProductPriceValidation extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'product_id'          => 'required|exists:products,id',
            'price'               => 'required|min:0|numeric',
            'special_price'       => 'nullable|numeric',
            'special_price_type'  => 'required_with:special_price|in:fixed,percent',
            'special_price_start' => 'required_with:special_price|date_format:Y-m-d',
            'special_price_end'   => 'required_with:special_price|date_format:Y-m-d'
        ];
    }

}
