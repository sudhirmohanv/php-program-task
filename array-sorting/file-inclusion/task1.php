<?php
$count = 0;
$num = 2;
 while ($count < 15)
 {
	 $div_count=0;
	 for ($i=1;$i<=$num; $i++)
	 {
		 if(($num%si)==0)
		 {
			 $div_count++;
		 }
	 }
	 if($div_count<3)
	 {
		 echo $num" , " ;
		 
		 $count=$count+1;
	 }
	 $num=$num+1;
 }

?>