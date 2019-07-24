<?php

namespace PHPTasks\FizzTask;

function displayNumbers(int $begin, int $end)
{
    $output = '';
    for ($i = $begin; $i <= $end; $i++) {
        $isFizz = $i % 3 == 0;
        $isBuzz = $i % 5 == 0;

        $fizz = $isFizz ? 'Fizz' : '';
        $buzz = $isBuzz ? 'Buzz' : '';
        $number = ("$fizz$buzz") ? '' : $i;

        $output .= "$fizz$buzz$number ";
    }

    return $output;
}
