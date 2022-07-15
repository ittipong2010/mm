<?
	@session_start();
  include("dbconnect.php");
 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>
        
		<!-- Bootstrap CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		 <link href="style.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	

	<body>
		<div class="container">
		     <nav class="navbar navbar-inverse">
		
		 	<ul class="nav navbar-nav">
		 		<li class="active">
		 			<a href="#">Home</a>
		 		</li>
		 		<li>
		 			<a href="#">Link</a>
		 		</li>
		 	</ul>
		 </nav>	
		 <div class="row">
		 	<div class="col-md-3">
		 		<div class="panel panel-default">
		 			  <div class="panel-heading">
		 					<h3 class="panel-title">Member System</h3>

		 			  </div>
		 			  <div class="panel-body">

                            <form action="Ck_login.php" method="POST" role="form">
                            		
                            	<div class="form-group">
                            		<label for="">Username : </label>
                            		<input type="text" class="form-control" id="txtUsername" name="txtUsername" placeholder="Username">
                            		<label for="">Password :</label>
                            		<input type="Password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Password">
                            	</div>
                            	
                            	
                            
                            	<button type="Submit" Value="Submit" id="Submit" name="Submit" class="btn btn-success">Login</button>
				 	 		 <a href="register.php"><button type="button" class="btn btn-primary">Register</button></a>
                            
                            </form>

                            
                       
		 			
		 			  </div>
		 			 
		 			  
		 		</div>
		 	</div>
		 	<div class="col-md-6">
		 		<div class="panel panel-default">
		 			  <div class="panel-heading">
		 					<h3 class="panel-title"> News Update</h3>
		 			  </div>
		 			  <div class="panel-body">
		 					<div class="jumbotron">
				                <strong>ประกาศจากทีมงาน !</strong>!
				                  
				                - กรุณาสมัครก่อนใช้โปรแกรม เพราะต้องใช้ชื่อผู้ใช้และรหัสผ่านมาล็อกอิน<br>
                                - 
            โปรแกรมรองรับการใช้งานบน Win xp 32-64 &amp; Win 732-64<br>
- ถ้าเป็น Windows 7 ต้องคลิกขวา Run As Administrator ทุกครั้ง
            </p>
				                <div class="slider-wrapper theme-default">
				                  <div id="slider" class="nivoSlider"></div>
			                    </div>

            </div>
            <table id="updateList" class="table table-condensed table-bordered table-hover updateList">
				                <thead>
				                  <tr>
				                    <th width="76" class="tDate">วันที่</th>
				                    <th width="428" class="tDetail">รายละเอียด</th>
				                  </tr>
				                </thead>
				                <tbody><tr>
				            	<td>07-04-15</td>
				            	<td class="text-success"><span class="label label-success">News</span> เปิดให้บริการแล้ววันนี้ แจกฟรีโปรมแกรมช่วยเล่น</td>
				            </tr><tr>
				            	<td>07-04-15</td>
				            	<td class="text-success"><span class="label label-success">News</span> กรุณาสมัครก่อนใช้โปรแกรม</td>
				            </tr>
				            <tr>
				              <td>07-04-15</td>
				              <td class="text-success"><span class="label label-success">News</span> โปรแกรมรองรับการใช้งานบน Win xp 32-64 &amp; Win 732-64</td>
				              </tr>
				            <tr>
				              <td>07-04-15</td>
				              <td class="text-success"><span class="label label-success">News</span> Windows 7 ต้องคลิกขวา Run As Administrator ทุกครั้ง</td>
				              </tr>
				                </tbody>
			              </table>

		 			  </div>
		 		</div>
		 	</div>
		 	<div class="col-md-3">
		 		<div class="panel panel-default">
		 			  <div class="panel-heading">
		 					<h3 class="panel-title">Status System</h3>
		 			  </div>
		 			  <div class="panel-body">
                         <div> Server   :         

		 			 		<?php 
                               include("dbconnect.php");
                               $sql = " SELECT * FROM `status` where Number='1' ";
                               $objquery = mysql_query($sql,$conndb);
                               $row = mysql_num_rows($objquery);

                               	$result = mysql_fetch_array($objquery);
                               	$status = $result['status'];
                               	if($result['status'] == "Online")
                               	{?>
                               <span class="btn btn-success">
                               	<? echo "$status"?>
                               </span>
                               <?

                               	}elseif($result['status'] == "Ofline" )

                               	{?>

                               	
                               <span class="btn btn-danger">
                               	 	<? echo "$status"?>
                               </span>

                              <?}

		 					 ?></div>
		 				<br>
		 					 <div>
		 					 	
		 				        Refill <span class="" style="padding-left:10px">:</span>   
		 					 	<?php 
                               include("dbconnect.php");	
                               $sql = " SELECT * FROM `status` where Number='2' ";
                               $objquery = mysql_query($sql,$conndb);
                               $row = mysql_num_rows($objquery);

                               	$result = mysql_fetch_array($objquery);
                               	$status = $result['status'];
                               	if($result['status'] == "Online")
                               	{?>
                               <span class="btn btn-success">
                               	<? echo "$status"?>
                               </span>
                               <?

                               	}elseif($result['status'] == "Ofline" )

                               	{?>

                               	
                               <span class="btn btn-danger">
                               	 	<? echo "$status"?>
                               </span>

                              <?}

		 					 ?>
		 					 </div>
                        










		 					 			  </div>
		 		</div>
		 	</div>	

		 	
		 	
		 
	        
		 
		<!-- jQuery -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>