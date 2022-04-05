<?php
//wap in php to + operation in array with Duplicate Subscript

$x=[10,20,30,'sudhir'];

$y[0]='Doremon';
$y[1]=100;
$y[2]=200;

print_r($x);
print_r(count($x));
print_r($y);
print_r(count($y));
print_r($x + $y);  //$x.add($y)


print_r($y + $x);  //$y.add($x)



?>