<?php

declare(strict_types=1);

namespace Exercises\ArrayGroup;

/**
 * Divide the array into many sub-arrays,
 * where each subarray is at most group size.
 *
 * @example ArrayGroup::group([1, 2, 3, 4, 5], 2) -> [[ 1, 2], [3, 4], [5]]
 * @example ArrayGroup::group([1, 2, 3, 4, 5], 3) -> [[ 1, 2, 3], [4, 5]]
 * @example ArrayGroup::group([1, 2, 3, 4, 5], 6) -> [[ 1, 2, 3, 4, 5]]
 */
final class ArrayGroup
{
    /**
     * @param mixed[] $array
     *
     * @return mixed[]
     */
    public static function group(array $array, int $size): array
    {
        $grouped = [];

        for ($i = 0, $iMax = count($array); $i < $iMax; $i += $size) {
            $grouped[] = array_slice($array, $i, $size);
        }

        return $grouped;
    }

    /**
     * @param mixed[] $array
     *
     * @return mixed[]
     */
    public static function group1(array $array, int $size): array
    {
        $grouped = [];
        $last = count($array) - 1;

        $tmp = [];
        foreach ($array as $i => $iValue) {
            $tmp[] = $iValue;

            if ($i === $last) {
                $grouped[] = $tmp;
            } elseif (count($tmp) === $size) {
                $grouped[] = $tmp;
                $tmp = [];
            }
        }

        return $grouped;
    }

    /**
     * @param mixed[] $array
     *
     * @return mixed[]
     */
    public static function group2(array $array, int $size): array
    {
        return array_chunk($array, $size);
    }
}
