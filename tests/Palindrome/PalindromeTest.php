<?php

declare(strict_types=1);

namespace Tests\Palindrome;

use Exercises\Palindrome\Palindrome;
use PHPUnit\Framework\TestCase;


final class PalindromeTest extends TestCase
{
    public function testFafIsPalindrome(): void
    {
        self::assertTrue(Palindrome::check('faf'));
    }

    public function testFafSpaceIsNotAPalindrome(): void
    {
        self::assertFalse(Palindrome::check('faf '));
    }

    public function testSpaceFafIsNotAPalindrome(): void
    {
        self::assertFalse(Palindrome::check(' faf'));
    }

    public function testHelloIsNotAPalindrome(): void
    {
        self::assertFalse(Palindrome::check('hello'));
    }

    public function test11211IsAPalindrome(): void
    {
        self::assertTrue(Palindrome::check('11211'));
    }

    public function testDogSpaceGodIsNotAPalindrome(): void
    {
        self::assertFalse(Palindrome::check('Dog god'));
    }

    public function testDeifiedIsAPalindrome(): void
    {
        self::assertTrue(Palindrome::check('deified'));
    }

    public function testFafIsPalindrome1(): void
    {
        self::assertTrue(Palindrome::check1('faf'));
    }

    public function testFafSpaceIsNotAPalindrome1(): void
    {
        self::assertFalse(Palindrome::check1('faf '));
    }

    public function testSpaceFafIsNotAPalindrome1(): void
    {
        self::assertFalse(Palindrome::check1(' faf'));
    }

    public function testHelloIsNotAPalindrome1(): void
    {
        self::assertFalse(Palindrome::check1('hello'));
    }

    public function test11211IsAPalindrome1(): void
    {
        self::assertTrue(Palindrome::check1('11211'));
    }

    public function testDogSpaceGodIsNotAPalindrome1(): void
    {
        self::assertFalse(Palindrome::check1('Dog god'));
    }

    public function testDeifiedIsAPalindrome1(): void
    {
        self::assertTrue(Palindrome::check1('deified'));
    }

    public function testFafIsPalindrome2(): void
    {
        self::assertTrue(Palindrome::check2('faf'));
    }

    public function testFafSpaceIsNotAPalindrome2(): void
    {
        self::assertFalse(Palindrome::check2('faf '));
    }

    public function testSpaceFafIsNotAPalindrome2(): void
    {
        self::assertFalse(Palindrome::check2(' faf'));
    }

    public function testHelloIsNotAPalindrome2(): void
    {
        self::assertFalse(Palindrome::check2('hello'));
    }

    public function test11211IsAPalindrome2(): void
    {
        self::assertTrue(Palindrome::check2('11211'));
    }

    public function testDogSpaceGodIsNotAPalindrome2(): void
    {
        self::assertFalse(Palindrome::check2('Dog god'));
    }

    public function testDeifiedIsAPalindrome2(): void
    {
        self::assertTrue(Palindrome::check2('deified'));
    }

    public function testFafIsPalindrome3(): void
    {
        self::assertTrue(Palindrome::check3('faf'));
    }

    public function testFafSpaceIsNotAPalindrome3(): void
    {
        self::assertFalse(Palindrome::check3('faf '));
    }

    public function testSpaceFafIsNotAPalindrome3(): void
    {
        self::assertFalse(Palindrome::check3(' faf'));
    }

    public function testHelloIsNotAPalindrome3(): void
    {
        self::assertFalse(Palindrome::check3('hello'));
    }

    public function test11211IsAPalindrome3(): void
    {
        self::assertTrue(Palindrome::check3('11211'));
    }

    public function testDogSpaceGodIsNotAPalindrome3(): void
    {
        self::assertFalse(Palindrome::check3('Dog god'));
    }

    public function testDeifiedIsAPalindrome3(): void
    {
        self::assertTrue(Palindrome::check3('deified'));
    }
}
