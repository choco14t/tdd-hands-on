<?php

declare(strict_types=1);

namespace TddHandsOn\FizzBuzz;

class FizzBuzz
{
    public function convert(int $num): string
    {
        if ($num % 15 === 0) {
            return 'FizzBuzz';
        }
        if ($num % 3 === 0) {
            return 'Fizz';
        }
        if ($num % 5 === 0) {
            return 'Buzz';
        }
        return strval($num);
    }
}
