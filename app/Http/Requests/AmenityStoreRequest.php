<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AmenityStoreRequest extends FormRequest
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
           'name_ar' => 'required|unique:amenities,name->ar',
           'name_en' => 'required|unique:amenities,name->en',
           'status'  => ['required', Rule::in(['1','0'])],
           'icon'    =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
