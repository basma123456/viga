<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SettingsUpdateRequest extends FormRequest
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
           'title'      => ['required'],
           'vision'     => ['required'],
           'email'     => ['required'],
           'phone'     => ['required'],
           'location'     => ['required'],
           'facebook'     => ['required'],
           'twitter'     => ['required'],
           'instgram'     => ['required'],
        ];
    }
}
