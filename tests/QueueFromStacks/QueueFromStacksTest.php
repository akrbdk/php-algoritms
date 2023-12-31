<?php

declare(strict_types=1);

namespace Tests\QueueFromStack;

use Exercises\QueueFromStacks\QueueFromStacks;
use PHPUnit\Framework\TestCase;


final class QueueFromStacksTest extends TestCase
{
    /** @var QueueFromStacks */
    private $queue;

    protected function setUp(): void
    {
        $this->queue = new QueueFromStacks();
    }

    public function testHasMethods(): void
    {
        self::assertTrue(
            method_exists(QueueFromStacks::class, 'add'),
            'Class does not have method add'
        );
        self::assertTrue(
            method_exists(QueueFromStacks::class, 'remove'),
            'Class does not have method remove'
        );
        self::assertTrue(
            method_exists(QueueFromStacks::class, 'peek'),
            'Class does not have method peek'
        );
    }

    public function testCanCreateObject(): void
    {
        self::assertIsObject($this->queue);
    }

    public function testCanAdd(): void
    {
        $this->queue->add(1);
        $this->queue->add(2);
        $this->queue->add(3);

        self::assertTrue(true);
    }

    public function testCanRemove(): void
    {
        $this->queue->add(1);
        $this->queue->add(2);
        $this->queue->add(3);

        self::assertSame(1, $this->queue->remove());
        self::assertSame(2, $this->queue->remove());
        self::assertSame(3, $this->queue->remove());
        self::assertNull($this->queue->remove());
    }

    public function testCanPeek(): void
    {
        self::assertNull($this->queue->peek());

        $this->queue->add(1);
        $this->queue->add(2);
        $this->queue->add(3);

        $this->queue->remove();
        $this->queue->add(1);

        self::assertSame(2, $this->queue->peek());
    }
}
