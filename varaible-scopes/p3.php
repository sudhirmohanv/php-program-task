<?php

//wap in php to show priority of local and global acope of variable

$a=10;
echo "the value of a at global acope is :$a";//10

function display(){
	
	$b=200;
	global $a;//get the variable from heap
	echo PHP_EOL;
	echo "the value of global a at local scope is :$a"; //10
	echo PHP_EOL;
	echo "the value of local b at local scope is :$b";//200
	echo PHP_EOL;
	$a=300;
	echo "the value of local a at local scope is :$a"; //300
	echo PHP_EOL;
}
display();

echo PHP_EOL;
echo "the value of a at global scope is :$a";//300
?>