<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductStoreRequest extends FormRequest
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
            'dimensions' => 'required',
            'title'      => 'required',
            'images'    =>
            [
                'required',
                //'image',
                //'mimes:' . config('setting.image.allow_extensions'),
                'max:' . config('setting.image.size')
            ],
            'materials'         => 'required',
            'code'              => 'required',
            'color'             => 'required',
            'description'       => 'required',
            'estimated_delivery'  => 'required',
            'price'             => 'required',
            'status'             => 'required',
            'discount'          => 'sometimes|nullable|regex:/^[0-9]+$/',
            'discount_type'     => ['required_if:discount,!=,NULL', Rule::in(['percentage', 'fixed'])],
            'category_id'          => ['required','exists:categories,id'],
            'subcategory'      => ['sometimes','nullable','exists:sub_categories,id'],
            'product_type'      => ['required', Rule::in(['best_selling','hot_offers', 'recommended','new','default','special'])]
        ];
    }
}
