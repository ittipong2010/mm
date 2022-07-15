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
<?php
if($dbarr["Status"] == "member")
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
<?
$str_sql = "Select * From money_code";
$rs_student = mysql_query($str_sql);
$row5=mysql_num_rows($rs_student);
$ID = $row_student['ID'];
?>
 <div class="span6">
          <!-- Content -->
          <div id="fContent"><div class="well">
				              <div class="panelHeading"	><i class="icon-shopping-cart icon-white"></i>สร้างโค้ดเงิน</div>
                              <p align="center">
        
<div class="text-center" id="msgbox"><h3>โค้ดเงินทั้งหมด</h3></div>
<table class="table table-striped table-bordered">
																	<thead>
																		<tr>
																			<th>โค้ด</th>
																			<th>จำนวนเงินที่ได้รับ</th>
																		</tr>
																	</thead>
			<?php while($row_student = mysql_fetch_array($rs_student)) { ?>
																	<tbody>
																		  <tr>
																				<td class="taskDesc"><?php echo $row_student['Code'] ?></td>
																				<td><?php echo $row_student['Point'] ?></td>
																				
																		  </tr>
																	</tbody>
<? }?>
															</table>		

  </div> </div></div>
							
									<?php } ?>
									<?php } ?>