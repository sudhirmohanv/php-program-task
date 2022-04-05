<?php
//wap in php to show logical operators And

$x=readline('Enter the x value in range:');
var_dump($x!=10); 
var_dump(!(!($x<10) && !($x>10))); //De-morgan Rules

?>