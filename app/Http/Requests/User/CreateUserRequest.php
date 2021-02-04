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
            'regcode' => [
                'required',
                'numeric',
                'exists:regions,regcode',
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

        // Student
        if ($this->get('account_type') == 4) {
            $rules['program_id'] = [
                'required',
                'numeric',
                'exists:programs,id',
            ];
            $rules['course_id'] = [
                'required',
                'numeric',
                'exists:courses,id',
            ];
            $rules['school_id'] = [
                'required',
                'numeric',
                'exists:schools,id',
            ];
            $rules['years_in_government'] = [
                'required',
                'string',
            ];
            $rules['position'] = [
                'required',
                'string',
            ];
            $rules['current_employment'] = [
                'required',
                'string',
            ];
        }

        return $rules;
    }
}
