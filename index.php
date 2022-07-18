<?php
@session_start();
include("class.php");
include("time.php");
include("config.txt.php");
//mysql_select_db($db);
$str_sql = "Select * From history WHERE UserID = '".$_SESSION['UserID']."'";
$rs_student = mysqli_query($link, $str_sql);
	
$str_Status = "Select * From status";
$rs_Status = mysqli_query($link, $str_Status);

$strSQL = "SELECT * FROM Download order by id_download";
$objQuery = mysqli_query($link, $strSQL) or die ("Error Query [".$strSQL."]");

//mysql_select_db($db);
$result = mysqli_query($link, "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ") or die ("Err Can not to result");
$dbarr = mysqli_fetch_array($result);
?>
<?php


	$filename = 'log/ban.txt';
	
	
	$file = file_get_contents($filename);
	
	
	$ip_block = explode(',', $file);
	
	
	$ip_block = array_map('trim', $ip_block);
	
	if($_SERVER["HTTP_X_FORWARDED_FOR"]) 
	{
		$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
	} 
	else 
	{
		$ip = $_SERVER["REMOTE_ADDR"];
	}

	if( in_array($ip, $ip_block) ) 
	{
		header("Refresh: 0;url=404.php");
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Bot-Cheats">
<title>Bot-Cheats</title>
 <link href="bootstrap/css/min.css" rel="stylesheet" media="screen">
 <link href="bootstrap/css/min_css.min.css" rel="stylesheet">
 <link href="bootstrap-combined.min.css" rel="stylesheet">
   <link href="style.css" rel="stylesheet">
<link rel="shortcut icon" href="logo.ico">
<script>
	  document.createElement('header');
	  document.createElement('section');
	  document.createElement('article');
	  document.createElement('aside');
	  document.createElement('nav');
	  document.createElement('footer');
	</script>
    <style type="text/css">
<!--
.style1 {font-size: 18px}
.style5 {font-size: 16px}
-->
    </style>
  <style type="text/css">
<!--
#loading {
width: 200px;
height: 100px;
opacity: 0.5;
position: absolute;
left: 50%;
top: 50%;
margin-top: -50px;
margin-left: -100px;
text-align: center;
}
-->
</style>
    </head>
    <body>


    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/th_TH/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div class="bg">
      <img src="bootstrap/img/bg.png">
    </div>

    <div class="container">

      <header class="alphaBg">
          <p class="text-center"><img src="bootstrap/img/logo2.png"></p>
      </header>

      <div class="row">
      <!-- Left -->
        <div class="span3">
          <!-- Login -->
         
          <? if ($_SESSION["UserID"] == "")
          {?>
          <div id="fLogin">
          <div class="well">
			              <div class="panelHeading"><i class="icon-user icon-white"></i>ระบบสมาชิก</div>
			              <form class="form-horizontal" method="post" action="">
<? //ทำงานหน้า  ?login=0
if ($_POST["button"] == "เข้าสู่ระบบ")
{
$strSQL = "SELECT * FROM member WHERE Username = '".mysql_real_escape_string($_POST['username'])."' 
	and Password = '".mysqli_real_escape_string($_POST['password'])."'";
	$objQuery = mysqli_query($link, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	
	else
	{
		   echo '<div>';
		    echo '<div class="alert alert-success" align="center"><b class="icon-ok icon-white"></b>เข้าสู่ระบบสำเร็จ</div>';
	        print "<meta http-equiv=refresh content=0;URL=./?p=home>";
			$_SESSION["UserID"] = $objResult["UserID"];
			session_write_close();
						
			$strSQL2 = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
			$objQuery2 = mysql_query($strSQL2);
			$objResult2 = mysql_fetch_array($objQuery2);
			
			$_SESSION["UserID"] = $objResult["UserID"];			
	}
	mysqli_close();
?>

<? } ?>
                          <fieldset>
			                  <p>
			                    <label>ชื่อผู้ใช้</label>
			                    <input name="username" type="text" style="width:165px; height:30px;" id="username" maxlength="30" placeholder="Username">
			                    <label>รหัสผ่าน</label>
			                    <input name="password" type="password" style="width:165px; height:30px;" id="password" maxlength="30" placeholder="Password">
			                    <br><br>
		                      
                                <button type="submit" name="button" class="btn btn-small" value="เข้าสู่ระบบ" >เข้าสู่ระบบ</button>
                               
			                  <a href="./?p=register"> <button type="button" class="btn btn-small">สมัครสมาชิก</button></a>
			                </fieldset>
			              </form>
			            </div></div>
          <? }else{ ?>
          <div id="fLogin">
          <div class="well">
					              <div class="panelHeading"><i class="icon-user icon-white"></i>ข้อมูลสมาชิก</div>
					               
                                    <p><strong>ชื่อผู้ใช้:</strong> <?php echo $dbarr['Username'] ;?></p>
					                <p><strong>พ้อยคงเหลือ:</strong> <span class="badge badge-success" id="memberPoint"><?php echo $dbarr['Point'] ;?></span></p>
                            
                                    <br>
<p class="text-center"><a href="./?p=logout"> <button type="button" class="btn btn-danger btn-small"><i class="icon-off icon-white"></i> ออกจากระบบ</button></a>
					            </div>
                                <? if($dbarr["Status"] == "member") { ?>
                                <? }else{ ?>
                                <div class="well">
            <div class="panelHeading"><i class="icon-align-justify icon-white"></i>เมนูสำหรับแอดมิน</div>
            <ul id="menuNav" class="nav nav-list">
              <?php if($_GET['p'] == "newcodemoney" ) {
            echo "<li  class='active'>";
            }else if($_GET['p'] != "news" && $_GET['p'] != "codemoney" && $_GET['p'] != "ban" && $_GET['p'] != "topup" && $_GET['p'] != "history" && $_GET['p'] != "buy" && $_GET['p'] != "code" && $_GET['p'] != "download"  && $_GET['p'] != "sendmsgbox" && $_GET['p'] != "point" && $_GET['p'] != "mailbox" && $_GET['p'] != "codemoney" && $_GET['p'] != "video" && $_GET['p'] != "newcodemoney" && $_GET['p'] != "addprograme" && $_GET['p'] != "changepass" && $_GET['p'] != "hwid" && $_GET['p'] != "logout" && $_GET['p'] != "expire" && $_GET['p'] != "rehwid" ){
            echo "<li  class='active'>";
            }else{
            echo "<li>";
            } ?>
			'active'>";
                }else{
                echo "<li>";
                } ?>
            <a href="?p=history"><i class="icon-calendar icon-white"></i> ประวัติการใช้งาน</a> </li>
        </li>
        <li>
            <?php if($_GET['p'] == "changepass" ) {
                echo "<li  class='active'>";
                }else{
                echo "<li>";
                } ?>
            <a href="?p=changepass"><i class="icon-lock icon-white"></i> เปลี่ยนรหัสผ่าน</a> </li>
        </li>

            </ul>
          </div>
          <? }else{ ?>

             <li>
            <?php if($_GET['p'] == "video" ) {
                echo "<li  class='active'>";
                }else{
                echo "<li>";
                } ?>
            <a href="?p=video"></i><i class="icon-film icon-white"></i> ตัวอย่างโปรแกรม</a> </li>
        </li>
		<li>
            <?php if($_GET['p'] == "topup" ) {
                echo "<li  class='active'>";
                }else{
                echo "<li>";
                } ?>
            <a href="?p=topup"><i class="icon-star icon-white"></i> เติมเงิน</a> </li>
        </li>
        <li>
            <?php if($_GET['p'] == "code" ) {
                echo "<li  class='active'>";
                }else{
                echo "<li>";
                } ?>
            <a href="?p=code"><i class="icon-plus-sign icon-white"></i> เติมโค้ดรับพ้อย</a> </li>
        </li>
        <li>
            <?php if($_GET['p'] == "point" ) {
                echo "<li  class='active'>";
                }else{
                echo "<li>";
                } ?>
            <a href="?p=point"><i class="icon-refresh icon-white"></i> โอนพ้อย</a> </li>
        </li>
		<li>
            <?php if($_GET['p'] == "buy" ) {
                echo "<li  class='active'>";
                }else{
                echo "<li>";
                } ?>
            <a href="?p=buy"><i class="icon-shopping-cart icon-white"></i> เช่าโปรแกรม</a> </li>
        </li>
        <li>
            <?php if($_GET['p'] == "rehwid" ) {
                echo "<li  class='active'>";
                }else{
                echo "<li>";
                } ?>
            <a href="?p=rehwid"><i class="icon-refresh icon-white"></i> ย้ายเครื่อง</a> </li>
        </li>
        <li>
            <?php if($_GET['p'] == "expire" ) {
                echo "<li  class='active'>";
                }else{
                echo "<li>";
                } ?>
            <a href="?p=expire"><i class="icon-time icon-white"></i> ระยะเวลาคงเหลือ</a> </li>
        </li>
        <li>
            <?php if($_GET['p'] == "download" ) {
                echo "<li  class='active'>";
                }else{
                echo "<li>";
                } ?>
            <a href="?p=download"><i class="icon-download icon-white"></i> ดาวน์โหลด</a> </li>
        </li>
        <li>
            <?php if($_GET['p'] == "hwid" ) {
                echo "<li  class='active'>";
                }else{
                echo "<li>";
                } ?>
            <a href="?p=hwid"><i class="icon-wrench icon-white"></i> จัดการ HWID</a> </li>
        </li>
        <li>
            <?php if($_GET['p'] == "history" ) {
                echo "<li  class='active'>";
                }else{
                echo "<li>";
                } ?>
            <a href="?p=history"><i class="icon-calendar icon-white"></i> ประวัติการใช้งาน</a> </li>
        </li>
        <li>
            <?php if($_GET['p'] == "changepass" ) {
                echo "<li  class='active'>";
                }else{
                echo "<li>";
                } ?>
            <a href="?p=changepass"><i class="icon-lock icon-white"></i> เปลี่ยนรหัสผ่าน</a> </li>
        </li>
    
         </li>
         
          <? } ?>
          <? if ($_SESSION["UserID"] == "") { ?>
  
      <? }else{ ?>
       </div>
      </div>
      <? 
