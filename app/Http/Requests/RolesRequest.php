<?php

namespace App\Http\Requests;

use App\Rules\ProductQty;
use App\Rules\UniqueAttributeName;
use Illuminate\Foundation\Http\FormRequest;

class RolesRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'permissions' => 'required|array|min:1',
        ];
    }

}
