<?php
//setting up a function that will check to see if a user input word is a palindrome
function palindrome($word){
	$reverse = strrev($word);
	if($word == $reverse){
		return true;
	}
	else {
		return false;
	}
}

echo "Please enter a word that you believe is a palindrome.\n";
	$userWord = trim(fgets(STDIN));
	
	palindrome($userWord);

if (palindrome($userWord)){
	echo "$userWord is a palindrome" . PHP_EOL;
	}
else {
	echo "$userWord is not a palindrome" . PHP_EOL;
}