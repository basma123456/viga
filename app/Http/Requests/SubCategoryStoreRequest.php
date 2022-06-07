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
            'name'      => 'required|unique:sub_categories,name',
            'category'  => 'required|exists:categories,id',
            'slug'      => 'required|unique:sub_categories,slug',
            'seo'       => 'required|min:2',
            'meta_desc' => 'required',
            'status'    => ['required',Rule::in(['0','1'])],
            'priority'  => 'required|regex:/^[0-9]+$/|unique:sub_categories,priority',
        ];
    }
}
