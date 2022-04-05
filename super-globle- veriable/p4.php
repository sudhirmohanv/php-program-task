<?php

//wap a program to find the sum , of all the Argument supplied from command line and average

print_r($argv);

$sum=0;
$arvg=0;

for($i=1; $i<$argc; $i++){
	$sum = $sum+(int)$argv[$i]; 
}
printf("The sum = %d \n",$sum);
$avg = $sum/($argc-1);
printf("The average = %d \n",$avg);

?>