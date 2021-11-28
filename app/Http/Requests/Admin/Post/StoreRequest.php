<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'slug' => 'nullable|string',
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'required|file',
            'category_id' => 'nullable|array',
            'category_id.*' => 'nullable|integer|exists:categories,id'
        ];
    }
}
