<?php

$num1 = $_REQUEST['num1'];
$num2 = $_REQUEST['num2'];
$res = ($num1*$num2);
$res1 = (($num1*$num2)*2);
printf("</br>Total Area of : %.2f ",$res);
printf("</br>Area Racktangle of : %.2f ",$res1);

?>