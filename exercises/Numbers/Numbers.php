<?php

declare(strict_types=1);

namespace Exercises\Numbers;

/**
 * add numbers from 1 up to $n including.
 *
 * @example Numbers::add(3) === 6
 */
final class Numbers
{
    public static function add1(int $n): int
    {
        return $n * ($n + 1) / 2;
    }

    public static function add2(int $n): int
    {
        $total = 0;

        for ($i = 1; $i <= $n; ++$i) {
            $total += $i;
        }

        return $total;
    }
}
