<?php
namespace BrainGames\Progression;

use function brainGames\engine\engine;

const TASK_GAME = 'What number is missing in the progression?';
const LENGTH_PROGRESSION = 10;
const MIN = 1;
const MAX = 7;

function makeProgression($start, $diff)
{
    $progression = [];
    for ($i = 0; $i < LENGTH_PROGRESSION; $i++) {
        $progression[] = $start + $diff * $i;
    };
    return $progression;
}

function run()
{
    $getQuestionAswer = function () {
        $start = random_int(MIN, MAX);
        $diff = random_int(MIN, MAX);
        $progression = makeProgression($start, $diff);
        $progressionWithoutElement = $progression;
        $unknownElementKey = random_int(0, LENGTH_PROGRESSION - 1);
        $progressionWithoutElement[$unknownElementKey] = '..';
        $question = implode(" ", $progressionWithoutElement);
        $rightAnswer =  $progression[$unknownElementKey];
        return [$question, $rightAnswer];
    };

    engine(TASK_GAME, $getQuestionAswer);
}
