<?php

declare(strict_types=1);

namespace Tests\Search;

use Exercises\Search\Search;
use PHPUnit\Framework\TestCase;


final class SearchTest extends TestCase
{
    public function testHasMethods(): void
    {
        self::assertTrue(
            method_exists(Search::class, 'linear'),
            'Class does not have static method linear'
        );
        self::assertTrue(
            method_exists(Search::class, 'binary'),
            'Class does not have static method binary'
        );
    }

    public function testLinear(): void
    {
        self::assertSame(
            5,
            Search::linear([34, 51, 1, 2, 3, 45, 56, 687], 45)
        );
        self::assertNull(
            Search::linear([34, 51, 1, 2, 3, 45, 56, 687], 100)
        );
        self::assertNull(Search::linear([], 100));
    }

    public function testBinary(): void
    {
        self::assertSame(
            5,
            Search::binary([34, 51, 1, 2, 3, 45, 56, 687], 45)
        );
        self::assertNull(
            Search::binary([34, 51, 1, 2, 3, 45, 56, 687], 100)
        );
        self::assertNull(Search::binary([], 100));
    }

    public function testNaive(): void
    {
        self::assertSame(3, Search::naive('ox mox pox', 'ox'));
        self::assertSame(0, Search::naive('ox mox pox', 'box'));
    }
}
