<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AmenityUpdateRequest extends FormRequest
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
            'name_ar' => ['required', Rule::unique('amenities', 'name->ar')->ignore($this->amenity)],
            'name_en' =>  ['required', Rule::unique('amenities', 'name->en')->ignore($this->amenity)],
            'status'  => ['required', Rule::in(['1','0'])],
            'icon'    =>  'sometimes|nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
