<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CityStoreRequest extends FormRequest
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
            'name_ar'       => 'required|unique:cities,name->ar',
            'name_en'       => 'required|unique:cities,name->en',
            'slug'          => 'required|unique:cities,slug',
            'meta_desc'     => 'required',
            'seo'           => 'required',
            'status'        => ['required',Rule::in(['0','1'])],
            'thumbnail'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'banner'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'country'       => 'required|exists:countries,id',
            'latitude'     => 'required|numeric|between:-90,90',
            'longitude'      => 'required|numeric|between:-180,180',
        ];
    }
}
