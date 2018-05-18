<?php

function printInOut($in, $function)
{
    if (!class_exists("\PHPUnit\Framework\TestCase")) {
        echo PHP_EOL;
        echo "INPUT:  " . json_encode($in) . PHP_EOL;
        echo "OUTPUT: " . json_encode(call_user_func($function, $in)) . PHP_EOL;
    }
}