<?php

declare(strict_types=1);

namespace Exercises\Tree;

/**
 * Represents single item in a Tree.
 *
 */
final class Node
{
    /** @var Node[] */
    public $children = [];
    /** @var mixed */
    public $data;

    /** @param mixed $data */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /** @param mixed $data */
    public function add($data): void
    {
        $this->children[] = new self($data);
    }

    /** @param mixed $data */
    public function remove($data): void
    {
        $this->children = array_values(array_filter(
            $this->children,
            static function ($child) use ($data) {
                return $child->data !== $data;
            }
        ));
    }
}
