<?php

declare(strict_types=1);

namespace AwsDynamoDb\Domain\Entities;

final class Movie extends Entity
{
    protected int $id;

    protected string $category;

    private string $title;

    private string $caption; //subtitulo

    public function __construct(int $id, string $category, string $title, string $caption)
    {
        $this->id = $id;
        $this->category = $category;
        $this->title = $title;
        $this->caption = $caption;
    }

    public function getClassName(): string
    {
        return 'Movie';
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getCaption(): string
    {
        return $this->caption;
    }
}
