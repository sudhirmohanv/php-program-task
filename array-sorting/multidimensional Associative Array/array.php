<?php

$arr = [

		"sudhir" =>[
		"physics"=>45,
		"math" => 50,
		"chemistry" => 89
		],
		
		"mohan" =>[
		"physics"=>60,
		"math" => 50,
		"chemistry" => 70
		],
		
		"vishwakarma" =>[
		"physics"=>44,
		"math" => 70,
		"chemistry" => 35
		],
		];
		echo "<table border='2px'>
		<tr>
			<th>student</th>
			<th>physice</th>
			<th>maths</th>
			<th>chemistry</th>
		</tr>";
		
		foreach($arr as $key => $value1){
			
			echo " <tr><td>$key</td>";
			foreach($value1 as $value2){
				echo "<td>$value2</td>";
			}
			echo "</tr>";
		}
		
		echo "<table>";
		
		
		
		
?>