<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Cli\setProgression;
use function BrainGames\Cli\getRandNum;
use function BrainGames\Engine\engine;

const DESCRIPTION = "What number is missing in the progression?";

function getData()
{
    $result = [];
    for ($i = 0; $i < 4; $i += 1) {
        $start = rand(10, 100);
        $finish = rand(10, 100);
        $step = rand(2, 10);
        $progression = setProgression($start, $finish, $step);
        $result[] = getRandNum($progression);
    }
    return $result;
}

function brainProgression()
{
    $data = getData();
    engine(DESCRIPTION, $data);
}
