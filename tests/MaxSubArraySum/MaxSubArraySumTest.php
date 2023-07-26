<?php

declare(strict_types=1);

namespace Tests\MaxSubArraySum;

use Exercises\MaxSubArraySum\MaxSubArraySum;
use PHPUnit\Framework\TestCase;


final class MaxSubArraySumTest extends TestCase
{
    public function testHasMethods(): void
    {
        self::assertTrue(
            method_exists(MaxSubArraySum::class, 'max1'),
            'Class does not have static method max1'
        );
        self::assertTrue(
            method_exists(MaxSubArraySum::class, 'max2'),
            'Class does not have static method max2'
        );
    }

    public function testMax1(): void
    {
        self::assertSame(5, MaxSubArraySum::max1([1, 2, 3], 2));
        self::assertSame(
            19,
            MaxSubArraySum::max1([2, 6, 9, 2, 1, 8, 5, 6, 3], 3)
        );
        self::assertSame(0, MaxSubArraySum::max1([1, 2, 3], 5));
    }

    public function testMax2(): void
    {
        self::assertSame(5, MaxSubArraySum::max2([1, 2, 3], 2));
        self::assertSame(
            19,
            MaxSubArraySum::max2([2, 6, 9, 2, 1, 8, 5, 6, 3], 3)
        );
        self::assertSame(0, MaxSubArraySum::max1([1, 2, 3], 5));
    }
}
