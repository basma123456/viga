<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SubCategoryUpdateRequest extends FormRequest
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
            'name'      => ['required', Rule::unique('sub_categories', 'name')->ignore($this->sub_category)],
            'slug'      => ['required',Rule::unique('sub_categories', 'slug')->ignore($this->sub_category)],
            'priority'  =>  ['required','regex:/^[0-9]+$/',Rule::unique('sub_categories', 'priority')->ignore($this->sub_category)],
            'meta_desc' => 'required',
            'seo'       => 'required',
            'status'    => ['required',Rule::in(['0','1'])],
            'category'  => 'required|exists:categories,id',
        ];
    }
}
