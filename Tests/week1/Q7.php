<?php


function isPalindrome($word)
{
    $length = strlen($word);

    for ($i = 0; $i < $length / 2; $i++) {
        if (!($word[$i] === $word[$length - $i - 1])) {
            echo "Not palindrome: " . $word;
            return;
        }
    }

    echo "Palindrome: " . $word;
}

$word = "noassaon";


isPalindrome($word);