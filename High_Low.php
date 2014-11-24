<?php

$low = $argv[1];
$high = $argv[2];

$computernumber = mt_rand($low,$high);
$counter = 1;


echo "You have 6 guesses\n";


$userguess = fgets(STDIN);

while ($userguess != $computernumber)
{
	if ($counter > 5)
		{
			echo "Sorry, you guessed too many times! Thanks for playing!\n";
			echo "The number was $computernumber\n";
		die;
	    }
	
	if ($userguess > $computernumber) 
	{
		echo "Your number is too high.\n";
		echo "You have guessed $counter times.\n";
		$userguess = fgets(STDIN);
	

	}


	elseif ($userguess < $computernumber) 
	{
		echo "Your number is too low.\n";
		echo "You have guessed $counter times.\n";
		$userguess = fgets(STDIN);
	}
	$counter++;
}
echo "Good guess!\n";

exit(0);