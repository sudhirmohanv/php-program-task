<?php

//wap in php to show add and even defaul case in switch
$x = readline("Enter the x value:");
switch($x%2){   //s(remainders)={0,1} T(cases) = 2 1-> default(n-1) ---> case
	case 0;
	echo "$x is even";
	break;
	
	default:
	echo "$x is add";
	break;
}
?>