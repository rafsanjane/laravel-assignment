<?php

function longestWord($str)
{
    $words = explode(' ', $str);
    $word = count($words);
    $longest_word = '';

    for ($i = 1; $i <= $word - 1; $i++) {
        if (strlen($words[$i]) > strlen($longest_word)) {
            $longest_word = $words[$i];
        }
    }


    return $longest_word;
}


$str = "My name is Rafsan And I love to learn PHP";

$longest_word = longestWord($str);
echo "The longest word is: " . $longest_word . PHP_EOL;



// 2nd Code



function longestWord2($str)
{
    $words = explode(' ', $str);

    $longest_word = '';

    foreach ($words as $word) {
        if (strlen($word) > strlen($longest_word)) {
            $longest_word = $word;
        }
    }

    return $longest_word;
}


$str = "The quick brown fox jumped over the lazy dog";

$longest_word = longestWord2($str);
echo "The longest word is: " . $longest_word;
