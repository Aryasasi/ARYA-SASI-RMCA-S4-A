<!doctype html>

<html class="no-js" lang="en">
<!--<![endif]-->
<?php
include 'dbconnect.php';
    include 'officer_header.php';
    $D=$_SESSION['r_id'];
    $as = mysqli_query($con,"SELECT * FROM `tbl_officer` where r_id = '$D'");
    while($asr =mysqli_fetch_array($as)){
    $asa = $asr['district'];
    }
    ?>
<div class="content mt-3"><h1><font color="green"><center>COMPLAINTS</h1><br></font>
<div class="header">
<button class="btn btn-success" style="background-color:#3EB489;border-color:#0277BD;"><b>
<font color="white"><a href="solved_complaints.php" style="color:black">Processed Complaints</a></b></button>
&nbsp&nbsp&nbsp<button class="btn btn-success" style="background-color:#E55451;border-color:#0277BD;"><b>
<font color="white"><a href="officer_complaintview.php" style="color:black">Pending Complaints</a></b></button>
</div>
</br>
<?php

$res1=mysqli_query($con,"SELECT `complaint_id`, `r_id`, `c_date`, `c_msg`, `district`, `place`, `c_status` FROM `tbl_complaint` WHERE `district`='$asa'");
$row1=mysqli_fetch_array($res1);
if(mysqli_num_rows($res)==0)
{
	echo "<br><br><center><font color=red size=3>No complaints Yet !!!</font></center>";
}
else
{
?>

<div class="content mt-3"><h3><font color="red"><center>Pending Complaints</h3><br></font>
<br>
<table>
<table border=3 width=70%>
<tr>
<th>SL.NO</th>
<th>NAME</th>
<th>DATE</th>
<th>COMPLAINT</th>
<th>STATUS</th></tr>
<?php

	$a=$_SESSION['r_id'];
	$res=mysqli_query($con,"SELECT * FROM `tbl_complaint` where  district='$asa' and c_status='pending'");
	$i=1;
	while($row=mysqli_fetch_array($res))
	{$kid=$row['r_id'];
	$res1=mysqli_query($con,"SELECT r_name FROM `tbl_registration` where r_id='$kid'");
	$row1=mysqli_fetch_array($res1);
	
	?>
	
<tr style="color:black;"><td><center><?php echo $i?></td>
<td><center><?php echo $row1['r_name'];?></td>
<td><center><?php echo $row['c_date'];?></td>
<td><center><?php echo $row['c_msg'];?></td>
<td><a href="mark_read_complaint.php?s_id=<?php echo $row['complaint_id']; ?>" onclick="return confirm('Mark as Accepted')"><button type="button" class="btn btn-success">Accept</button></a>
<a href="mark_delete_complaint?s_id=<?php echo $row['complaint_id']; ?>" onclick="return confirm('Mark as Delete??')"><button type="button" class="btn btn-danger">Reject</button></a></td>
</tr>
<?php
$i++;
	}
}
?>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #867198;
    color: white;
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