<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterStoreWebRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'                       => 'required',
            'city'                       => 'required|exists:cities,id',
            'governorate'                => 'required|exists:governorates,id',
            'phone_number'               => 'required|regex:/^[0-9]+$/|min:10|max:11',
            'other_phone_number'         => 'sometimes|nullable|regex:/^[0-9]+$/|min:10|max:11',
            'address'                    => 'required',
            'email'                      => 'required|unique:customers,email',
            'password'                   => 'required|min:6|max:10',
        ];
    }
}
