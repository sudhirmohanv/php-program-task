<?php
echo"mode by sudhir mohan <br/>";
$num1 = $_REQUEST['num1'];
$num2 = $_REQUEST['num2'];
$num3 = $_REQUEST['num3'];
$num4 = $_REQUEST['num4'];
$num5 = $_REQUEST['num5'];
$res =($num1+$num2+$num3+$num4+$num5);
$res1=($res*100/500);
printf("student sub maeks ; %d ",$res);
printf("</br>student persentage ; %d ",$res1);

?>