<?php
 
    #define('HOST','localhost:3308');
	#define('USER','root');
	#define('PASSWORD','');
	#define('DBNAME','app-2021');
	#define('DB_CHECK',false);
	
	$Name='localhost:3308'; // host name
    $user='root';   // database user name
    $password='';   // database password
   $dbName = "app-2021"; // database name
 
    #$dbCon = mysqli_connect($id,$name,$age,$email"$dbusers");
    $dbCon = mysqli_connect($id,$Name,$age,$email "$dbusers");
 
      if(!$dbCon){
          die('Could not Connect MySql Server:' .mysql_error());
      }
?>