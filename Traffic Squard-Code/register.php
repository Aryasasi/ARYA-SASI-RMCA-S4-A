<?php include "dbconnect.php";
$sq = mysqli_query($con,"SELECT * FROM `tbl_district`");
$user='1';
?>
<html lang="en">
<head>
<title>Traffic Squard</title>
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
	<header class="header">
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
					<div class="user_box ml-auto">
							<div class="user_box_login user_box_link"><a href="login.php">Login</a></div>
							<div class="user_box_login user_box_link"><a href="Offender/offender_login.php">Payment</a></div>
							<div class="user_box_register user_box_link"><a href="register.php">Register</a></div>
						</div>
					</div>
				</div>
			</div>		
		</div>
		
		<!-- Main Navigation -->
		<nav class="main_nav">
			<div class="container" >
				<div class="row" >
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="images/logo.png" alt="">traffic squard</a></div>
						</div>
						<div class="main_nav_container ml-auto" >
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index.html">home</a></li>
								<li class="main_nav_item"><a href="about.html">about us</a></li>
								<li class="main_nav_item"><a href="services.html">Services</a></li>
								
								<li class="main_nav_item"><a href="contact.html">contact</a></li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>	
		</nav>
	</header>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="inner" >
				<img src="images/image-1.png" alt="" class="image-1"></img>
				<form action="register_action.php?type=<?php echo $user;?>" method="post" enctype="multipart/form-data" onsubmit="return Validate()" style="margin-top: 203px;">
				<h3>New Account?</h3>
			<?php
			if(isset($_GET['error']))
				echo $_GET['error'];
			?>
			
			
			
		
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" name="nme" id="nme" class="form-control" title="First Name" placeholder="First Name [Eg: Arya]" required onchange="Validate();">
					
					</div>
					<span id="msg1" style="color:red;"></span>
<script>		
function Validate() 
{
    var val = document.getElementById('nme').value;

    if (!val.match(/^[A-Z][A-Za-z]{2,}$/)) 
    {
        document.getElementById('msg1').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
		            document.getElementById('nme').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}
</script>
					<div class="form-holder">
					<span class="lnr lnr-user"></span>
					<input type="text" name="lnme" id="lnme" class="form-control" title="Last Name" placeholder="Last Name [Eg: Sasi]" required onkeydown="return Validate1(event);">
					</div>
					<span id="msg2" style="color:red;"></span>
<script>		
function Validate1(event) 
{
	var key = event.keyCode;
    return ((key >= 65 && key <= 90) || key == 8 || key == 32);
}
</script>
					<div class="form-holder">
						<span class="lnr lnr-apartment"></span>
						<input type="text" name="add" id="add" class="form-control" title="Address" placeholder="Address" required>
					</div>
					<span id="msg3" style="color:red;"></span>
<!-- <script>		
function Validname() 
{
    var val = document.getElementById('add').value;

    if (!val.match(/^[A-Z][a-z][0-9]\s+{3,}$/)) 
    {
        document.getElementById('msg3').innerHTML="Start with a Capital letter";
		            document.getElementById('add').value = "";
        return false;
    }
document.getElementById('msg3').innerHTML=" ";
    return true;
}
</script> -->
					<div class="form-holder">
					<span class="lnr lnr-calendar-full"></span>
					<label for="image" style="text-align: left;">Date of Birth</label>
					<input type="date" name="dob" id="myDate" class="form-control" min="1980-01-01" max="2004-12-30" title="Date of birth" placeholder="Date of Birth" max="<?php echo date("Y-m-d")?>" >
					</div>
					<span id="demo" style="color:red;"></span>
					<script>
						function myFunction() 
					{
						var x = document.getElementById("myDate").max;
						document.getElementById("demo").innerHTML = "Invalid Date!!";
					}
                   </script>

					<div ><div style="padding-top: 7px;padding-bottom: 23px;">
					<span class="lnr lnr-users"></span>
					&nbsp&nbsp&nbsp <input type="radio"  name="gender" value="male"> Male
					<input type="radio" name="gender" value="female"> Female
					<input type="radio" name="gender" value="others"> Others
					</div>
					</div>
					


			<div class="form-holder">
			<span class="lnr lnr-users">
			</span>			
			<select class="tkvsoft"  name="district" style="border-style: initial;padding-top: 18px; padding-bottom: 10px;
    margin-bottom: 4px;width: 100%;border-bottom: 1px solid #e6e6e6;"  required>
			<option>&nbsp &nbsp &nbsp &nbsp --Select  your District--</option>
			<?php while($row=mysqli_fetch_assoc($sq)){ ?>
				<option value="<?php echo $row['d_name']; ?>"><?php echo $row['d_name']; ?></option>
				<?php } ?>
			</select>
			</div>
			
			
			<div class="form-holder">
			<span class="lnr lnr-phone-handset"></span>
			<input type="text" name="phn"  maxlength="10" id="phn" class="form-control" title="Phone Number" placeholder="Phone Number"  pattern="[0-9]{10}" required onchange="Validat();">
			</div>
			<span id="msg4" style="color:red;"></span>
			
<script>
function Validat() 
{
    var val = document.getElementById('phn').value;

    if (!val.match(/^[7-9][0-9]{1,9}$/)) 
    {
        document.getElementById('msg4').innerHTML="Only Numbers are allowed and must contain 10 number";
	
		
		            document.getElementById('phn').value = "";
        return false;
    }
document.getElementById('msg4').innerHTML=" ";
    return true;
}

</script>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="email" name="email" id="email" title="E-Mail" class="form-control" placeholder="E-Mail [Eg: xyz@gmail.com]" required onchange="return Validata();">
					</div>
					<span id="msg5" style="color:red;"></span>
<script>		
function Validata() 
{
    var val = document.getElementById('email').value;

    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/)) 
    {
        document.getElementById('msg5').innerHTML="Enter a Valid Email";
		
		     document.getElementById('email').value = "";
        return false;
    }
