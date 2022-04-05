<?php
//wap in php to find the remainder without % operator /
//using type-casting

$x=readline('Enter the x value :');
$y=readline('Enter the y value :');

$Q = $x/$y;
echo $Q;
echo PHP_EOL;

$rem  = $x-(floor($Q)*$y);
echo $rem;
?>

