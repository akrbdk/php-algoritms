<?php

declare(strict_types=1);

namespace Tests\Spiral;

use Exercises\Spiral\Spiral;
use PHPUnit\Framework\TestCase;


final class SpiralTest extends TestCase
{
    public function testCanPrint1x1(): void
    {
        self::assertEquals([[1]], Spiral::make(1));
    }

    public function testCanPrint2x2(): void
    {
        self::assertEquals([[1, 2], [4, 3]], Spiral::make(2));
    }

    public function testCanPrint3x3(): void
    {
        self::assertEquals([
            [1, 2, 3],
            [8, 9, 4],
            [7, 6, 5],
        ], Spiral::make(3));
    }

    public function testCanPrint4x4(): void
    {
        self::assertEquals([
            [1, 2, 3, 4],
            [12, 13, 14, 5],
            [11, 16, 15, 6],
            [10, 9, 8, 7],
        ], Spiral::make(4));
    }
}
