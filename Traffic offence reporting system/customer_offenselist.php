<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$b=$_SESSION['r_id'];
if(!isset($_SESSION['r_id'])){
	header("Location:login.php");
}
include 'customer_header.php';
$sql="SELECT * FROM `offense committed` WHERE `user_id`='$b' ";
$result=mysqli_query($con,$sql);

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

	
	<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<br><br><br><br><br><br>
<div class="form-group">
<div class="col-xs-12">
<a class="btn btn-lg btn-info" href="customer_home.php"><i class="glyphicon glyphicon-ok-sign"></i>Back</a>
</div></div>	
	
<br><br><h1><font color="green"><center>Offence Reported</h1></font>

<table>
<table border=3 width=70%>
<tr>
<th>Sl.no.</th>
<th>Vehicle Number</th>
<th>Offense</th>
<th>Place</th>
<th>Date of Reporting</th>
<th>Status</th>
</tr>	
<?php 
$count=0;
while ($row = mysqli_fetch_array($result)) {
  
   
    $count++;
            ?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $row['Vehicle_Number']; ?></td>
                    <td><?php echo $row['Offense']; ?></td>
                    <td><?php echo $row['Place']; ?></td>
                    <td><?php echo $row['reported_date']; ?></td>
                    <td><?php echo $row['Status']; ?></td>
                    
                </tr>
            <?php
         } 
        
         ?>

<style>
table {
    border-collapse: collapse;
    width: 100%;
    color:black;
    size:40px;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #867198;
    color: white;
}
</style>
</div>
</body>
</html>
