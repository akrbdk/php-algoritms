<?php

declare(strict_types=1);

namespace Tests\Capitalize;

use Exercises\Capitalize\Capitalize;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class CapitalizeTest extends TestCase
{
    public function testCapitalizeFirst1(): void
    {
        self::assertSame('Hello There', Capitalize::get1('hello there'));
    }

    public function testCapitalizeFirst2(): void
    {
        self::assertSame(
            "Hey, So It's Working!",
            Capitalize::get1("hey, so it's working!")
        );
    }

    public function testCapitalizeSecond1(): void
    {
        self::assertSame('Hello There', Capitalize::get2('hello there'));
    }

    public function testCapitalizeSecond2(): void
    {
        self::assertSame(
            "Hey, So It's Working!",
            Capitalize::get2("hey, so it's working!")
        );
    }
}
