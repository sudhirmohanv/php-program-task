<?php
//wap a program in  php to add number using
//user-defined function 
$num1= readline('Enter the No 1:');
$num2= readline('Enter the No 2:');

echo add($num1,$num2);
function add($num1=0,$num2=0)
{
	return $num1+$num2;
	
}

printf("the result with 0 Argument = %d \n",add());
printf("the result with 1 Argument $num1 = %d \n ",add($num1));
printf("the result with 1 Argument $num2 = %d \n ",add($num2));
printf("the result with 2 Argument = %d \n",add($num1,$num2));
?>