<?php
$ips = getenv(REMOTE_ADDR);
date_default_timezone_set('Asia/Bangkok');
$Today = date("d/m/Y H:i:s");

	session_start();
	include("../config.inc.php");
	$strSQL = "SELECT * FROM member WHERE Username = '".mysql_real_escape_string($_POST['txtUsername'])."' 
	and Password = '".mysql_real_escape_string($_POST['txtPassword'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
			exit();
	}
	else
	{
			$_SESSION["id"] = $objResult["UserID"];
			session_write_close();
						
			$strSQL2 = "SELECT * FROM member WHERE UserID = '".$_SESSION['id']."' ";
			$objQuery2 = mysql_query($strSQL2);
			$objResult2 = mysql_fetch_array($objQuery2);
			
			
			$ht = 'LOGIN PB VIP';
			$strSQL = "INSERT INTO history (UserID,List,Date,IP) VALUES ('".$objResult2["id"]."','".$ht."','".$Today."','".$ips."')";
			$objQuery = mysql_query($strSQL);
			
			//ทำเพิ่มเพื่อให้ข้อมูลอัพเดทเพิ่ม
			$strSQL2 = "SELECT * FROM member WHERE UserID = '".$_SESSION['id']."' ";
			$objQuery2 = mysql_query($strSQL2);
			$objResult2 = mysql_fetch_array($objQuery2);

	}
	mysql_close();

?>

<p id="HWID"><?=$objResult2["HWID"];?></p>
<p id="Date1"><?=$Today?></p>
<p id="Date2"><?=$objResult2["WarZ_Siam"];?></p>