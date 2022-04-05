<?php
//wap in php to show foreach Array

$data=[

[
  'id'=>'1',
  'name'=>'sudhir',
  'class'=>'12th'
],

[
  'id'=>'2',
  'name'=>'Reetesh',
  'class'=>'LKG'
],

[
  'id'=>'3',
  'name'=>'Akash',
  'class'=>'nursery'
],

];


foreach($data as $user){

echo "---------------------- \n ";
echo "user id = {$user['id']} \n ";
echo "user name = {$user['name']} \n ";
echo "user class = {$user['class']} \n ";
echo "---------------------- \n ";

}