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
				            <div class="panelHeading"><i class="icon-plus-sign icon-white"></i> เพิ่มโปรแกรม</div>
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
				            <div class="panelHeading"><i class="icon-plus-sign icon-white"></i> เพิ่มโปรแกรม</div>
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
				            <div class="panelHeading"><i class="icon-plus-sign icon-white"></i> เพิ่มโปรแกรม</div>
                              <p align="center">
        <?
if ($_POST["button"] == "เพิ่ม")
{
$strSQL = "INSERT INTO BuyItem ";
$strSQL .="(Programe,Point,Day) ";
$strSQL .="VALUES ";
$strSQL .="('".$_POST["Programe"]."','".$_POST["Point"]."','".$_POST["Day"]."' ) ";
$objQuery = mysqli_query($strSQL);
if($objQuery)
{
echo '<div class="alert alert-success" align="center">เพิ่มโปรใหม่เรียบร้อยแล้ว</div>';
print "<meta http-equiv=refresh content=1;URL=./?p=home>";
}
else
{
echo '<div class="alert alert-error" align="center">ไม่สามารถเพิ่มได้ค่ะ</div>';
print "<meta http-equiv=refresh content=1;URL=./?p=addprograme>";
}
}
$strSQL1 = "INSERT INTO Download ";
$strSQL1 .="(Programe,link,link2,Status,Name,Version,Function,Picture,Clip) ";
$strSQL1 .="VALUES ";
$strSQL1 .="('".$_POST["Programe"]."','".$_POST["link1"]."','".$_POST["link2"]."','".$_POST["Status"]."','".$_POST["Name"]."','".$_POST["Version"]."','".$_POST["Function"]."','".$_POST["Picture"]."','".$_POST["Clip"]."' ) ";
$objQuery1 = mysqli_query($strSQL1);
if($objQuery1)
{

}
else
{

}
?>
        <?
if ($_POST["button"] == "เพิ่มวัน")
{
$strSQL = "INSERT INTO BuyItem ";
$strSQL .="(Programe,Point,Day) ";
$strSQL .="VALUES ";
$strSQL .="('".$_POST["Programe1"]."','".$_POST["Point1"]."','".$_POST["Day1"]."' ) ";
$objQuery = mysqli_query($strSQL);
if($objQuery)
{
echo '<div class="alert alert-success" align="center">เพิ่มโปรใหม่เรียบร้อยแล้ว</div>';
print "<meta http-equiv=refresh content=1;URL=./?p=home>";
}
else
{
echo '<div class="alert alert-error" align="center">ไม่สามารถเพิ่มได้ค่ะ</div>';
print "<meta http-equiv=refresh content=1;URL=./?p=addprograme>";
}
}
?>
<div class="text-center" id="msgbox"><h3>เพิ่มโปรแกรม</h3></div>
<form class="topupForm" method="post">
<fieldset>
    <label>โปรแกรม</label>
     <input type="text" style="width:185px; height:30px;" name="Programe" placeholder="โปรแกรม" class="form-control">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">ราคาเช่า</label>
    <div class="col-sm-5">
      <input type="text" style="width:185px; height:30px;" name="Point" placeholder="ราคาเช่า" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">จำนวนวัน</label>
    <div class="col-sm-5">
      <input type="text" style="width:185px; height:30px;" name="Day" placeholder="จำนวนวัน" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">ลิ้งดาวห์โหลด1</label>
    <div class="col-sm-5">
      <input type="text" style="width:185px; height:30px;" name="link1" placeholder="ลิ้งดาวห์โหลด1" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">ลิ้งดาวห์โหลด2</label>
    <div class="col-sm-5">
      <input type="text" style="width:185px; height:30px;" name="link2" placeholder="ลิ้งดาวห์โหลด2" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">สถานะ</label>
    <div class="col-sm-5">
      <input type="text" style="width:185px; height:30px;" name="Status" placeholder="สถานะ" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">ชื่อโปร</label>
    <div class="col-sm-5">
      <input type="text" style="width:185px; height:30px;" name="Name" placeholder="ชื่อโปร" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">เวอร์ชั้น</label>
    <div class="col-sm-5">
      <input type="text" style="width:185px; height:30px;" name="Version" placeholder="เวอร์ชั้น" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">ฟังก์ชั้นโปร</label>
    <div class="col-sm-5">
      <input type="text" style="width:185px; height:30px;" name="Function" placeholder="ฟังก์ชั้นโปร" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">ลิ้งรูป</label>
    <div class="col-sm-5">
      <input type="text" style="width:185px; height:30px;" name="Picture" placeholder="ลิ้งรูป" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">ลิ้งคลิป</label>
    <div class="col-sm-5">
      <input type="text" style="width:185px; height:30px;" name="Clip" placeholder="ลิ้งคลิป" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-5">
    <button type="submit" name="button" class="btn btn-success" value="เพิ่ม" ><span class="icon-ok icon-white"></span> เพิ่มโปรแกรม</button>
	</div>
  </div>
</form>		
<div class="text-center" id="msgbox"><h3>เพิ่มวัน+ราคาเช่าโปรแกรม</h3></div>
<form class="topupForm" method="post">
<fieldset>
    <label>โปรแกรม</label>
     <input type="text" style="width:185px; height:30px;" name="Programe1" placeholder="โปรแกรม" class="form-control">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">ราคาเช่า</label>
    <div class="col-sm-5">
      <input type="text" style="width:185px; height:30px;" name="Point1" placeholder="ราคาเช่า" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">จำนวนวัน</label>
    <div class="col-sm-5">
      <input type="text" style="width:185px; height:30px;" name="Day1" placeholder="จำนวนวัน" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-5">
    <button type="submit" name="button" class="btn btn-success" value="เพิ่มวัน" ><span class="icon-ok icon-white"></span> เพิ่มวัน</button>
	</div>
  </div>
  </fieldset>
  </form>											 
															</div>
														</div>
												  </div>
                                                  

					
									<?php } ?>
									<?php } ?>
