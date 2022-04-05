<?php
$value= $_REQUEST['value'];
$rate = $_REQUEST['rate'];
$time = $_REQUEST['time'];
$SI = (($value*$rate*$time)/100);
printf("Simple Interesr %d",$SI);

?>