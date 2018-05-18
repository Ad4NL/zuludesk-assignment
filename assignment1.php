<?php

/**
 * Split the input every time the number doesn't increase
 *
 * @param int[] $input The input array of numbers
 * @return int[][] The result should be an array of arrays, for which each array only has increasing numbers and is never empty
 */
function split_increasing(array $input): array
{
    $result = [];

    // TODO code!

    return $result;
}

if (!class_exists("\PHPUnit\Framework\TestCase")) {
    $input = [1, 2, 3, 5, 4, 6, 7, 8, 9, 9, 10];

    echo PHP_EOL;
    echo "INPUT:  " . json_encode($input) . PHP_EOL;
    echo "OUTPUT: " . json_encode(split_increasing($input)) . PHP_EOL;
}
