<?php

//supress operator @: supress operator or Notice operator: error operator.
//never use @ operator because , Debugging is important.

$x=20;
echo "The value of x: $x"; //20

echo PHP_EOL;
echo "The value of y:".@$y; //undefined variable y.

$z=10;
$z=isset($z)?$z:null;

echo PHP_EOL;
echo "The value of z:".$z; //undefined variable z.
var_dump($z);
$z=isset($z)??null;
echo PHP_EOL;
echo "The value of z using Nullcoalescing:".$z; //undefined variable z.
var_dump($z);

$p = (5<2)??null;
echo PHP_EOL;
var_dump($p);

if($p){
	echo 'p if Running by Nullcoalescing';
}else{
	echo 'p else Running by Nullcoalescing';
}
$p = (5<2)?'':null;
echo PHP_EOL;
var_dump($p);

if($p){
	echo 'p if Running by Nullcoalescing';
}else{
	echo 'p else Running by Nullcoalescing';
	
}
	




?>