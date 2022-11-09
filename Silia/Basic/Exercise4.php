<?php

$i = 0;

while ($i < 100) {
    $i++;
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "Full-Stack <br>";
    } else if ($i % 3 == 0) {
        echo "Back-end <br>";
    } else if ($i % 5 == 0) {
        echo "Front-End <br>";
    } else {
        echo "$i <br>";
    }
}
