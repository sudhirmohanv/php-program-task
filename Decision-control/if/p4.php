<?php

//wap in php to find add even  using single if

$n = readline('Enter the Number:');
if ($n%2==0){
	echo "no is even \n";
	goto exit_label;
}
echo "no is add \n";
exit_label:;
// broblem entir script will break;
?>