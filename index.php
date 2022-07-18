
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
	{
	 echo '<div class="alert alert-error" align="center"><b class="icon-remove icon-white"></b> ชื่อผู้ใช้หรือรหัสผิด</div>';
	 print "<meta http-equiv=refresh content=1;URL=./?p=home>";
	}
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
			<a href="./?p=newcodemoney"><i class="icon-shopping-cart icon-white"></i> สร้างโค้ดเงิน</span></a> </li>
                           
		<li>
            <?php if($_GET['p'] == "codemoney" ) {
                echo "<li  class='active'>";
                }else{
                echo "<li>";
                } ?>
            <a href="./?p=codemoney"><span class="icon-book icon-white"></span> โค้ดเงินทั้งหมด</a> </li>
        </li>
		<li>
            <?php if($_GET['p'] == "ban" ) {
                echo "<li  class='active'>";
                }else{
                echo "<li>";
                } ?>
            <a href="./?p=ban"><span class="icon-off icon-white"></span> แบน IP</a> </li>
        </li>
        <li>
            <?php if($_GET['p'] == "news" ) {
                echo "<li  class='active'>";
                }else{
                echo "<li>";
                } ?>
            <a href="./?p=news"><span class="icon-comment icon-white"></span> แจ้งข่าวใหม่</a> </li>
        </li>
        <li>
            <?php if($_GET['p'] == "addprograme" ) {
                echo "<li  class='active'>";
                }else{
                echo "<li>";
                } ?>
            <a href="./?p=addprograme"><span class="icon-plus-sign icon-white"></span> เพิ่มโปรแกรม</a> </li>
        </li>
                                <? } ?>
                                
          <? } ?>
          <? if($dbarr["Status"] == "admin") { ?>
       </div>
         <? }else{ ?>
       
           <? } ?>
          <!-- Menu -->
      
          <div class="well">
            <div class="panelHeading"><i class="icon-align-justify icon-white"></i>โปรแกรมช่วยเล่น</div>
            <ul id="menuNav" class="nav nav-list">
              <?php if($_GET['p'] == null ) {
            echo "<li  class='active'>";
            }else if($_GET['p'] != "adminlist" && $_GET['p'] != "codemoney" && $_GET['p'] != "ban" && $_GET['p'] != "topup" && $_GET['p'] != "history" && $_GET['p'] != "buy" && $_GET['p'] != "code" && $_GET['p'] != "download"  && $_GET['p'] != "sendmsgbox" && $_GET['p'] != "point" && $_GET['p'] != "mailbox" && $_GET['p'] != "codemoney" && $_GET['p'] != "video" && $_GET['p'] != "newcodemoney" && $_GET['p'] != "changepass" && $_GET['p'] != "hwid" && $_GET['p'] != "logout" && $_GET['p'] != "expire" && $_GET['p'] != "rehwid" ){
            echo "<li  class='active'>";
            }else{
            echo "<li>";
            } ?>
			<a href="./?p=home"><i class="icon-home icon-white"></i> หน้าแรก</span></a> </li>
          <?php 
			if ($_SESSION["UserID"] == "") { ?>
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
      <? } ?>

          
          <!-- Statistics -->
     
          <!-- Radio -->
          <div class="well">
            <div class="panelHeading"><i class="icon-align-justify icon-white"></i>สถิติเว็บไซต์</div>
            <div class="text-center">
            
            </div>
          </div>
          <div class="well">
            <div class="panelHeading"><i class="icon-headphones icon-white"></i>วิทยุ (Wink)</div>
            <div class="text-center"><embed src="http://www.coolzaa.com/player/miniplayer.swf" width="100%" height="18" align="middle" allowscriptaccess="always" flashvars="file=http://radio.servradio.com:9094/;stream.nsv&amp;type=mp3&amp;stretch=none&amp;autostart=true&amp;volume=100&amp;displayclick=none">          </div>
          </div>
     
        </div>
 
        
        <?php if($_GET['p'] == "topup" ) {
    include("topup.php");
	}else if($_GET['p'] == "buy" ) {
    include("buy.php");
	}else if($_GET['p'] == "register" ) {
    include("register.php");
	}else if($_GET['p'] == "fig" ) {
    include("fig.php");
	}else if($_GET['p'] == "expire" ) {
    include("expire.php");
	}else if($_GET['p'] == "news" ) {
    include("news.php");
	}else if($_GET['p'] == "download" ) {
    include("download.php");
	}else if($_GET['p'] == "rehwid" ) {
    include("rehwid.php");
	}else if($_GET['p'] == "changepass" ) {
    include("changepass.php");
	}else if($_GET['p'] == "home" ) {
    include("home.php");
    }else if($_GET['p'] == "history" ) {
    include("history.php");
	}else if($_GET['p'] == "hwid" ) {
    include("hwid.php");
	}else if($_GET['p'] == "code" ) {
    include("code.php");
	}else if($_GET['p'] == "msgbox" ) {
    include("msgbox.php");
	}else if($_GET['p'] == "point" ) {
    include("point.php");
	}else if($_GET['p'] == "addprograme" ) {
    include("add_programe.php");
	}else if($_GET['p'] == "adminlist" ) {
    include("admin_list.php");
	}else if($_GET['p'] == "historycode" ) {
    include("historycode.php");
	}else if($_GET['p'] == "codemoney" ) {
    include("codemoney.php");
	}else if($_GET['p'] == "ban" ) {
    include("ban.php");
	}else if($_GET['p'] == "itemcode" ) {
    include("itemcode.php");
	}else if($_GET['p'] == "newcodemoney" ) {
    include("newcodemoney.php");
	}else if($_GET['p'] == "sendmsgbox" ) {
    include("sendmsgbox.php");
	}else if($_GET['p'] == "video" ) {
    include("video.php");
	}else if($_GET['p'] == "logout" ) {
    include("logout.php");
    }else{
    include("home.php");
    } ?>

 <div class="span3">
          <!-- Program status -->
          <div id="fStatus"><div class="well">
				            <div class="panelHeading"><i class="icon-signal icon-white"></i>สถานะโปรแกรม</div>
				            <table class="table table-condensed table-bordered table-hover programStatus">
				              <thead>
				                <tr>
				                  <th class="tProgram">โปรแกรม</th>
				                  <th class="tVersion">เวอร์ชั่น</th>
				                  <th class="tStatus">สถานะ</th>
				                </tr>
				              </thead>
                              <?php
