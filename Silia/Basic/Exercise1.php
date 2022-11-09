<?php
$name = "Silia";

# for loop
echo "<h1>For Loop</h1>";
for ($i = 1; $i <= 50; $i++) {
    echo "$i: $name <br>";
}

# while loop
$a = 1;
echo "<h1>While Loop</h1>";
while ($a <= 50) {
    echo "$a: $name <br>";
    $a++;
}

# do while loop
$b = 1;
echo "<h1> Do While Loop</h1>";
do {
    echo "$b: $name <br>";
    $b++;
} while ($b <= 50);