document.getElementById('msg5').innerHTML=" ";
    return true;
}

		</script>
		
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" name="pwd" id="pwd" class="form-control" title="Password" placeholder="Password" required onchange="return Validp();">
					</div>
					<span id="msg6" style="color:red;"></span>
<script>		
function Validp() 
{
    var val = document.getElementById('pwd').value;

    if (!val.match(/^[A-Za-z0-9!-*@]{5,15}$/)) 
    {
        document.getElementById('msg6').innerHTML="Password should contain atleast 5 characters";
		
		     document.getElementById('pwd').value = "";
        return false;
    }
document.getElementById('msg6').innerHTML=" ";
    return true;
}

</script>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" name="confirm" id="confirm" title="Confirm Password" class="form-control" placeholder="Confirm Password" required onchange="return check();">
					</div>
					<span id="msg7" style="color:red;"></span>
					<script>
	function check()
{
var pas1=document.getElementById("pwd");
							  var pas2=document.getElementById("confirm");
							
							  if(pas1.value=="")
	{
		document.getElementById('msg7').innerHTML="Password can't be null!!";
		pas1.focus();
		return false;
	}
	if(pas2.value=="")
	{
		document.getElementById('msg7').innerHTML="Please confirm password!!";
		pass2.focus();
		return false;
	}
	if(pas1.value!=pas2.value)
	{
		document.getElementById('msg7').innerHTML="Passwords does not match!!";
		pas1.focus();
		return false;
	}
     document.getElementById('msg7').innerHTML=" "; 
	return true;
	
}
	</script>
					<div class="form-holder">
						<span class="lnr lnr-picture"></span>
						<label for="image" style="text-align: left;">Profile Image</label>
						<!-- upload upto 20 images!-->
						<input type="file" name="img" id="img" class="form-control" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG" required onchange="return Validp();">
					</div>
					<script type="text/javascript">
function load_image(id,ext)
{
   if(validateExtension(ext) == false)
   {
      alert("Upload only JPEG or JPG or PNG format ");
      
      document.getElementById("img").value = "";
	  document.getElementById("file").focus();
	  
      return;
   }
}

function validateExtension(v)
{
      var allowedExtensions = new Array("jpg","JPG","jpeg","JPEG","png","PNG");
      for(var ct=0;ct<allowedExtensions.length;ct++)
      {
          sample = v.lastIndexOf(allowedExtensions[ct]);
          if(sample != -1){return true;}
      }
      return false;
}
</script>
					<div>
					
					<button type="submit" name="submit" value="Register">Register
						</button>
						</div>
					<br><center><a href="login.php">Sign In</a>
				</form>
				<img src="images/image-2.png" alt="" class="image-2"></img>
			</div>
		</div>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
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




			<script>
			
		
$(document).ready(function()
{
	
	
	
$(".tkvsoft").on('change', function()
	{
		
		
		var t=this;
		
		if($(t).val()==2)
		$("#tkvsoft").show();
	else
		$("#tkvsoft").hide();
		
		
	});
			
	});		
			</script></body>
