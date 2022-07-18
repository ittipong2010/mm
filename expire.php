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
//if ($_SESSION["UserID"] == "")
{
?>
<div class="span6">
          <!-- Content -->
          <div id="fContent"><div class="well">
				            <div class="panelHeading"><i class="icon-time icon-white"></i>ระยะเวลาคงเหลือ</div>
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
include('config.txt.php');
//mysql_select_db($db);
$result = mysqli_query("SELECT * FROM member WHERE UserID = '"00487"' ") or die ("Err Can not to result");
$dbarr = mysqli_fetch_array($result);
?>

<!--- เวลาคงเหลือ---->
<?php

function get_datetime_diff($datetime_start,$datetime_end)
{
    $seconds = strtotime($datetime_end) - strtotime($datetime_start);

     $days    = floor($seconds / 86400);
     $hours   = floor(($seconds - ($days * 86400)) / 3600);
     $minutes = floor(($seconds - ($days * 86400) - ($hours * 3600))/60);
     $seconds = floor(($seconds - ($days * 86400) - ($hours * 3600) - ($minutes*60)));

     echo $days." วัน ".$hours." ชั่วโมง ".$minutes." นาที ".$seconds." วินาที";
}
date_default_timezone_set('Asia/Bangkok');
$testdate = date("d-m-Y H:i:s");
?>  
 <div class="span6">
          <!-- Content -->
          <div id="fContent"><div class="well">
					            <div class="panelHeading"><i class="icon-time icon-white"></i>ระยะเวลาคงเหลือ</div>
    	  <?

$strSQL7 = "SELECT * FROM Download order by id_download";
$objQuery7 = mysqli_query($strSQL7) or die ("Error Query [".$strSQL7."]");
?>
  <table width="450" border="0" align="center" cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
 <thead>
      <tr>
      <th width="9%"><div align="center" class="style3">#</div></th>
        <th width="35%"><div align="center" class="style3">โปรแกรม</div></th>
        <th width="36%"><div align="center" class="style3">เวลาที่เหลือ</div></th>
      </tr>
	  		<?
while($objResult7 = mysqli_fetch_array($objQuery7))
{
$Bt7 = $objResult7["Programe"];
$Point7 = $objResult7["Point"];
$Day7 = $objResult7["Day"];

$resultq7 = mysqli_query("select * from BuyItem where Programe='".$Bt."'") or die ("Err Can not to result");
$objResult27 = mysqli_fetch_array($resultq7);
?>
      <tr>
<?php
if($dbarr[$objResult7["Programe"]] == "0")
{
?>
		<td><div align="center" class="style2">#<?=$objResult7["id_download"];?></div></td>
        <td><div align="center" class="style2"><?=$objResult7["Name"];?> </div></td>
        <td><div align="center" class="style2"><span class="label label-danger"><span class="icon icon-ban-circle glyphicon-white"></span> คุณยังไม่ได้เช่าโปรแกรม</span></div></td>
        
<?
}
else
{
?> 
		<td width="7%"><div align="center" class="style2">#<?=$objResult7["id_download"];?></div></td>
        <td width="9%"><div align="center" class="style2"><?=$objResult7["Name"];?> </div></td>
        <td width="4%"><div align="center" class="style2"><span class="label label-success"><?=get_datetime_diff($testdate,$dbarr[$objResult7["Programe"]]); ?></span></div></td> 
<?
}
?>

<?
}
?>
      </tr>
    </table>
  </div>
</div>
 </div>   
<?php } ?>
    
  
