<?php

require __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/data.php';

$table = new LucidFrame\Console\ConsoleTable();
$table
    ->addHeader('sr No.')
    ->addHeader('Roll')
    ->addHeader('name')
    ->addHeader('marsk');
$i=1;
foreach($student as $student){
	
    $table->addRow()
	
        ->addColumn($i)
        ->addColumn($student['roll'])
        ->addColumn($student['name'])
        ->addColumn($student['marsk']);
    $i++;
}
$table->display();
