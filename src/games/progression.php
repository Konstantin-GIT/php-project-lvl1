<?php
namespace BrainGames\Progression;

use function brainGames\engine\engine;

const TASK_GAME = 'What number is missing in the progression?';
const LENGTH_PROGRESSION = 10;
const MIN = 1;
const MAX = 7;

function makeProgression($start, $diff, $lenght)
{
    $progression = [];
    for ($i = 0; $i < $lenght; $i++) {
        $progression[] = $start + $diff * $i;
    };
    return $progression;
}

function hideProgressionElement($progression, $hiddenElementKey)
{
    $progression[$hiddenElementKey] = '..';
    return $progression;
}

function run()
{
    $getQuestionAswer = function () {
        $start = random_int(MIN, MAX);
        $diff = random_int(MIN, MAX);
        $progression = makeProgression($start, $diff, LENGTH_PROGRESSION);
        $hiddenElementKey = random_int(0, LENGTH_PROGRESSION - 1);
        $progressionWithHiddenElement = hideProgressionElement($progression, $hiddenElementKey);
        $question = implode(" ", $progressionWithHiddenElement);
        $rightAnswer = $progression[$hiddenElementKey];
        return [$question, $rightAnswer];
    };

    engine(TASK_GAME, $getQuestionAswer);
}
