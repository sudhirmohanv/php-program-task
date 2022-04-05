<?php
// Wap in php to convert Array of object to Associativ Array

$json = file_get_contents(__DIR__.'/student.json');
$student_Array =json_decode($json,true);
$student = $student_Array['data'];
?>