<<?php
   session_start();
include 'dbconnect.php';
    $b=$_SESSION['r_id'];
    $current=$_POST['old'];
    $new=$_POST['new'];
    $old=md5($current);
    $confirm=$_POST['confirm'];
    $pwd=md5($new);
    $sql1="select * from tbl_login where r_id='$b' and role_id=1";
    $result1=mysqli_query($con,$sql1);
    $rows=mysqli_fetch_array($result1,MYSQLI_ASSOC);

    if($rows['pwd']==$old)
    {
    if($new==$confirm)
    {
    $query="update `tbl_login` set pwd='$pwd' where r_id='$b'";
    $res=mysqli_query($con,$query);
    
    echo "<script>alert('Password has been Changed');window.location.href='customer_home.php';</script>";
    }
    } 
	else
	{
        echo "<script>alert('Incorrect current password !!!');window.location.href='customer_change_password.php';</script>";
	  
	}
    
?>

