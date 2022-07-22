<?php
include("dbconnect.php");
$u=$_GET['id'];
$j=$_GET['s'];

//echo $u;
//echo $j;
if($j=='Blocked')
{
$query="UPDATE `tbl_login` SET `l_status`='Active' WHERE l_id='$u'";
$result=mysqli_query($con,$query);
}
else
{
	$query1="UPDATE `tbl_login` SET `l_status`='Blocked' WHERE l_id='$u'";
	$result1=mysqli_query($con,$query1);
}
header("Location:admin_officer.php");
?>