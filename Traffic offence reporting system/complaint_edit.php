<?php
include 'customer_header.php';
include 'dbconnect.php';
?><br><br><br><br><br><br><br><br>
<?php
$kid =$_GET['uid'];
$sql=mysqli_query($con,"SELECT * FROM `tbl_complaint` WHERE `complaint_id` = '$kid'");
while($row=mysqli_fetch_array($sql))
{
?>
<div><br><center><h1><b><u>Complaint Edit</u></b></h1><br><br>
<style> 
input {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  color
}
body {
 background-image: url("paper.gif");
 background-color: #cccccc;
}
</style>
<body>
<form action="compedit_action.php?uid=<?php echo $row['complaint_id'];?>" method="post" enctype="multipart/form-data">
<table><font size="4"><tr>
<tr><td><b>complaint : <input type="text" name="feed" value="<?php echo $row['c_msg'];?>"></b></td></tr>
<tr>
<tr><td><input type="submit" name="submit" value="UPDATE"/></td></tr>
</table></div>
</form>
</body>
</html>
<?php
}
?>


