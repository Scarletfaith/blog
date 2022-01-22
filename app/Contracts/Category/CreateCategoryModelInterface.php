<?php

declare(strict_types=1);

namespace App\Contracts\Category;

interface CreateCategoryModelInterface
{
    public function getSlug(): ?string;

    public function getTitle(): string;
}