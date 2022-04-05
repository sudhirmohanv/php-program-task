<?php
$fp = fopen('sudhir.txt','r');

$txt = fgets($fp,1024);

echo $txt;
?>