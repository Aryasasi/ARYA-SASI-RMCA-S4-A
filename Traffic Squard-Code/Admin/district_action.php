<?php
if(isset($_POST["submit"]))
{
    include 'dbconnect.php';
    $d=$_POST['district'];
    $sel1="select * from `tbl_district` where `d_name`='$d'";
	$qry1=mysqli_query($con,$sel1);
	$num=mysqli_num_rows($qry1);
	 if($num>0)
	  {
	 header("Location:admin_district.php?error=District already exists!!Try with another..");
	 exit;
	  }
	  else
	  {
    $var=mysqli_query($con,"INSERT INTO `tbl_district`(`d_name`, `d_status`) VALUES ('$d','1')");
    header("Location:District.php");
}
}

?>