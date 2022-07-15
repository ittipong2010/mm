<?php
include('config.txt.php');
mysql_select_db($db);
$result = mysql_query("SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ") or die ("Err Can not to result");
$dbarr = mysql_fetch_array($result);
?>
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
 <div class="span6">
          <!-- Content -->
          <div id="fContent"><div class="well">
				              <div class="panelHeading"	><i class="icon-calendar icon-white"></i>สมัครสมาชิก</div>
                              <p align="center">
                  <form class="form-horizontal" method="post" action="">
    <table width="380" align="center" cellpadding="8" cellspacing="3" class="">
    <!-- <div class="alert alert-success" align="center">กรุณากรอกข้อมูล</div> -->
                      <?php
if ($_POST["button"] == "สมัครสมาชิก")
{
if($_POST['txtPassword']!=$_POST['txtConPassword'])
{
echo '<div class="alert alert-error" align="center">รหัสผ่านไม่ตรงกันค่ะ</div>';
print "<meta http-equiv=refresh content=1;URL=./?p=register>";
}
?>
<?php
    date_default_timezone_set('Asia/Bangkok');
    $Today = date("d/m/Y H:i:s");
	$strSQL45 = "SELECT * FROM member WHERE Username = '".trim($_POST['txtUsername'])."' ";
	$objQuery45 = mysql_query($strSQL45);
	$objResult45 = mysql_fetch_array($objQuery45);
	if($objResult45)
	{
		echo '<div class="alert alert-error" align="center">ชื่อผู้ใช้งานนี้มีอยู่แล้วในระบบ</div>';
       print "<meta http-equiv=refresh content=1;URL=./?p=register>";;
	}
	if(trim($_POST["txtUsername"] && $_POST["txtPassword"] && $_POST["txtConPassword"] && $_POST["txtEmail"]) == "") 
{
echo '<div class="alert alert-error" align="center">กรุณากรอกข้อมูลให้ครบถ้วน</div>';
print "<meta http-equiv=refresh content=1;URL=./?p=register>";
?>
	<?php }else{ ?>
 <?
        $user = $_POST['txtUsername'];
		$ips = getenv(REMOTE_ADDR);
		$strSQL45 = "INSERT INTO member (Username,Password,Email,Date,Point,IP) VALUES ('".$_POST['txtUsername']."', 
		'".$_POST['txtPassword']."','".$_POST['txtEmail']."','".$Today."','0','".$ips."')";
		$objQuery45 = mysql_query($strSQL45);
		echo '<div id="overlay" class="overlay"></div>';
		echo '<div id="loading" class="loading"></div>';
		echo '<div class="alert alert-success" align="center">สมัครสมาชิกเเรียบร้อยแล้วค่ะ</div>';
print "<meta http-equiv=refresh content=1;URL=./?p=home>";
?>
 </div>
</div>
<?php }} ?>
          <tbody>
				<div class="control-group">
				<label class="control-label" for="regUsername">ชื่อผู้ใช้</label>
				<div class="controls">
				<input type="text" name="txtUsername" style="width:165px; height:30px;" id="txtUsername" maxlength="30" placeholder="Username">
				</div>
				</div>
          <div class="control-group">
				<label class="control-label" for="regUsername">รหัสผ่าน</label>
				<div class="controls">
				<input type="password" name="txtPassword" style="width:165px; height:30px;" id="txtPassword" maxlength="30" placeholder="Password">
				</div>
				</div>
           <div class="control-group">
			<label class="control-label" for="regRepassword">ยืนยันรหัสผ่าน</label>
			<div class="controls">
			<input type="password" name="txtConPassword" style="width:165px; height:30px;" id="txtConPassword" maxlength="30" placeholder="conPassword">
			</div>
			</div>
          <div class="control-group">
			<label class="control-label" for="regRepassword">อีเมลล์</label>
			<div class="controls">
			<input type="text" name="txtEmail" style="width:165px; height:30px;" id="txtEmail" maxlength="30" placeholder="Email">
			</div>
			</div>
          <tr>
            <td colspan="2" align="center" valign="middle"><p class="text-center"><button type="submit" name="button" class="btn btn-primary" value="สมัครสมาชิก" ><i class="icon-pencil icon-white"></i> ตกลง</button>
           
        </table>
  </form> 
	</div> 
   </div>
 </div> <!-- /container -->
            
     
            
    