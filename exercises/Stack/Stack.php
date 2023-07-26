<?php

declare(strict_types=1);

namespace Exercises\Stack;

/**
 * Create a Stack.
 *
 * When stack is empty pop and peek methods should return null.
 *
 * @example $queue = new Stack();
 * $queue->push(1);
 * $queue->push(2);
 * $queue->peek() === 1;
 * $queue->pop() === 1;
 */
final class Stack
{
    /** @var mixed[] */
    private $queue = [];

    /** @param mixed $value */
    public function push($value): void
    {
        $this->queue[] = $value;
    }

    /** @return mixed|null */
    public function pop()
    {
        return array_pop($this->queue);
    }

    /** @return mixed|null */
    public function peek()
    {
        return count($this->queue)
            ? $this->queue[array_key_last($this->queue)]
            : null;
    }
}
