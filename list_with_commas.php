<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$famousFakePhysicists = explode(', ',$physicistsString);

$lastString = array_pop($famousFakePhysicists);

array_push($famousFakePhysicists, 'and');

array_push($famousFakePhysicists, $lastString);

$finalString = implode(', ', $famousFakePhysicists);

echo "$finalString\n";

//print_r($famousFakePhysicists);

//echo "Some of the most famous fictional theoretical physicists are $famousFakePhysicists";