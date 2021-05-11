<?php

$name = hello();

$operands = ['+', '-', '*'];

line('What is the result of the expression?');
for ($i = 0; $i < 4; $i += 1) {
	$numberOne = rand(1, 50);
    $numberTwo = rand(1, 50);
    $operand = $operands[rand(0, 2)];
	$userAnswer = prompt("\n Question: {$numberOne} {$operand} {$numberTwo}");
	$correctAnswer = choseOperation($numberOne, $numberTwo, $operand);

    if ((int)$userAnswer === $correctAnswer) {
        print_r("Your answer: {$userAnswer} \n Corret!");
    } else {
        return wrongAnswer($name, $userAnswer, $correctAnswer);
    }

    if ($n === 3) {
    	print_r("\n Congratulations, {$name} \n");
    }
}

function choseOperation($numberOne,$numberTwo, $operand)
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