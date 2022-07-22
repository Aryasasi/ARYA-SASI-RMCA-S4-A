<html>
<?php
include 'dbconnect.php';
session_start();
$b=$_SESSION['Driver_id'];
$res=mysqli_query($con,"SELECT * FROM `tbl_drivers` where `Driver_id`='$b'");
$fetch=mysqli_fetch_array($res);
  
if(!isset($_SESSION['Driver_id'])){
	header("Location:offender_login.php");
}
include 'offender_header.php';?> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<style>
input[type=text] {
    padding: 12px 20px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
button{
  background-color: #4CAF50;
    border: none;
    color: white;
    padding: 22px 50px;
    text-decoration: none;
    margin: 14px 12px;
    cursor: pointer;
}
canvas{
  /*prevent interaction with the canvas*/
  pointer-events:none;
}

</style>
<br><br>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 1500px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.container {
  padding: 0 56px;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
  font-size: 18px;
}

h2{color:#660099;padding: 14px 16px;font-size: 30px;}
	p{color:#660099;font-size: 18px;}
	b{color:#660099	;font-size: 18px;font-weight: bold;}

</style>
</head>
</body>


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
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"></div>
    	<div class="col-sm-2"></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
      
<br><br><br><br><br><br>
     <div >
        <img src="images/img.png" class="avatar img-circle img-thumbnail" alt="avatar">
        
       
      </div>



        </div><!--/col-3-->



    	<div class="col-sm-9">
            
              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  
                      <div class="form-group">
                          <div style="margin: 24px 0;">
	<br><br><h2 style="text-align:center">My Profile</h2>
	<br>
   <center><div style=" background-color: lightgrey;
     width: 616px;
  border: -14px solid green;
  padding: 15px;
  margin: 4px;"><table width=100%>
	<tr><td><b>Name: </b><?php echo " ".$fetch['Drivername'];?></td></tr>
  <tr><td><b>District:</b><?php echo " ".$fetch['district'];?></td></tr>
  <tr><td><b>Vehicle Number:</b><?php echo " ".$fetch['Vehicle_number'];?></td></tr>
  <tr><td><b>Vehicle Type:</b><?php echo " ".$fetch['Vehicle_Type'];?></td></tr>
	<tr><td><b>Gender:</b><?php echo " ".$fetch['Gender'];?></td></tr>
	<tr><td><b>Email:</b><?php echo " ".$fetch['Gmail']; ?></td></tr>
	<tr><td><b>Phone:</b><?php echo " ".$fetch['Phone_Number']; ?></td></tr>
    </table></div></div>
    <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<a class="btn btn-lg btn-success" href="Offender_edit.php"><i class="glyphicon glyphicon-ok-sign"></i>Edit</a>
                                
                  
                            </div>
                      </div></form><hr></div>
</div><!--/col-9-->
    </div><!--/row-->
                                                      
				<img src="images/image-2.png" alt="" class="image-2">
			</div>
		</div>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
		

	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
	

		
   <style>
   
   table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 15px;
	padding-right :5px;
	
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
   button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #330066;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}



button:hover, a:hover {
  opacity: 0.7;
}
</style>

    

    

  </div>
   </div>

  </div>
</div>
</center>

</body>
</html>



