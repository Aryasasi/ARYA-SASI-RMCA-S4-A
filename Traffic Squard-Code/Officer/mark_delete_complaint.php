
<?php
include 'dbconnect.php';
$ser_id = $_GET['s_id'];
mysqli_query($con,"DELETE FROM `tbl_complaint` WHERE complaint_id='$ser_id'");
header('location:officer_complaintview.php');

?>