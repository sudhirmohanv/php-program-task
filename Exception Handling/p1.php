<?php  

//wap in php to show Exception Handling

$x = readline('Enter the x number :');
$y = readline('Enter the y number :');
$result = 0;
try{
	echo "Block of try started...\n";
	$Result = $x/$y;
	echo "Block of try Endeded...\n";
	
}catch (Exception $e){
	echo "some Exception Raised ".$e->getmessage();
	echo "\n";
}finally{
	echo "This Block will be, Executed....\n";
	echo "This Result = $result \n";
}


?>