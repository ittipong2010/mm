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
				            <div class="panelHeading"><i class="icon-shopping-cart icon-white"></i>เช่าโปรแกรม</div>
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
$strSQL1 = "SELECT * FROM Download order by id_download";
$objQuery1 = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");

$result = mysql_query("SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ") or die ("Err Can not to result");
$dbarr = mysql_fetch_array($result);
?>
 <div class="span6">
          <!-- Content -->
          <div id="fContent"><div class="well">
          <script type="text/javascript" src='https://www.tmtopup.com/topup/3rdTopup.php?uid=74966'></script>
				           <div class="panelHeading"><i class="icon-shopping-cart icon-white"></i>เช่าโปรแกรม</div>

	  <?
while($objResult1 = mysql_fetch_array($objQuery1)){
$Programe = $objResult1["Programe"];
$Bt = $objResult1["Programe"];
$Point = $objResult1["Point"];
$Day = $objResult1["Day"];

$resultq = mysql_query("select * from BuyItem where Programe='".$Bt."'") or die ("Err Can not to result");
$objResult2 = mysql_fetch_array($resultq);

if($objResult1['Status'] == "Online")
{
$Ststus = "$online";
}
if($objResult1['Status'] == "Offline")
{
$Ststus = "$offline";
}
if($objResult1['Status'] == "Soon")
{
$Ststus = "$Soon";
}
?>
  <?
$result1 = mysql_query("select * from BuyItem where Programe='$Programe'") or die ("Err Can not to result");
while( $dbarr1 = mysql_fetch_array($result1)){
?>
<form class="form-horizontal" method="post">
 <table class="table table-striped table-bordered programTable">
	  <thead>
	   <tr>
		<th class="program">โปรแกรม</th>
		<th class="game">เกมส์</th>
		<th class="image">รูป</th>
		<th class="clip">คลิป</th>
		<th class="status">สถานะ</th>
	   </tr>
	   <tr>
		<td><?=$objResult1["Name"];?></td>
		<td><?=$objResult1["Game"];?></td>
		<td><a href="bootstrap/img/<?=$objResult1["Picture"];?>" rel="lightbox[food]" title="<?=$objResult1["Name"];?>">ดูรูป</a></td>
		<td><a href="//www.youtube.com/embed/<?=$objResult1["Clip"];?>"  title="<?=$objResult1["Name"];?>">ดูคลิป</a></td>
		<!-- <td><span class="label label-success">ออนไลน์</span></td> -->
		<td><?php echo $Ststus; ?></td>
		</tr>
	   <tr>
		<th colspan="1" class="detail">ฟังก์ชั่น</th>
		<td colspan="4"><div class="text-left">
		<?=$objResult1["Function"];?><br>
		</div></td>
	   </tr>
      <tr>
		<th class="programtype">•</th>
		<th class="price">ราคา</th>
		<th colspan="2" class="time">ระยะเวลา</th>
		<th class="buy">เช่า</th>
	   </tr>
	   </thead>
	   <tbody>
  <?
$result1 = mysql_query("select * from BuyItem where Programe='$Programe'") or die ("Err Can not to result");
while( $dbarr1 = mysql_fetch_array($result1)){
$Bb = $dbarr["Name"];
$Bt = $dbarr1["Programe"];
$Point = $dbarr1["Point"];
$Day = $dbarr1["Day"];
$ips = getenv(REMOTE_ADDR);
date_default_timezone_set('Asia/Bangkok');
$Today = date("d/m/Y H:i:s");

if ($_POST["button"] == "$Bt$Point") 
{
strtotime($dateWithTimeZone);
$today_date=date ('d-m-Y',strtotime("+ $Day day"));
$today_time=date("H:i:s");
$Bt = $dbarr1["Programe"];
$Point = $dbarr1["Point"];
//ตรวจสอบสถาณะโปรแกรมว่าได้ออฟไลน์หรือไม่
if($objResult1["Status"] == 'Offline')
{
//ตรวจเจอว่า ออฟไลน์
echo '<div class="alert alert-error" align="center">โปรแกรมกำลังแก้ไขอยู่ไม่สามารถเช่าได้ค่ะ</div>';
print "<meta http-equiv=refresh content=1;URL=./?p=buy>";
}
else
{
//ตรวจเจอ ว่าออนไลน์
if ($dbarr[$objResult1["Programe"]] > 0) 
{
echo '<div class="alert alert-error" align="center">วันใช้งานของคุณยังคงเหลืออยู่ค่ะ</div>';
print "<meta http-equiv=refresh content=1;URL=./?p=buy>";
} else {
if ($dbarr['Point'] < $dbarr1["Point"]) 
{
echo '<div class="alert alert-error" align="center">พ้อยคงเหลือไม่พอสำหรับเช่าโปรแกรมนี้ค่ะ</div>';
print "<meta http-equiv=refresh content=1;URL=./?p=topup>";
} else {
echo '<div class="alert alert-success" align="center">เช่าโปรแกรมสำเร็จค่ะ</div>';
print "<meta http-equiv=refresh content=1;URL=./?p=download>";
$List = 'เช่าโปร '.$objResult1["Name"].'';
$sql_up = "update member set Point= Point - '$Point' WHERE UserID = '".$_SESSION['UserID']."' ";$dbquery_up = mysql_query($sql_up);
$sql_up = "update member set $Bt = '$today_date $today_time' WHERE UserID = '".$_SESSION['UserID']."' ";$dbquery_up = mysql_query($sql_up);	
$sql_up = "update member set hwid = '0' WHERE UserID = '".$_SESSION['UserID']."' ";$dbquery_up = mysql_query($sql_up);		
$strSQL10 = "INSERT INTO history (UserID,List,Date,IP) VALUES ('".$dbarr['UserID']."', 
		'".$List."','".$Today."','".$ips."')";
		$objQuery10 = mysql_query($strSQL10);
}
}
}
}
?>
    <tr>
          <td><?=$dbarr1["id"];?> </td>
          <td><?=$dbarr1["Point"];?> Point</td>
          <td colspan="2"><?=$dbarr1["Day"];?> วัน</td>
          <td><span class="style2"><span class="style2"></span></span>
		  
<?php
//// ตรวจสอบสถาณโปรแกรม
if($objResult1['Status'] == "Offline")
{
?>
<span class="label label-important"><i class="icon-remove icon-white"></i>กำลังแก้ไข!</span>     
<?php
}
if($objResult1['Status'] == "Soon")
{
?>
<span class="label label-warning"><i class="icon-edit icon-white"></i>เร็วๆนี้!</span>   
<?php
}
if($objResult1["Status"] == 'Online')
{
?>
              <button type="submit" name="button" class="btn btn-mini btn-primary" onclick="doBuy(67);" onclick="return confirm('แน่ใจหรือไม่ที่จะต้องการเช่าโปรนี้!\nโปรนี้รับรองการใช้งานกับ\n<?=$objResult1['Support'];?>')" value="<?=$dbarr1["Programe"];?><?=$dbarr1["Point"];?>" >เช่า</button>
<?php
}
?>
            </td>
        </tr>
		<?
}
}
?>
 <? } ?>
      </tr>
	  </tbody>
    </table>
	  
  </form>
 </div>
	</div> 
   </div>

  
 <?php } ?>