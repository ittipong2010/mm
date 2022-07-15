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
				            <div class="panelHeading"><i class="icon-calendar icon-white"></i>ประวัติการใช้งาน</div>
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
if ($_POST["button"] == "ลบประวัติส่วนตัวทั้งหมด")
{
$User = $dbarr['UserID'];
$sql = "DELETE FROM history WHERE UserID= '$User'";
$objQuery10 = mysql_query($sql);
if($objQuery10)
{
echo  "<script> toastr.info('ลบประวัติส่วนตัวทั้งหมดเรียบน้อยแล้วค่ะ', 'คำแนะนำ', {displayDuration: 0}); setTimeout(function(){ window.location.reload(); }, 1000); </script>";
}
else
{
echo  "<script> toastr.error('ไม่สามารถลบประวัติของค่ะ $sql ได้ค่ะ', 'แจ้งเตือน', {displayDuration: 0}); setTimeout(function(){ window.location.reload(); }, 1000); </script>";
}
}
?>
<?
$str_sql = "Select * From history WHERE UserID = '".$_SESSION['UserID']."'";
$rs_student = mysql_query($str_sql);
$row5=mysql_num_rows($rs_student);
?>
<div class="span6">
          <!-- Content -->
          <div id="fContent"><div class="well">
					            <div class="panelHeading"><i class="icon-calendar icon-white"></i>ประวัติการใช้งาน</div>									
															<table class="table table-striped table-bordered">
																	<thead>
																		<tr>
																			<th>ID</th>
																			<th>รายการ</th>
																			<th>วันวลาทำการ</th>
																			<th>IP</th>
																		</tr>
																	</thead>
			<?php while($row_student = mysql_fetch_array($rs_student)) { ?>
																	<tbody>
																		  <tr>
																				<td><a class="badge badge-info"><?php echo $row_student['UserID'] ?></a></td>
																				<td class="taskDesc"><?php echo $row_student['List'] ?></td>
																				<td><?php echo $row_student['Date'] ?></td>
																				<td><a class="label label-success"></i><?php echo $row_student['IP'] ?></a></td>
																		  </tr>
																	</tbody>
<?
}
if ($row5==0){

?>
<? }?>
															</table>
                                                            		<form class="form-horizontal" method="post">
<button type="submit" style="width:100%;" name="button" class="btn btn-danger" value="ลบประวัติส่วนตัวทั้งหมด" ><i class="icon-ok icon-white"></i> ลบประวัติส่วนตัวทั้งหมด</button>
</form>													 
															</div>
														</div>
												  </div>
									
                                    

<?php } ?>
