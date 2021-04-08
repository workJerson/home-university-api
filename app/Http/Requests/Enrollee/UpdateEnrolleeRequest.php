<?php

namespace App\Http\Requests\Enrollee;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEnrolleeRequest extends FormRequest
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
            'enrollment_status' => [
                'nullable',
                'numeric',
                'between:0,1',
            ],
        ];
    }
}
