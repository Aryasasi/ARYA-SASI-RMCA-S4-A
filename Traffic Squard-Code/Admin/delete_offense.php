<?php
include 'dbconnect.php';

$ser_id = $_GET['s_id'];

mysqli_query($con,"DELETE FROM `tbl_offense` WHERE o_id='$ser_id'");
header('location:admin_offenselist.php');

?>