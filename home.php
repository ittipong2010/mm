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
include("config.txt.php");
$strSQLs = "SELECT * FROM News order by ID";
$objQuerys = mysql_query($strSQLs) or die ("Error Query [".$strSQLs."]"); 
?>
<div class="span6">
          <!-- Content -->
          <div id="fContent"><div class="well">
				              <div class="panelHeading"><i class="icon-comment icon-white"></i>ข่าวสารอัพเดตล่าสุด</div>
				              <div class="alert newsAlert">
				                <p><strong>ประกาศจากทีมงาน !</strong>!<br>
				                  
				                - กรุณาสมัครก่อนใช้โปรแกรม เพราะต้องใช้ชื่อผู้ใช้และรหัสผ่านมาล็อกอิน<br>
                                - 
            โปรแกรมรองรับการใช้งานบน Win xp 32-64 &amp; Win 7 32-64<br>
- ถ้าเป็น Windows 7 ต้องคลิกขวา Run As Administrator ทุกครั้ง
            </p>
				                <div class="slider-wrapper theme-default">
				                  <div id="slider" class="nivoSlider"></div>
			                    </div>
            </div>
            
			<iframe src="silde" height="200" width="420"frameborder="1" scrolling="no"  ></iframe>
                    <br>
                    <br>
				              <table id="updateList" class="table table-condensed table-bordered table-hover updateList">
				                <thead>
				                  <tr>
				                    <th width="76" class="tDate">วันที่</th>
				                    <th width="428" class="tDetail">รายละเอียด</th>
				                  </tr>
				                </thead>
                                <?php while($objResults = mysql_fetch_array($objQuerys)) { ?>
				                <tbody><tr>
				            	<td><?php echo $objResults['Date'] ?></td>
				            	<td class="text-success"><span class="label label-success">News</span><?php echo $objResults['News'] ?></td>
				            </tr>
				                </tbody>
                                <? }?>
			              </table>
				              <p>&nbsp;</p>
		            </div></div> </div>