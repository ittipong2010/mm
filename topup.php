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
				            <div class="panelHeading"><i class="icon-wrench icon-white"></i>เติมเงิน</div>
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
include("config.txt.php");

mysql_select_db($db);
$result = mysql_query("SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."'") or die ("Err Can not to result");
$dbarr = mysql_fetch_array($result);

$id = $dbarr['id'];
?>
 <script type="text/javascript" src='https://www.tmtopup.com/topup/3rdTopup.php?uid=ใสเลขTMT'></script>
<div class="span6">
          <!-- Content -->
          <div id="fContent"><div class="well">
				            <div class="panelHeading"><i class="icon-wrench icon-white"></i>เติมเงิน</div>
                              <p align="center">
				            <form class="topupForm" id="topupForm">
				              <fieldset>
				                <label>รหัสบัตรทรูมันนี่</label>
<input name="tmn_password" type="text" id="tmn_password" style="width:165px; height:30px; placeholder="รหัสบัตรทรูมันนี่ 14 หลัก" class="form-control" maxlength="14" />
                                <input type="hidden" value="<?php echo $dbarr['Username'] ;?>" id="ref1" name="ref1">&nbsp;
                                <input type="hidden" value="<?php echo $dbarr['Email'] ;?>" id="ref2" name="ref2">
                                <input type="hidden" value="<?php echo $dbarr['Point'] ;?>" id="ref3" name="ref3">
				                <p><input id="agreeTos" type="checkbox"> <a onclick="tos();" href="#">ยอมรับข้อตกลงการใช้งาน</a></p>
				                 <input name="button" class="btn btn-success" type="button" onClick="submit_tmnc()" value="เติมเงิน" size="" />
				              </fieldset>
				            </form>
				            <table class="table table-condensed table-bordered table-hover tmTable">
				              <caption><h5>ตารางพ้อยที่จะได้รับ</h5></caption>
				              <thead>
				                <tr>
				                  <th class="price">ราคาบัตร</th>
				                  <th class="amount">จำนวนพ้อย</th>
				                </tr>
				              </thead>
				              <tbody>
				                <tr>
				                  <td>50</td>
				                  <td>50</td>
				                </tr>
				                <tr>
				                  <td>90</td>
				                  <td>90</td>
				                </tr>
				                <tr>
				                  <td>150</td>
				                  <td>150</td>
				                </tr>
				                <tr>
				                  <td>300</td>
				                  <td>300</td>
				                </tr>
				                <tr>
				                  <td>500</td>
				                  <td>500</td>
				                </tr>
				                <tr>
				                  <td>1000</td>
				                  <td>1000</td>
				                </tr>
				              </tbody>
				            </table>
				            <p class="text-center"><img src="images/tmcard.png"></p>
				          </div></div>
        </div>
<?php } ?>