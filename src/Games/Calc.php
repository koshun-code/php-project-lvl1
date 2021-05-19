<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Cli\choseOperation;
use function BrainGames\Engine\engine;

const OPERANDS = ['+', '-', '*'];
const DESCRIPTION = "What is the result of the expression?";

function getData(): array
{
    $result = [];
    for ($i = 0; $i < 3; $i += 1) {
        $numberOne = rand(1, 50);
        $numberTwo = rand(1, 50);
        $operand = OPERANDS[rand(0, 2)];
        $question = "{$numberOne} {$operand} {$numberTwo}";
        $answer = choseOperation($numberOne, $numberTwo, $operand);
        $result[] = [$question, $answer];
    }
    return $result;
}

function brainCalc(): bool
{
    $data = getData();
    return engine(DESCRIPTION, $data);
}
