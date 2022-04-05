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
	
	$data=[];
	while($row=mysql_fetch_array($result_set,MYSQLI_BOTH)){
		$data[] = $row;
		
	}
}else if (mysqli_affected_rows($result_set)==0){
	echo "No record found ";
}
else {
	echo "error".mysqli_query_error($conn);
}
$i=1;
foreach($data as $row){
	
	$table ->addRow()
		   ->addColumn($row->id)
		   ->addColumn($row->name)
		   ->addColumn($row->email);
		   
		   
		   $i++;
		   
}
$table->display();
?>