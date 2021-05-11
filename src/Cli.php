<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function hello()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function isEven($number)
{
    return 0 === $number % 2;
}

function wrongAnswer($name, $userAnswer, $correctAnswer)
{
    print_r("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.
        \n Let's try again, {$name}! \n");
}

function gcd($num1, $num2)
{
    return ($num1 % $num2) ? gcd($num2, $num1 % $num2) : $num2;
}

function getRandNum($inNum)
{
    $arrNums = explode(' ', trim($inNum));
    $count = sizeof($arrNums);
    $rand = rand(0, $count - 1);
    $res = '';
    $output = [];
    for ($i = 0; $i < $count; $i += 1) {
        if ($i === $rand) {
            $res .= ' ... ';
        } else {
            $res .= " {$arrNums[$i]} ";
        }
    }
    return [$res, $arrNums[$rand]];
}

function setProgression($number, $count, $step)
{
    $result = '';
    $rand = rand($number, $count);
    for ($i = $number; $i <= $count; $i += $step) {
        $result .=  (string)$i . ' ';
    }
    return $result;
}

function primeCheck($number)
{
    $res = '';
    if ($number === 1) {
        $res = 'no';
    }
    for ($i = 2; $i <= sqrt($number); $i += 1) {
        if ($number % $i === 0) {
            $res = 'no';
        }
    }
    $res = 'yes';
    return $res;
}

function choseOperation($numberOne, $numberTwo, $operand)
{
    switch ($operand) {
        case '-':
            $correctAnswer = $numberOne - $numberTwo;
            break;
        case '+':
            $correctAnswer = $numberOne + $numberTwo;
            break;
        case '*':
            $correctAnswer = $numberOne * $numberTwo;
            break;
    }
    return $correctAnswer;
}
