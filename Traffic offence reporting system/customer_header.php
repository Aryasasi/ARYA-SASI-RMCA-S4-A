<?php
include "dbconnect.php";
$kid=$_SESSION['r_id'];
 $res=mysqli_query($con,"select * from `tbl_registration` where `r_id`='$kid'");
 $fetch=mysqli_fetch_array($res);
 $aid = $fetch['r_name'];
 $q=mysqli_query($con,"SELECT * FROM `tbl_notification` WHERE `user_id`='$kid'");
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
<style>
	.popupdiv {
                display: none;
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                padding-top: 100px; /* Location of the box */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }
            .divimg{
                background-color: black;
            }
	.overlay {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(8, 8, 8, 0.7);
    transition: opacity 500ms;
    visibility: hidden;
    opacity: 0;
  }
  .overlay:target {
    visibility: visible;
    opacity: 1;
  }
  
  .popup {
    margin: 70px auto;
    padding: 20px;
    background: rgb(255, 255, 255);
    text-align: center;
    border-radius: 0;
    border: 5px solid #000000;
    width: 60%;
    height: 70%;
    position: relative;
    transition: all 5s ease-in-out;
  }
  
  .popup h2 {
    margin-top: 0;
    color: #333;
    font-family: 'Times New Roman';
  }
  .popup .close {
    position: absolute;
    top: 20px;
    right: 30px;
    transition: all 20ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: rgb(0, 0, 0);
  }
  .popup .close:hover {
    color: #080808;
  }
  .popup .content {
    width: 100%;
    overflow: auto;
  }
  @media screen and (max-width: 700px){
    .box{
      width: 70%;
    }
    .popup{
      width: 70%;
    }
  }

</style>
<script>
            function close() {
            document.getElementById("userpopup").style.display = "none";
            }
			function show(){
                document.getElementById("userpopup").style.display = "block";

			}

</script>
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<!-- Main Navigation -->
<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start" style="    margin-top: -32px;">
						<div class="logo_container">
							<div class="logo"><a href="customer_home.php?uid=<?php echo $_SESSION['r_id'];?>"><img src="images/logo.png" alt="">Traffic Squard</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
							<li class="main_nav_item"><a href="customer_home.php">Home</a></li>
								
								<li class="main_nav_item"><a href="customer_offencereporting.php">Offense Report</a></li>
								<li class="main_nav_item"><a href="feedback.php">Feedback</a></li>
								<li class="main_nav_item"><a href="complaint_customer.php">Complaint</a></li>
								<li class="main_nav_item"><a href="#" onclick="show();"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
</svg></a></li>
								
								
							</ul>
							
						</div>
						<div class="popupdiv" id="userpopup">
							<div class="popup">
								<h3 style="color:black">Accept To View More Details</h3><br><br>
                
								<a class="close" href="javascript:close()">&times;</a>
								<div class="content">
										<div class="col-sm-6">
                    <?php  echo 'aaaaaa';?>
										</div>
										<div class="col-sm-6">
										</div>
								</div>
							</div>
            			</div>
						
					</div>
          
          <div class="user-area dropdown float-right">
                        <a href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><br>
                            <h4 Style="color:white"><?php echo $aid;?></h4></a>
                            <div  class="user-menu dropdown-menu">
							<a style="color:black" class="nav-link" href="customer_offenselist.php"><i class="fa fa-user"></i>Repoted Status</a>
                            <a style="color:black"class="nav-link" href="customer_profile.php"><i class="fa fa-user"></i> My Profile</a>
                            <a style="color:black"class="nav-link" href="customer_change_password.php"><i class="fa fa-user"></i>ChangePassword</a>
                            <a style="color:black"class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div></div>
			
			</div></nav>

	</header>
	</div>
