<?php

declare(strict_types=1);

namespace Exercises\Spiral;

/**
 * Create a spiral matrix of length * length.
 *
 * @example Spiral::make(3) === [
 *     [1, 2, 3],
 *     [8, 9, 4],
 *     [7, 6, 5]]
 */
final class Spiral
{
    /** @return array<array<number>> */
    public static function make(int $length): array
    {
        $results = [];

        $columnStart = 0;
        $columnEnd = $length - 1;
        $rowStart = 0;
        $rowEnd = $length - 1;
        $counter = 1;

        while ($columnStart <= $columnEnd && $rowStart <= $rowEnd) {
            for ($column = $columnStart; $column <= $columnEnd; ++$column) {
                $results[$rowStart][$column] = $counter;
                ++$counter;
            }
            ++$rowStart;

            for ($row = $rowStart; $row <= $rowEnd; ++$row) {
                $results[$row][$columnEnd] = $counter;
                ++$counter;
            }
            --$columnEnd;

            for ($column = $columnEnd; $column >= $columnStart; --$column) {
                $results[$rowEnd][$column] = $counter;
                ++$counter;
            }
            --$rowEnd;

            for ($row = $rowEnd; $row >= $rowStart; --$row) {
                $results[$row][$columnStart] = $counter;
                ++$counter;
            }
            ++$columnStart;
        }

        return $results;
    }
}
