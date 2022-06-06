<?php

declare(strict_types=1);

namespace AwsDynamoDb\Domain\Entities;

final class Muvie extends Entity
{
    protected int $id;

    protected string $category;

    private string $titulo;

    private string $subTitulo;

    public function __construct(int $id, string $category, string $titulo, string $subTitulo)
    {
        $this->id = $id;
        $this->category = $category;
        $this->titulo = $titulo;
        $this->subTitulo = $subTitulo;
    }

    public function getClassName(): string
    {
        return 'Movie';
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getSubTitulo(): string
    {
        return $this->subTitulo;
    }
}
