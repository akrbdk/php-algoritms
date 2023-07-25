<?php

declare(strict_types=1);

namespace Exercises\Events;

/**
 * Create an event system similar to one used in jQuery.
 *
 */
final class Events
{
    /** @var array<string, callable> */
    private $events = [];

    public function on(string $event, callable $callback): void
    {
        if (array_key_exists($event, $this->events)) {
            $this->events[$event][] = $callback;
        } else {
            $this->events[$event] = [$callback];
        }
    }

    public function fire(string $event): void
    {
        if (array_key_exists($event, $this->events)) {
            /** @var callable $callback */
            foreach ($this->events[$event] as $callback) {
                $callback();
            }
        }
    }

    public function off(string $event): void
    {
        unset($this->events[$event]);
    }
}
