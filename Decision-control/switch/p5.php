<?php

//wap in php to show consonants and vawels
$x = readline("Enter the character :");
(getType($x=='string')and strlen($x)==1)?:exit('Invalid value supplied.');

$output='';
switch(strtolower($x)){
	case 'a':
	case 'A':
	$output='vowel';
	
	break;
	case 'e':
	case 'E':
	$output='vowel';
	
	break;
	case 'i':
	case 'I':
	$output='vowel';
	break;
case 'o':
case 'O':
	$output='vowel';
	
		break;
case 'u':
	$output='vowel';
	
	default
	}
	
	

?>