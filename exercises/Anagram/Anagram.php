<?php

declare(strict_types=1);

namespace Exercises\Anagram;

/**
 * Two strings are anagrams if same characters are used in both.
 * Only case-insensitive characters, not spaces or punctuation should be counted.
 *
 * @example Anagram::check('rail safety', 'fairy tales') === true
 * @example Anagram::check('roast beef', 'goat roast') === false
 * @example Anagram::check('Elvis, 'lives') === true
 */
final class Anagram
{
    public static function check(string $first, string $second): bool
    {
        $first = self::normalizeAndSort($first);
        $second = self::normalizeAndSort($second);

        return $first === $second;
    }

    private static function normalizeAndSort(string $string): string
    {
        $chars = str_split(preg_replace('#\W#', '', strtolower($string)));
        sort($chars);

        return implode($chars);
    }
}
