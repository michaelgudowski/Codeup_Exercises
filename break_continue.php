<?php

for ($number = 1; $number <= 100; $number++) {
    echo $number . "\n";
    if ($number % 2 !== 0) {
        continue;
    }
    echo "^ that is an even number.\n";
}