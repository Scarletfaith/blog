<?php

namespace App\Http\Requests\Admin\Category;

use App\Contracts\Category\EditCategoryModelInterface;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest implements EditCategoryModelInterface
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
            'slug' => ['nullable', 'string'],
            'title' => ['required', 'string']
        ];
    }

    public function getSlug(): ?string
    {
        return $this->input('slug');
    }

    public function getTitle(): string
    {
        return $this->input('title');
    }
}
