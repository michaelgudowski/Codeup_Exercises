<?php

function divideby0error($a,$b)
{
	if ($b === 0){
		echo "Error: Attempting to divide by 0";
}




function add($a, $b) 
{
	if (is_numeric($a) && is_numeric($b)) {
        echo $a + $b;
    } else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

function subtract($a, $b) 
{
	if (is_numeric($a) && is_numeric($b)) {   
    	echo $a - $b;
	}	else {
		  echo "Error: Both arguments must be numbers\n";
	}
}

function multiply($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {	
		echo $a * $b;
	}	else {
        echo "ERROR: Both arguments must be numbers\n";
    }       
}


function divide($a, $b)
{
	fuction divideby0error($a,$b)
	}	
	elseif (is_numeric($a) && is_numeric($b)) {	
		echo $a / $b;
	}	else {
        echo "ERROR: Both arguments must be numbers. You entered ($a) ($b)\n";
    }      
}

function modulus($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {	
		echo $a % $b;
	}	else {
        echo "ERROR: Both arguments must be numbers\n";
    	}       
}

echo add(1,8) . PHP_EOL;

echo subtract(100,90) . PHP_EOL;

echo multiply(2,10) . PHP_EOL;

echo divide(10,'r') . PHP_EOL;

echo modulus(10, 5) . PHP_EOL;