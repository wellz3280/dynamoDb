<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

/**
 * @covers Tests\ExampleTest
 */
final class ExampleTest extends TestCase
{
    public function testExample(): void
    {
        $hello = 'Hello World';
        self::assertEquals('Hello World', $hello);
    }
}