<?php

declare(strict_types=1);

namespace App\Contracts\Post;

use Illuminate\Http\UploadedFile;

interface CreatePostModelInterface
{
    public function getSlug(): ?string;

    public function getTitle(): string;

    public function getPostContent(): string;

    public function getPostPreviewImage(): UploadedFile;

    public function getCategoryIds(): ?array;
}
