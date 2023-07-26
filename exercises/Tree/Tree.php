<?php

declare(strict_types=1);

namespace Exercises\Tree;

/**
 * Create a Tree.
 *
 * Methods traverseBreadthFirst and traverseDepthFirst should call
 * provided callback on each tree Node.
 *
 * Method levelWidth when given the root node of a tree should return
 * an array where each element is the width of the tree at respective level.
 *      0
 *    / | \
 *  1   2  3
 *  |      |
 *  4      5
 * ===
 *  [1, 3, 2]
 *
 */
final class Tree
{
    private const SENTINEL = 'SENTINEL';
    /** @var Node|null */
    public $root = null;

    /** @param callable $callback node data will be passed as the only argument */
    public function traverseBreadthFirst(callable $callback): void
    {
        $current = $this->root;
        $queue = [];

        while ($current) {
            array_push($queue, ...$current->children);
            $callback($current->data);
            $current = array_shift($queue);
        }
    }

    /** @param callable $callback node data will be passed as the only argument */
    public function traverseDepthFirst(callable $callback): void
    {
        $current = $this->root;
        $queue = [];

        while ($current) {
            array_unshift($queue, ...$current->children);
            $callback($current->data);
            $current = array_shift($queue);
        }
    }

    /** @return int[] each respective tree level width */
    public static function levelWidth(Node $root): array
    {
        $level = 0;
        $widths = [0];

        $queue = [$root, self::SENTINEL];

        while (count($queue) > 1) {
            $current = array_shift($queue);

            if ($current === self::SENTINEL) {
                $widths[++$level] = 0;
                $queue[] = self::SENTINEL;
            } else {
                array_push($queue, ...$current->children);
                ++$widths[$level];
            }
        }

        return $widths;
    }
}
