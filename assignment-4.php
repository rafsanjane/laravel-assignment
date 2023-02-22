<?php
/* 
* 1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
*
* Using this usort
*
*https://www.php.net/manual/en/function.usort.php
*
*/

function mySort($a, $b)
{
    if (strlen($a) == strlen($b)) {
        return 0;
    }
    return (strlen($a) < strlen($b)) ? -1 : 1;
}



$str = "My name is Rafsan And I love to learn PHP";
$words = explode(" ", $str);

usort($words, "mySort");


foreach ($words as $word) {
    echo $word . "\n";
}
//I see issue with input and ouput and implementations.
//Mistake 1: input should array of string so 
$input = ['My','name','Rafsan'];

//Mistake 2: They have asked for a functions that will sort the array
function sortingArrayOfString($array){
    usort($array,function($el1,$el2){
        return strlen($el1) - strlen($el2);// no need conditions for -1,1,0 because usort work on positive and negetive number and zero
    });
}
//Then call the function
print_r(sortingArrayOfString($input));



/* 
*
* 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string. 
*
* 
*
*
*
*/
//I am also confuse about the questions, what was actully they are asking :p 

function concat_str($str1, $str2)
{
    $str1_len = $str1;
    $str2_len = strrev($str2);

    return $str1_len . " " . $str2_len;
}

$str1 = "My Name Is";
$str2 = "Rafsan";

$result = concat_str($str1, $str2);

echo $result; 











/* 
*
* 3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array. 
*
* 
*
*
*
*/

//Great solutions. Smart!

function remove_first_last($myAray)
{
    array_shift($myAray);
    array_pop($myAray);

    return $myAray;
}


$myAray = ["PHP", "JS", "Python", "HTML", "CSS",];


$result = remove_first_last($myAray);

print_r($result); 



/* 
*
* 4.Write a PHP function to check if a string contains only letters and whitespace.
*
* 
*
*
*
*/
//No comments, I solved it with regular expresions, copy pest ;)
function Letters_And_Space($str)
{

    $str_Space = strpos($str, " ");
    $str_space_remove = str_replace(' ', '', $str);
    $string_Check = ctype_alpha($str_space_remove);

    if ($str_Space !== "" && $string_Check !== false) {
        return "Strings and Space Only";
    } else {
        return "Strings with Number";
    }
}


$str1 = 'This is a valid string'; // returns true
$str2 = 'This is not a valid string 123!'; // returns false

echo Letters_And_Space($str1);
echo  PHP_EOL;
echo Letters_And_Space($str2);




/* 
*
* 5.Write a PHP function to find the second largest number in an array of numbers.
*
* 
*
*
*
*/


function findSecondLargest($numbers)
{
    rsort($numbers);
    return $numbers[1];
}
//This sollutions is not correct Think about if input is [30,30,20,10,5]
//output should be 20 but your function will return 30.
// So when we checking 2nd largest item in an array we have to check all items.

$numbers = [10, 20, 30, 40, 50];
$secondLargest = findSecondLargest($numbers);
echo "The second largest number is: " . $secondLargest;
