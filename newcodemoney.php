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
				            <div class="panelHeading"><i class="icon-shopping-cart icon-white"></i>สร้างโค้ดเงิน</div>
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
<?php
if($dbarr["Status"] == "member")
{
?>
<div class="span6">
          <!-- Content -->
          <div id="fContent"><div class="well">
				            <div class="panelHeading"><i class="icon-shopping-cart icon-white"></i>สร้างโค้ดเงิน</div>
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
				              <div class="panelHeading"	><i class="icon-shopping-cart icon-white"></i>สร้างโค้ดเงิน</div>
                              <p align="center">
                              <?
if ($_POST["button"] == "สร้างโค้ด")
{
	if($_POST['code'] == "")
	{
	echo '<div class="alert alert-error" align="center">กรุณากรอกข้อมูลให้ครบ</div>';
    print "<meta http-equiv=refresh content=1;URL=./?p=newcodemoney>";
	}
	
	if($_POST['code'] == "0")
	{
	echo '<div class="alert alert-error" align="center">ไม่สามารถกรอก 0 ได้ค่ะ</div>';
    print "<meta http-equiv=refresh content=1;URL=./?p=newcodemoney>";
	}
	else
	$code = trim($_POST["code"]);
	$code2 = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ23456789'),0,15);
	$strSQL = "INSERT INTO money_code (Code,Point) VALUES ('".$code2."','".$code."')";
	$objQuery = mysql_query($strSQL);
	{
	echo '<div class="alert alert-success" align="center">สร้างโค้ดเรียบร้อยแล้วค่ะ</div>';
    print "<meta http-equiv=refresh content=1;URL=./?p=newcodemoney>";
	}
}
?>
<form class="topupForm" method="post">
<fieldset>
<label>สร้างโค้ดเงิน</label>
<input type="text" style="width:165px; height:30px;" name="code" id="code" placeholder="กรอกจำนวนเงิน" class="form-control">
<p></p>
<button type="submit" name="button" class="btn btn-success" value="สร้างโค้ด" ><span class="icon-ok icon-white"></span> สร้างโค้ด</button>
 </fieldset>
</form>	

  </div> </div></div>
							
									<?php } ?>
									<?php } ?>