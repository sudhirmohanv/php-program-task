<?php
//wap in php to sort

$a = [10];  //count greater 1
$a = [10,20]; //count == 2 Already sorted ascending or descending
$a = [1030,20,100,50,110,120];

for($j=0;$j<count($a);$j++){
	for($i=$j+1;$i<count($a);$i++){
		if($a[$j]>$a[$i]){
			
			$temp = $a[$i];
			$a[$i] = $a[$j];
			$a[$j] = $temp;
		}
	}
}
print_r($a);

?>