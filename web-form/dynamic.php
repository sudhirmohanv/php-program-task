<?php

$data = array(

'Name'=>'sudhir',
'class'=>'MBA',
'Rollno'=>1001
);

echo <<<FORM

<h1>student form</h1>
<hr/>
<form>
<p>
Name:<input type="text" value="{$data['Name']}">
</p>


<p>
class:<input type="text" value="{$data['class']}">
</p>

<p>
Rollno:<input type="text" value="{$data['Rollno']}">
</p>
</form>
FORM;
?>