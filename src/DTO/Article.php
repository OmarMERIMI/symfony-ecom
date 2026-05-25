<?php

namespace App\DTO;

class Article
{
    public function __construct(
        private string $title,
        private string $slug,
        private string $excerpt,
        private string $content,
        private string $authorName,
        private string $category,
        private string $publishedAt,
        private int    $readTime,
        private string $imagePath,
        private int    $likes = 0,
        private string $tag = ''
    ) {}

    public function getTitle(): string      { return $this->title; }
    public function getSlug(): string       { return $this->slug; }
    public function getExcerpt(): string    { return $this->excerpt; }
    public function getContent(): string    { return $this->content; }
    public function getAuthorName(): string { return $this->authorName; }
    public function getCategory(): string   { return $this->category; }
    public function getPublishedAt(): string { return $this->publishedAt; }
    public function getReadTime(): int      { return $this->readTime; }
    public function getImagePath(): string  { return $this->imagePath; }
    public function getLikes(): int         { return $this->likes; }
    public function getTag(): string        { return $this->tag; }
}
