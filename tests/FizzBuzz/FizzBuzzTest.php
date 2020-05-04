<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TddHandsOn\FizzBuzz\FizzBuzz;

/**
 * @group fizzBuzz
 */
class FizzBuzzTest extends TestCase
{
    /**
     * @dataProvider dataProviderFizzBuzz
     */
    public function testFizzBuzz_1(string $input, string $expected)
    {
        $result = FizzBuzz::execute($input);

        $this->assertEquals($expected, $result);
    }

    public function dataProviderFizzBuzz()
    {
        return [
            ['input' => '1', 'output' => '1'],
            ['input' => '2', 'output' => '2'],
            ['input' => '3', 'output' => 'Fizz'],
            ['input' => '4', 'output' => '4'],
            ['input' => '5', 'output' => 'Buzz'],
            ['input' => '6', 'output' => 'Fizz'],
            ['input' => '9', 'output' => 'Fizz'],
            ['input' => '10', 'output' => 'Buzz'],
            ['input' => '15', 'output' => 'FizzBuzz'],
        ];
    }
}
