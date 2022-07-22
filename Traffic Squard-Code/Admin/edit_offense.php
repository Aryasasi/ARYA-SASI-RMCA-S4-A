<?php
include 'dbconnect.php';

$ser_id = @$_GET['s_id'];

$result = mysqli_query($con, "SELECT * FROM tbl_offense where o_id='$ser_id'");

if (isset($_POST['submit'])) {

    $n = $_POST['offense'];
    $m=$_POST['description'];
    $p=$_POST['amount'];

    $sql = mysqli_query($con, "UPDATE `tbl_offense` SET `offense`='$n',`description`='$m',`amount`='$p' WHERE o_id='$ser_id'");
    header('location:admin_offenselist.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<style>
input[type=text] {
    padding: 20px 30px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
    font-size: 20px;
    

}

button{
  background-color: #4CAF50;
    border: none;
    color: white;
    padding: 12px 50px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
canvas{
  /*prevent interaction with the canvas*/
  pointer-events:none;
}

</style>			

<body>
    <center>
        <?php while ($row = mysqli_fetch_array($result)) { ?>
            
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30" style="margin-top: 189px;">
        <form class="login100-form validate-form" action="" method="post">
				<span class="login100-form-title p-b-37">
					<h1>Offense</h1>
				</span>
	

	<div id="validation-message" style="color:red;text-align:center;">
		<hr>
	</div>
				<div class="wrap-input100 validate-input m-b-20" data-validate="rule">
					<input class="input100" type="text" size="80"name="offense" font-size="30" value="<?php echo $row['offense']; ?> "required><br>
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input m-b-20" data-validate="rule">
					<input class="input100" type="text" size="80"name="description" font-size="30" value="<?php echo $row['description']; ?>" required><br>
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input m-b-20" data-validate="rule">
					<input class="input100" type="text" size="80"name="amount" font-size="30" value="<?php echo $row['amount']; ?>" required><br>
					<span class="focus-input100"></span>
				</div>	
				</div>
				<div class="container-login100-form-btn">
					<button type="submit" name="submit" class="login100-form-btn">
						Update
					</button>
				</div>
<br>
			</form>

        <?php } ?>
    </center>
</body>

</html>