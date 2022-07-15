<?php
include("config.txt.php");
$strSQL = "SELECT * FROM Setting order by WebName";
$objQuery = $link->query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<?
while($objResult = mysqli_fetch_array($objQuery))
{
$footer = $objResult["footer"];
$footer_link = $objResult["footer_link"];
$Date = $objResult["DatePro"];
$NameWeb = $objResult["WebName"];
$credit = '</div></div><footer><p align="center" class="muted credit animated fadeInUp"><a href="'.$footer_link.'">'.$footer.'</a></p></footer>';
$danger = '<div align="center" class="alert alert-danger">';
$success = '<div align="center" class="alert alert-success">';
$info = '<div align="center" class="alert alert-info"><h5><i class="icon-info-sign"></i>';
$online = '<span class="label label-success"><i class="icon-ok icon-white"></i> ปกติ</span>';
$offline = '<span class="label label-danger"><i class="icon-off icon-white"></i> แก้ไข</span>';
$Soon = '<span class="label label-warning"><i class="icon-edit icon-white"></i> เร็วๆนี้</span>';
$cantdownload = '<button type="button" class="btn btn-mini btn-danger"><span class="glyphicon glyphicon-ban-circle"></span>คุณไม่มีสิทธิ์</button>';
$download = '<button type="button" class="btn btn-mini btn-success"><span class="glyphicon glyphicon-download-alt"></span>ดาวโหลด</button>';
$iconok = '<i class="icon-ok"></i>';
$iconerror = '<i class="icon-remove"></i>';
$webs = '<span class="label label-info">icon.ico</span>';
$DatePro = '<span class="buzz social-icon animated bounceIn label label-info">อัพเดทโปรแกรมล่าสุด '.$Date.'</span>';
$New = '<span class="buzz social-icon animated bounceIn label label-important">(โปรดดูดีๆก่อนเช่า หากเช่าโปรผิดเราจะไม่รับผิดชอบ!)</span>';
$rehwidpoint = $objResult["rehwid"]; // Buy Hwid 10 Point
}
?>
