<?php
namespace BrainGames\Even;
use function \cli\line;

function run() 
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if number even otherwise answer "no".');
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!", $name);
    $count_question = 3;
    for ($i = 0; $i < $count_question; $i++){
    $min = 1;     
    $max = 100;
    $number = random_int(1,15);

    $answer_right = ($number % 2 == 0) ? 'yes' : 'no';
    line("Question: {$number}");
    $answer_user = \cli\prompt('Your answer');
    
    if (($answer_user === $answer_right) && ($count_question === 3))
      { line('Correct!');
        line("Congratulations,{$name}");}
      elseif (($answer_user === $answer_right) && ($count_question !== 3))
      {line('Correct!');}
      else {line("'{$answer_user}' is wrong answer ;(. Correct answer was '{$answer_right}'.
        Let's try again, {$name}!");  $i = 3;}
    }

}
