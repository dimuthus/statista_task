<?php

use PHPUnit\Framework\TestCase;
use App\Controller\FizzBuzzController;

class NumberDivisionUnitTest extends TestCase
{
    private $fizzBuzzController;

    public function test_print_fizzbuzz()
    {
        $this->fizzBuzzController = new FizzBuzzController;
        $this->assertEquals('FizzBuzz', $this->fizzBuzzController->printFizzBuzz(30));
    }
    public function test_print_fizz()
    {
        $this->fizzBuzzController = new FizzBuzzController;
        $this->assertEquals('Fizz', $this->fizzBuzzController->printFizzBuzz(6));
    }
    public function test_print_buzz()
    {
        $this->fizzBuzzController = new FizzBuzzController;
        $this->assertEquals('Buzz', $this->fizzBuzzController->printFizzBuzz(10));
    }
}
