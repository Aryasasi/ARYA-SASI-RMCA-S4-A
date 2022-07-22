<?php
include 'dbconnect.php';
$kid=$_GET['uid'];
$res1=mysqli_query($con,"select * from tbl_feedback where f_id='$kid'");
$res=mysqli_query($con,"UPDATE `tbl_feedback` SET `f_status`='0' WHERE f_id='$kid'");
header("location:view_feedback.php");
?>