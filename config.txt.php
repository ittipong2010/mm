<?
$config = array(
'host'=>"mysql.hostinger.in.th",
'user'=>"u418312450_bot01",
'pass'=>"44541230za",
'db'=>"u418312450_bot01",
'topup'=>"145141", //เลขบัญชี tmtopup
'key'=>"1650200165723", //key ที่ตั้งค่าใน tmtopup
'name'=>"Exp-Pro"
);

$cn =mysql_connect($config["host"],$config["user"],$config["pass"]);
$db = mysql_select_db($config["db"]);
@mysql_query("SET NAMES UTF8");
if(!$cn&&!$db){die(mysql_error());}

mysql_connect("mysql.hostinger.in.th","u418312450_bot01","44541230za") or die("Cannot connect the Server");   
mysql_select_db("u418312450_bot01") or die("Cannot select database");   
mysql_query("set character set utf8");   
?>