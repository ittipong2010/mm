<?
$config = array(
'host'=>"108.61.99.51",
'user'=>"webbot",
'pass'=>"Yn677q?p1",
'db'=>"webbot",
'topup'=>"145141", //เลขบัญชี tmtopup
'key'=>"1650200165723", //key ที่ตั้งค่าใน tmtopup
'name'=>"Exp-Pro"
);

$cn =mysql_connect($config["host"],$config["user"],$config["pass"]);
$db = mysql_select_db($config["db"]);
@mysql_query("SET NAMES UTF8");
if(!$cn&&!$db){die(mysql_error());}

mysql_connect("108.61.99.51","webbot","Yn677q?p1") or die("Cannot connect the Server");   
mysql_select_db("webbot") or die("Cannot select database");   
mysql_query("set character set utf8");   
?>
