<?php

namespace TddHandsOn\IssueFactory;

class IssueFactory
{
    public static function create(string $question, string $answer): string
    {
        $template = "%s\n\n### Answer\n%s";

        return sprintf($template, self::formatQuestion($question), $answer);
    }

    public static function formatQuestion(string $question)
    {
        $quotedQuestion = str_replace("\n", "\n> ", $question);

        return "### Question\n> " . $quotedQuestion;
    }
}
