<?php


for ($number = 1; $number <= 100; $number ++)
{
    if ($number%3 == 0)
    {

    	echo "Fizz";
    }

   if ($number%5 == 0)
    {

    	echo "Buzz";
    }   
if (($number%3 != 0) && ($number%5 != 0))
	{	
		echo "{$number}" ;
	}
echo "\n";
}
