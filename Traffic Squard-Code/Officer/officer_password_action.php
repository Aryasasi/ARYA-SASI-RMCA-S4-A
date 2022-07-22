<<?php
   session_start();
     include 'dbconnect.php';
    $b=$_SESSION['r_id'];
    $old=$_POST['old'];
    $current=md5($old);

    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    $p=md5($new);

    $sql1="select * from tbl_login where r_id='$b' and role_id=2";
    $result1=mysqli_query($con,$sql1);
    $rows=mysqli_fetch_array($result1,MYSQLI_ASSOC);

    $pass=$rows['pwd'];
    $pwd=md5($pass);

    if($pwd==$current)
    {
    if($new==$confirm)
    {
    $query="update `tbl_login` set pwd='$p' where r_id='$b'";
    $res=mysqli_query($con,$query);
    
    echo "<script>alert('Password has been Changed');window.location.href='officer_home.php';</script>";
    }
    } 
	else
	{

        echo "<script>alert('Incorrect current password!!');window.location.href='officer_change_password.php';</script>";;
	}
    
?>