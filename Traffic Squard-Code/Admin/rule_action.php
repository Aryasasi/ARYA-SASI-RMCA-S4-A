<?php
if(isset($_POST["submit"]))
{
    include 'dbconnect.php';
    $rule=$_POST['rule'];
    $var=mysqli_query($con,"INSERT INTO `tbl_rule` (`rule`) VALUES ('$rule')");
    header("Location:admin_rulelist.php");
}
?>