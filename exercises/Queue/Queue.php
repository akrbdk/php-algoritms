<?php

declare(strict_types=1);

namespace Exercises\Queue;

/**
 * Create a Queue.
 *
 * When queue is empty remove and peek methods should return null.
 *
 * @example $queue1 = new Queue();
 * $queue1->add(1);
 * $queue1->add(2);
 * $queue1->add(3);
 * $queue1->peek() === 3;
 * $queue1->remove() === 3;
 *
 * $queue2 = new Queue();
 *
 * $queue1->add('a');
 * $queue1->add('b');
 * $queue1->add('c');
 *
 * Queue::zip(queue1, queue2) -> [1, 'a', 2, 'b', 'c']
 */
final class Queue
{
    /** @var mixed[] */
    private $queue = [];

    /** @param mixed $value */
    public function add($value): void
    {
        array_unshift($this->queue, $value);
    }

    /** @return mixed|null */
    public function remove()
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

    public static function zip(self $queue1, self $queue2): self
    {
        $new = new self();

        while ($queue1->peek() || $queue2->peek()) {
            $value1 = $queue1->remove();
            if ($value1) {
                $new->add($value1);
            }

            $value2 = $queue2->remove();
            if ($value2) {
                $new->add($value2);
            }
        }

        return $new;
    }
}
