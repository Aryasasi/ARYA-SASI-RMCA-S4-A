<?php
include 'dbconnect.php';
$kid=$_GET['uid'];
mysqli_query($con,"UPDATE `tbl_complaint` SET `c_status`='0'  WHERE `complaint_id`='$kid'");
header("location:custview_complaints.php");
?>