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
				            <div class="panelHeading"><i class="icon-refresh icon-white"></i>ย้ายเครื่อง</div>
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
<?
include("config.txt.php");
$result = mysql_query("SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ") or die ("Err Can not to result");
$dbarr = mysql_fetch_array($result);
$ips = getenv(REMOTE_ADDR);
date_default_timezone_set('Asia/Bangkok');
$Today = date("d/m/Y H:i:s");
$strSQL = "SELECT * FROM Download order by id_download";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>


<div class="span6">
          <!-- Content -->
          <div id="fContent"><div class="well">
				              <div class="panelHeading"	><i class="icon-calendar icon-white"></i>สมัครสมาชิก</div>
                              <p align="center">
                              <?php
if ($_POST["button"] == "rehwid") 
{
if ($dbarr['Point'] < $rehwidpoint) 
{
echo '<div class="alert alert-error" align="center">พ้อยคงเหลือไม่พอสำหรับย้ายเครื่อง</div>';
print "<meta http-equiv=refresh content=1;URL=./?p=rehwid>";
}else{
if ($dbarr['HWID'] == '0') 
{
echo '<div class="alert alert-error" align="center">โปรแกรมของคุณยังไม่ได้ล็อกอินที่เครื่องใด</div>';
print "<meta http-equiv=refresh content=1;URL=./?p=rehwid>";
}else{
echo '<div class="alert alert-success" align="center">ย้ายเครื่องสำเร็จ</div>';
print "<meta http-equiv=refresh content=1;URL=./?p=rehwid>";
$List = "ย้ายเครื่อง";
$sql_up = "update member set Point= Point - '$rehwidpoint' where UserID = '".$_SESSION['UserID']."' ";$dbquery_up = mysql_query($sql_up); // Buy Hwid 10 Point
$sql_up = "update member set HWID= '0' where UserID = '".$_SESSION['UserID']."' ";$dbquery_up = mysql_query($sql_up); // Buy Free Hwid
$strSQL = "INSERT INTO history (UserID,List,Date,IP) VALUES ('".$dbarr['UserID']."', 
		'".$List."','".$Today."','".$ips."')";
		$objQuery = mysql_query($strSQL);
}}}
?>
<form class="form-horizontal" method="post">
    <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
	<thead>
        <tr>
          <th width="155"><div align="center" class="style3">โปรแกรม</div></th>
          <th width="159"><div align="center" class="style3">ราคา</div></th>
          <th width="227"><div align="center" class="style3">ย้ายเครื่อง</div></th>
        </tr>
        <tr>
          <td><div align="center" class="style2">ทั้งหมด</div></td>
          <td><div align="center" class="style2"><?php echo $rehwidpoint; ?> Point </div></td>
          <td><div align="center"><span class="style2"><span class="style2"></span></span>
		  <button type="submit" name="button" class="btn btn-mini btn-success" value="rehwid"><span class="glyphicon glyphicon-shopping-cart"></span><i class="icon icon-refresh icon-white"></i> ย้ายเครื่อง</button>
            </div></td>
        </tr>
      </table>
	  <p align="center" class="text-info style3">ใช้พ้อยต์ <span style="background-color: #5993FC" class="badge"><?php echo $rehwidpoint; ?></span> พ้อยต์หากต้องการย้ายเครื่อง</p>
<p align="center" class="text-danger style3">ย้ายเครื่องหรือเปลี่ยนเครื่องเพื่อใช้โปรแกรมในกรณีที่ต้องการเล่นเครื่องอื่น</p>
    </div>
  </div>
</form>
</div>
<?php } ?>