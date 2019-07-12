<?php
namespace BrainGames\Progression;
use function BrainGames\Engine\engine;

const TASK_GAME = 'What number is missing in the progression?';
const BEGIN_GAME = 'What number is missing in the progression?';

    
function progression($startElement, $step, $length)
{
    $progression = [];
    $tempElement = $startElement;
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $tempElement;
        $tempElement += $step;
    };
    return $progression;
}

function run()
{
    $getQuestionAswer = function () {
        $questionAnswer = [];
        $startElementProgression = 1;
        $stepProgression = 2;
        $lengthProgression = 10;
        
        $progression = progression($startElementProgression, $stepProgression, $lengthProgression);
        $keyUnknownsElement = random_int(0, $lengthProgression - 1);
        $newProgression = $progression;
        $newProgression[$keyUnknownsElement] = '..';
        $question = implode(" ", $newProgression);
        $answerRight =  $progression[$keyUnknownsElement];
        $questionAnswer['question'] = $question;
        $questionAnswer['answerRight'] = $answerRight;
        return $questionAnswer;
    };

    engine(TASK_GAME, $getQuestionAswer);
}
