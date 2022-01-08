<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CityUpdateRequest extends FormRequest
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
            'name_ar'       => ['required',  Rule::unique('cities', 'name->ar')->ignore($this->city)],
            'name_en'       => ['required',  Rule::unique('cities', 'name->en')->ignore($this->city)],
            'slug'          => ['required',  Rule::unique('cities', 'slug')->ignore($this->city)],
            'meta_desc'     => 'required',
            'seo'           => 'required',
            'status'        => ['required',Rule::in(['0','1'])],
            'thumbnail'     => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'banner'        => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'country'       => 'required|exists:countries,id',
            'latitude'     => 'required|numeric|between:-90,90',
            'longitude'      => 'required|numeric|between:-180,180',
        ];
    }
}
