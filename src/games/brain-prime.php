<?php
namespace BrainGames\Prime;
use function BrainGames\Engine\engine;

const TASK_GAME = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($number)
{
    if ($number == 1) {
        return false;
    }
    
    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    
    return true;
}

function run()
{
    $getQuestionAswer = function () {
        $questionAnswer = [];
        $min = 1;
        $max = 100;
        $number = 4;
        $question = "{$number}";
        $answerRight = isPrime($number) ? 'yes' : 'no';
        $questionAnswer['question'] = $question;
        $questionAnswer['answerRight'] = $answerRight;
        return $questionAnswer;
    };

    engine(TASK_GAME, $getQuestionAswer);
}
