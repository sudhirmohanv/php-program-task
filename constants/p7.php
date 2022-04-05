<?php

// wap in php to show constants are global

define('GRAVITY',10);
printf("The value of GRAVITY AT GLOBAL SCOPE :%D \n",GRAVITY);
$gravity = 9.8;

printf("The value of GRAVITY AT GLOBAL SCOPE :%D \n",$gravity);


function  test(){
	
	
	printf("The value of GRAVITY AT GLOBAL SCOPE :%D \n",GRAVITY);
	printf("The value of gravity AT local SCOPE :%d \n",$gravity);
	
	
}
test();
?>