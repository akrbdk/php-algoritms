<?php

declare(strict_types=1);

namespace Exercises\MaxChar;

/**
 * Find the most used character.
 *
 * @example MaxChar::get('qqweqrty')  === 'q'
 * @example MaxChar::get('apple 2202')  === '2'
 */
final class MaxChar
{
    public static function get(string $string): string
    {
        $map = [];

        foreach (str_split($string) as $char) {
            if (isset($map[$char])) {
                ++$map[$char];
            } else {
                $map[$char] = 1;
            }
        }

        $max = '';
        $freqMax = 0;

        foreach ($map as $char => $freq) {
            if ($freq <= $freqMax) {
                continue;
            }

            $max = $char;
            $freqMax = $freq;
        }

        return (string) $max;
    }

    public static function get1(string $string): string
    {
        $array = [];
        for ($i = 0; $i < strlen($string); ++$i) {
            if (isset($array[$string[$i]])) {
                ++$array[$string[$i]];
            } else {
                $array[$string[$i]] = 1;
            }
        }

        arsort($array);
        $max = array_keys($array)[0];

        return (string) $max;
    }
}
