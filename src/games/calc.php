<?php
namespace BrainGames\Calc;

use function BrainGames\Engine\engine;

const TASK_GAME = 'What is the result of the expression?';
const OPERATIONS = ['+','-','*'];

function run()
{
    $getQuestionAswer = function () {
        $keyOperation = array_rand(OPERATIONS, 1);
        $operation = OPERATIONS[$keyOperation];
        $min = 1;
        $max = 15;
        $a = random_int($min, $max);
        $b = random_int($min, $max);
        $question = "$a $operation $b";
        switch ($operation) {
            case '-':
                $answerRight = $a - $b;
                break;
            case '+':
                $answerRight =  $a + $b;
                break;
            case '*':
                $answerRight =  $a * $b;
                break;
        }
        return [$question, $answerRight];
    };

    engine(TASK_GAME, $getQuestionAswer);
}
