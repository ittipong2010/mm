


//ตัวอย่างไวยากรณ์การเชื่อมต่อฐานข้อมูลสำหรับ PHP และ MySQL



	//เชื่อมต่อกับฐานข้อมูล

	

	$hostname="localhost";

	$username="webbot";

	$password="u25v!7Ns0";

	$dbname="webbot";

	$usertable="member";

	$yourfield = "Username";

	

	mysql_connect($hostname,$username, $password) หรือเสียหาย ("html>script language='JavaScript'>alert('ไม่สามารถเชื่อมต่อกับฐานข้อมูลได้! โปรดลองอีกครั้งในภายหลัง'),history.go(-1)/script>/html>");

	mysqli_select_db($dbname);

	;

	>";

		}

	



   



<?php

$con=mysqli_connect("localhost","webbot","u25v!7Ns0","webbot");

// Check connection

if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

  exit;

}

echo "Initial character set is: " . mysqli_character_set_name($con);

// Change character set to utf8

mysqli_set_charset($con,"utf8");

echo "Current character set is: " . mysqli_character_set_name($con);

mysqli_close($con);

?>
