<?php
include 'dbconnect.php';
$o_id = $_GET['id'];
$r=mysqli_query($con,"SELECT * FROM `offense committed` WHERE O_R_id='$o_id'");
$rows=mysqli_fetch_array($r);
$uid=$rows['user_id'];
$insert=mysqli_query($con,"INSERT INTO `tbl_notification`(`user_id`, `notification`) VALUES ('$uid','You reported a fake offence..next time you will be punished')");
mysqli_query($con,"DELETE FROM `offense committed` WHERE  O_R_id='$o_id'");
header('location:officer_offensereportedlist.php');

?>