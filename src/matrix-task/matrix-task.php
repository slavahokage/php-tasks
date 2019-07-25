<?php

namespace PHPTasks\MatrixMirrorTask;

function getMirrorMatrix(array $matrix): array
{
    $size = count($matrix);
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size / 2; $j++) {
            $matrix[$i][$size - $j - 1] = $matrix[$i][$j];
        }
    }

    return $matrix;
}
