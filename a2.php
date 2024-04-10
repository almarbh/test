<?php
function getTotals(int ...$numbers): array
{
    $min = min($numbers);
    $max = max($numbers);
    $total = array_sum($numbers);
    return [$min, $max, $total];
}

[$min, $max, $total] = getTotals(1, 2, 3);
