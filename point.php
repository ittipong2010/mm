<div id="overlay" class="overlay"></div>
<div id="loading" class="loading"></div>
<script type="text/javascript">
<!-- Begin
window.onload=function(){
document.getElementById("loading").style.display="none";
document.getElementById("overlay").style.display="none";
}
// End -->
</script>
<?php
if ($_SESSION["UserID"] == "")
{
?>
<div class="span6">
          <!-- Content -->
          <div id="fContent"><div class="well">
				            <div class="panelHeading"><i class="icon-refresh icon-white"></i> โอนพ้อย</div>
                              <p align="center">
            <div class="alert alert-error" align="center"><b class="icon-remove icon-white"></b> กรุณาเข้าสู่ระบบก่อน
              <script>
			              	$('#updateListScrollbar').slimScroll({
					            height: '300px',
					            alwaysVisible: true
					        });
			              </script>
            </div>
          </div></div>
        </div>
<?php }else{ ?>
<div class="span6">
          <!-- Content -->
          <div id="fContent"><div class="well">
				            <div class="panelHeading"><i class="icon-refresh icon-white"></i> โอนพ้อย</div>
                              <p align="center">
<?
if ($_POST["button"] == "โอน")
{
	if(!isset($_POST['username']) || $_POST["username"] == "")
	{
		echo '<div class="alert alert-error" align="center">กรุณากรอกชื่อผู้ใช้ที่จะโอนพ้อยให้ค่ะ</div>';
        print "<meta http-equiv=refresh content=1;URL=./?p=point>";
	}
	if(!isset($_POST['point']) || $_POST["point"] == "")
	{
		echo '<div class="alert alert-error" align="center">กรุณากรอกจำนวนเงินที่ขะโอน</div>';
        print "<meta http-equiv=refresh content=1;URL=./?p=point>";
	}
	$username = trim($_POST["username"]);
	$user = $dbarr['Username'];
	$onpoint = trim($_POST["point"]);
	$strSQL = "SELECT * FROM member WHERE Username = '".mysql_real_escape_string($_POST['username'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
		echo '<div class="alert alert-error" align="center">ไม่พบชื่อผู้ใช้นี้อยู่ในระบบ</div>';
        print "<meta http-equiv=refresh content=1;URL=./?p=point>";
	}
	if ($dbarr['Point'] < 10)
	{
		echo '<div class="alert alert-error" align="center">สามารถโอนพ้อยได้ 10 พ้อยขึ้นไปค่ะ</div>';
        print "<meta http-equiv=refresh content=1;URL=./?p=point>";
	}
	if ($dbarr['Point'] < $onpoint)
	{
		echo '<div class="alert alert-error" align="center">พ้อยคงเหลือไม่พอสำหรับโอนค่ะ</div>';
        print "<meta http-equiv=refresh content=1;URL=./?p=point>";
	}
     else
	{
	$strSQL10 = "INSERT INTO mail (header,mailinfo,sender,receiver,date) VALUES ('แจ้งเตือน','admin','".$username."','คุณ $user ได้โอนพ้อยให้คุณ $onpoint พ้อยค่ะ',NOW())";
	$objQuery10 = mysql_query($strSQL10);
	$sql_up = "update member set Point= Point - '$onpoint' WHERE UserID = '".$_SESSION['UserID']."' ";$dbquery_up = mysql_query($sql_up);
	$sql_up = "update member set Point= Point + '$onpoint' WHERE Username = '".$username."' ";$dbquery_up = mysql_query($sql_up);
	echo '<div class="alert alert-success" align="center">โอนพ้อยให้ '.$username.' เรียบร้อยแล้วค่ะ</div>';
    print "<meta http-equiv=refresh content=1;URL=./?p=home>";
	}
}
?>
<form class="topupForm" method="post">
<fieldset>
<label>ชื่อผู้ใช้</label>
<input type="text" style="width:165px; height:30px;" name="username" id="username" placeholder="ชื่อผู้ใช้ที่จะโอน" class="form-control">
<p></p>
<label>จำนวนเงิน</label>
<input type="text" style="width:165px; height:30px;" name="point" id="point" placeholder="กรอกจำนวนเงิน" class="form-control">
<p></p>
<button type="submit" name="button" class="btn btn-primary" value="โอน" ><i class="icon-ok icon-white"></i> โอน</button>
</fieldset>
</form>													 
															</div>
														</div></div>
												
											
							
									<?php } ?>