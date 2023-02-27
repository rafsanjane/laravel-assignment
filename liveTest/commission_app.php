<!-- HF consultancy wants to build a very simple commission-calculating calculator for their Admission agents. 

Usually, the commission is 25% of the tuition fee if the tuition is above twenty thousand dollars. 

But if the tuition fee is above $10000 dollars but less than $20000 dollars, the commission is 20%. 

If the tuition fee is less than $10000 dollars but greater than $7000 dollars,  the commission rate is 15%. 

If the tuition fee is below $7000  dollars the data will be invalid. 

As a developer please help HF Consultancy for building this simple calculator using a ternary operator in Php. -->


<?php

# If else statement / Conditional Format

$tusionFee = 20000;

if ($tusionFee >= 20000) {
    echo "Commission: " . $tusionFee * 25 / 100;
} elseif ($tusionFee >= 10000 && $tusionFee <= 20000) {
    echo "Commission: " . $tusionFee * 20 / 100;
} elseif ($tusionFee >= 7000 && $tusionFee <= 10000) {
    echo "Commission: " . $tusionFee * 15 / 100;
} else {
    echo "Invalid";
}

echo "\n";
echo "\n";
# Ternary operator


echo $commission = ($tusionFee >= 20000)
    ? "Commission: " . ($tusionFee * 25 / 100)
    : (($tusionFee >= 10000 && $tusionFee <= 20000)
        ? "Commission: " . $tusionFee * 20 / 100
        : (($tusionFee >= 7000 && $tusionFee <= 10000)
            ? "Commission: " . $tusionFee * 15 / 100
            : "Invalid"));






# If else statement / Conditional Format

$tusionFee = 7000;

if ($tusionFee >= 20000) {
    echo "Commission: " . $tusionFee * 25 / 100;
} elseif ($tusionFee >= 10000 && $tusionFee <= 20000) {
    echo "Commission: " . $tusionFee * 20 / 100;
} elseif ($tusionFee > 7000 && $tusionFee <= 10000) {
    echo "Commission: " . $tusionFee * 15 / 100;
} else {
    echo "Invalid";
}

echo "\n";
echo "\n";
# Ternary operator


echo $commission = ($tusionFee >= 20000)
    ? "Commission: " . ($tusionFee * 25 / 100)
    : (($tusionFee >= 10000 && $tusionFee <= 20000)
        ? "Commission: " . $tusionFee * 20 / 100
        : (($tusionFee > 7000 && $tusionFee <= 10000)
            ? "Commission: " . $tusionFee * 15 / 100
            : "Invalid"));




?>