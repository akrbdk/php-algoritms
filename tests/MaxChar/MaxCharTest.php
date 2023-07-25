<?php

declare(strict_types=1);

namespace Tests\MaxChar;

use Exercises\MaxChar\MaxChar;
use PHPUnit\Framework\TestCase;


final class MaxCharTest extends TestCase
{
    public function testHasGet(): void
    {
        self::assertTrue(
            method_exists(MaxChar::class, 'get'),
            'Class does not have static method get'
        );
    }

    public function testGetSingleMaxChar(): void
    {
        self::assertSame('a', MaxChar::get('a'));
    }

    public function testGetMaxChar(): void
    {
        self::assertSame('q', MaxChar::get('qqweqrty'));
    }

    public function testGetMaxCharWithNumbers(): void
    {
        self::assertSame('2', MaxChar::get('apple 2202'));
    }

    public function testGet1SingleMaxChar(): void
    {
        self::assertSame('a', MaxChar::get1('a'));
    }

    public function testGet1MaxChar(): void
    {
        self::assertSame('q', MaxChar::get1('qqweqrty'));
    }

    public function testGet1MaxCharWithNumbers(): void
    {
        self::assertSame('2', MaxChar::get1('apple 2202'));
    }
}
