<?php

//wap in php to show add and even using switch
$x = readline("Enter the x value:");
switch(!($x%2==0)){   //coins = {H,T} s={0,1}
	case 0;
	echo "$x is even";
	break;
	
	case 1:
	echo "$x is add";
	break;
}
?>