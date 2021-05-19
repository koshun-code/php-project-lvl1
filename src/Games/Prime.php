<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Cli\primeCheck;
use function BrainGames\Engine\engine;

const DESCRIPTION = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";

function getData()
{
    $result = [];
    for ($i = 0; $i < 3; $i += 1) {
        $question = rand(0, 100);
        $answer = (primeCheck($question)) ? 'yes' : 'no';
        $result[] = [$question, $answer];
    }
    return $result;
}
function brainPrime()
{
    $data = getData();
    engine(DESCRIPTION, $data);
}
