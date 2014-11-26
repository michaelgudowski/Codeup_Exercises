<?php

function add($a, $b) {
    echo $a + $b;
}

function subtract($a, $b) {
    echo $a - $b;
}

function multiply($a, $b) {
    echo $a * $b;
}

function divide($a, $b) {
    echo $a / $b;
}

function modulus($a, $b) {
    echo $a % $b;
}

echo add(1,8) . PHP_EOL;

echo subtract(100,90) . PHP_EOL;

echo multiply(2,10) . PHP_EOL;

echo divide(40,4) . PHP_EOL;

echo modulus(10,5) . PHP_EOL;

?>