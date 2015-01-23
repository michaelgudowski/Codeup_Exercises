<?php

 // first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

 function search($firstname,$arrayname)
 {
 	$result = array_search($firstname, $arrayname);
 	return $result;
 }

$searchresults = search('Tina',$names);

if ($searchresults >= 0){
	echo "Your search returned a index of " . $searchresults;

}

$searchresults = search('Bob',$compare);

if ($searchresults >= 0){
	echo "\nYour search returned a index of " . $searchresults;
}
elseif ($searchresults == false){
	echo "\nYour search does not exist in the array";
}
