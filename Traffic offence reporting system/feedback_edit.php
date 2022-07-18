<?php
include 'customer_header.php';
include 'dbconnect.php';
?><br><br><br><br><br><br><br><br>
<?php
$kid =$_GET['uid'];
$sql=mysqli_query($con,"SELECT * FROM `tbl_feedback` WHERE `f_id` = '$kid'");
while($row=mysqli_fetch_array($sql))
{
?>
<div><br><center><h1 style="color:black;" ><b>EDIT FEEDBACK</b></h1><br><br>
<style> 
input {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  color:black;
}
body {
 background-image: url("images\v1.jpg");
 
}
</style>
<body>
<form action="feededit_action.php?uid=<?php echo $row['f_id'];?>" method="post" enctype="multipart/form-data">
<table><font size="4"><tr>
<tr><td style="color:black;"><b>Feedback message: <input type="text" name="feed" value="<?php echo $row['f_msg'];?>"></b></td></tr>
<tr>
<tr><td><input type="submit" name="submit" value="UPDATE"/></td></tr>
</table></div>
</form>
</body>
</html>
<?php
}
?>


