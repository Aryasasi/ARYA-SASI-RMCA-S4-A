<?php
include 'dbconnect.php';
$kid=$_GET['uid'];
$res1=mysqli_query($con,"SELECT * FROM `offense committed` WHERE `O_R_id`='$kid'");
$rows=mysqli_fetch_array($res1);
$vn=$rows['Vehicle_Number'];
echo $vn;
$res=mysqli_query($con,"UPDATE `offense committed` SET `Status`='Approved' WHERE `O_R_id`='$kid'");
header("Location:../src/verifymailreporting.php?number=$vn");
//header("location:officer_offensereportedlist.php");
?>