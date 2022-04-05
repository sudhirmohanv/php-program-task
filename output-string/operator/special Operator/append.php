<?php
//wap in phpto show append operation in string

$name='sudhir';
$lname = 'kumar vishwakarma';

$name = $name.$lname;
echo $name;

echo PHP_EOL;

$name='sudhir';
$lname = 'kuman vishwakarma';
$name .=$lname; //concate 
echo $name;
echo PHP_EOL;
$name .=$lname; //append
echo $name;
?>