<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION['r_id'])){
	header("Location:login.php");
}
include 'customer_header.php';
?>
<head>
<title>Travelog</title>
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

	
	<br><br><br><br><br><br><br><br><br>
<button class="btn btn-success" style="background-color:#0277BD;border-color:#0277BD;"><b>
    <font color="white"><a href="customer_accepted_complaints.php" style="color:black">Accepted Complaints</a></b></button>
<br><br><a href="complaint_customer.php?uid=<?php echo $_SESSION['r_id'];?>"><b><--Back</b></a>
<h1><font color="green"><center>Pending Complaints</h1></font>
<br><br>
<?php
include 'dbconnect.php';
$res1=mysqli_query($con,"SELECT * FROM `tbl_complaint` where c_status='pending'");
$row1=mysqli_fetch_array($res1);
if(empty($row1))
{
	echo "<br><br><center><font color=red size=3>No Complaints Yet !!!</font></center>";
}
else
{
?>
<table>
<table border=3 width=70%>
<tr>
<th>SL.NO</th>
<th>DATE</th>
<th>COMPLAINT</th>
<th>DISTRICT</th>
<th>PLACE</th>
<th>STATUS</th>
<th>EDIT</th>
<th>DELETE</th></tr>

<?php

	$a=$_SESSION['r_id'];
	$res=mysqli_query($con,"SELECT * FROM `tbl_complaint` WHERE `r_id`='$a' and c_status='pending'");
	$i=1;
	while($row=mysqli_fetch_array($res))
	{$kid=$row['r_id'];
		$res1=mysqli_query($con,"SELECT * FROM `tbl_registration` where r_id='$kid'");
	$row1=mysqli_fetch_array($res1);
	
	?>
	
<tr style="color:black;"><td><center><?php echo $i?></td>
<td><center><?php echo $row['c_date'];?></td>
<td><center><?php echo $row['c_msg'];?></td>
<td><center><?php echo $row['district'];?></td>
<td><center><?php echo $row['place'];?></td>
<td><center><?php echo $row['c_status'];?></td>
<td><center><a href="complaint_edit.php?uid=<?php echo $row['complaint_id'];?>"><img src="images/edit.ico" width="30px"></a></td>
<td><center><a href="complaint_del.php?uid=<?php echo $row['complaint_id'];?>"><img src="images/DeleteRed.png" width="30px"></a></td></tr>

<?php
$i++;
	}
}
?>
<style>
table {
    border-collapse: collapse;
    width: 100%;
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





