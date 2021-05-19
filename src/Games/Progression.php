<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Cli\setProgression;
use function BrainGames\Cli\getRandNum;
use function BrainGames\Engine\engine;

const DESCRIPTION = "What number is missing in the progression?";

function getData()
{
    $result = [];
    for ($i = 0; $i < 3; $i += 1) {
        $start = rand(1, 10);
        $len = 10;
        $step = rand(1, 10);
        $progression = setProgression($start, $len, $step);
        $result[] = getRandNum($progression);
    }
    return $result;
}

function brainProgression()
{
    $data = getData();
    engine(DESCRIPTION, $data);
}
