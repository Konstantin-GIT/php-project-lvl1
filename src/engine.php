<?php
namespace BrainGames\Engine;

use function \cli\prompt;
use function \cli\line;

function engine($task, $getQuestionAnswer)
{
    line('Welcome to the Brain Game!');
    line("{$task}");
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $roundCount = 3;
    for ($i = 1; $i <= $roundCount; $i++) {
        [$question, $answerRight] = $getQuestionAnswer();
        line("Question: $question");
        $answerUser = prompt('Your answer');
        if ($answerUser == $answerRight) {
             line('Correct!');
        } elseif ($answerUser !== $answerRight) {
                line("'$answerUser' is wrong answer ;(. Correct answer was '$answerRight'.
                Let's try again, $name!");
                return;
        }
    }
    line('Correct!');
    line("Congrastulations,$name");
}
