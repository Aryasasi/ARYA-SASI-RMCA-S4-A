<?php
	include 'dbconnect.php';
	$type=$_GET['type'];
    $name=$_POST['nme'];
	//echo $name;
	$lname=$_POST['lnme'];
	$add=$_POST['add'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];        
	$phn=$_POST['phn'];
    $email=$_POST['email'];
	$pass=$_POST['pwd'];
	$pwd=md5($pass);
	$confirm=$_POST['confirm'];
	//$rname=$_POST['rname'];
	//$dtype=$_POST['dtype'];
	$district=$_POST['district'];
	$img=$_FILES["img"]["name"];
	$sel1="select * from `tbl_registration` where `r_email`='$email'";
	$qry1=mysqli_query($con,$sel1);
	$num=mysqli_num_rows($qry1);
	$qry2=mysqli_query($con,"SELECT * FROM `tbl_officer` WHERE `district`='$district'");
	$num1=mysqli_num_rows($qry2);

	 
		  if($type==1)
		  {
			if($num>0)
	  {
	 header("Location: register.php?error=Email already exists!!Try with another..");
	 exit;
	  }
	  else
	  {
			
			  move_uploaded_file($_FILES["img"]["tmp_name"],"Uploads/".$_FILES["img"]["name"]);
	$varsql="INSERT INTO `tbl_registration`(`r_name`, `r_lname`,`r_address`, `r_dob`, `r_gender`, `r_phone`, `r_email`,`r_image`, `r_status`)
	VALUES('$name','$lname','$add','$dob','$gender','$phn','$email','$img','1')";
	print_r($varsql);
	$varresult=mysqli_query($con,$varsql);
	$z=mysqli_insert_id($con);
	
	$varsql2="INSERT INTO `tbl_user`( `r_id`,`r_name`, `r_lname`,`r_address`, `r_dob`, `r_gender`, `r_phone`, `r_email`,`district`,`r_image`, `r_status`)
	VALUES('$z','$name','$lname','$add','$dob','$gender','$phn','$email','$district','$img','1')";
	print_r($varsql2);
	$varresult2=mysqli_query($con,$varsql2);
	
	$varsql1=mysqli_query($con,"INSERT INTO `tbl_login`(`uname`, `pwd`, `role_id`,`r_id`, `l_status`) 
	VALUES ('$email','$pwd','$type','$z','Active')");
	$a=mysqli_insert_id($con);
	$var=mysqli_query($con,"INSERT INTO `tbl_user`( `name`, `l_id`, `r_id`)
	VALUES ('$email','$a','$z')");

	header("Location:login.php?registered=true");
	  }
		  }
		  
		 
		 
		  if($type==2)
		  {
          
			if($num>0)
	  {
		echo "<script>alert('Email Already Exits!!Try with another.');window.location.href='./Admin/officer_reg.php';</script>";
	 
	 exit;
	  }
	  else
	  {
		if($num1>0){
			echo "<script>alert('Officer Already Exits!!Try with another.');window.location.href='./Admin/officer_reg.php';</script>";
		              }else{
			  move_uploaded_file($_FILES["img"]["tmp_name"],"Uploads/".$_FILES["img"]["name"]);
	$varsql2="INSERT INTO `tbl_registration`(`r_name`, `r_lname`,`r_address`, `r_dob`, `r_gender`, `r_phone`, `r_email`,`r_image`, `r_status`)
	VALUES('$name','$lname','$add','$dob','$gender','$phn','$email','$img','2')";
	$varresult1=mysqli_query($con,$varsql2);
	$z=mysqli_insert_id($con);

	$varsql3="INSERT INTO `tbl_officer`(`r_id`, `r_name`, `r_lname`, `r_address`, `r_dob`, `r_gender`, `r_phone`, `r_email`, `district`, `r_image`, `r_status`)
	VALUES('$z','$name','$lname','$add','$dob','$gender','$phn','$email','$district','$img','2')";
	print_r($varsql3);
	$varresult3=mysqli_query($con,$varsql3);

	$varsql4=mysqli_query($con,"INSERT INTO `tbl_login`(`uname`, `pwd`, `role_id`,`r_id`, `l_status`) 
	VALUES ('$email','$phn','$type','$z','Active')");
	$varresult2=mysqli_query($con,$varsql4);
	$y=mysqli_insert_id($con);
	header("Location:src/verifymail.php?email=$email");
					  }
			  
		  }
	  }
?>