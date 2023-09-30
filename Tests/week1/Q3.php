<?php

function countVowels($inputString)
{

    $vowelCount = 0;

    // Loop through each character in the string
    $length = strlen($inputString);
    for ($i = 0; $i < $length; $i++) {
        $char = $inputString[$i];
        // Check if the character is a vowel (excluding 'y')
        if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u') {
            $vowelCount++;
        }
    }

    return $vowelCount;
}

// Example usage:
$inputString = 'The qzaiiiaaauick brown fox';
$vowelCount = countVowels($inputString);
echo $vowelCount;