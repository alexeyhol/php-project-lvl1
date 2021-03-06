<?php

namespace brainGames\gcd;

use function brainGames\gameEngine\engine;

function calcGcd($num1, $num2)
{
    while ($num1 !== $num2) {
        if ($num1 > $num2) {
            $num1 -= $num2;
        } else {
            $num2 -= $num1;
        }
    }
    return $num1;
}

function gcd()
{
    $gameConditions = 'Find the greatest common divisor of given numbers.';

    $questionsAnswers = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $num1 = mt_rand(0, 100);
        $num2 = mt_rand(0, 100);
        $questionsAnswers["{$num1} {$num2}"] = calcGcd($num1, $num2);
    }


    engine($gameConditions, $questionsAnswers);
}
