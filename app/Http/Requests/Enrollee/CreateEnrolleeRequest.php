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
                'nullable',
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
            // 'zip' => [
            //     'nullable',
            //     'string',
            // ],
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
                'nullable',
                'string',
            ],
            'registration_code' => [
                'nullable',
                'string',
            ],
            // 'professional_license' => [
            //     'nullable',
            //     'string',
            // ],
            'years_in_government' => [
                'required',
                'numeric',
            ],
            'profile_picture' => [
                'nullable',
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
            // 'hs_year_graduated' => [
            //     'required',
            //     'string',
            // ],
            // 'hs_address' => [
            //     'required',
            //     'string',
            // ],

            // College
            'college_name' => [
                'nullable',
                'string',
            ],
            // 'college_year_graduated' => [
            //     'nullable',
            //     'string',
            // ],
            // 'college_address' => [
            //     'nullable',
            //     'string',
            // ],

            // Masters
            'masters_name' => [
                'nullable',
                'string',
            ],
            // 'masters_year_graduated' => [
            //     'nullable',
            //     'string',
            // ],
            // 'masters_address' => [
            //     'nullable',
            //     'string',
            // ],
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'First Name is required.',
            'last_name.required' => 'Last Name is required.',
            'middle_name.required' => 'Middle Name is required.',
            'birth_date.required' => 'Birth Date is required.',
            'contact_number.required' => 'Contact Number is required.',
            'regCode.required' => 'Region is required.',
            'provCode.required' => 'Province is required.',
            'psgcCode.required' => 'City is required.',
            'current_employment.required' => 'Current Employer is required.',
            'program_id.required' => 'Program is required.',
            'course_id.required' => 'Course is required.',
            'years_in_government.required' => 'Years in service is required.',
            'attachments.required' => 'TOR/Form 137 attachment is required.',
            'hs_name.required' => 'High School name is required.',
        ];
    }
}
