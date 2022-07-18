<?php
include 'dbconnect.php';
session_start();
$a=$_SESSION['r_id'];
if(isset($_POST['submit']))
{
	$name=$_POST['nme'];
	//echo $name;
	$lname=$_POST['lnme'];
	$add=$_POST['add'];
	$dob=$_POST['dob'];
	$phn=$_POST['phn'];
	$img=$_FILES['img']['name'];
   if($img==NULL)
	{

		$edit=mysqli_query($con,"UPDATE `tbl_registration` SET `r_name`='$name',`r_lname`='$lname',`r_address`='$add',`r_dob`='$dob',`r_phone`='$phn' WHERE `r_id`='$a'");
		$edit1=mysqli_query($con,"UPDATE `tbl_user` SET `r_name`='$name',`r_lname`='$lname',`r_address`='$add',`r_dob`='$dob',`r_phone`='$phn' WHERE `r_id`='$a'");
	}
	else
	{
			move_uploaded_file($_FILES['img']['tmp_name'],"Uploads/".$_FILES['img']['name']);
			$edit=mysqli_query($con,"UPDATE `tbl_registration` SET `r_name`='$name',`r_lname`='$lname',`r_address`='$add',`r_dob`='$dob',`r_phone`='$phn',`r_image`='$img' WHERE `r_id`='$a'");
			$edit1=mysqli_query($con,"UPDATE `tbl_user` SET `r_name`='$name',`r_lname`='$lname',`r_address`='$add',`r_dob`='$dob',`r_phone`='$phn',`r_image`='$img' WHERE `r_id`='$a'");
	
	}
	header("location:customer_profile.php?uid=$_SESSION[r_id]");
}
?>
