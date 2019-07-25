<?php

namespace PHPTasks\LongestStringTask;

/**
 * Time complexity will be linear, or O(n).
 * This approach is also known as the sliding window pattern.
 * @param string $input
 *
 * @return int
 */
function longestLength(string $input): int
{
    $visitedSymbols = [];
    $outputString = '';

    for ($start = 0, $end = 0; $end < strlen($input); $end++) {
        $currentSymbol = $input[$end];

        if (array_key_exists($currentSymbol, $visitedSymbols)) {
            $start = max($visitedSymbols[$currentSymbol] + 1, $start);
        }

        if (strlen($outputString) < $end - $start + 1) {
            $outputString = substr($input, $start, $end - $start + 1);
        }

        $visitedSymbols[$currentSymbol] = $end;
    }

    return strlen($outputString);
}
