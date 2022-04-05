<?php
//wap in php to find the Qudrant according to given Quadrnt condition

$x=readline('Enter the x value:');
$y=readline('Enter the y value:');

if($x>0 and $y>0)
	echo '1st Qudrant';
if($x>0 and $y<0)
	echo '4rth Qudrant';
if($x<0 and $y>0)
	echo 'llnd Qudrant';
else
	echo'lllrd Qudrant'
?>