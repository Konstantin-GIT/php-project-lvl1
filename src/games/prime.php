<?php
namespace BrainGames\Prime;

use function brainGames\engine\engine;

const TASK_GAME = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($n)
{
    if ($n <= 1) {
        return false;
    }
    
    for ($i = 2; $i <= $n / 2; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    
    return true;
}

function run()
{
    $getQuestionAswer = function () {
        $min = 1;
        $max = 100;
        $question = random_int($min, $max);
        $rightAnswer = isPrime($question) ? 'yes' : 'no';
        return [$question, $rightAnswer];
    };

    engine(TASK_GAME, $getQuestionAswer);
}
