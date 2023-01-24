<?php

//How can you use the ternary operator in PHP to shorten this if statement?

$num = -1;
// Using if statement
if ($num > 0) {
    $result = 'positive';
} elseif ($num < 0) {
    $result = 'negative';
    if ($num < -10) {
        $result = 'value is below -10';
    }
} else {
    $result = 'its zero';
}

echo "IF else result = " . $result . "\n";

// Write Description Here

echo "Ternary result = " . $result = $num > 0 ? "postive" : ($num < 0 ? ($num < -10 ? 'value is below -10' : 'negative') :  'its zero');
