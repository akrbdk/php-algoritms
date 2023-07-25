<?php

declare(strict_types=1);

namespace Tests\Anagram;

use Exercises\Anagram\Anagram;
use PHPUnit\Framework\TestCase;

final class AnagramTest extends TestCase
{
    public function testCanCheckString1(): void
    {
        self::assertTrue(Anagram::check('rail safety', 'fairy tales'));
    }

    public function testCanCheckString2(): void
    {
        self::assertTrue(Anagram::check('Elvis', 'lives'));
    }

    public function testCanCheckString3(): void
    {
        self::assertFalse(Anagram::check('roast beef', 'goat roast'));
    }
}
