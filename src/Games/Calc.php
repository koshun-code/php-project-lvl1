<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Cli\choseOperation;
use function BrainGames\Engine\engine;

const OPERANDS = ['+', '-', '*'];
const DESCRIPTION = "Answer \"yes\" if the number is even, otherwise answer \"no\".";

function getData()
{
    $result = [];
    for ($i = 0; $i < 4; $i += 1) {
        $numberOne = rand(1, 50);
        $numberTwo = rand(1, 50);
        $operand = OPERANDS[rand(0, 2)];
        $question = "{$numberOne} {$operand} {$numberTwo}";
        $answer = choseOperation($numberOne, $numberTwo, $operand);
        $result[] = [$question, $answer];
    }
    return $result;
}

function brainCalc()
{
    $data = getData();
    engine(DESCRIPTION, $data);
}
