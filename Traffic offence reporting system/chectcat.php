<?php
include "dbconnect.php";
$von=$_POST['vno'];
$sql=mysqli_query($con,"SELECT  `Vehicle_Type` FROM `tbl_drivers` WHERE `Vehicle_number`='$von'");
if(mysqli_num_rows($sql)>0){
    $v1=mysqli_fetch_array($sql);
    $v2=$v1[0];
    echo $v2;
}
else{
    echo "No vehicle found";
}
?>