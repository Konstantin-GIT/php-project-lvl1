<?php
namespace BrainGames\Even;
use function BrainGames\Engine\engine;

const TASK_GAME = 'Answer "yes" if number even otherwise answer "no".';

function run()
{
    $getQuestionAswer = function () {
        $questionAnswer = [];
        $min = 1;
        $max = 100;
        $number = random_int($min, $max);
        $answerRight = ($number % 2 == 0) ? 'yes' : 'no';
          $questionAnswer['question'] = $number;
          $questionAnswer['answerRight'] = $answerRight;
          return $questionAnswer;
    };

    engine(TASK_GAME, $getQuestionAswer);
}
