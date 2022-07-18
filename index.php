
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
					              <
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

          
          
