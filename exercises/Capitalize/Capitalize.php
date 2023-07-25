<?php

declare(strict_types=1);

namespace Exercises\Capitalize;

/**
 * Capitalize each word.
 *
 * @example Capitalize::get('hello there') === 'Hello There'
 * @example Capitalize::get("hey, so it's working!") === "Hey, So It's Working!"
 */
final class Capitalize
{
    public static function get1(string $string): string
    {
        return ucwords($string);
    }

    public static function get2(string $string): string
    {
        $slices = array_map(
            static function ($slice) {
                return strtoupper($slice[0]) . substr($slice, 1);
            },
            explode(' ', $string)
        );

        return implode(' ', $slices);
    }
}
