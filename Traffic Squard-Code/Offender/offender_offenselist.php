<!doctype html>
<html class="no-js" lang="en">

<?php
include 'dbconnect.php';
session_start();
$b=$_SESSION['Driver_id'];
if(!isset($_SESSION['Driver_id'])){
	header("Location:offender_login.php");
}
include 'offender_header.php';

    ?>
<br><br><br><br><br><br>

        <div class="content mt-3"><h1><font color="green"><center>Offence Committed</h1><br></font>
        <div class="header">

</div>

</br>
        
<?php
$b=$_SESSION['Driver_id'];
$res=mysqli_query($con,"SELECT * FROM `tbl_drivers` where `Driver_id`='$b'");
$row1=mysqli_fetch_array($res);
$r=$row1['Vehicle_number'];
$re=mysqli_query($con,"SELECT * FROM `offense committed` WHERE `Vehicle_Number`='$r' and `Status`='approved'");
?>
<table>
<table border=3 width=70%>
<tr>
<th>Sl.no</th>
<th>Reported Date</th>
<th>District</th>
<th>Place</th>
<th>Offence</th>
<th>Amount</th>
<th>Action</th>
<th>Payment</th>
</tr>	
<?php
$count=0;
while($rows=mysqli_fetch_array($re,MYSQLI_ASSOC))
 {
    $count++;
    $id=$rows['O_R_id'];
    $ofnce=$rows['Offense'];
    $sql2="SELECT * FROM `tbl_offense` WHERE `offense`='$ofnce'";
							$result2=mysqli_query($con,$sql2)or die("error:".mysqli_error($con));
							$row2 = mysqli_fetch_array($result2);

    ?>
<tr>
            <td><?php echo $count;?></td>
            <td><?php echo $rows['reported_date'];?></td>
            <td><?php echo  $rows['district'];?></td>
            <td><?php echo $rows['Place'];?></td>
            <td><?php echo $rows['Offense'];?></td>
            <td><?php echo $row2['amount'];?></td>
            <td><button class="btn btn-info"><b>
    <font color="white"><a href="./TrafficView/Offenderdetails.php?id=<?php echo $id;?>" style="color:black">view</a></b></button></td>
    <td>
    <?php
    if($rows['payment']=='unpaid')
    {
    ?>
    <button class="btn btn-success" style=""><b><font color="white"><a href="payment.php?amount=<?php echo $row2['amount'];?>&& oid=<?php echo $id;?>" style="color:black">Payment</a></b></button>
    <?php
    }
    else
    {
    ?>
    <button class="btn btn-info"><b>
    <font color="white"><a href="billing.php?id=<?php echo $id;?>" style="color:black">Receipt</a></b></button>
<?php
    }
    ?>
</td>
            
            </tr>
        <?php 
         }
         ?> 
<style>
    
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 10px;
    color:black;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color:#D59BFD;
    color: BLACK;
}

button
 {
    background-color:#4CAF50;
    color:black;
    width:140px;
    
 }
</style>
</style>
	
			</div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>