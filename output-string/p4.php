<?php

//wap in php to show defference b/w eow and processed in the combination 


//escape character sequence
#echo ''''; //invalid 
#echo """"; //invalid
 

echo 'The line is \n single tabbled "\t double " tabbled.';
echo PHP_EOL;
echo "The line is \n single tabbled '\t double ' tabbled.";

//with variable
echo PHP_EOL;
$a=100;
echo 'the value of $a is :"$a" ';
echo PHP_EOL;
echo "the value of $a is :'$a' ";
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo 'the value of $a is :'.$a;
echo PHP_EOL;
echo 'the value of $a is :"'.$a.'"';
echo PHP_EOL;
echo 'the value of $a is :'."'$a'";
?>