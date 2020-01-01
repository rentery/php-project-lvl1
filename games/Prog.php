<?php

namespace BrainGames\Prog;

use function BrainGames\Cli\game;
use function BrainGames\Cli\welcome;

function prog()
{
    $gameRule = 'What number is missing in the progression?';
    $userName = welcome($gameRule);
    $progression = range(5, 23, 2);
    for ($i = 0; $i < 3; $i++) {
        $question = "";
        $char = array_rand($progression);
        $correctAnswers[] = $progression[$char];
        foreach ($progression as $key => $value) {
            if ($key == $char) {
                $question .= ".. ";
            } else {
                $question .= "{$value} ";
            }
        }
        $questions[] = trim($question);
    }
    $gameData = [$userName, $questions, $correctAnswers];
    game($gameData);
}