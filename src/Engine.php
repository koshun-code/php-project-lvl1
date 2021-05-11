<?php

namespace BrainGames\Engine;

use function BrainGames\Cli\hello;
use function BrainGames\Cli\wrongAnswer;
use function cli\line;
use function cli\prompt;

function engine(string $description, array $data)
{
	$name = hello();
	line($description);
	foreach ($data as [$question, $answer]) {
		line("Question: {$question}");
	    $userAnswer = prompt("Your answer: ");
	    if ($userAnswer === $answer) {
	    	line("Correct!");
	    } else {
	    	wrongAnswer($name, $userAnswer, $correctAnswer);
	    	return false;
	    }
	}
	line("Congratulations, {$name}");
	return true;
}