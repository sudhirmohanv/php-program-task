<?php
//wap in php to show new doc string syntax

$a=100;

echo <<<'BLOCK'
The a Here doc string, $a \n 
"This is again new line of string "$a" "
'This string is inside $a single Qoutes \t tabbed' = $a 

BLOCK;


$a=100;
$code =<<<'BLOCK'
The a Here doc string, $a \n 
"This is again new line of string "$a" "
'This string is inside $a single Qoutes \t tabbed' = $a 

BLOCK;

echo $code;
?>