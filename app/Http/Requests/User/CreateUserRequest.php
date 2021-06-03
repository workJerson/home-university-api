<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'email' => [
                'required',
                'email',
                'unique:users',
            ],
            'first_name' => [
                'required',
                'string',
            ],
            'last_name' => [
                'required',
                'string',
            ],
            'middle_name' => [
                'nullable',
                'string',
            ],
            'address' => [
                'required',
                'string',
            ],
            'birth_date' => [
                'sometimes',
                'string',
            ],
            'contact_number' => [
                'sometimes',
                'string',
                'min:11',
                'max:11',
            ],
            'regCode' => [
                'required',
                'numeric',
                'exists:regions,regCode',
            ],
            'provCode' => [
                'required',
                'numeric',
                'exists:provinces,provCode',
            ],
            'psgcCode' => [
                'required',
                'numeric',
                'exists:cities,psgcCode',
            ],
            'account_type' => [
                'required',
                'numeric',
                'between:1,4',
            ],
        ];

        return $rules;
    }
}
