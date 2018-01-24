<?php
$sqlconfig = [
    "localhost"=>"localhost",
    "username"=>"root",
    "password"=>"123456",
    "db"=>"douban"
];

$link = new mysqli($sqlconfig["localhost"],$sqlconfig["username"],$sqlconfig["password"],$sqlconfig["db"]);
if(mysqli_connect_errno()){
    printf("Connect failed:%s",mysqli_connect_error());
}
$link->set_charset("utf8");


