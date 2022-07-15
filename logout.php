<?php 
session_start();
unset ( $_SESSION['UserID'] );
unset ( $_SESSION['Username'] );
session_destroy();
 ?>
<div class="span6">
          <!-- Content -->
          <div id="fContent"><div class="well">
				            <div class="panelHeading"><i class="icon-off icon-white"></i>ออกจากระบบ</div>
                              <p align="center">
            <div class="alert alert-error" align="center"><b class="icon-remove icon-white"></b> ออกจากระบบเรียบร้อยแล้ว</div>
            <?php echo "<meta http-equiv='refresh' content='1 ;url=./?p=home'>" ; ?>
          </div></div>
        </div> 
