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
            'email_address' => [
                'required',
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
            'attachments' => 'sometimes|required|array',
            'attachments.*' => [
                'sometimes',
                'required',
                'mimes:pdf,jpg,jpeg,png,bmp',
                'max:4096',
            ],
        ];
    }
}
