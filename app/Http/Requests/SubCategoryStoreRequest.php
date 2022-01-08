<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SubCategoryStoreRequest extends FormRequest
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
            'name_en' => 'required|unique:sub_categories,name->en',
            'name_ar' => 'required|unique:sub_categories,name->ar',
            'slug' => 'required|unique:sub_categories,slug',
            'meta_desc' => 'required',
            'seo'   => 'required',
            'priority' => 'required|regex:/^[0-9]+$/',
            'feature' => ['required',Rule::in(['0','1'])],
            'status' => ['required',Rule::in(['0','1'])],
            'icon_map'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'icon_category'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'required|exists:categories,id',
        ];
    }
}