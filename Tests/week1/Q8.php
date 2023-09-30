<?php

function factorial($n)
{
    if ($n <= 1) {
        return 1;
    } else {

        return $n * factorial($n - 1);
    }
}

$inputNumber = 4;
$result = factorial($inputNumber);
echo "The factorial of $inputNumber is $result";