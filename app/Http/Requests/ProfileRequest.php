<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            "name" => "required|max:30",
            "address" => "required",
            "phone" => "required",
            "password" => "required",
            "national_id" => "required",
        ];
    }
    public function messages()
    {
        return [
            'address.required'     => __('address required'),
            'name.required'        => __('name required'),
            'name.max'             => __('max num of string is 30 chars'),
            'phone.required'       => __('phone required'),
            'password.required'    => __('password required'),
            'national_id.required' => __('national_id required'),

        ];
    }
}
