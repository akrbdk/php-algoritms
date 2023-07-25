<?php

declare(strict_types=1);

namespace Tests\Fibonacci;

use Exercises\Fibonacci\Fibonacci;
use PHPUnit\Framework\TestCase;

final class FibonacciTest extends TestCase
{
    public function testGet0th(): void
    {
        self::assertSame(0, Fibonacci::get1(0));
    }

    public function testGet1th(): void
    {
        self::assertSame(1, Fibonacci::get1(1));
    }

    public function testGet2th(): void
    {
        self::assertSame(1, Fibonacci::get1(2));
    }

    public function testGet3th(): void
    {
        self::assertSame(2, Fibonacci::get1(3));
    }

    public function testGet4th(): void
    {
        self::assertSame(3, Fibonacci::get1(4));
    }

    public function testGet20th(): void
    {
        self::assertSame(6765, Fibonacci::get1(20));
    }

    public function testGet0thRecursive(): void
    {
        self::assertSame(0, Fibonacci::get2(0));
    }

    public function testGet1thRecursive(): void
    {
        self::assertSame(1, Fibonacci::get2(1));
    }

    public function testGet2thRecursive(): void
    {
        self::assertSame(1, Fibonacci::get2(2));
    }

    public function testGet3thRecursive(): void
    {
        self::assertSame(2, Fibonacci::get2(3));
    }

    public function testGet4thRecursive(): void
    {
        self::assertSame(3, Fibonacci::get2(4));
    }

    public function testGet20thRecursive(): void
    {
        self::assertSame(6765, Fibonacci::get2(20));
    }

    public function testGet0thRecursiveMemoized(): void
    {
        self::assertSame(0, Fibonacci::get3(0));
    }

    public function testGet1thRecursiveMemoized(): void
    {
        self::assertSame(1, Fibonacci::get3(1));
    }

    public function testGet2thRecursiveMemoized(): void
    {
        self::assertSame(1, Fibonacci::get3(2));
    }

    public function testGet3thRecursiveMemoized(): void
    {
        self::assertSame(2, Fibonacci::get3(3));
    }

    public function testGet4thRecursiveMemoized(): void
    {
        self::assertSame(3, Fibonacci::get3(4));
    }

    public function testGet20thRecursiveMemoized(): void
    {
        self::assertSame(6765, Fibonacci::get3(20));
    }
}
