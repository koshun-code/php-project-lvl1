<?php

namespace BrainGames\Games\Even;

use function BrainGames\Cli\isEven;
use function BrainGames\Engine\engine;

const DESCRIPTION = "Answer \"yes\" if the number is even, otherwise answer \"no\".";

function getData(): array
{
    $result = [];
    for ($i = 0; $i < 3; $i += 1) {
        $randNumber = rand(1, 100);
        $question = $randNumber;
        $answer = isEven($randNumber) ? 'yes' : 'no';
        $result[] = [$question, $answer];
    }
    return $result;
}

function brainEven(): bool
{
    $data = getData();
    return engine(DESCRIPTION, $data);
}
