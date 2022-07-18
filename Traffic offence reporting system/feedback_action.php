<?php
include'dbconnect.php';
session_start();
$a=$_SESSION['r_id'];
if(isset($_POST["submit"]))
{
	
	$f=$_POST['message'];
	$status=$_POST['sts'];
	
	if($status==1){	
		$d=date("Y-m-d");
		$sql="INSERT INTO `tbl_feedback`(`r_id`,`f_date`,`f_msg`,`f_status`) VALUES ('$a','$d','$f','1')";
	}else{
		$d=date("Y-m-d");
		$sql="UPDATE `tbl_feedback` SET `f_date`='$d',`f_msg`='$f',`f_status`='1' WHERE `r_id`='$a'";
	}

	$res=mysqli_query($con,$sql);
	echo "<script> alert('Feedback Added');window.location.href='feedback.php';</script>";

}
?>