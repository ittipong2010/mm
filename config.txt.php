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

//ตัวอย่างไวยากรณ์การเชื่อมต่อฐานข้อมูลสำหรับ PHP และ MySQL

	

	//เชื่อมต่อกับฐานข้อมูล

	

	$hostname="your_hostname";

	$username="webbot";

	$password="Yn677q?p1";

	$dbname="webbot";

	$usertable="your_tablename";

	$yourfield = "your_field";

	

	mysql_connect($hostname,$username, $password) หรือเสียหาย ("html>script language='JavaScript'>alert('ไม่สามารถเชื่อมต่อกับฐานข้อมูลได้! โปรดลองอีกครั้งในภายหลัง'),history.go(-1)/script>/html>");

	mysqli_select_db($dbname);

	

	# ตรวจสอบว่ามีเรคคอร์ดอยู่หรือไม่

	

	$query = "SELECT * FROM $usertable";

	

	$result = mysqli_query($query);

	

	if($result){

		while($row = mysqli_fetch_array($result)){

			$name = $row["$yourfield"];

			echo "Name: ".$name."br/>";

		}

	}

$cn = mysqli_connect($config["host"],$config["user"],$config["pass"]);
$db = mysqli_select_db($config["db"]);
@mysqli_query("SET NAMES UTF8");
if(!$cn&&!$db){die(mysqli_error());}

mysqli_connect("108.61.99.51","webbot","Yn677q?p1") or die("Cannot connect the Server");   
mysqli_select_db("webbot") or die("Cannot select database");   
mysqli_query("set character set utf8");   
?>
