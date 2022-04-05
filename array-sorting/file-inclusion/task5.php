<?php
$a1 = array("a"=>"sudhir","b"=>"mohan","c"=>"ram","d"=>"sohan");
$a2 = array("a"=>"sudhir","b"=>"mohan","c"=>"ram","d"=>"sohan");

$newArray = array_intersect($a1,$a2);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>