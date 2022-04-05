<?php
//wap in php to show modify operators


$x=10;
$x=$x+1;
echo "The value of x without Assignment operator: $x \n";


$x=10;
$x++;
echo "The value of x without Assignment operator: $x \n";

$x=10;
$z=$x++;
echo "The value of x using pre Increment operator : $x and $z \n";

$x=10;
$z=++$x;
echo "The value of x using pre Increment operator : $x and $z \n";

?>