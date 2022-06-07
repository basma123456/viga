<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PriceStoreRequest extends FormRequest
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
            'price'     => 'required|unique:prices,name|regex:/^[0-9]+$/',
            'status'    => 'required|boolean',
        ];
    }
}
