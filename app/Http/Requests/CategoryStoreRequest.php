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
            'name'              => 'required|unique:categories,name',
            'slug'              => 'required|unique:categories,slug',
            'meta_desc'         => 'required',
            'seo'               => 'required',
            'status'            => ['required',Rule::in(['0','1'])],
            'has_child'         => ['required', Rule::in(['0',1])],
            'code_category'     => ['required', 'min:2' ,'max:10', 'unique:categories,category_code'],
            'priority'          => ['required', 'unique:categories,priority'],
        ];
    }
}
