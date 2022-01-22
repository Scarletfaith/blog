<?php

declare(strict_types=1);

namespace App\Contracts\Post;

interface EditPostModelInterface
{
    public function getSlug(): ?string;

    public function getTitle(): string;

    public function getPostContent(): string;

    public function getPostPreviewImage(): ?object;

    public function getCategoryIds(): ?array;
}