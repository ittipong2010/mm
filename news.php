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
				            <div class="panelHeading"><i class="icon-comment icon-white"></i> แจ้งข่าวใหม่</div>
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
				            <div class="panelHeading"><i class="icon-comment icon-white"></i> แจ้งข่าวใหม่</div>
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
				            <div class="panelHeading"><i class="icon-comment icon-white"></i> แจ้งข่าวใหม่</div>
                              <p align="center">
<?
if ($_POST["button"] == "แจ้ง")
{
$strSQL = "INSERT INTO News ";
$strSQL .="(News,Date) ";
$strSQL .="VALUES ";
$strSQL .="('".$_POST["News"]."',NOW() ) ";
$objQuery = mysql_query($strSQL);
if($objQuery)
{
echo '<div class="alert alert-success" align="center">แจ้งข่าวใหม่เรียบร้อยแล้วค่ะ</div>';
print "<meta http-equiv=refresh content=1;URL=./?p=home>";
}
else
{
echo '<div class="alert alert-error" align="center">ไม่สามารถแจ้งข่าวได้ค่ะ</div>';
print "<meta http-equiv=refresh content=1;URL=./?p=news>";
}
}
?>
<div class="text-center" id="msgbox"><h3>แจ้งข่าว</h3></div>
<form class="topupForm" method="post">
<fieldset>
<label>ข่าวที่จะแจ้ง</label>
<input type="text" style="width:165px; height:30px;" name="News" placeholder="ข่าวที่จะแจ้ง" class="form-control">
<p></p>
<button type="submit" name="button" class="btn btn-success" value="แจ้ง" ><span class="icon-ok icon-white"></span> แจ้ง</button>
 </fieldset>
</form>													 
     </div></div>     </div>                                                  
<?php } ?>
<?php } ?>