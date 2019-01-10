<?php
header("Access-Control-Allow-Origin : http://10.30.29.56:63341");
header("Access-Control-Allow-Credentials : true");
header('Access-Control-Allow-Headers : Content-Type');

//修改一下
//echo '{"userName":"123"}';
$data=array("userName"=>"van");
echo json_encode($data);
?>