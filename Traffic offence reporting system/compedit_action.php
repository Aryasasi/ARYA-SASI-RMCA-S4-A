<?php
include 'dbconnect.php';
session_start();
$kid =$_GET['uid'];
$n=$_POST['feed'];
$edit=mysqli_query($con,"UPDATE `tbl_complaint` SET `c_msg`='$n' where `complaint_id`='$kid'");
header("location:custview_complaints.php");

?>