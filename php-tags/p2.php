<?php
//wap in php to show core php file 

echo 'this line from core php file';
echo PHP_EOL;

function test(){
	
	echo 'this is function from core php file';
	echo PHP_EOL;
}
test();

class Test{
	
	public function display(){
		echo 'This is display method from Test class from core php file ';
		echo PHP_EOL;
	}
}

$test = new Test();
$test->display();

echo '<h1>This is HTML Heading Tage</h1>';

//optional closing
?>