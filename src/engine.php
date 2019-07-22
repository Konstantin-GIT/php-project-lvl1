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
    $roundsCount = 3;
    for ($i = 1; $i <= $roundsCount; $i++) {
        [$question, $rightAnswer] = $getQuestionAnswer();
        line("Question: $question");
        $userAnswer = prompt('Your answer');
        if ($userAnswer == $rightAnswer) {
             line('Correct!');
        } else {
                line("'$userAnswer' is wrong answer ;(. Correct answer was '$rightAnswer'.
                Let's try again, $name!");
                return;
        }
    }
    line('Correct!');
    line("Congrastulations,$name");
}
