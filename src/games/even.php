<?php
namespace BrainGames\Even;

use function BrainGames\Engine\engine;

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
        $a = random_int($min, $max);
        $question = $a;
        $answerRight = isEven($a) ? 'yes' : 'no';
        return [$question, $answerRight];
    };

    engine(TASK_GAME, $getQuestionAswer);
}
