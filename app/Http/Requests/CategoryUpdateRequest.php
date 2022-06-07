<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryUpdateRequest extends FormRequest
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
            'name'              => ['required', Rule::unique('categories', 'name')->ignore($this->category)],
            'slug'              => ['required',Rule::unique('categories', 'slug')->ignore($this->category)],
            'code_category'     => ['required', 'min:2' ,'max:10', Rule::unique('categories', 'category_code')->ignore($this->category)],
            'priority'          => ['required', Rule::unique('categories', 'priority')->ignore($this->category)],
            'meta_desc'         => 'required',
            'seo'               => 'required',
            'status'            => ['required',Rule::in(['0','1'])],
        ];
    }
}
