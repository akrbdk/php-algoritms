<?php

declare(strict_types=1);

namespace Exercises\Palindrome;

/**
 * Palindrome is a string that equals itself when reversed.
 * Non-alpha chars must also be included.
 *
 * @example Palindrome::check('asddsa')  === true
 * @example Palindrome::check('asdd')  === false
 */
final class Palindrome
{
    public static function check(string $string): bool
    {
        return $string === implode(array_reverse(str_split($string)));
    }

    public static function check1(string $string): bool
    {
        $length = strlen($string);
        $half = $length / 2;

        for ($i = 0; $i < $half; ++$i) {
            if ($string[$i] !== $string[$length - $i - 1]) {
                return false;
            }
        }

        return true;
    }

    public static function check2(string $string): bool
    {
        $length = strlen($string);
        $isPalindrome = [];
        $chars = str_split($string);

        array_walk($chars, static function (
            $char,
            $key
        ) use (&$isPalindrome, $string, $length): void {
            if ($char !== $string[$length - $key - 1]) {
                $isPalindrome[] = false;
            }

            $isPalindrome[] = true;
        });

        return !in_array(false, $isPalindrome, true);
    }

    public static function check3(string $string): bool
    {
        $reversed = '';
        $length = strlen($string);
        for ($i = 0; $i < $length; ++$i) {
            $reversed = $string[$i] . $reversed;
        }
        if ($string === $reversed) {
            return true;
        }

        return false;
    }
}
