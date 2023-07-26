<?php

declare(strict_types=1);

namespace Tests\Numbers;

use Exercises\Numbers\Numbers;
use PHPUnit\Framework\TestCase;


final class NumbersTest extends TestCase
{
    public function testAdd1(): void
    {
        self::assertSame(6, Numbers::add1(3));
    }

    public function testAdd2(): void
    {
        self::assertSame(6, Numbers::add2(3));
    }
}
