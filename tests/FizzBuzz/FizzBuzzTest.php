<?php

declare(strict_types=1);

namespace Tests\FizzBuzz;

use Exercises\FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    public function testPrintFizzBuzz(): void
    {
        $this->expectOutputString('12fizz4buzzfizz78fizzbuzz11fizz1314fizzbuzz');
        FizzBuzz::print(15);
    }
}
