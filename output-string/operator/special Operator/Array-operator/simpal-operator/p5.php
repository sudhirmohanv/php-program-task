<?php
//wap in php to + operation in array with Duplicate Subscript
$x=[10,20,30,40];
$y =[100,200,300,400,500];


echo "The count of x :".count($x);
echo PHP_EOL;
echo "The count of y :".count($y);
echo PHP_EOL;

var_dump(count($x)==count($y));
print_r($x); 
print_r($y); 

print_r($x+$y);//$x.add($y)
print_r($y+$x);//$x.add($x)



?>