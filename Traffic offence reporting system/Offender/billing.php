<!DOCTYPE html>
<html>
<body>
<?php 

include 'dbconnect.php';
$id=$_GET['id'];

	$sql="SELECT * FROM `offense committed` WHERE `O_R_id`='$id'";
$query = $con->query($sql);
{
	while ($result = $query->fetch_assoc()) {
		$offence=$result['Offense'];
		$sql=mysqli_query($con,"SELECT * FROM `tbl_offense` WHERE `offense`='$offence'");
		$rows=mysqli_fetch_array($sql);

?>
<title>Traffic Squard</title>

<div id="print">
<center><table class="table">
                                   
<br><br>

<center><h1 class="logo"><img src="images/logo.png" alt="" style="color:#4863A0"><b> Traffic Squard</b></h1></center>
 <style>
td
{
	font-size: 20px;
	font-weight: bold;
	padding:30px;
    font-family: "Times New Roman", Times, serif;
 } </style>
										  
										  
											  <tr>
												  <td style="background-color:#95B9C7;">Vehicle Number:</td>
												  <td><?php echo $result['Vehicle_Number']; ?></td>
											  </tr>
											  
											  <tr>
												  <td style="background-color:#95B9C7;">Location of Offense:</td>
												  <td><?php echo $result['district']." ".$result['Place']?></td>
											  </tr>
											  
											   
											  <tr>
												  <td style="background-color:#95B9C7;">Date of Offense:</td>
												  <td><?php echo $result['reported_date'];?></td>
											  </tr>
											  <tr>
												  <td style="background-color:#95B9C7;">Amount Paid:</td>
												  <td><?php echo $rows['amount'];?></td>
											  </tr>
											  <tr><td style="background-color:#95B9C7;">Payment Status:</td>
											  <td style="background-color:#95B9C7;"><?php echo $result['payment']?></td>
											  </tr>
											  </body>
											  </table>
											  <?php 
										
									}}

?>
</div>
<br><br>
<center><button class="inv-btn" onclick="printDiv('print')"><h3><b>&nbsp&nbsp&nbsp&nbsp Receipt &nbsp&nbsp&nbsp&nbsp</b></h3></button>
&nbsp&nbsp<button class="inv-btn" onclick="return show();"><h3><b> &nbsp&nbsp&nbsp&nbsp Finish &nbsp&nbsp&nbsp&nbsp </b></h3></button></center>
<script>
	function show(){
	window.location = "offender_offenselist.php";

	}
</script>


<script type="text/javascript">
      function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
    </script>
</body>
</html>