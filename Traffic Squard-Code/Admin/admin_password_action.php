<?php
   session_start();
include 'dbconnect.php';
    $old=$_POST['old'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    $sql1="select * from tbl_login where r_id=0 and role_id=0";
    $result1=mysqli_query($con,$sql1);
    $rows=mysqli_fetch_array($result1,MYSQLI_ASSOC);
    if($rows['pwd']==$old)
    {
   
    if($new==$confirm)
    {
    $query="update `tbl_login` set pwd='$new' where uname='Admin'";
    $res=mysqli_query($con,$query);
    header("Location:admin_home.php");
   }
  }
	else
	{
    
	  header("Location:admin_change_password.php?error=password not changed");
    
	}
  ?>
    