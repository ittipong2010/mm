﻿<?
$config = array(
'host'=>"108.61.99.51",
'user'=>"webbot",
'pass'=>"Yn677q?p1",
'db'=>"webbot",
'topup'=>"145141", //เลขบัญชี tmtopup
'key'=>"1650200165723", //key ที่ตั้งค่าใน tmtopup
'name'=>"Exp-Pro"
);

$con = mysqli_connect('108.61.99.51','webbot','Yn677q?p1');
mysqli_select_db('webbot', $con)

$cn = mysqli_connect($config["host"],$config["user"],$config["pass"]);
$db = mysqli_select_db($config["db"]);
@mysqli_query("SET NAMES UTF8");
if(!$cn&&!$db){die(mysqli_error());}

mysqli_connect("108.61.99.51","webbot","Yn677q?p1") or die("Cannot connect the Server");   
mysqli_select_db("webbot") or die("Cannot select database");   
mysqli_query("set character set utf8");   
?>
