<?php
namespace BrainGames\Even;

use function brainGames\engine\engine;

const TASK_GAME = 'Answer "yes" if number even otherwise answer "no".';

function isEven($a)
{
    return $a % 2 == 0;
}

function run()
{
    $getQuestionAswer = function () {
        $min = 1;
        $max = 100;
        $question = random_int($min, $max);
        $rightAnswer = isEven($question) ? 'yes' : 'no';
        return [$question, $rightAnswer];
    };

    engine(TASK_GAME, $getQuestionAswer);
}
