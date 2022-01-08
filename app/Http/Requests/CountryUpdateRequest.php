<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CountryUpdateRequest extends FormRequest
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
            'name_ar' => ['required', Rule::unique('countries', 'name->ar')->ignore($this->country)],
            'name_en' => ['required', Rule::unique('countries', 'name->en')->ignore($this->country)],
            'status'  => ['required', Rule::in(['1', '0'])],
            'slug' => ['required', Rule::unique('countries', 'slug')->ignore($this->country)],
        ];
    }
}
