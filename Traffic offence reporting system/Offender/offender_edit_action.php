<?php
include 'dbconnect.php';
session_start();
$a=$_SESSION['Driver_id'];
if(isset($_POST['submit']))
{
	
	$gmail=$_POST['gmail'];
	$phn=$_POST['phn'];
	
	

		$edit=mysqli_query($con,"UPDATE `tbl_drivers` SET `Phone_Number`='$phn',`Gmail`='$gmail' WHERE  `Driver_id`='$a'");
	
	header("location:Offender_profile.php");
}
?>
