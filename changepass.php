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
				            <div class="panelHeading"><i class="icon-lock icon-white"></i>เปลี่ยนรหัสผ่าน</div>
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
				            <div class="panelHeading"><i class="icon-lock icon-white"></i>เปลี่ยนรหัสผ่าน</div>

<?
if ($_POST["button"] == "เปลี่ยนรหัสผ่าน")
{
	echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
$oldpassword = trim($_POST["txtPass"]);
$password = trim($_POST["txtPassword"]); // 
$repassword = trim($_POST["txtConPassword"]);
// ดึงข้อมูลขึ้นมาเปรียบ 
$passcode_se = $oldpassword;
$sql = "select * from member where UserID ='".$_SESSION['UserID']."'AND Password ='".$passcode_se."'";
$result = mysql_query($sql);
$num = mysql_num_rows($result);
if ($num==0)
echo '<div class="alert alert-error" align="center">รหัสผ่านเก่าไม่ถูกต้อง</div>';
print "<meta http-equiv=refresh content=1;URL=./?p=changepass>";
// 2.2 password = repassword die() สามารถที่จะใส่ข้อความเข้าไปได้ เช่น die(''เกิดข้อผิดพลาด ระบบได้ออกจากคำสั่ง") ;
if ($password != $repassword)
echo '<div class="alert alert-error" align="center">รหัสผ่านใหม่ไม่ตรงกัน</div>';
print "<meta http-equiv=refresh content=1;URL=./?p=changepass>";
// 6. save data
//$password = md5($password);
$List = 'เปลี่ยนรหัสผ่านเป็น '.$_POST["txtPassword"].'';
$ips = getenv(REMOTE_ADDR);
date_default_timezone_set('Asia/Bangkok');
$Today = date("d/m/Y H:i:s");
$passcodenew = ($password);
$sql = "update member set Password ='$passcodenew' where UserID ='".$_SESSION['UserID']."'";
$strSQL = "INSERT INTO history (UserID,List,Date,IP) VALUES ('".$dbarr['UserID']."', 
		'".$List."','".$Today."','".$ips."')";
		$objQuery = mysql_query($strSQL);
$result = mysql_query($sql) or die("Err : $sql");
echo '<div class="alert alert-success" align="center">เปลี่ยนรหัสผ่านเเรียบแล้วครับ</div>';
 print "<meta http-equiv=refresh content=1;URL=./?p=home>";
}
?>

				          <form class="form-horizontal formChangepw" method="post">
				            <div class="control-group">
				            <label class="control-label" for="txtPass">รหัสผ่านเดิม</label>
				            <div class="controls">
				           <input name="txtPass" style="width:165px; height:30px;" id="txtPass" type="password" maxlength="30" placeholder="รหัสผ่านเดิม">
				            </div>
				            </div>
				           <div class="control-group">
				                    <label class="control-label" for="txtPassword">รหัสผ่านใหม่</label>
				                    <div class="controls">
				                      <input name="txtPassword" style="width:165px; height:30px;" id="txtPassword" type="password" maxlength="30" placeholder="รหัสผ่านใหม่">
				                    </div>
				                </div>
				                <div class="control-group">
				                    <label class="control-label" for="txtConPassword">ยืนยันรหัสผ่านใหม่</label>
				                    <div class="controls">
				                      <input name="txtConPassword" style="width:165px; height:30px;" id="txtConPassword" type="password" maxlength="30" placeholder="ยืนยันรหัสผ่านใหม่">
				                    </div>
				                </div>
				                <div class="controls">
                                <button type="submit" name="button" class="btn btn-danger" value="เปลี่ยนรหัสผ่าน" >ตกลง</button>
				                </div>
				            </form>
				          </div></div>
        </div>
							
									<?php } ?>