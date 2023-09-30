<?php

function reverse_number($n)
{
    $reversed_number = 0;
    while ($n > 0) {
        $remainder = $n % 10;
        $reversed_number = ($reversed_number * 10) + $remainder;
        $n = (int) ($n / 10);
    }
    return $reversed_number;
}


echo reverse_number("7586");
// echo 758 % 10;