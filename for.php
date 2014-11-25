<?php

fwrite(STDOUT, 'What is your bottom number? ');
$bottomnumber = trim(fgets(STDIN));

fwrite(STDOUT, 'What is your high number? ');
$highnumber = trim(fgets(STDIN));

fwrite(STDOUT, 'What will your increment number be? ');
$increment = trim(fgets(STDIN));


if ( !is_numeric($increment))
{	
	echo "increment number will be set at 1.\n";
    $increment = 1;

}

if (!is_numeric($bottomnumber))
{
	echo "Error. You did not enter a number. Closing program.\n"; 
	exit(1);
}

else if (!is_numeric($highnumber))
{
	echo "Error. You did not enter a number. Closing program.\n"; 
	exit(1);
}

for ($a = $bottomnumber; $a <= $highnumber; $a+=$increment) 
{
    echo " {$a}\n";
}