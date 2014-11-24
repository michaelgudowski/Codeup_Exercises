<?php

fwrite(STDOUT, 'What is your bottom number? ');
$bottomnumber = trim(fgets(STDIN));

fwrite(STDOUT, 'What is your high number? ');
$highnumber = trim(fgets(STDIN));

fwrite(STDOUT, 'What will your increment be? ');
$increment = trim(fgets(STDIN));



for ($a = $bottomnumber; $a <= $highnumber; $a+=$increment) 
{
    echo " {$a}\n";
}