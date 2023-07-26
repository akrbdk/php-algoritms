<?php

declare(strict_types=1);

namespace Tests\Pyramid;

use Exercises\Pyramid\Pyramid;
use PHPUnit\Framework\TestCase;


final class PyramidTest extends TestCase
{
    public function testPrintLadder(): void
    {
        $this->expectOutputString('#');
        Pyramid::print1(1);
    }

    public function testPrintLadder1(): void
    {
        $this->expectOutputString(' # ###');
        Pyramid::print1(2);
    }

    public function testPrintLadder2(): void
    {
        $this->expectOutputString('    #       ###     #####   ####### #########');
        Pyramid::print1(5);
    }

    public function testPrintLadderRecursive(): void
    {
        $this->expectOutputString('#');
        Pyramid::print2(1);
    }

    public function testPrintLadderRecursive1(): void
    {
        $this->expectOutputString(' # ###');
        Pyramid::print2(2);
    }

    public function testPrintLadderRecursive2(): void
    {
        $this->expectOutputString('    #       ###     #####   ####### #########');
        Pyramid::print2(5);
    }
}
