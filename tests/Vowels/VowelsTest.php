<?php

declare(strict_types=1);

namespace Tests\Vowels;

use Exercises\Vowels\Vowels;
use PHPUnit\Framework\TestCase;


final class VowelsTest extends TestCase
{

    public function testCanCount1(): void
    {
        self::assertSame(5, Vowels::count1('abcdefghijklmnopqrstuvwxyz'));
    }

    public function testCanCountAllUpper1(): void
    {
        self::assertSame(5, Vowels::count1('AEIOU'));
    }

    public function testCanCountOnly1(): void
    {
        self::assertSame(5, Vowels::count1('aeiou'));
    }

    public function testCanCountNone1(): void
    {
        self::assertSame(0, Vowels::count1('bcdfghjkl'));
    }

    public function testCanCount2(): void
    {
        self::assertSame(5, Vowels::count2('abcdefghijklmnopqrstuvwxyz'));
    }

    public function testCanCountAllUpper2(): void
    {
        self::assertSame(5, Vowels::count2('AEIOU'));
    }

    public function testCanCountOnly2(): void
    {
        self::assertSame(5, Vowels::count2('aeiou'));
    }

    public function testCanCountNone2(): void
    {
        self::assertSame(0, Vowels::count2('bcdfghjkl'));
    }

    public function testCanCount3(): void
    {
        self::assertSame(5, Vowels::count3('abcdefghijklmnopqrstuvwxyz'));
    }

    public function testCanCountAllUpper3(): void
    {
        self::assertSame(5, Vowels::count3('AEIOU'));
    }

    public function testCanCountOnly3(): void
    {
        self::assertSame(5, Vowels::count3('aeiou'));
    }

    public function testCanCountNone3(): void
    {
        self::assertSame(0, Vowels::count3('bcdfghjkl'));
    }
}
