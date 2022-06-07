<?php

declare(strict_types=1);

namespace Tests\Domain\Entities;

use AwsDynamoDb\Domain\Entities\Movie;
use PHPUnit\Framework\TestCase;

/**
 * @covers AwsDynamoDb\Domain\Entities\Movie
 */
final class MovieTest extends TestCase
{
    /**
     * Should Instantiate Movie Entity
     * @dataProvider movieProvider
     * @test
     */
    public function ShouldInstantiateMovieEntity(int $id, string $category, string $title, string $caption): void
    {
        $movie = new Movie($id, $category, $title, $caption);

        self::assertSame($id, $movie->getId());
        self::assertSame($category, $movie->getCategory());
        self::assertSame($title, $movie->getTitle());
        self::assertSame($caption, $movie->getCaption());
    }

    /**
     * should instance movie static method
     * @dataProvider movieProvider
     * @test
    */
    public function shouldInstanceMovieStaticMethod(int $id, string $category, string $title, string $caption): void
    {
        $movie = Movie::fromArray([
            'id' => $id,
            'category' => $category,
            'title' => $title,
            'caption' => $caption,
        ]);

        self::assertSame($id, $movie->getId());
        self::assertSame($category, $movie->getCategory());
        self::assertSame($title, $movie->getTitle());
        self::assertSame($caption, $movie->getCaption());
    }

    public function movieProvider(): array
    {
    return [
            [1,'ação','avatar','pandora'],
        ];
    }
}