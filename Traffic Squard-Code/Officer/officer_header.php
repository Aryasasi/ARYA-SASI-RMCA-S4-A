<!doctype html>
<html class="no-js" lang="en">
<!--<![endif]-->
	<?php
include 'dbconnect.php';
session_start();
$kid=$_SESSION['r_id'];
 $res=mysqli_query($con,"select * from `tbl_registration` where `r_id`='$kid'");
 $fetch=mysqli_fetch_array($res);
if(!isset($_SESSION['r_id']))
	{
		header("location:../login.php");
	}
	?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Traffic Squard</title>
	<link rel="icon" type="image/ico" href="images/logo.png" />
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="officer_home.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Functionalities</h3><!-- /.menu-title -->
                    <li> <a href="officer_userlist.php" > <i class="menu-icon fa fa-tasks"></i>User</a></li>
                    <li> <a href="officer_rulelist.php" > <i class="menu-icon fa fa-tasks"></i>Rules</a></li>
                    <li> <a href="officer_offenselist.php" > <i class="menu-icon fa fa-tasks"></i>Offense</a></li>
                    <li> <a href="officer_offensereporting.php" > <i class="menu-icon fa fa-tasks"></i>Offense Reporting</a></li>
                    <li> <a href="officer_complaintview.php" > <i class="menu-icon fa fa-tasks"></i>Complaints</a></li>
                    <li> <a href="officer_offensereportedlist.php" > <i class="menu-icon fa fa-tasks"></i>Offense list</a></li>
                    <!--<li> <a href="officer_driver.php" > <i class="menu-icon fa fa-tasks"></i>Drivers</a></li>-->
                    <!--<li><a href="view_feedback.php" > <i class="menu-icon fa fa-tasks"></i>View Feedback</a></li>-->                
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
      
                    </div>
                </div>
                <?php echo $fetch['r_name'];?>"
                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <h3><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $fetch['r_name'];?>
                        &nbsp<img class="user-avatar rounded-circle"  src="Uploads/<?php echo $fetch['r_image'];?>" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="officer_profile.php"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="officer_change_password.php"><i class="fa fa-user"></i> Change Password</a>

                            <a class="nav-link" href="../logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1> Officer Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>