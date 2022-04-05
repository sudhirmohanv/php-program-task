<?php

include_once __DIR__.'/functions.php';
include_once __DIR__.'/Query-builder/Query.php';
 
$id = get('id');
if(!empty($id)){
	$query = new Query();
	$record=$query->select('*')->table('emp')->where('id',$id)->first();
	
}
?>


<html>
<head>
</head>
<body>
<form action=" <?php echo url("updateHandler.php");?>" method="post">
Name<br/>
<input type="text" name="name" value="<?php echo $record->name; ?>"/><br/><br/>
<input type="hiding" name="id" value="<?php echo $record->id; ?>"/><br/><br/>
Email<br/>
<input type="email" name="email" value="<?php echo $record->email;?>"/><br/>
<input type="submit" name="update"/>
</form>
</body>
</html>
