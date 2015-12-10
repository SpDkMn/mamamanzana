<?php

namespace App\Http\Requests\Products\Data;

use App\Http\Requests\Request;

class UpdateProductRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' = 'required|min:3',
            'description' => 'required|min:3',
            'short_description' => 'required|min:3',
            'cost' => 'required|numeric',
            'active' => 'required'
        ];
    }
}
