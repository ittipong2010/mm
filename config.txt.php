<?


//ตัวอย่างไวยากรณ์การเชื่อมต่อฐานข้อมูลสำหรับ PHP และ MySQL

	

	//เชื่อมต่อกับฐานข้อมูล

	

	$hostname="localhost";

	$username="webbot";

	$password="Yn677q?p1";

	$dbname="webbot";

	$usertable="SET NAMES UTF8";

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



//mysqli_connect("108.61.99.51","webbot","Yn677q?p1") or die("Cannot connect the Server");   
//mysqli_select_db("webbot") or die("Cannot select database");   
//mysqli_query("set character set utf8");   
?>
