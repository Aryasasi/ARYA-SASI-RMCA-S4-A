<!doctype html>
<html class="no-js" lang="en">
<!--<![endif]-->
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<!-- STYLE CSS -->
<link rel="stylesheet" href="css/style.css">
<link rel="icon" type="image/png" href="images/icons/logo.png"/>
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
	<?php
include 'dbconnect.php';
    include 'officer_header.php';
    $sq = mysqli_query($con,"SELECT * FROM `tbl_district`");
$sqli = mysqli_query($con,"SELECT * FROM `tbl_offense`");
    ?>
<center>
<div class="wrap-contact100">
		<span class="contact100-form-symbol"><a href="#">
				<img src="images/icons/voilation.png"  alt="SYMBOL-MAIL"></a>
			</span>
			
			<form action="officer_save_offense.php" method="post" enctype="multipart/form-data" onsubmit="return Validate()" style="margin-top: 20px;">
				<span class="contact100-form-title">
					Report Offense
				</span>
				<div class="wrap-input100 validate-input">
                <input type="text" onkeyup="category(this.value)" class="input100" name="vehiclenumber" placeholder="KL01A1994" id="vid" required ></input>
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
	var pattern = /[A-Z][A-Z][0-9]{1,}[A-Z]{1,2}[0-9]{1,}$/;
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
					<input type="text" class="input100" name="place" placeholder="Offense Reporting Place" required></input>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input">
				<select class="input100" name="offense" style="height:50px" id="district">
				<option selected disabled>..Choose Offense..</option>
				<?php while($row=mysqli_fetch_assoc($sqli)){ ?>
				<option value="<?php echo $row['offense']; ?>"><?php echo $row['offense']; ?></option>
				<?php } ?>
                </select></div>
				
		<div class="form-holder">
		<input type="file" name="img" style="height:50px" id="img" class="form-control" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG" required onchange="return Validp();">
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
	
			</div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

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

</body>

</html>