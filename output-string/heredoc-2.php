<?php
//wap in php to show here doc string syntax

$a=100;

echo  <<<"BLOCK"
The a Here doc string, $a \n 
"This is again new line of string "$a" "
'This string is inside $a single Qoutes \t tabbed' = $a 

BLOCK;

echo $html;
?>