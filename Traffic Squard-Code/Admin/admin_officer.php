<!doctype html>
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<html class="no-js" lang="en">
<!--<![endif]-->
	<?php
include 'dbconnect.php';
    include 'admin_header.php';
    ?>


        <div class="content mt-3"><h1><font color="green"><center>Officers</h1><br></font>
<?php
include 'dbconnect.php';
$sql="select  tbl_officer.o_id,tbl_officer.r_id,tbl_officer.r_name,tbl_officer.r_lname,
tbl_officer.r_gender,tbl_officer.r_email,tbl_officer.district,tbl_officer.r_phone,tbl_login.l_status,
tbl_login.l_id from tbl_officer inner join tbl_login on tbl_login.r_id=tbl_officer.r_id where role_id='2'";
$result=mysqli_query($con,$sql)or die("error:".mysqli_error($con));
?>
 
<table>
<table border=3 width=70%>
<tr>
<th>Sl.no.</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Gender</th>
<th>E-mail</th>
<th>Phonenumber</th>
<th>District</th>
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
            <td>" . $rows['district'] . "</td>
            <td>" . $rows['l_status'] . "</td>
            <td><a href=officerchange.php?id=$rows[l_id]&&s=$rows[l_status]><button>Change</button></a></td>
   </tr>";                      } 
?>
<br>
<div class="button home_slider_button"><div class="button_bcg"></div><a href="officer_reg.php">Add Officer</a></div>
<br>
<br>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
button
 {
    background-color:#4CAF50;
    color:black;
    width:140px;
    
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