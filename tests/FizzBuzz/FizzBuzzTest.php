<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TddHandsOn\FizzBuzz\FizzBuzz;

/**
 * @group fizzBuzz
 */
class FizzBuzzTest extends TestCase
{
    private $fizzBuzz;

    protected function setUp(): void
    {
        parent::setUp();
        $this->fizzBuzz = new FizzBuzz();
    }

    /**
     * @test
     * @dataProvider dataProvider_3の倍数のときは数の代わりにFizzに変換する
     * @param $expected
     * @param $num
     */
    public function _3の倍数のときは数の代わりにFizzに変換する($expected, $num)
    {
        $this->assertEquals($expected, $this->fizzBuzz->convert($num));
    }

    public function dataProvider_3の倍数のときは数の代わりにFizzに変換する()
    {
        return [
            '3を渡すと文字列Fizzを返す' => ['Fizz', 3],
        ];
    }

    /**
     * @test
     * @dataProvider dataProvider_5の倍数のときは数の代わりにBuzzに変換する
     * @param $expected
     * @param $num
     */
    public function _5の倍数のときは数の代わりにBuzzに変換する($expected, $num)
    {
        $this->assertEquals($expected, $this->fizzBuzz->convert($num));
    }

    public function dataProvider_5の倍数のときは数の代わりにBuzzに変換する()
    {
        return [
            '5を渡すと文字列Buzzを返す' => ['Buzz', 5],
        ];
    }

    /**
     * @test
     * @dataProvider dataProvider_15の倍数のときは数の代わりにBuzzに変換する
     * @param $expected
     * @param $num
     */
    public function _15の倍数のときは数の代わりにBuzzに変換する($expected, $num)
    {
        $this->assertEquals($expected, $this->fizzBuzz->convert($num));
    }

    public function dataProvider_15の倍数のときは数の代わりにBuzzに変換する()
    {
        return [
            '15を渡すと文字列FizzBuzzを返す' => ['FizzBuzz', 15],
        ];
    }

    /**
     * @test
     * @dataProvider dataProvider_その他の数のときはそのまま文字列に変換する
     */
    public function その他の数のときはそのまま文字列に変換する($expected, $num)
    {
        $this->assertEquals($expected, $this->fizzBuzz->convert($num));
    }

    public function dataProvider_その他の数のときはそのまま文字列に変換する()
    {
        return [
            '1を渡すと文字列1を返す' => ['1', 1],
        ];
    }
}
