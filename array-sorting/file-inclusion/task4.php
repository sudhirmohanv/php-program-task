<?php
$emp = array(
				array(1,"mohan","class","CS","age",20),
				array(2,"sudhir","class","IT","age",30),
				array(3,"vipin","class","CS","age",40),
				array(4,"Akash","class","BCA","age",60),
				array(5,"sandeep","class","CS","age",70),
				array(6,"Reetesh","class","IT","age",50),
			);
			
			echo "<table border=  '2px'>";
			echo "<tr>";
			echo "<th>id</th>";
			echo "<th>name</th>";
			echo "<th>class</th>";
			echo "<th>class</th>";
			echo "<th>age</th>";
			echo "<th>age</th>";
			echo "</tr>";
			foreach($emp as $v1){
				echo "<tr>";
				foreach($v1 as $v2){
					echo "<td> $v2 </td>";
				
			}
			echo "</tr>";
			}
		echo "</table>";
?>