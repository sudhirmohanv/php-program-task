<?php

//wap in php to show hte defference b/w null and undefind

$x='a';
echo $x;
echo PHP_EOL;
var_dump($x);
var_dump(isset($x));
echo PHP_EOL;
printf("The memory x =%d",memory_get_usage($x));
unset($y)
printf("The memory y =%d",memory_get_usage($y));

echo PHP_EOL;
echo 'Info about z';
echo PHP_EOL;

$x='a';
echo $z;
echo PHP_EOL;
var_dump($z);
var_dump(isset($x));
echo PHP_EOL;
printf("The memory z =%d",memory_get_usage($z));
unset($y)
printf("The memory z =%d",memory_get_usage($z));
?>