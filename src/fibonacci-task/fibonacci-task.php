<?php

namespace PHPTasks\FibonacciTask;

function fibNotRecursion(int $number): int
{
    if ($number < 2) {
        return $number;
    }

    $previousFirst = 0;
    $previousSecond = 1;

    $i = 2;

    while ($i < $number) {

        $sum = $previousFirst + $previousSecond;
        $previousFirst = $previousSecond;
        $previousSecond = $sum;

        $i++;
    }

    return $previousFirst + $previousSecond;
}

function fibRecursion(int $number): int
{
    if ($number < 2) {
        return $number;
    } else {
        return fibRecursion($number - 1) + fibRecursion($number - 2);
    }
}