<?php

namespace App\Http\Requests\Menus;

use App\Http\Requests\Request;

class UpdateMenuRequest extends Request
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
            'name' => 'required|min:3',
            'order' => 'required|numeric|unique:menu,order'
        ];
    }
}