<?php

declare(strict_types=1);

namespace Tests\Ladder;

use Exercises\Ladder\Ladder;
use PHPUnit\Framework\TestCase;

final class LadderTest extends TestCase
{
    /** @var string */
    private string $expectedString1;
    /** @var string */
    private string $expectedString2;
    /** @var string */
    private string $expectedString5;

    /**
     * @param null $name
     * @param array $data
     * @param string $dataName
     */
    public function __construct($name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->expectedString1 = sprintf('#%s', PHP_EOL);
        $this->expectedString2 = sprintf('# %s##%s', PHP_EOL, PHP_EOL);
        $this->expectedString5 = sprintf(
            '#    %s##   %s###  %s#### %s#####%s',
            PHP_EOL,
            PHP_EOL,
            PHP_EOL,
            PHP_EOL,
            PHP_EOL
        );
    }

    public function testPrint11(): void
    {
        $this->expectOutputString($this->expectedString1);
        Ladder::print1(1);
    }

    public function testPrint12(): void
    {
        $this->expectOutputString($this->expectedString2);
        Ladder::print1(2);
    }

    public function testPrint15(): void
    {
        $this->expectOutputString($this->expectedString5);
        Ladder::print1(5);
    }

    public function testPrint21(): void
    {
        $this->expectOutputString($this->expectedString1);
        Ladder::print2(1);
    }

    public function testPrint22(): void
    {
        $this->expectOutputString($this->expectedString2);
        Ladder::print2(2);
    }

    public function testPrint25(): void
    {
        $this->expectOutputString($this->expectedString5);
        Ladder::print2(5);
    }

    public function testPrint31(): void
    {
        $this->expectOutputString($this->expectedString1);
        Ladder::print3(1);
    }

    public function testPrint32(): void
    {
        $this->expectOutputString($this->expectedString2);
        Ladder::print3(2);
    }

    public function testPrint35(): void
    {
        $this->expectOutputString($this->expectedString5);
        Ladder::print3(5);
    }
}
