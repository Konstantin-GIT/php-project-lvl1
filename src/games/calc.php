<?php
namespace BrainGames\Calc;

use function brainGames\engine\engine;

const TASK_GAME = 'What is the result of the expression?';
const OPERATIONS = ['+','-','*'];

function run()
{
    $getQuestionAswer = function () {
        $operation = OPERATIONS[array_rand(OPERATIONS, 1)];
        $min = 1;
        $max = 15;
        $a = random_int($min, $max);
        $b = random_int($min, $max);
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
