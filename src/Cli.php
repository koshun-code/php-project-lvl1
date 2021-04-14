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