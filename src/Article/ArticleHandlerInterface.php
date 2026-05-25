<?php

namespace App\Article;

use App\DTO\Article;

interface ArticleHandlerInterface
{
    /** @return Article[] */
    public function fetchAll(): array;

    public function findBySlug(string $slug): ?Article;

    /** @return Article[] */
    public function findRelated(Article $article, int $limit = 3): array;
}
