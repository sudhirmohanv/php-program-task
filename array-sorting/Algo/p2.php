<?php

//wap in php to show a array with 2 Elements

$a=[30,10];
$temp=$a[0];
$a[0]=$a[1];
$a[1]=$temp;
print_r($a);
?>