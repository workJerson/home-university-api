<?php

namespace App\Http\Requests\Program;

use Illuminate\Foundation\Http\FormRequest;

class CreateProgramRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
            ],
            'description' => [
                'nullable',
                'string',
            ],
            'status' => [
                'nullable',
                'numeric',
                'between:1,2',
            ],
        ];
    }
}
