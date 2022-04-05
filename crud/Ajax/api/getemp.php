<?php
require_once __DIR__.'/Query-builder/Query.php';
require_once __DIR__.'/functions.php';

header("content-Type:application/json");
http_response_code(200);

if($_SERVER['REQUEST_METHOD']=='GET'){
$query = new Query();
$records = $query->select("*")->table('emp')->allRecords();

$response = array(
    'code'=>200,
    'status'=>true,
    'message'=>'Employee Data Records Found',
    'error'=>false,
    'data'=>$records,
);

}else{
    
$response = array(
    'code'=>201,
    'status'=>false,
    'message'=>'No Records Found',
    'error'=>false,
    'data'=>[],
);
}

echo json_encode($response,JSON_PRETTY_PRINT);
exit();


