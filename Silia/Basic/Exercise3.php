<?php

# array with random numbers:
$numbers = array(rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100));

# loop to see all the numbers:
foreach ($numbers as $value) {
    echo "random numer $value <br>";
}

# function for the highest number:
function high($num)
{
    return max($num);
}

$result = high($numbers);
echo "The highest number in this random array is: $result";
