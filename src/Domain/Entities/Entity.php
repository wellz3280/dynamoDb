<?php

declare(strict_types=1);

namespace AwsDynamoDb\Domain\Entities;

abstract class Entity
{
    protected int $id;
    protected string $category;

    abstract function getClassName(): string;

    public function getId(): int
    {
        return $this->id;
    }

    public function getCategory():string
    {
        return $this->category;
    }
}