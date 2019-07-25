<?php
namespace BrainGames\Calc;

use function brainGames\engine\engine;

const TASK_GAME = 'What is the result of the expression?';
const OPERATIONS = ['+','-','*'];
const MIN = 1;
const MAX = 15;

function run()
{
    $getQuestionAswer = function () {
        $operation = OPERATIONS[array_rand(OPERATIONS, 1)];
        $a = random_int(MIN, MAX);
        $b = random_int(MIN, MAX);
        $question = "$a $operation $b";
        switch ($operation) {
            case '-':
                $rightAnswer = $a - $b;
                break;
            case '+':
                $rightAnswer =  $a + $b;
                break;
            case '*':
                $rightAnswer =  $a * $b;
                break;
        }
        return [$question, $rightAnswer];
    };

    engine(TASK_GAME, $getQuestionAswer);
}
