<?php
namespace BrainGames\Engine;
use function cli\line;

function engine($task, $questionAnswer)
{
    line('Welcome to the Brain Game!');
    line("{$task}");
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!", $name);
    $counter = 3;
    for ($i = 0; $i < $counter; $i++) {
        $arrQuestionAnswer = $questionAnswer();
        $question = $arrQuestionAnswer['question'];
        $answerRight = $arrQuestionAnswer['answerRight'];
        line("Question: {$question}");
        $answerUser = \cli\prompt('Your answer');
        if (($answerUser == $answerRight) && ($counter === 3)) {
             line('Correct!');
             line("Congrastulations,{$name}");
        } elseif (($answerUser == $answerRight) && ($counter !== 3)) {
             line('Correct!');
        } else {
                line("'{$answerUser}' is wrong answer ;(. Correct answer was '{$answerRight}'.
                Let's try again, {$name}! ");
                $i = 3;
        }
    }
}
