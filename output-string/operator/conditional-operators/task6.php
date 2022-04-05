<?php

//wap in php to find perfect number using recusion and tre

$n=readline('Enter the n value:');

if(is_perfect($n)){
	echo "$n is perfect No.";
}
else{
	
	echo "$n is Not perfect NO.";
}
 function is_perfect($n,$i=1,$sum=0){
	 if($i==$n){
		 return false;
	 }else{
		 if($n % $i==0){
			 $sum = $sum+$i;
		 }
		 if($sum==$n){
			 return true;
		 }
		 return is_perfect($n,$i+1,$sum);
	 }
 }
?>