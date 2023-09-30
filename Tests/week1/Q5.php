<?php

function findLargest($numbers)
{


    $largest = $numbers[0];

    foreach ($numbers as $number) {
        if ($number > $largest) {
            $largest = $number;
        }
    }

    return $largest;
}

$numbers = [-25, 2, -6, 7, 100];

$largest = findLargest($numbers);
echo "The largest number is: " . $largest;