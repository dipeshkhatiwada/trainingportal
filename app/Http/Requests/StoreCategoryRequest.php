<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'title'=>'required|unique:categories',
            'slug'=>'required|unique:categories',
            'rank'=>'required|integer|min:10|max:100',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'A title is required',
            'slug.required' => 'A slug is required',
        ];
    }
}
