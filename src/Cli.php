<?php

namespace BrainGames\src;

  use function cli\line;
  use function cli\prompt;
/**
 * Make a greating
 *
 * @return greeentin
 */
function hello()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}
/**
 * Is Even or not
 *
 * @param [integer] $number [number]
 *
 * @return [bool]         [true or false]
 */
function isEven($number)
{
    return $number % 2 === 0 ? true : false;
}
/**
 * [wrongAnswer description]
 *
 * @param [string] $name          [description]
 *
 * @param [string] $userAnswer    [description]
 *
 * @param [string] $correctAnswer [description]
 *
 * @return [string]                [description]
 */
function wrongAnswer($name, $userAnswer, $correctAnswer)
{
    print_r("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.Let's try again, {$name}! \n");
}
/**
 *
 * @param [number] $num1
 *
 * @param [number] $num2
 *
 * @return [number]
 */
function gcd($num1, $num2)
{
    return ($num1 % $num2) ? gcd($num2, $num1 % $num2) : $num2;
}

/**
 *
 * @param $inNum [string] [progression of numbers]
 *
 * @return [string] [return string with closed one number]
 */
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
    $output[0] = $res;
    $output[1] = $arrNums[$rand];
    return $output;
}
/**
 *
 * @param $number [int] [start progression]
 *
 * @param $count [int] [finish progression]
 *
 * @param $step [int] [step use in progression]
 *
 * @return [string] [ retrun string progression]
 */
function setProgression($number, $count, $step)
{
    $result = '';
    $rand = rand($number, $count);
    for ($i = $number; $i <= $count; $i += $step) {
        $result .=  (string)$i . ' ';
    }
    return $result;
}
/**
 *
 *
 */
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