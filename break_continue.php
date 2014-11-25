<?php
//label even numbers and continue for loop.
for ($number = 1; $number <= 100; $number++) {
    echo $number . "\n";
    if ($number % 2 !== 0) {
        continue;
    }
    echo "^ that is an even number.\n";
}

//break after hitting 10.

for ($number = 0; $number <= 100; $number++) {
	echo $number . "\n";
	if ($number == 10) {
		break;
	}
}