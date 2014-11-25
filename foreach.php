<?php


$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($things as $datum) {
    if (is_numeric($datum)) 
    {   echo "{$datum} is a number\n";
    
    }   
    else if (is_string($datum)) 
    {
       echo "{$datum} is a string\n";
    }

	else if (is_float($datum)) 
	    {
	       echo "{$datum} is a float\n";
	    }
	else if (is_bool($datum)) 
	    {
	       echo "{$datum} is a boolean\n";
	    }
	else if (is_array($datum)) 
	    {
	       foreach($datum as $val) 
	    {
	    echo $val;
		}
	    }

	else if (is_null($datum)) 
	    {
	       echo "{$datum} has a null value\n";
	    }

	else if (is_string($datum)) 
	    {
	       echo "{$datum} is a string\n";
	    }
}


