<?php

namespace BrainGames\Engine;

use function BrainGames\Cli\hello;
use function cli\line;
use function cli\prompt;

function engine(string $description, array $data): bool
{
    $name = hello();
    line($description);
    foreach ($data as [$question, $answer]) {
        line("Question: {$question}");
        $userAnswer = prompt("Your answer ");
        if ($userAnswer == $answer) {
            line("Correct!");
        } else {
            print_r("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$answer}'.
            \n Let's try again, {$name}! \n");
            return false;
        }
    }
    line("Congratulations, {$name}!");
    return true;
}
