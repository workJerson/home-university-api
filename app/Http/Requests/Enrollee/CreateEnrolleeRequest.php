<?php

namespace App\Http\Requests\Enrollee;

use Illuminate\Foundation\Http\FormRequest;

class CreateEnrolleeRequest extends FormRequest
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
            'primary_email' => [
                'required',
                'email',
            ],
            'secondary_email' => [
                'sometimes',
                'email',
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
                'required',
                'string',
            ],
            'birth_date' => [
                'required',
                'string',
            ],
            'contact_number' => [
                'required',
                'string',
            ],
            'address' => [
                'required',
                'string',
            ],
            'zip' => [
                'required',
                'string',
            ],
            'regCode' => [
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
            'current_employment' => [
                'required',
                'string',
            ],
            'position' => [
                'required',
                'string',
            ],
            'program_id' => [
                'required',
                'numeric',
                'exists:programs,id',
            ],
            'course_id' => [
                'required',
                'numeric',
                'exists:courses,id',
            ],
            'age' => [
                'required',
                'numeric',
            ],
            'department' => [
                'sometimes',
                'string',
            ],
            'registration_code' => [
                'sometimes',
                'string',
            ],
            'professional_license' => [
                'sometimes',
                'string',
            ],
            'years_in_government' => [
                'required',
                'string',
            ],
            'profile_picture' => [
                'sometimes',
                'required',
                'mimes:jpg,jpeg,png,bmp',
                'max:4096',
            ],
            'attachments' => 'sometimes|required|array',
            'attachments.*' => [
                'sometimes',
                'required',
                'mimes:pdf,jpg,jpeg,png,bmp',
                'max:4096',
            ],

            // School details
            'hs_name' => [
                'required',
                'string',
            ],
            'hs_year_graduated' => [
                'required',
                'string',
            ],
            'hs_address' => [
                'required',
                'string',
            ],

            // College
            'college_name' => [
                'sometimes',
                'string',
            ],
            'college_year_graduated' => [
                'sometimes',
                'string',
            ],
            'college_address' => [
                'sometimes',
                'string',
            ],

            // Masters
            'masters_name' => [
                'sometimes',
                'string',
            ],
            'masters_year_graduated' => [
                'sometimes',
                'string',
            ],
            'masters_address' => [
                'sometimes',
                'string',
            ],
        ];
    }
}
