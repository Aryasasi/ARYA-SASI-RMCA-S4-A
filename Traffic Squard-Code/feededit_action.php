<?php
include 'dbconnect.php';
session_start();
$kid =$_GET['uid'];
$n=$_POST['feed'];
$edit=mysqli_query($con,"UPDATE `tbl_feedback` SET `f_msg`='$n' where `f_id`='$kid'");
header("location:custview_feedback.php");

?>