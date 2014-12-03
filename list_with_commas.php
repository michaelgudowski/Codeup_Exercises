<?php

// $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// $famousFakePhysicists = explode(', ',$physicistsString);

// $lastString = array_pop($famousFakePhysicists);

// array_push($famousFakePhysicists, 'and');

// array_push($famousFakePhysicists, $lastString);

// $finalString = implode(', ', $famousFakePhysicists);

// echo "Some of the most famous fictional theoretical physicists are $finalString\n";

// print_r($famousFakePhysicists);

// echo "Some of the most famous fictional theoretical physicists are $famousFakePhysicists";




function humanizedList($string, $alpha=false) {
	$array = explode(', ',$string);

	if ($alpha){
		sort($array);

	}

	$lastString = array_pop($array);

    $finalString = implode(', ', $array);
    return $finalString . ', and ' . $lastString;

}
 // List of famous peeps
 $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

 
 // Humanize that list
 $famousFakePhysicists = humanizedlist($physicistsString, true);

 // Output sentence
 echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;