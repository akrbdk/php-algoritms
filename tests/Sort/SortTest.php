<?php

declare(strict_types=1);

namespace Tests\Sort;

use Exercises\Sort\Sort;
use PHPUnit\Framework\TestCase;
use ReflectionException;
use Tests\GetReflectionMethod;


final class SortTest extends TestCase
{
    use GetReflectionMethod;

    /** @var int[] */
    private $input = [220, -32, 405, -114, 0, 23, 5, -1];
    /** @var int[] */
    private $sorted = [-114, -32, -1, 0, 5, 23, 220, 405];

    public function testHasMethods(): void
    {
        self::assertTrue(
            method_exists(Sort::class, 'bubble'),
            'Class does not have method bubble'
        );
        self::assertTrue(
            method_exists(Sort::class, 'selection'),
            'Class does not have method selection'
        );
        self::assertTrue(
            method_exists(Sort::class, 'insertion'),
            'Class does not have method insertion'
        );
        self::assertTrue(
            method_exists(Sort::class, 'merge'),
            'Class does not have method merge'
        );
        self::assertTrue(
            method_exists(Sort::class, 'merger'),
            'Class does not have method merger'
        );
        self::assertTrue(
            method_exists(Sort::class, 'quick1'),
            'Class does not have method quick1'
        );
        self::assertTrue(
            method_exists(Sort::class, 'quick2'),
            'Class does not have method quick2'
        );
        self::assertTrue(
            method_exists(Sort::class, 'radix'),
            'Class does not have method radix'
        );
    }

    public function testBubbleSort(): void
    {
        self::assertSame($this->sorted, Sort::bubble($this->input));
    }

    public function testSelectionSort(): void
    {
        self::assertSame($this->sorted, Sort::selection($this->input));
    }

    public function testInsertionSort(): void
    {
        self::assertSame($this->sorted, Sort::insertion($this->input));
    }

    /** @throws ReflectionException */
    public function testMergerHelper(): void
    {
        $left = [1, 9];
        $right = [3, 7, 10];

        $merger = self::getMethod(Sort::class, 'merger');

        self::assertSame([1, 3, 7, 9, 10], $merger->invoke(null, $left, $right));
    }

    public function testMergeSort(): void
    {
        self::assertSame($this->sorted, Sort::merge($this->input));
    }

    public function testQuick1Sort(): void
    {
        self::assertSame($this->sorted, Sort::quick1($this->input));
    }

    public function testQuick2Sort(): void
    {
        Sort::quick2($this->input);
        self::assertSame($this->sorted, $this->input);
    }

    public function testRadixSort(): void
    {
        self::assertSame([ 12, 23, 345, 2345, 5467, 9852 ], Sort::radix([23, 345, 5467, 12, 2345, 9852]));
    }
}
