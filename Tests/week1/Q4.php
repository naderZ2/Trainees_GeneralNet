<?php

function convertsTheFirstLetter($inputString)
{
    // Initialize an empty result string
    $result = ' ';
    $capitalizeNext = true;
    for ($i = 0; $i < strlen($inputString); $i++) {
        $char = $inputString[$i];

        if ($char == ' ') {
            $capitalizeNext = true;
            $result .= $char;
        } elseif ($capitalizeNext) {
            $result .= strtoupper($char);
            $capitalizeNext = false;
        } else {
            $result .= $char;
        }
    }

    return $result;
}

// Example usage:
$inputString = 'the quick brown fox';
$convertedString = convertsTheFirstLetter($inputString);
echo $convertedString;