<?php
$name1 = $_REQUEST['name1'];
$name2 = $_REQUEST['name2'];
$submit1 =($name1+$name2);
$submit2 =($name1-$name2);
$submit3 =($name1*$name2);
$submit4 =($name1/$name2);
echo "result is :",$submit1;
echo "</br>result is :",$submit2;
echo "</br>result is :",$submit3;
echo "</br>result is :",$submit4;
?>