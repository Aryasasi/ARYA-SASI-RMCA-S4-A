<!doctype html>

<html class="no-js" lang="en">
<!--<![endif]-->
<?php
include 'dbconnect.php';
include 'admin_header.php';
?>


        <div class="content mt-3"><h1><font color="green"><center>Offense Reported</h1><br></font>
        
        <?php
include 'dbconnect.php';
$sql="SELECT * FROM `offense committed`where `status`='pending' order by O_R_id desc";
$result=mysqli_query($con,$sql)or die("error:".mysqli_error($con));
?>
<div class="header">
<button class="btn btn-success" style="background-color:#3EB489;border-color:#0277BD;"><b>
<a href="adminoffensereport.php" style="color:black">Approved Offense List</a></b></button>
&nbsp&nbsp&nbsp
<button class="btn btn-success" style="background-color:#E55451;border-color:#0277BD;"><b>
<a href="admin_offensereportlist.php" style="color:black">Pending Offense List</a></b></button>


</div>
<br>
<div class="content table-responsive table-full-width">
<!--<label for="filter">Search</label> <input type="text" name="filter" value="" id="myInput" placeholder="Search with offence ID" onkeyup="myFunction()"/>
-->
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

        <div class="content mt-3"><h3><font color="red"><center>Pending List</h3><br></font>
        <?php if(mysqli_num_rows($result)>0){ ?>
<table>
<table border=3 width=70%>
<tr>
<th>Sl.no.</th>
<th>Reported By</th>
<th>Type</th>
<th>Vehicle Number</th>
<th>offense</th>
<th>District</th>
<th>Place</th>
<th>Date of Reporting</th>
<th>Action</th>
</tr>	
<?php 
$count=0;
while ($row = mysqli_fetch_array($result)) {
    $rpt_id=$row['user_id'];
    $sql1=mysqli_query($con,"SELECT * FROM `tbl_login` where `r_id`='$rpt_id'");
    $result1=mysqli_fetch_array($sql1);
    $role_id=$result1['role_id'];

    $sql2=mysqli_query($con,"SELECT * FROM `tbl_registration` where `r_id`='$rpt_id'");
    $result2=mysqli_fetch_array($sql2);
    $sql3=mysqli_query($con,"SELECT * FROM `tbl_role` where `role_id`='$role_id'");
    $result3=mysqli_fetch_array($sql3);


    $count++;

            ?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $result2['r_name']; ?></td>
                    <td><?php echo $result3['role']; ?></td>
                    <td><?php echo $row['Vehicle_Number']; ?></td>
                    <td><?php echo $row['Offense']; ?></td>
                    <td><?php echo $row['district']; ?></td>
                    <td><?php echo $row['Place']; ?></td>
                    <td><?php echo $row['reported_date']; ?></td>
                    <h3><td><a rel="facebox" title="Click to edit view details" href="./TrafficView/admin_offence-detail.php?id=<?php echo $row['O_R_id']; ?>">
                    <i class="fa fa-eye  fa-lg text-success"></i> </a></td></h3>
                    
                </tr>
            <?php
         } 
         ?>
</table>
<?php }
else
{ ?>
<center><i>No records</i></center>
  <?php } ?>


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
td {
    
    color: black;
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