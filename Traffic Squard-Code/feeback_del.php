<?php
include 'dbconnect.php';
$kid=$_GET['uid'];
mysqli_query($con,"UPDATE `tbl_feedback` SET `f_status`='0'  WHERE `f_id`='$kid'");
header("location:custview_feedback.php");
?>