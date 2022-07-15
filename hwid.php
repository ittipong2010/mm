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
				            <div class="panelHeading"><i class="icon-wrench icon-white"></i>จัดการ HWID</div>
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
if ($dbarr['HWID'] == '0') {
?>
<div class="span6">
          <!-- Content -->
          <div id="fContent"><div class="well">
				            <div class="panelHeading"><i class="icon-wrench icon-white"></i>จัดการ HWID</div>
                              <p align="center">
                              <?php
include("config.txt.php");

if ($_POST["button"] == "ยืนยันการใส่ไอดีเครื่อง")
{
if($_POST['txthwid']=="0")
{
echo '<div class="alert alert-error" align="center">ไม่สามารถใส่ 0 ได้ครับ</div>';
print "<meta http-equiv=refresh content=1;URL=./?p=hwid>";
?>
 
<?php }else{ ?>
<?
$strSQL = "UPDATE member SET HWID = '".$_POST['txthwid']."'  WHERE UserID = '".$_SESSION["UserID"]."' ";
$objQuery = mysql_query($strSQL);
echo '<div class="alert alert-success" align="center">จัดการเลขเครื่องเรียบร้อยแล้ว</div>';
print "<meta http-equiv=refresh content=1;URL=./?p=home>";
?>

 <?php }} ?>
        <div class="text-center"><h3>จัดการเลขเครื่อง</h3></div><br/>										
															 <div class="alert alert-error" align="center"> <strong>คำเตือน</strong> (หากคุณยังไม่มีไอดีเครื่องให้ดาวโหลดโปรแกรมดูไอดีเครื่องจากลิ้งด้านล่าง)</div>
<form name="p" method="post" class="form-horizontal"  onSubmit="JavaScript:return fncSubmit();">
					   <div align="center">
					     <p>ใส่ไอดีเครื่องของคุณ : </label></p>
                           <p><input name="txthwid" style="width:250px; height:30px;" type="text" class="form-control fixinputnav" id="txthwid" maxlength="32" placeholder="กรอกไอดีเครื่องที่ได้จากโปรแกรม" required="">
					     </p>
        </div>
				 
					<center>
					  <p>
					  <button type="submit" name="button" value="ยืนยันการใส่ไอดีเครื่อง" class="btn btn-primary">ยืนยันการใส่ไอดีเครื่อง</button>
				      </p>
					</center>
    <div align="center">
				    <p><a href="http://exp-pro.pe.hu/download/HWID.rar" target="_blank"><span class="style1">ดาวน์โหลดโปรแกรมเช็คไอดีเครื่อง</span></a></p>
    </div>	
					</div>
					
  </div>
</form>
															</table>															 
															
												
										
</div>
			<?php }else{?>
<div class="span6">
          <!-- Content -->
          <div id="fContent"><div class="well">
				            <div class="panelHeading"><i class="icon-wrench icon-white"></i>จัดการ HWID</div>
                              <p align="center">
                              <button type="submit" name="21" class="btn btn-mini btn-info" value="0" "="><span class="glyphicon glyphicon-shopping-cart"></span><i class="icon icon-shopping-cart icon-white"></i><a href="?p=rehwid">ปลดล็อคเครื่อง</a></button>
        <div class="alert alert-danger" align="center"><strong><strong><span style="color: white" class="glyphicon glyphicon-remove"></span> แจ้งเตือน </strong>คุณสามารถจัดการเลยเครื่องได้ครั้งเดียวถ้าจะใช้โปรแกรมในเครื่องอืนต้องไปย้ายเครื่องก่อนค่ะ</div>      </div>
	</div> 
   </div>
<?php }?>
<?php } ?>