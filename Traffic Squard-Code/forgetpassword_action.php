<?php
include "dbconnect.php";

 	$uname=$_POST['username'];
     $a=mysqli_query($con,"select * from `tbl_login` where `uname`='$uname'");
     $row=mysqli_fetch_array($a);
     if(!empty($row))
	{
        $email=$rows['uname'];
        header("Location:src/forgetverifymail.php?email=$uname");
    }
    else
    {
        header("location:forgetpassword.php?error=invalid e-mail");
    }