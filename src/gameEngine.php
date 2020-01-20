<?php

namespace Src\GameEngine;

use function cli\line;
use function cli\prompt;

$name = '';
$point = 0;
/*
function hello($gameConditions)
{
    global $name;
    line("Welcome to Brain Games!");
    line(' ');
    line($gameConditions);
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
}

function action($question, $correctAnswer)
{
    global $name;
    global $point;
    
    for ($i = 0; $i < 3; $i++) {

        line("\nQuestion: $question");
        $answer = prompt("Your answer");
        if ($answer == $correctAnswer) {
            line("Correct!");
            $point++;
        } else {
            line(
                "'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.
            Let's try again, {$name}!"
            );
            exit();
        }
    }
}

function result()
{
    global $point;
    global $name;
    
    if ($point == 3) {
        line(' ');
        line("Congratulations, {$name}!");
    }
}
*/

function engine(string $gameConditions, array $questionAnswer)
{
    global $name;
    global $point;

    /* User greeting*/

    line("Welcome to Brain Games!");
    line(' ');
    line($gameConditions);
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);

    /* Playing rounds */

    for ($i = 0; $i < 3; $i++) {

        line("\nQuestion: {$questionAnswer['quest' . $i]}");
        $answer = prompt("Your answer");
        if ($answer == $questionAnswer['calc' . $i]) {
            line("Correct!");
            $point++;
        } else {
            line(
                "'{$answer}' is wrong answer ;(. Correct answer was '{$questionAnswer['calc' . $i]}'.
            Let's try again, {$name}!"
            );
            exit();
        }
    }

    /* Scoring, printing results */

    if ($point == 3) {
        line(' ');
        line("Congratulations, {$name}!");
    }
}