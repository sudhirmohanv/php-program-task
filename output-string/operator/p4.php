<?php
//wap in php to find the remainder without % operator /
//using type-casting

$x=readline('Enter the x value :');
$y=readline('Enter the y value :');

$Q = $x/$y;
echo getType($Q);
echo PHP_EOL;
$Q = intval($Q); 
echo $Q;
$rem = $x-($Q*$y);
echo getType($Q);
echo PHP_EOL;
echo $rem;

?>


