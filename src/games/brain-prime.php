<?php
namespace BrainGames\Prime;
use function BrainGames\Engine\engine;

const TASK_GAME = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    
function gcd($a, $b)
{
    $i = $a;
    while ($a % $i !== 0 || $b % $i !== 0) {
        $i -= 1;
    }
    return $i;
}

function run()
{
    $getQuestionAswer = function () {
        $questionAnswer = [];
        $min = 1;
        $max = 15;
        $numberOne = random_int($min, $max);
        $numberTwo = random_int($min, $max);
        $question = "{$numberOne} {$numberTwo}";
        $answerRight = gcd($numberOne, $numberTwo);
        $questionAnswer['question'] = $question;
        $questionAnswer['answerRight'] = $answerRight;
        return $questionAnswer;
    };

    engine(TASK_GAME, $getQuestionAswer);
}