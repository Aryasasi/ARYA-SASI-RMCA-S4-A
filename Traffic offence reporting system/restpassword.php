<?php
include('dbconnect.php');
$loginid=$_GET['login_id'];
$sql1="select * from tbl_login where l_id='$loginid'";
if(isset($_POST['submit']))
{
$new=$_POST['new'];
$confirm=$_POST['confirm'];
$pass=md5($new);
if($new==$confirm)
    {
    $query="update `tbl_login` set pwd='$pass' where l_id='$loginid'";
    $res=mysqli_query($con,$query);
    echo "<script>alert('Password has been Reseted');window.location.href='login.php';</script>";
}
else
{
    echo "<script>alert('Password not Changed');window.location.href='restpassword.php';</script>";
}
}
?>




<html lang="en">
<head>
<title>Traffic squard</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>
<div class="super_container">
	
	<!-- Header -->

	
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
    padding: 12px 30px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
canvas{
  /*prevent interaction with the canvas*/
  pointer-events:none;
}

</style>

	<div class="container-login100" style="background-image: url('images/c4.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30" style="margin-top: 189px;">
			<form class="login100-form validate-form" action="" method="post" onsubmit="return validate()">
				<span class="login100-form-title p-b-37">
					Reset Password
				</span>
	

	<div id="validation-message" style="color:red;text-align:center;">
		<?php if(isset($_GET['error']))
			echo $_GET['error'];
		?><hr>
	</div>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
                <input type="password" placeholder="New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="new" id="new" class="form-control"required>
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
                <input type="password" placeholder="Re-Type Password" name="confirm" id="confirm" class="form-control"required>
					<span class="focus-input100"></span>
				</div>

				
				<div class="container-login100-form-btn">
					<button type="submit"  name="submit"class="login100-form-btn">
						Submit
					</button>
				</div>
<br>
				
			</form>
            <script type="text/javascript">
function validate()
{
var pas1=document.getElementById("new");
							  var pas2=document.getElementById("confirm");
							
							  if(pas1.value=="")
	{
		alert("Password cant be null!!");
		pas1.focus();
		return false;
	}
	if(pas2.value=="")
	{
		alert("Please confirm password!!");
		pass2.focus();
		return false;
	}
	if(pas1.value!=pas2.value)
	{
		alert("Passwords does not match!!");
		pas1.focus();
		return false;
	}
	
        {  alert("Request Send!!"); }
      
	
	
}
</script>

		
		</div>
	</div>
		<?php
if (@$_GET['registered'] == 'true')
   echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('You are Succesfully Registered')</script>");
?>
</body>
</html>

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
</body>
<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>
</html>