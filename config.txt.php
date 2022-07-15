<?
$config = array(
'host'=>"localhost",
'user'=>"webbot",
'pass'=>"u25v!7Ns0",
'db'=>"webbot",
'topup'=>"145141", //เลขบัญชี tmtopup
'key'=>"1650200165723", //key ที่ตั้งค่าใน tmtopup
'name'=>"Exp-Pro"
);

$cn =($GLOBALS["___mysqli_ston"] = mysqli_connect($config["host"], $config["user"], $config["pass"]));
$db = mysqli_select_db($GLOBALS["___mysqli_ston"], $config["db"]);
@mysqli_query($GLOBALS["___mysqli_ston"], "SET NAMES UTF8");
if(!$cn&&!$db){die(mysqli_error($GLOBALS["___mysqli_ston"]));}


($GLOBALS["___mysqli_ston"] = mysqli_connect("localhost", "webbot", "u25v!7Ns0")) or die("Cannot connect the Server");   
mysqli_select_db($GLOBALS["___mysqli_ston"], webbot) or die("Cannot select database");   
mysqli_query($GLOBALS["___mysqli_ston"], "set character set utf8");   

?>
