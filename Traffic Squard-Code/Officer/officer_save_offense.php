<?php
include "dbconnect.php";
session_start();
$a=$_SESSION['r_id'];
$sql=mysqli_query($con,"SELECT * FROM `tbl_officer`WHERE `r_id`='$a'");
$z=mysqli_fetch_assoc($sql);

$vn=$_POST['vehiclenumber'];
$district=$z['district'];
$place=$_POST['place'];
$offense=$_POST['offense'];
$img=$_FILES["img"]["name"];
$date=$_POST['date'];
move_uploaded_file($_FILES["img"]["tmp_name"],"Uploads/".$_FILES["img"]["name"]);
$sql="INSERT INTO `offense committed`(`user_id`, `Vehicle_Number`, `reported_date`,`district`, `Place`, `Offense`,`image`,`Status`,`payment`) VALUES ('$a','$vn','$date','$district','$place','$offense','$img','Approved','unpaid')";
$res=mysqli_query($con,$sql);
if($res)
{
    //echo "<script>alert('Reported Successfully');window.location.href='officer_offensereporting.php';</script>";
    header("Location:../src/verifymailreporting.php?number=$vn");

 }
 else
{
    echo "<script>alert('Reporting Failed');window.location.href='officer_offensereporting.php';</script>";
} 
