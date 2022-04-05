<?php

// wap in php  to nullable and empty
$x='';
var_dump($x);

PHP_EOL;
var_dump($x=='');
PHP_EOL;
var_dump($x=="");
PHP_EOL;
var_dump($x==="");
PHP_EOL;
var_dump($x==='');
PHP_EOL;
var_dump(empty($x));
PHP_EOL;
var_dump(empty(''));
PHP_EOL;
var_dump(empty(""));
$y="";
var_dump($y);
PHP_EOL;
var_dump($x==$y);
PHP_EOL;
var_dump($x===$y);
echo 'be aware b/w empty and  "<apace>" ';



echo PHP_EOL;
echo '';
echo PHP_EOL;
echo getType('');
echo PHP_EOL;
echo strlen('');
echo PHP_EOL;
echo ' ';
echo PHP_EOL;
echo getType(' ');
echo PHP_EOL;
echo strlen(' ');
echo PHP_EOL;
echo ord(''); //Ascii
echo PHP_EOL;
echo ord('a'); //Ascii



?>