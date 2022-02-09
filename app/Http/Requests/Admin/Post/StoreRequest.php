<?php

namespace App\Http\Requests\Admin\Post;

use App\Contracts\Post\CreatePostModelInterface;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\UploadedFile;
use Illuminate\Validation\Rules\Exists;

class StoreRequest extends FormRequest implements CreatePostModelInterface
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
            'title' => ['required', 'string'],
            'content' => ['required', 'string'],
            'preview_image' => ['required', 'file'],
            'category_id' => ['nullable', 'array'],
            'category_id.*' => ['nullable', 'integer', new Exists('categories', 'id')]
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

    public function getPostContent(): string
    {
        return $this->input('content');
    }

    public function getPostPreviewImage(): UploadedFile
    {
        return $this->file('preview_image');
    }

    public function getCategoryIds(): ?array
    {
        return $this->input('category_id');
    }
}
