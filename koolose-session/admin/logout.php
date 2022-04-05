<?php
session_start();
if(isset($SESSION['validUser'])){
		session_destroy();
		header("Location:../");
		
}
?>

