<?php

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;

class CreateNewsRequest extends FormRequest
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
            'title' => [
                'required',
                'string',
            ],
            'header' => [
                'nullable',
                'string',
            ],
            'description' => [
                'required',
                'string',
            ],
            'image_path' => [
                'nullable',
                'mimes:jpg,jpeg,png,bmp',
                'max:4096',
            ],
            'news_category_id' => [
                'required',
                'numeric',
                'exists:news_categories,id',
            ],
            'created_by' => [
                'nullable',
                'numeric',
                'exists:users,id',
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
