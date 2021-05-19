<?php

namespace BrainGames\Games\Progression;

//use function BrainGames\Cli\setProgression;
//use function BrainGames\Cli\getRandNum;
use function BrainGames\Engine\engine;

const DESCRIPTION = "What number is missing in the progression?";
define('LENGTH', 10);

function generateProgression($startProgression, $diffProgression, $length)
{
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[$i] = $startProgression + $diffProgression * $i;
    }
    return $progression;
}
/*
function getData()
{
    $result = [];
    for ($i = 0; $i < 3; $i += 1) {
        $start = rand(1, 10);
        $len = 10;
        $step = 2;
        $progression = setProgression($start, $len, $step);
        $result[] = getRandNum($progression);
    }
    return $result;
}
*/
function getData()
{
    $questionsAnsewrs = [];
    for ($i = 1; $i < 3; $i++) {
        $startProgression = mt_rand(1, 20);
        $diffProgression = mt_rand(1, 10);
        $progression = generateProgression($startProgression, $diffProgression, LENGTH);
        $unknownNumPosition = mt_rand(0, LENGTH - 1);
        $answer = $progression[$unknownNumPosition];
        $progression[$unknownNumPosition] = "..";
        $question = implode(" ", $progression);
        $questionsAnsewrs[] = [$question,$answer];
    }
    return $questionsAnsewrs;
}
function brainProgression()
{
    $data = getData();
    engine(DESCRIPTION, $data);
}
