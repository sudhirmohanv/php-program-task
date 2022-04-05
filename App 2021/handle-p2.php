<?php

#echo getType($_REQUEST);
#print_r($_REQUEST);    #super global varible (predifined in PHP)

$name = $_REQUEST['name'];
//echo $name;

//Hy welcome ! Mr.Sudhir
printf("Hy welcome ! Mr. %s",$name);

?>