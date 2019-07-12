<?php
namespace BrainGames\Prime;
use function BrainGames\Engine\engine;
use function BrainGames\Even\even;
use function BrainGames\Gcd\gcd;

const TASK_GAME = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function run()
{
    $getQuestionAswer = function () {
        $questionAnswer = [];
        $min = 1;
        $max = 100;
        $number = random_int($min, $max);
        $question = "{$number}";
        $answerRight = !even($number) && (gcd($number,$max) === 1) ? 'yes' : 'no';
        $questionAnswer['question'] = $question;
        $questionAnswer['answerRight'] = $answerRight;
        return $questionAnswer;
    };

    engine(TASK_GAME, $getQuestionAswer);
}
