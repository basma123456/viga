<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryStoreRequest extends FormRequest
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
            'name_ar'           => 'required|unique:categories,name->ar',
            'name_en'           => 'required|unique:categories,name->en',
            'slug'              => 'required|unique:categories,slug',
            'meta_desc'         => 'required',
            'seo'               => 'required',
            'priority'          => 'required|regex:/^[0-9]+$/',
            'feature'           => ['required',Rule::in(['0','1'])],
            'status'            => ['required',Rule::in(['0','1'])],
            'icon_map'          => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'icon_category'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'amenities'         => 'required|array',
            'amenities.*'       => 'exists:amenities,id',
        ];
    }
}
