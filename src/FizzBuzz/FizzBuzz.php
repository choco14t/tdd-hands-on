<?php

declare(strict_types=1);

namespace TddHandsOn\FizzBuzz;

class FizzBuzz
{
    public static function execute(string $i): string
    {
        if ($i % 15 === 0) {
            return 'FizzBuzz';
        }
        if ($i % 3 === 0) {
            return 'Fizz';
        }
        if ($i % 5 === 0) {
            return 'Buzz';
        }

        return strval($i);
    }
}
