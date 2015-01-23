<?php

$nothing = null;
$something = '';
$array = array(1, 2, 3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function check($var){
	if (isset($var)){
		echo "$var is set\n";
	}
	else if (!isset($var)){
		echo "$var is empty\n";
	}
}

check($nothing);
check($something);

// TEST: If var $nothing is set, display '$nothing is SET'

function nothing ($var){
	if (isset($var)){
		echo "$var is set\n";
	}
}

nothing ($nothing);

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

function empty1($var){
	if(!isset($var))
		echo "$var is empty\n";
}

empty($nothing);

// TEST: If var $something is set, display '$something is SET'



// Serialize the array $array, and output the results
$serialize_ = serialize($array);
echo $serialize_;

// Unserialize the array $array, and output the results
$unserialize_ = unserialize($array);
echo $unserialize_;