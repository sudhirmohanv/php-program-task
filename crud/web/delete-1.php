<?php
include_once __DIR__.'/Query-builder/Query.php';
include_once __DIR__.'/functions.php';


$id = get('id');
if(!empty($id)){
	$query = new Query();
	if($query->delete('emp')->where('id',$id)->commit()){
		header("Location:".url('show.php?status=record-deleted'));
	}else{
		exit('cannot Delete the Record');
	}
}
?>