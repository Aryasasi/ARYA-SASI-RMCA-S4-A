<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
	<?php
include 'dbconnect.php';
session_start();
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
                        <a href="admin_home.php"> <i class="menu-icon fa fa-dashboard"></i> Admin Dashboard </a>
                    </li>
                    <h3 class="menu-title">Functionalities</h3><!-- /.menu-title -->
                    <li> <a href="admin_Userlist.php" > <i class="menu-icon fa fa-tasks"></i>Userlist</a></li>
                    <li><a href="admin_officer.php" > <i class="menu-icon fa fa-tasks"></i>Officer</a></li>
                    <li><a href="admin_offenselist.php" > <i class="menu-icon fa fa-tasks"></i>Offense</a></li>
                    <li><a href="admin_rulelist.php" > <i class="menu-icon fa fa-tasks"></i>Rules</a></li>
                    <li><a href="view_feedback.php" > <i class="menu-icon fa fa-tasks"></i>Feedback</a></li>
                    <li><a href="admin_complaint.php" > <i class="menu-icon fa fa-tasks"></i> Complaints</a></li>
                    <li><a href="District.php" > <i class="menu-icon fa fa-tasks"></i>Districts</a></li>
                    <li><a href="admin_offensereportlist.php" > <i class="menu-icon fa fa-tasks"></i>Offense Committed</a></li>
                    
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

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="admin_profile.php"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="admin_change_password.php"><i class="fa fa-user"></i> Change Password</a>

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
                        <h1>Dashboard</h1>
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