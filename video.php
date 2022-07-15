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
				            <div class="panelHeading"><i class="icon-film icon-white"></i>ตัวอย่างโปรแกรม</div>
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
		              <div class="panelHeading"><i class="icon-film icon-white"></i>ตัวอย่างโปรแกรม</div>
		              <div class="slimScrollDiv" style="width: auto; height: 600px; overflow: hidden; position: relative;"><div class="text-center" id="clipScrollbar" style="width: auto; height: 600px; overflow: hidden;"><object width="340" height="255"><param name="movie" value="//www.youtube.com/v/8baxyJ2a-FA?hl=th_TH&amp;version=3"><param name="allowFullScreen" value="true"><param name="allowscriptaccess" value="always"><embed width="340" height="255" src="//www.youtube.com/v/8baxyJ2a-FA?hl=th_TH&amp;version=3" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always"></object><object width="340" height="255"><param name="movie" value="//www.youtube.com/v/PdnY1TtCFok?hl=th_TH&amp;version=3"><param name="allowFullScreen" value="true"><param name="allowscriptaccess" value="always"><embed width="340" height="255" src="//www.youtube.com/v/PdnY1TtCFok?hl=th_TH&amp;version=3" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always"></object><object width="340" height="255"><param name="movie" value="//www.youtube.com/v/tc3fcS9qT90?hl=th_TH&amp;version=3"><param name="allowFullScreen" value="true"><param name="allowscriptaccess" value="always"><embed width="340" height="255" src="//www.youtube.com/v/tc3fcS9qT90?hl=th_TH&amp;version=3" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always"></object><object width="340" height="255"><param name="movie" value="//www.youtube.com/v/y6Uevl6ahmg?hl=th_TH&amp;version=3"><param name="allowFullScreen" value="true"><param name="allowscriptaccess" value="always"><embed width="340" height="255" src="//www.youtube.com/v/y6Uevl6ahmg?hl=th_TH&amp;version=3" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always"></object><object width="340" height="255"><param name="movie" value="//www.youtube.com/v/hUHTUGA_85Q?hl=th_TH&amp;version=3"><param name="allowFullScreen" value="true"><param name="allowscriptaccess" value="always"><embed width="340" height="255" src="//www.youtube.com/v/hUHTUGA_85Q?hl=th_TH&amp;version=3" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always"></object><object width="340" height="255"><param name="movie" value="//www.youtube.com/v/LzMM2QkfSBk?hl=th_TH&amp;version=3"><param name="allowFullScreen" value="true"><param name="allowscriptaccess" value="always"><embed width="340" height="255" src="//www.youtube.com/v/LzMM2QkfSBk?hl=th_TH&amp;version=3" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always"></object><object width="340" height="255"><param name="movie" value="//www.youtube.com/v/R2n1XovGrpI?hl=th_TH&amp;version=3"><param name="allowFullScreen" value="true"><param name="allowscriptaccess" value="always"><embed width="340" height="255" src="//www.youtube.com/v/R2n1XovGrpI?hl=th_TH&amp;version=3" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always"></object></div><div class="slimScrollBar ui-draggable" style="background: rgb(0, 0, 0); border-radius: 7px; top: 402px; width: 7px; height: 197.58px; right: 1px; display: block; position: absolute; z-index: 99; opacity: 0.4;"></div><div class="slimScrollRail" style="background: rgb(51, 51, 51); border-radius: 7px; top: 0px; width: 7px; height: 100%; right: 1px; display: none; position: absolute; z-index: 90; opacity: 0.2;"></div></div>
		    			<script>
		              	$('#clipScrollbar').slimScroll({
				            height: '600px',
				            alwaysVisible: true
				        });
			            </script>
		    			</div></div>
        </div>
        <?php } ?>