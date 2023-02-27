<?php

/*
*
* 1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
*
*/


// ভাগ শেষ ১ থাকলে

function is_NumEvenOdds($num)
{
    if ($num % 2 == 1) {
        return "odd";
    } else {
        return "even";
    }
}

$result = is_NumEvenOdds(2023);
echo $result . PHP_EOL;

$result = is_NumEvenOdds(2022);
echo $result . PHP_EOL;



/*
*
* 2. 1+2+3...…….100  Write a loop to calculate the summation of the series
*
*/


for ($i = 1; $i <= 100; $i++) {

    $add[] =  $i;
    $result = array_sum($add);
}
echo "The series 1+2+3+...+100 Sumation: " . $result;
