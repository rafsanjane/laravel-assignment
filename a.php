<?php

function findSecondLargest($numbers)
{
    rsort($numbers);

    return $numbers[1];
}







$numbers = [10, 20, 30, 40, 50];
$secondLargest = findSecondLargest($numbers);
echo "The second largest number is: " . $secondLargest; // Output: "The second largest number is: 40"
