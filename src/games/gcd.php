<?php
namespace BrainGames\Gcd;

use function BrainGames\Engine\engine;

const TASK_GAME = 'Find the greatest common divisor of given numbers.';
    
function getGreatesCommonDivisor($a, $b)
{
    $i = $a;
    while ($a % $i !== 0 || $b % $i !== 0) {
        $i -= 1;
    };
    return $i;
}

function run()
{
    $getQuestionAswer = function () {
        $min = 1;
        $max = 15;
        $a = random_int($min, $max);
        $b = random_int($min, $max);
        $question = "$a $b";
        $answerRight = getGreatesCommonDivisor($a, $b);
        return [$question, $answerRight];
    };

    engine(TASK_GAME, $getQuestionAswer);
}
