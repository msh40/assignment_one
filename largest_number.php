<?php

// three given numbers

$num1 = 4;
$num2 = 5;
$num3 = 6;

// using the if-else statements to find the largest number

if ($num1 > $num2 && $num1 > $num3) { 
    echo "The largest number is: $num1\n"; 
} elseif ($num2 > $num1 && $num2 > $num3) { 
    echo "The largest number is: $num2\n"; 
} else { 
    echo "The largest number is: $num3\n"; 
}

?>