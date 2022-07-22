<?php
include 'dbconnect.php';
session_start();
$kid=$_SESSION['r_id'];
$res=mysqli_query($con,"SELECT * FROM tbl_registration where r_id='$kid'");
$fetch=mysqli_fetch_array($res);
if(!isset($_SESSION['r_id'])){
	header("Location:login.php");
}



?>
		
	

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<br><br><br><br><br><br><br><br>
<?php
$b=$_SESSION['r_id'];
$result=mysqli_query($con,"SELECT * FROM `tbl_registration` where `r_id`='$b'");
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
        <h6>Upload a photo...</h6>
        <input type="file" name="img" class="text-center center-block file-upload">
      </div></hr><br>

          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
               
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="nme"  value ="<?php echo $row['r_name'];?>" id="first_name" placeholder="first name"title="enter your first name if any."required>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="lnme" value ="<?php echo $row['r_lname'];?>" id="last_name" placeholder="last name" title="enter your last name if any."required>
                          </div>
                      </div>
          
                   
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="phn" value ="<?php echo $row['r_phone'];?>" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any."required>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Date of Birth</h4></label>
                              <input type="date" class="form-control" name="dob" value ="<?php echo $row['r_dob'];?>"id="email" placeholder="you@email.com" title="enter your email."required>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Address</h4></label>
                              <input type="text" class="form-control" name="add" id="location" value ="<?php echo $row['r_address'];?>"placeholder="somewhere" title="enter a location"required>
                          </div>
                      </div>
                     
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit" name="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
								<a class="btn btn-lg btn-danger" href="officer_profile.php"><i class="glyphicon glyphicon-remove"></i> Cancel</a>
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
		

	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<?php
	}

?>	
<?php
include 'customer_footer.php';
?>