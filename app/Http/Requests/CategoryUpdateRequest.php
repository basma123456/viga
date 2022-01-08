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
            'name_en' => ['required', Rule::unique('categories', 'name->en')->ignore($this->category)],
            'name_ar' => ['required', Rule::unique('categories', 'name->ar')->ignore($this->category)],
            'slug' => ['required',Rule::unique('categories', 'slug')->ignore($this->category)],
            'meta_desc' => 'required',
            'seo'   => 'required',
            'priority' => 'required|regex:/^[0-9]+$/',
            'feature' => ['required',Rule::in(['0','1'])],
            'status' => ['required',Rule::in(['0','1'])],
            'icon_map'  => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'icon_category'  => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
