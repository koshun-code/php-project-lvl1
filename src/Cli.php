<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function hello(): string
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function isEven(int $number): bool
{
    return 0 === $number % 2;
}

function gcd(int $num1, int $num2): int
{
    return ($num1 % $num2) ? gcd($num2, $num1 % $num2) : $num2;
}

function getRandNum(int $inNum): array
{
    $arrNums = explode(' ', trim($inNum));
    $count = sizeof($arrNums);
    $rand = rand(1, $count - 2);
    $res = '';
    $output = [];
    for ($i = 0; $i < $count; $i += 1) {
        if ($i === $rand) {
            $res .= ' .. ';
        } else {
            $res .= " {$arrNums[$i]} ";
        }
    }
    return [$res, $arrNums[$rand]];
}

function setProgression(int $start, int $len, int $step): string
{
    $result = [];
    for ($i = 0; $i < $len; $i += 1) {
        $result[] =  $start + $step * $i;
    }
    return implode(' ', $result);
}

function primeCheck(int $number): bool
{
    if ($number === 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i += 1) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function choseOperation(int $numberOne, int $numberTwo, string $operand): int
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
