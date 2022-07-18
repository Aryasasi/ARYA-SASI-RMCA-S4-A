<?php
include 'dbconnect.php';
session_start();
$b=$_SESSION['Driver_id'];
$res=mysqli_query($con,"SELECT * FROM `tbl_drivers` where `Driver_id`='$b'"); 
if(!isset($_SESSION['Driver_id'])){
	header("Location:offender_login.php");
}
?>
		
	

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
  <title>Traffic Squard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<br><br><br><br><br><br><br><br>
<?php

	while($row=mysqli_fetch_array($res))
	{
		?> 
<hr>
<form class="form" action="offender_edit_action.php" enctype="multipart/form-data" method="post" id="registrationForm">
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1><?php echo$row['Drivername'];?></h1></div>
    	<div class="col-sm-2"></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      </hr><br>

          
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
                              <label for="first_name"><h4>Name</h4></label>
                              <input type="text" class="form-control" name="nme"  value ="<?php echo $row['Drivername'];?>" id="first_name"readonly  placeholder="first name"title="enter your first name if any."required readonly>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>District</h4></label>
                              <input type="text" class="form-control" name="lnme" value ="<?php echo $row['district'];?>" id="last_name" readonly placeholder="last name" title="enter your last name if any."required readonly>
                          </div>
                      </div>
          
                   
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Vehicle Number</h4></label>
                              <input type="text" class="form-control" name="phn" value ="<?php echo $row['Vehicle_number'];?>" id="mobile" readonly placeholder="enter mobile number" title="enter your mobile number if any."required>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Phone Number</h4></label>
                              <input type="text" class="form-control" name="phn" value ="<?php echo $row['Phone_Number'];?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Gmail</h4></label>
                              <input type="text" class="form-control" name="gmail" id="location" value ="<?php echo $row['Gmail'];?>"placeholder="somewhere" title="enter a location"required>
                          </div>
                      </div>
                     
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit" name="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
								<a class="btn btn-lg btn-danger" href="offender_profile.php"><i class="glyphicon glyphicon-remove"></i> Cancel</a>
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