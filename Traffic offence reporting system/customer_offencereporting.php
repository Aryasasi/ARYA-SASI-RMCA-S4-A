<html lang="en">
<?php 
include "dbconnect.php";
session_start();	
$a=$_SESSION['r_id'];
$sq = mysqli_query($con,"SELECT * FROM `tbl_district`");
$sqli = mysqli_query($con,"SELECT * FROM `tbl_offense`");
if(!isset($_SESSION['r_id'])){
	header("Location:login.php");	
}
include 'customer_header.php';
?>
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
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="wrapper" style="background-image:url('images/v1.jpg');">
<center>
<head>
	<title>Report offence</title>
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
</head>
<body>
		<div class="wrap-contact100">
		<span class="contact100-form-symbol"><a href="#">
				<img src="images/icons/voilation.png"  alt="SYMBOL-MAIL"></a>
			</span>
			
			<form action="save_offense.php" method="post" enctype="multipart/form-data" onsubmit="return Validate()" style="margin-top: 20px;">
				<span class="contact100-form-title" >
					Report Offense
				</span>
				<div class="wrap-input100 validate-input">
					<input type="text" onkeyup="category(this.value)"class="input100" name="vehiclenumber" placeholder="KL01A1994" id="vid" onchange="numbervalidation();" required ></input>
					<span class="focus-input100" ></span>
                </div>

				<script>

function category(val)
{
$.ajax({
	type: "POST",
	url:"chectcat.php",
	data:'vno='+val,success:function(data){
		$("#msg").html(data);
	}
});
}


function numbervalidation()
{
	var pattern = /[A-Z][A-Z][0-9]{1,}[A-Z]{1,}[0-9]{1,}$/;
	var number=document.getElementById('vid').value;
	console.log(number);
	if(number.match(pattern))
	{
       return true;
	}
	else{
		alert('Invalid Number');
		document.getElementById('vid').value="";
		return false;
		}
}


				</script>
				<div class="wrap-input100 validate-input">
					<span class=""  id="msg"></span>
                </div>
				<div class="wrap-input100 validate-input">
				<select class="input100" name="district" style="height:50" id="district" required>
				<option selected disabled>Choose  Offense Reporting District</option>
				<?php while($row=mysqli_fetch_assoc($sq)){ ?>
				<option value="<?php echo $row['d_name']; ?>" required><?php echo $row['d_name']; ?></option>
				<?php } ?>
                </select></div>
				<div class="wrap-input100 validate-input">
					<input type="text" class="input100" name="place" placeholder="Offense Reporting Place" id="place" onchange="placevalidation();" required ></input>
					<span class="focus-input100"></span>
				</div>
				<script>
function placevalidation()
{
	var pattern = /[A-Z,0-9]{3,}$/;
	var number=document.getElementById('place').value;
	console.log(number);
	if(number.match(pattern))
	{
       return true;
	}
	else{
		alert('should only contain uppercase letters');
		document.getElementById('place').value="";
		return false;
		}
}


				</script>
				<div class="wrap-input100 validate-input">
					<input type="date" class="input100" name="date" id="sdate1" min="2020-01-01" onchange="datecheck();" required></input>
					<span class="focus-input100"></span>
				</div>
                <script>
                    function datecheck() {
        var sdate = document.getElementById('sdate1').value;
        var sdate1 = new Date(sdate);
        var cdate = new Date();
        console.log(cdate);
        if (cdate.getTime() < sdate1.getTime()) {
            alert("old date or current date is allowed");
            document.getElementById('sdate1').value='';

        }
    }
	</script>
				<div class="wrap-input100 validate-input">
				<select class="input100" name="offense" style="height:50"  required>
				<option selected disabled>..Choose Offense..</option>
				<?php while($row=mysqli_fetch_assoc($sqli)){ ?>
				<option value="<?php echo $row['offense']; ?>"><?php echo $row['offense']; ?></option>
				<?php } ?>
                </select></div>
				
		<div class="form-holder">
			<label for="image" style="text-align: left;">Evidence of the offense</label>
		<input type="file" name="img" id="img" class="form-control" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG">
		</div>
	    
<head>
<style>
.button {
  background-color: #8b3131; /* dark red */
  border: 4px;
  color: black;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}
.button2 {padding: 12px 28px;}
</style>
</head>
<button class="button button3" type="submit" name="submit">Report Offence</button>

				
			</form>
		</div>
	</div>



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