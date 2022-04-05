<?php
//wap in php to show super global value

$a=20;
$b=30;

print_r($GLOBALS);

function display(){
	$a= 100;//local
	$b= 200;//local
	echo PHP_EOL;
	echo "the value of a from local :$a";
	echo PHP_EOL;
	echo "the value of b from local :$b";
	
	echo "the value of a from global using SG: {$GLOBALS['a']}";//10
	echo PHP_EOL;
	echo "the value of a from global using SG: {$GLOBALS['b']}";//20
	
	$a = $GLOBALS['a']; //withot using global keyword
	$b = $GLOBALS['b']; 
	
	echo PHP_EOL;
	echo "the  value of a from global withot global keyword:$a ";
	echo PHP_EOL;
	echo "the  value of b from global withot global keyword:$b ";
	
	echo PHP_EOL;
	
	global $a,$b; //using global keyword
	echo PHP_EOL;
	
	echo "the value of a from global with using global keyword : $a ";//10
	echo PHP_EOL;
	echo "the value of a from global with using global keyword : $b ";//10
}
display();
?>