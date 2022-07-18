<html lang="en">
<?php 
include "dbconnect.php";
session_start();	
$a=$_SESSION['r_id'];
?>
<head>
<?php
if(!isset($_SESSION['r_id'])){
	header("Location:login.php");
	
}
include 'customer_header.php';
$sqli=mysqli_query($con,"SELECT * FROM `tbl_feedback` WHERE `r_id`='$a'");
$rows=mysqli_num_rows($sqli);

?>
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

	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="wrapper" style="background-image:url('images/d5.jpg');">
<center>
<head>
	<title>Traffic Squard</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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
	<link rel="stylesheet" type="text/css" href="css/util1.css">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
<!--===============================================================================================-->
<style>  
.rating {
  flex: 1;
  cursor: pointer;
  padding: 20px;
  margin: 10px 5px;
}
.rating:hover, .rating.active {
  border-radius: 4px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.rating small {
  color: #555;
  display: inline-block;
  margin: 10px 0 0;
}
.rating:hover small,.rating.active small {
  color: #111;
}


	</style>
</head>
<body>

		<div class="wrap-contact100">
			<span class="contact100-form-symbol"><a href="custview_feedback.php">
				<img src="images/icons/symbol-01.png"></a>
			</span>

			<script>
function Validate()
{
    var val = document.getElementById('add').value;

    if (!val.match(/^[a-z]{3,}[a-z][0-9]{3,}$/)) 
    {
        document.getElementById('msg3').innerHTML="Message Required ";
		            document.getElementById('add').value = "";
        return false;
    }
document.getElementById('msg3').innerHTML=" ";
    return true;
}


				</script>

			<form action="feedback_action.php" method="post" enctype="multipart/form-data" id="add" onsubmit="return Validate()" style="margin-top: 20px;">	
			<span class="contact100-form-title">
					Feedback
				</span>
<!-- <div class="ratings-container">
				<center><div class="row">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<div class="rating">
				<a><img src="https://img.icons8.com/external-neu-royyan-wijaya/64/000000/external-emoji-neumojis-smiley-neu-royyan-wijaya-17.png" alt=""></a>
          <small>unsatisfied</small>
        </div>&nbsp&nbsp&nbsp
        <div class="rating"><img src="https://img.icons8.com/external-neu-royyan-wijaya/64/000000/external-emoji-neumojis-smiley-neu-royyan-wijaya-3.png" alt=""/>
          <small>Neutral</small>
        </div>&nbsp&nbsp&nbsp
        <div class="rating active"><img src="https://img.icons8.com/external-neu-royyan-wijaya/64/000000/external-emoji-neumojis-smiley-neu-royyan-wijaya-30.png" alt=""/>
          <small>Happy</small>
        </div></div></center><br> -->
		<?php
		if($rows>0){
			$r1=mysqli_fetch_array($sqli);
			?>

				<div class="wrap-input100 validate-input">
					<input type="hidden" name="sts" value=0>
					<textarea class="input100" name="message" value="" onchange="return Validate()" required><?php echo $r1['f_msg'];?></textarea>
					<span class="focus-input100"></span>
				</div>
				<?php
				}
				else
				{
				?>
				<div class="wrap-input100 validate-input">
					<input type="hidden" name="sts" value=1>
					<textarea class="input100" name="message" placeholder="Write a message" onchange="return Validate()" required></textarea>
					<span class="focus-input100"></span>
				</div>
				<?php
				}
				?>
<head>
<style>
.button {
  background-color: #8c4793; /* violet */
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button2 {padding: 12px 28px;}
</style>
</head>
<button class="button button3" type="submit" name="submit">Send</button>
				
			</form>
		</div>
	</div></div>



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

<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	
	
	</center>
	
	
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">trafficsquard</a>
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
</div>

</body>
</html>