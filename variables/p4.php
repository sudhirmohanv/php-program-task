<?php

//wap in php to show boolean false stored in variable

$x=false;
echo $x;//nothing
echo PHP_EOL;
echo getType($x); //boolean
echo PHP_EOL;
var_dump($x); // bool (false)
echo PHP_EOL;
echo json_decode($x); //raw format

echo 'on comparing the values:';
echo (false==False);
echo PHP_EOL;
echo (false==FALSE);
echo PHP_EOL;
var_dump(0==FALSE);
echo PHP_EOL;
var_dump(0==false); //type is optional math content
echo PHP_EOL;
var_dump(0==(int)false); //implicit type conversion //php dynamic
echo PHP_EOL;
var_dump(0===false); //content match and type match = false



printf("the values of true in int  %d"true,);
echo PHP_EOL;
printf("the values of true as string  %s"true,);
echo PHP_EOL;
printf("the values of true as string  %s"1,);
echo PHP_EOL;
printf("the values of true as sring  %s",0);
echo PHP_EOL;
printf("the values of bool false as string  %s",json_decode(false));
echo PHP_EOL;
printf("the values of steing as empty as string  %s",'');
echo PHP_EOL;
printf("the values of bool false as sring:  %s",false);
echo PHP_EOL;
printf("the values of bool false as bool  %s",0);
echo PHP_EOL;
?>













