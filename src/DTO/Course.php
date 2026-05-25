<?php

namespace App\DTO;

class Course
{
    private string $name;
    private float $price;
    private string $summary;
    private string $description;
    private Author $author;
    private Category $category;
    private string $slug;
    private string $imagePath;
    private float $rating;
    private int $studentsCount;
    private string $duration;
    private string $level;
    private string $badge;

    public function __construct(
        string $name,
        float $price,
        string $summary,
        string $description,
        Author $author,
        Category $category,
        string $slug,
        string $imagePath,
        float $rating = 0.0,
        int $studentsCount = 0,
        string $duration = '',
        string $level = 'Tous niveaux',
        string $badge = ''
    ) {
        $this->name = $name;
        $this->price = $price;
        $this->summary = $summary;
        $this->description = $description;
        $this->author = $author;
        $this->category = $category;
        $this->slug = $slug;
        $this->imagePath = $imagePath;
        $this->rating = $rating;
        $this->studentsCount = $studentsCount;
        $this->duration = $duration;
        $this->level = $level;
        $this->badge = $badge;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }

    public function getSummary(): string
    {
        return $this->summary;
    }

    public function setSummary(string $summary): self
    {
        $this->summary = $summary;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getAuthor(): Author
    {
        return $this->author;
    }

    public function setAuthor(Author $author): self
    {
        $this->author = $author;
        return $this;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function setCategory(Category $category): self
    {
        $this->category = $category;
        return $this;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;
        return $this;
    }

    public function getImagePath(): string
    {
        return $this->imagePath;
    }

    public function setImagePath(string $imagePath): self
    {
        $this->imagePath = $imagePath;
        return $this;
    }

    public function getRating(): float { return $this->rating; }
    public function getStudentsCount(): int { return $this->studentsCount; }
    public function getDuration(): string { return $this->duration; }
    public function getLevel(): string { return $this->level; }
    public function getBadge(): string { return $this->badge; }
}
