<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CountryStoreRequest extends FormRequest
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
            'name_ar' => 'required|unique:countries,name->ar',
            'name_en' => 'required|unique:countries,name->en',
            'status'  => ['required', Rule::in(['1', '0'])],
            'slug' => 'required|unique:countries,slug'
        ];
    }
}