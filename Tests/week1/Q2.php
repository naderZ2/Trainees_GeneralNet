<?php
function alphabetizeString($inputString)
{
    $length = strlen($inputString);

    // Convert the string to an array of characters
    $charArray = [];
    for ($i = 0; $i < $length; $i++) {
        $charArray[] = $inputString[$i];
    }

    // Perform a simple bubble sort
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($charArray[$j] > $charArray[$j + 1]) {
                // Swap characters if they are in the wrong order
                $temp = $charArray[$j];
                $charArray[$j] = $charArray[$j + 1];
                $charArray[$j + 1] = $temp;
            }
        }
    }

    // Convert the sorted array back to a string
    $sortedString = implode('', $charArray);

    return $sortedString;
}

// Example usage:
$inputString = 'webaaaamaster';
$sortedString = alphabetizeString($inputString);
echo $sortedString;