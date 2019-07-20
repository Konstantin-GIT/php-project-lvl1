<?php
namespace BrainGames\Progression;

use function BrainGames\Engine\engine;

const TASK_GAME = 'What number is missing in the progression?';
const LENGTH_PROGRESSION = 10;

function makeProgression()
{
    $progression = [];
    $min = 1;
    $max = 7;
    $start = random_int($min, $max);
    $diff = random_int($min, $max);
    for ($i = 0; $i < LENGTH_PROGRESSION; $i++) {
        $progression[] = $start + $diff * $i;
    };
    return $progression;
}

function run()
{
    $getQuestionAswer = function () {
        $progression = makeProgression();
        $keyUnknownsElement = random_int(0, LENGTH_PROGRESSION - 1);
        $ProgressionForPrint = $progression;
        $ProgressionForPrint[$keyUnknownsElement] = '..';
        $question = implode(" ", $ProgressionForPrint);
        $answerRight =  $progression[$keyUnknownsElement];
        return [$question, $answerRight];
    };

    engine(TASK_GAME, $getQuestionAswer);
}
