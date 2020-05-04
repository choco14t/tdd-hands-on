<?php

use PHPUnit\Framework\TestCase;
use TddHandsOn\IssueFactory\IssueFactory;

/**
 * @group issueFactory
 */
class IssueFactoryTest extends TestCase
{
    public function testCreate()
    {
        $result = IssueFactory::create('質問', '回答');

        $this->assertEquals(
            $expected = "### Question\n> 質問\n\n### Answer\n回答",
            $result
        );
    }

    public function testCreateMultiLine()
    {
        $result = IssueFactory::create("質問\n2行目", '回答');
        $expected = "### Question\n> 質問\n> 2行目\n\n### Answer\n回答";

        $this->assertEquals($expected, $result);
    }

    public function testCreateMultiLineAnswer()
    {
        $result = IssueFactory::create("質問", "回答\n2行目");
        $expected = "### Question\n> 質問\n\n### Answer\n回答\n2行目";

        $this->assertEquals($expected, $result);
    }

    /**
     * @dataProvider dataProviderFormatQuestion
     */
    public function testFormatQuestion(string $question, string $expected)
    {
        $result = IssueFactory::formatQuestion($question);

        $this->assertEquals($expected, $result);
    }

    public function dataProviderFormatQuestion()
    {
        return [
            '1行の質問' => ['question' => '質問', 'expected' => "### Question\n> 質問"],
            '2行の質問' => ['question' => "質問\n2行目", 'expected' => "### Question\n> 質問\n> 2行目"],
            '3行の質問' => ['question' => "質問\n2行目\n3行目", 'expected' => "### Question\n> 質問\n> 2行目\n> 3行目"],
        ];
    }
}
