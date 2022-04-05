<?php

#step1 : make connection
include __DIR__.'/dbconnect.php';
require __DIR__.'/vendor/autoload.php';

$table = new LucidFrame\console\consoletable();
$table 

		->addHeader('SR no.')
		->addHeader('id')
		->addHeader('name')
		->addHeader('email');
		
		#step2: prepare the Query
		$sql = "SELECT * From emp";
		
#step3 : Execute the Queryor fire the Query
$result_set = mysqli_query($conn,$sql);

if(mysqli_num_rows($result_set)>0){
	
	$i=1;
	while($row=mysqli_fetch_assoc($result_set)){
		
		$table->addRow()
		->addcolumn($i)
		->addcolumn($row['id'])
		->addcolumn($row['name'])
		->addcolumn($row['email']);
		$i++;
	}
	$table->display();
	
}else if (mysqli_num_rows($result_set)==0){
	echo 'No record Found';
	
	
}else{
	echo 'inserted Error'.mysql_error($conn);
}
?>