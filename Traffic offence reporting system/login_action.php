<?php
include "dbconnect.php";

 	$uname=$_POST['username'];
 	$pwd=$_POST['pass'];
	$p=md5($pwd);
	$a=mysqli_query($con,"SELECT * FROM `tbl_login` WHERE uname='$uname' and pwd='$pwd' or pwd='$p'");
	$row=mysqli_fetch_array($a);
	if(!empty($row))
	{
		if($row['role_id']==1)
		{
			if($row['l_status']=='Active')
			{
			session_start();
			$_SESSION['username']=$row['uname'];
			//$_SESSION['password']=$row['Password'];
			$_SESSION['r_id']=$row['r_id'];
			header("Location:customer_home.php?uid=$row[r_id]");
			}
			else{
				header("Location:login.php?error=Blocked</center>");
			}
		}
		else if($row['role_id']==2)
		{
			if($row['l_status']=='Active')
			{
				$_SESSION['username']=$row['uname'];
			if($uname==$_SESSION['username'])
			{
				session_start();
			
			//$_SESSION['password']=$row['Password'];
			$_SESSION['r_id']=$row['r_id'];
			header("Location:./Officer/officer_home.php?uid=$row[r_id]");
			}
			else{
				header("Location:login.php?error=incorrect username or password</center>");
			}
			}
			else{
				header("Location:login.php?error=Blocked</center>");
			}
		}	
		
		else 
		{	
			session_start();
			$_SESSION['username']=$row['uname'];
			//$_SESSION['password']=$row['Password'];
			$_SESSION['r_id']=$row['r_id'];
			if($uname==$_SESSION['username'])
			{
			header("Location:./Admin/admin_home.php");
		}
		else
			{
				header("Location:login.php?error=Invalid Usernamea/Password!!</center>"); 
	
			}
		}
	}
	else
		header("Location:login.php?error=Invalid Usernames/Password!!</center>"); 
	

		
?>				

