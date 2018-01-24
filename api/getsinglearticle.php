<?php
header('Access-Control-Allow-Origin:http://localhost:4200');
require_once("../connect_mysql.php");

$id = $_GET["id"];

$selectsql = "select * from article where id={$id}";
$resouce = $link->query($selectsql);

$arr = null;
if($resouce != false && $resouce->num_rows > 0){
    $arr = $resouce->fetch_object();
}

echo json_encode($arr);
