<?php
namespace BrainGames\Gcd;

use function brainGames\engine\engine;

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
        $rightAnswer = getGreatesCommonDivisor($a, $b);
        return [$question, $rightAnswer];
    };

    engine(TASK_GAME, $getQuestionAswer);
}
