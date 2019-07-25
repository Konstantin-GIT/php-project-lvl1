<?php
namespace BrainGames\Gcd;

use function brainGames\engine\engine;

const TASK_GAME = 'Find the greatest common divisor of given numbers.';
const MIN = 1;
const MAX = 15;
    
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
        $a = random_int(MIN, MAX);
        $b = random_int(MIN, MAX);
        $question = "$a $b";
        $rightAnswer = getGreatesCommonDivisor($a, $b);
        return [$question, $rightAnswer];
    };

    engine(TASK_GAME, $getQuestionAswer);
}
