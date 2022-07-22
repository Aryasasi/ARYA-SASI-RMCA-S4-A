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
        <div class="content mt-3"><h1><font color="green"><center>User List</h1><br></font>
        <?php
include 'dbconnect.php';
$sql="select tbl_user.u_id,tbl_user.r_id,tbl_user.r_name,tbl_user.r_lname,
tbl_user.r_gender,tbl_user.r_email,tbl_user.r_phone,tbl_login.l_status,
tbl_login.l_id from tbl_user inner join tbl_login on tbl_login.r_id=tbl_user.r_id where role_id='1' and tbl_user.district='$asa'";
$result=mysqli_query($con,$sql)or die("error:".mysqli_error($con));
?>
<table>
<table border=3 width=70%>
<tr>
<th>Sl.no</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Gender</th>
<th>E-mail</th>
<th>Phonenumber</th>
<th>status</th>
<th>change status</th>
</tr>	
<?php
$count=0;
while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC))
 {
    $count++;
echo "<tr class='info'>
            <td>" . $count. "</td>
            <td>" . $rows['r_name'] . "</td>
            <td>" . $rows['r_lname'] . "</td>
            <td>" . $rows['r_gender'] . "</td>
            <td>" . $rows['r_email'] . "</td>
            <td>" . $rows['r_phone'] . "</td>
            <td>" . $rows['l_status'] . "</td>
            <td><a href='o_change.php?id=$rows[l_id]&&s=$rows[l_status]'><button>Change</button></a></td>
            
   </tr>";                      } 
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
button
 {
    background-color:#4CAF50;
    color:black;
    width:140px;
    
 }
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