<?php

declare(strict_types=1);

namespace Exercises\QueueFromStacks;

use Exercises\Stack\Stack;

/**
 * Create a Queue using two Stacks.
 *
 * When queue is empty remove and peek methods should return null.
 *
 */
final class QueueFromStacks
{
    /** @var Stack () */
    private $storage;
    /** @var Stack () */
    private $temporary;

    public function __construct()
    {
        $this->storage = new Stack();
        $this->temporary = new Stack();
    }

    /** @param mixed $value */
    public function add($value): void
    {
        $this->storage->push($value);
    }

    /** @return mixed|null */
    public function remove()
    {
        while ($this->storage->peek()) {
            $this->temporary->push($this->storage->pop());
        }

        $item = $this->temporary->pop();

        while ($this->temporary->peek()) {
            $this->storage->push($this->temporary->pop());
        }

        return $item;
    }

    /** @return mixed|null */
    public function peek()
    {
        while ($this->storage->peek()) {
            $this->temporary->push($this->storage->pop());
        }

        $item = $this->temporary->peek();

        while ($this->temporary->peek()) {
            $this->storage->push($this->temporary->pop());
        }

        return $item;
    }
}
