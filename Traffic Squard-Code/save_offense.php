<?php
include "dbconnect.php";
session_start();
$a=$_SESSION['r_id'];
$vn=$_POST['vehiclenumber'];
$district=$_POST['district'];
$place=$_POST['place'];
$offense=$_POST['offense'];
$date=$_POST['date'];
$img=$_FILES["img"]["name"];
$sql=mysqli_query($con,"SELECT * FROM `tbl_registration` WHERE `r_id`='$a'");
move_uploaded_file($_FILES["img"]["tmp_name"],"Uploads/".$_FILES["img"]["name"]);
$sql="INSERT INTO `offense committed`(`user_id`, `Vehicle_Number`,`reported_date`, `district`, `Place`, `Offense`,`image`,`Status`,`payment`) VALUES ('$a','$vn','$date','$district','$place','$offense','$img','pending','unpaid')";
$res=mysqli_query($con,$sql);
if($res)
{
echo "<script>alert('Reported Successfully');window.location.href='customer_home.php';</script>";
 }
 else
{
    echo "<script>alert('Reporting Failed');window.location.href='customer_offencereporting.php';</script>";
} 
