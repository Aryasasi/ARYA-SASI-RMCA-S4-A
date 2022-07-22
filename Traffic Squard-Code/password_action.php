<<?php
   session_start();
include 'dbconnect.php';
    $b=$_SESSION['r_id'];
    $old=$_POST['old'];
    $new=$_POST['new'];
	$n=md5($new);
    $confirm=$_POST['confirm'];
    $sql1="select * from tbl_login where r_id='$b' and role_id=0";
    $result1=mysqli_query($con,$sql1);
    $rows=mysqli_fetch_array($result1,MYSQLI_ASSOC);
    $uname=$rows['uname'];
    $sql="select * from `tbl_login` where uname='$uname' and pwd='$old'";
    $result=mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);
    if($num!=0 && $new==$confirm)
    {
    $query="update `tbl_login` set pwd='$new' where uname='$uname'";
    $res=mysqli_query($con,$query);
    header("Location:admin_home.php");
}
	else
	{
      alert("password not changed");
	  header("Location:admin_change_password.php");
	}
    
?>

