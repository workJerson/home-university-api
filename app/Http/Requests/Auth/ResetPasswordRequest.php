<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|between:8,20'
                .'|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d.*)(?=.*\S.*)\S*$/',
        ];
    }
    public function messages()
    {
        return [
            'password.regex' => 'Password must have at least one uppercase letter, one lowercase letter, one number and one special character.',
        ];
    }
}
