<?php
include'dbconnect.php';
session_start();
$a=$_SESSION['r_id'];
if(isset($_POST["submit"]))
{
	
	$f=$_POST['message'];
	$r=$_POST['district'];
	$g=$_POST['place'];
    $d=date("Y-m-d");
	$sql="INSERT INTO `tbl_complaint`(`r_id`, `c_date`, `c_msg`, `district`, `place`, `c_status`) VALUES ('$a','$d','$f','$r','$g','pending')";
	$res=mysqli_query($con,$sql);
	header("Location:custview_complaints.php");
	
}
?>