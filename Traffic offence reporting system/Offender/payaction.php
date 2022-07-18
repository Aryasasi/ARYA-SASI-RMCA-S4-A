<?php
include('dbconnect.php');
$id=$_GET['oid'];
$sql=mysqli_query($con,"UPDATE `offense committed` SET `payment`='Paid' WHERE `O_R_id`='$id'");
echo "<script> alert('Payment Successfull'); window.location.href='offender_offenselist.php';</script>";
?>