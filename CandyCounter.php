<?php

	
$filename = 'data/candylist.txt';
$handle = fopen($filename, 'r');
$contents = fread($handle, filesize($filename));
fclose($handle);

$candyarray = explode("PHP_EOL" , $contents);
var_dump($candyarray);
echo count($candyarray);

// do a for each loop
foreach($candyarray as $content)
    {
        if(array_key_exists($content, $candyarray))
        {
            $candyarray[$content] += 1;
        } else
        {
            $candyarray[$content] = 1;
        }
    }
    
    echo 'Candy in the bag: ' . sizeof($fileContent) . "\n";
    echo 'Candy by type and % of total: ' . "\n";
    foreach($candyarray as $key=>$value)
    {
        echo $key . ': ' . $value . '(' . (($value/sizeof($fileContent))*100) . '%)' . "\n";
    }
?>