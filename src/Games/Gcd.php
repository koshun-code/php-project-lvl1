<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Cli\gcd;
use function BrainGames\Engine\engine;

const DESCRIPTION = "Find the greatest common divisor of given numbers.";

function getData()
{
    $result = [];
    for ($i = 0; $i <= 3; $i += 1) {
        $num1 = rand(0, 100);
        $num2 = rand(0, 100);
        $question = "{$num1} {$num2}";
        $answer = gcd($num1, $num2);
        $result[] = [$question, $answer];
    }
    return $result;
}
function brainGCD()
{
    $data = getData();
    engine(DESCRIPTION, $data);
}
