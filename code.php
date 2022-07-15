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
				            <div class="panelHeading"><i class="icon-plus-sign icon-white"></i> เติมโค้ดรับพ้อย</div>
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
				            <div class="panelHeading"><i class="icon-plus-sign icon-white"></i> เติมโค้ดรับพ้อย</div>
                              <p align="center">
        <?
if ($_POST["button"] == "เติมโค้ด")
{
	if(!isset($_POST['code']) || $_POST["code"] == "")
	{
		echo '<div class="alert alert-error" align="center">กรุณากรอกข้อมูลลงในช่องค่ะ</div>';
        print "<meta http-equiv=refresh content=1;URL=./?p=code>";
	}
	$code = trim($_POST["code"]);
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	$strSQL2 = "SELECT * FROM money_code WHERE Code = '$code'";
	$objQuery2 = mysql_query($strSQL2);
	$objResult2 = mysql_fetch_array($objQuery2);
	if(!$objResult or !$objResult2)
	{
		echo '<div class="alert alert-error" align="center">ไม่พบโค้ดนี้ในระบบค่ะ</div>';
        print "<meta http-equiv=refresh content=1;URL=./?p=code>";

	}
	if($error != "")
	{
		echo "<tr><td>";
		echo $error;
		echo "</td></tr></table>";
		exit();
	}
	if($objResult && $objResult2)
	{
		$point = $objResult2["Point"];
		$rem_point = $objResult["Point"] + $objResult2["Point"];
		$strSQL = "UPDATE member SET Point = '$rem_point' WHERE UserID = '".$_SESSION['UserID']."'";
		$objQuery = mysql_query($strSQL);
		$_SESSION["money"] = $rem_point;
		if($objQuery)
		{
			$strSQL = "DELETE FROM money_code WHERE Code = '".$code."'";
			$objQuery = mysql_query($strSQL);
			if($objQuery)
			{
				echo '<div class="alert alert-success" align="center">ได้รับพ้อยเพิ่ม '.$point.' พ้อยค่ะ</div>';
                print "<meta http-equiv=refresh content=1;URL=./?p=home>";
			}
		}
	}
}
?>
<div class="text-center" id="msgbox"><h3>เติมโค้ด</h3></div>
<form class="topupForm" method="post">
<fieldset>
<label>รหัสโค้ด</label>
<input type="text" style="width:165px; height:30px;" name="code" id="code" placeholder="กรอกโค้ดในช่องนี้" class="form-control">
<p></p>
<button type="submit" name="button" class="btn btn-primary" value="เติมโค้ด" ><i class="icon-ok icon-white"></i> เติมโค้ด</button>
</fieldset>
</form>													 
															</div>
														</div>
												  </div>
									
							
									<?php } ?>