<?php

//wap in php to find perfect number 

$n=readline('Enter the a value:');

for($i=1;$i<$n;$i++){
	if($n%$i==0){
		echo "$i \n";
	}
}

?>