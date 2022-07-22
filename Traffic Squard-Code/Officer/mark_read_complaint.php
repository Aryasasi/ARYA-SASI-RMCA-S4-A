<?php
include 'dbconnect.php';
$kid=$_GET['s_id'];
$res1=mysqli_query($con,"select * from tbl_complaint where complaint_id='$kid'");
$res=mysqli_query($con,"UPDATE `tbl_complaint` SET `c_status`='accepted' WHERE complaint_id='$kid'");
header("location:officer_complaintview.php");
?>