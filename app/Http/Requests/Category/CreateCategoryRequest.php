<?php
namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|unique:categories',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The category name is required.',
            'name.string' => 'The category name must be a string.',
            'name.unique' => 'The category name has already been taken.',
        ];
    }
}