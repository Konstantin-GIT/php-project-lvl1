<?php
namespace BrainGames\Even;

use function brainGames\engine\engine;

const TASK_GAME = 'Answer "yes" if number even otherwise answer "no".';
const MIN = 1;
const MAX = 100;

function isEven($a)
{
    return $a % 2 == 0;
}

function run()
{
    $getQuestionAswer = function () {
        $question = random_int(MIN, MAX);
        $rightAnswer = isEven($question) ? 'yes' : 'no';
        return [$question, $rightAnswer];
    };

    engine(TASK_GAME, $getQuestionAswer);
}
