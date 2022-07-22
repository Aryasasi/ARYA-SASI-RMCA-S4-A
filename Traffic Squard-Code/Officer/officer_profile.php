<!doctype html>
<link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<html class="no-js" lang="en">
<!--<![endif]-->
	<?php
include 'dbconnect.php';
    include 'officer_header.php';
    ?>
</body>
<?php

$b=$_SESSION['r_id'];
$result=mysqli_query($con,"SELECT * FROM `tbl_registration` where `r_id`='$b'");
	while($row=mysqli_fetch_array($result))
	{
		?>
		<?php
include 'dbconnect.php';

$kid=$_SESSION['r_id'];
$res=mysqli_query($con,"SELECT * FROM tbl_registration where r_id='$kid'");
$fetch=mysqli_fetch_array($res);
if(!isset($_SESSION['r_id'])){
	header("Location:login.php");
}

?>

<br><br><br><br>
<?php
$b=$_SESSION['r_id'];
$result=mysqli_query($con,"SELECT * FROM `tbl_registration` where `r_id`='$b'");
$result1=mysqli_query($con,"SELECT * FROM `tbl_officer` where `r_id`='$b'");
$rows1=mysqli_fetch_array($result1);
	while($row=mysqli_fetch_array($result))
	{
		?> 
<hr>
<form class="form" action="officer_edit_action.php" enctype="multipart/form-data" method="post" id="registrationForm">
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1><?php echo$row['r_name'];?>&nbsp<?php echo$row['r_lname'];?></h1></div>
    	<div class="col-sm-2"></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
      <div class="text-center">
        <img src="Uploads/<?php echo $row['r_image'];?>" class="avatar img-circle img-thumbnail" alt="avatar">
      </div></hr><br>        
        </div><!--/col-3-->
    	<div class="col-sm-9">
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  
                      <div class="form-group">
                          <div style="margin: 24px 0;">
	<h2 style="text-align:center">My Profile</h2>
	<br>
   <center><div style=" background-color: lightgrey;
     width: 616px;
  border: -14px solid green;
  padding: 15px;
  margin: 4px;"><table width=100%>
	<tr><td><b>First Name:         </b><?php echo " ".$fetch['r_name'];?></td></tr>
	<tr><td><b>Second Name:</b><?php echo " ".$fetch['r_lname']; ?></td></tr>
	<tr><td><b>Address:</b><?php echo " ".$fetch['r_address'];?></td></tr>
	<tr><td><b>Date of Birth:</b><?php echo " ".$fetch['r_dob'];?></td></tr>
	<tr><td><b>Gender:</b><?php echo " ".$fetch['r_gender'];?></td></tr>
  <tr><td><b>District:</b><?php echo " ".$rows1['district'];?></td></tr>
	<tr><td><b>Email:</b><?php echo " ".$fetch['r_email']; ?></td></tr>
	<tr><td><b>Phone:</b><?php echo " ".$fetch['r_phone']; ?></td></tr>
    </table></div>
   </div>
   <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<a class="btn btn-lg btn-success" href="officer_edit.php"><i class="glyphicon glyphicon-ok-sign"></i>Edit</a>
                                
                  
                            </div>
                      </div>
                         
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<!--<a class="btn btn-lg btn-success" href="officer_edit.php"><i class="glyphicon glyphicon-ok-sign"></i>Edit</a>-->
                  
                            </div>
                      </div>
              	</form>
              
              <hr>
              
             </div>

        </div><!--/col-9-->
    </div><!--/row-->
                                                      
				<img src="images/image-2.png" alt="" class="image-2">
			</div>
		</div>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
		
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>


	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<?php
	}

?>	

  </div>
   </div>

  </div>
</div>
</center>

</body>
</html>


<?php
}
?>
