<?php

declare(strict_types=1);

namespace Tests\Reverse;

use Exercises\Reverse\Reverse;
use PHPUnit\Framework\TestCase;


final class ReverseTest extends TestCase
{
    public function testCanReverseIntZero(): void
    {
        self::assertSame(0, Reverse::int(0));
    }

    public function testCanReverseInt(): void
    {
        self::assertSame(21, Reverse::int(12));
    }

    public function testCanReverseIntWithThreeDigits(): void
    {
        self::assertSame(321, Reverse::int(123));
    }

    public function testCanReverseIntZeros(): void
    {
        self::assertSame(3, Reverse::int(300));
    }

    public function testCanReverseIntNegative(): void
    {
        self::assertSame(-21, Reverse::int(-12));
    }

    public function testCanReverseIntNegativeWithZeros(): void
    {
        self::assertSame(-21, Reverse::int(-120));
    }

    public function testCanReverseIntZero2(): void
    {
        self::assertSame(0, Reverse::int2(0));
    }

    public function testCanReverseInt2(): void
    {
        self::assertSame(21, Reverse::int2(12));
    }

    public function testCanReverseIntWithThreeDigits2(): void
    {
        self::assertSame(321, Reverse::int2(123));
    }

    public function testCanReverseIntZeros2(): void
    {
        self::assertSame(3, Reverse::int2(300));
    }

    public function testCanReverseIntNegative2(): void
    {
        self::assertSame(-21, Reverse::int2(-12));
    }

    public function testCanReverseIntNegativeWithZeros2(): void
    {
        self::assertSame(-21, Reverse::int2(-120));
    }

    public function testCanReverseIntZero3(): void
    {
        self::assertSame(0, Reverse::int3(0));
    }

    public function testCanReverseInt3(): void
    {
        self::assertSame(21, Reverse::int3(12));
    }

    public function testCanReverseIntWithThreeDigits3(): void
    {
        self::assertSame(321, Reverse::int3(123));
    }

    public function testCanReverseIntZeros3(): void
    {
        self::assertSame(3, Reverse::int3(300));
    }

    public function testCanReverseIntNegative3(): void
    {
        self::assertSame(-21, Reverse::int3(-12));
    }

    public function testCanReverseIntNegativeWithZeros3(): void
    {
        self::assertSame(-21, Reverse::int3(-120));
    }

    public function testCanReverseString1(): void
    {
        self::assertSame('ytrewq', Reverse::string1('qwerty'));
    }

    public function testCanReverseStringWithWhitespace1(): void
    {
        self::assertSame('ytr ewq ', Reverse::string1(' qwe rty'));
    }

    public function testCanReverseString2(): void
    {
        self::assertSame('ytrewq', Reverse::string2('qwerty'));
    }

    public function testCanReverseStringWithWhitespace2(): void
    {
        self::assertSame('ytr ewq ', Reverse::string2(' qwe rty'));
    }

    public function testCanReverseString3(): void
    {
        self::assertSame('ytrewq', Reverse::string3('qwerty'));
    }

    public function testCanReverseStringWithWhitespace3(): void
    {
        self::assertSame('ytr ewq ', Reverse::string3(' qwe rty'));
    }

    public function testCanReverseString4(): void
    {
        self::assertSame('ytrewq', Reverse::string4('qwerty'));
    }

    public function testCanReverseStringWithWhitespace4(): void
    {
        self::assertSame('ytr ewq ', Reverse::string4(' qwe rty'));
    }

    public function testCanReverseString5(): void
    {
        self::assertSame('ytrewq', Reverse::string5('qwerty'));
    }

    public function testCanReverseStringWithWhitespace5(): void
    {
        self::assertSame('ytr ewq ', Reverse::string5(' qwe rty'));
    }
}
