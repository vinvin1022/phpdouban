<?php
header('Access-Control-Allow-Origin:http://localhost:4200');
require_once("../connect_mysql.php");

$selectsql = "select * from article";
$resouce = $link->query($selectsql);

$arr = [

];
if($resouce != false && $resouce->num_rows > 0){
    while($row = $resouce->fetch_object()){
        $arr[] = $row;
    }
}

echo json_encode($arr);
