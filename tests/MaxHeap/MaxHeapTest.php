<?php

declare(strict_types=1);

namespace Tests\MaxHeap;

use Exercises\MaxHeap\MaxHeap;
use PHPUnit\Framework\TestCase;


final class MaxHeapTest extends TestCase
{
    /** @var MaxHeap */
    private $heap;

    protected function setUp(): void
    {
        $this->heap = new MaxHeap();
    }

    public function testHasMethods(): void
    {
        self::assertTrue(
            method_exists(MaxHeap::class, 'insert'),
            'Class does not have method insert'
        );
        self::assertTrue(
            method_exists(MaxHeap::class, 'extractMax'),
            'Class does not have method extractMax'
        );
    }

    public function testCanInsertValuesInCorrectOrder(): void
    {
        $this->heap->insert(41);
        $this->heap->insert(39);
        $this->heap->insert(33);
        $this->heap->insert(18);
        $this->heap->insert(27);
        $this->heap->insert(12);
        $this->heap->insert(55);

        /**
         *         55
         *       /   \
         *     39     41
         *   /  \    /  \
         * 18   27  12  33.
         */
        self::assertSame([55, 39, 41, 18, 27, 12, 33], $this->heap->values);
    }

    public function testCanExtractMaxAndOrder(): void
    {
        $this->heap->insert(41);
        $this->heap->insert(39);
        $this->heap->insert(33);
        $this->heap->insert(18);
        $this->heap->insert(27);
        $this->heap->insert(12);
        $this->heap->insert(55);

        self::assertSame(55, $this->heap->extractMax());

        /**
         *         41
         *       /   \
         *     39     33
         *   /  \    /
         * 18   27  12.
         */
        self::assertSame([41, 39, 33, 18, 27, 12], $this->heap->values);
    }
}
