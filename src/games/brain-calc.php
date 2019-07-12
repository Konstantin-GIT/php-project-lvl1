<?php
namespace BrainGames\Calc;
use function BrainGames\Engine\engine;

const TASK_GAME = 'What is the result of the expression?';

function run()
{
    $getQuestionAswer = function () {
        $questionAnswer = [];
        $operations = ['+','-','*'];
        $key_operation = array_rand($operations, 1);
        $operation = $operations[$key_operation];
        $min = 1;
        $max = 15;
        $numberOne = random_int($min, $max);
        $numberTwo = random_int($min, $max);
        $question = "{$numberOne} {$operation} {$numberTwo}"    ;
        var_dump($question);
        var_dump($operation);
        switch ($operation) {
            case '-':
                $answerRight = $numberOne - $numberTwo;
                break;
            case '+':
                $answerRight =  $numberOne + $numberTwo;
                break;
            case '*':
                $answerRight =  $numberOne * $numberTwo;
                break;
        }
        var_dump($answerRight);
        $questionAnswer['question'] = $question;
        $questionAnswer['answerRight'] = $answerRight;
        return $questionAnswer;
    };

    engine(TASK_GAME, $getQuestionAswer);
}