while($objResult = mysql_fetch_array($objQuery))
{
$Bt = $objResult["Programe"];
$Point = $objResult["Point"];
$Day = $objResult["Day"];

$resultq = mysql_query("select * from BuyItem where Programe='".$Bt."'") or die ("Err Can not to result");
$objResult2 = mysql_fetch_array($resultq);

if($objResult['Status'] == "Online")
{
$Ststus = "$online";
}
if($objResult['Status'] == "Offline")
{
$Ststus = "$offline";
}
if($objResult['Status'] == "Soon")
{
$Ststus = "$Soon";
}


?>

				              <tbody>
                              <tr>
			                  <td><?=$objResult["Name"];?></td>
			                  <td><?=$objResult["Version"];?></td>
			                  <td><?php echo $Ststus; ?></td>
			                </tr>
                            </tbody>
                            <? }?>
				            </table>
				          </div></div>
        
        
        <div class="well">
            <div class="panelHeading"><i class="icon-signal icon-white"></i>สถานะเว็บไซต์</div>
			 <table class="table table-condensed table-bordered table-hover programStatus">
				              <thead>
				                <tr>
				                  <th class="tProgram">ระบบ</th>
				                   <th class="tStatus">สถานะ</th>
				                </tr>
				              </thead>
				              <tbody>
							  							  <tr>
			                  <td>ระบบเว็บ</td>
			                  
			                 	  			                  <td><span class="label label-success"><i class="icon-ok icon-white"></i> ปกติ</span></td>
							  			                </tr>
							</tbody>
							    <tbody>
										  <tr>
			                  <td>ระบบเติมเงิน</td>
			                  
			                 	  							     <td><span class="label label-success"><i class="icon-ok icon-white"></i> ปกติ</span></td>
							  			                </tr>
							</tbody>
							  <tbody>
										  <tr>
			                  <td>ระบบเติมโค้ดรับพ้อย</td>
			                  
			                 	  							     <td><span class="label label-success"><i class="icon-ok icon-white"></i> ปกติ</span></td>
							  			                </tr>
                                                        <tr>
			                  <td>ระบบโอนพ้อย</td>
			                  
			                 	  							     <td><span class="label label-success"><i class="icon-ok icon-white"></i> ปกติ</span></td>
							  			                </tr>
							</tbody>
				            </table>
        </div>
        
        
          <div class="well">
            <div class="panelHeading"><i class="icon-thumbs-up icon-white"></i>เฟสบุ๊ค</div>
            <div class="fb-like-box" data-href="https://www.facebook.com/lChocohack" data-width="180" data-height="400" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
          </div>
        </div>
      </div>

      <footer class="alphaBg">
        <p class="text-center powered">© 2015 <a href="http://bot-cheats.pe.hu/member/index.php">Bot-Cheats</a></p>
      </div>
    </div>
  </body>
</html>
