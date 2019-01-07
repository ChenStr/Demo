<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/7
 * Time: 20:13
 */
header("Access-Control-Allow-Origin : http://10.10.117.106:63341");
header("Access-Control-Allow-Credentials : true");
header('Access-Control-Allow-Headers : Content-Type');
$str=file_get_contents('php://input');
$username=json_decode($str)["username"];
$password=json_decode($str)["password"];
if($username=="van" && $password=="van")
{
    $data=array("message"=>"success");
}
else{
    $data=array("message"=>"error");
}
return $data;
?>