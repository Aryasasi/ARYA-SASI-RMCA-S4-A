<?php
include 'dbconnect.php';

$ser_id = $_GET['s_id'];

mysqli_query($con,"DELETE FROM `tbl_rule` WHERE rule_id='$ser_id'");
header('location:admin_rulelist.php');

?>