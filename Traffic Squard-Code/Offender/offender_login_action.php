<?php
include "dbconnect.php";
 	$u=$_POST['vehicleno'];
 	$p=$_POST['phoneno'];
	$a=mysqli_query($con,"SELECT * FROM `tbl_drivers` where `Vehicle_number`='$u' and `Phone_Number`='$p'");
	$row=mysqli_fetch_array($a);
	if(!empty($row))
	{   
		session_start();
		$_SESSION['Driver_id']=$row['Driver_id'];
        $_SESSION['number']=$row['Vehicle_number'];
        header("Location:offender_home.php?uid=$row[Driver_id]");	
	}
	else
		header("Location:offender_login.php?error=Invalid Vehicle Number/Phone Number!!</center>"); 
			
?>				

