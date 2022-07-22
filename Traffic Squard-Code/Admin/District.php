<!doctype html>

<html class="no-js" lang="en">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<!--<![endif]-->
<?php
include 'dbconnect.php';
include 'admin_header.php';
?>


        <div class="content mt-3"><h1><font color="green"><center>Districts</h1></font>
        <?php
include 'dbconnect.php';
$sql="SELECT * FROM `tbl_district` order by d_name";
$result=mysqli_query($con,$sql)or die("error:".mysqli_error($con));
?>

 
<table>
<table border=5 width=80%>
<tr>
<th>Sl.no.</th>
<th>District</th>
</tr>	

<?php 
$count=0;
while ($row = mysqli_fetch_array($result)) {
    $count++;
            ?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $row['d_name']; ?></td>
                    
                </tr>
            <?php
         } 
         ?>
<div class="button home_slider_button"><div class="button_bcg"></div><a href="admin_district.php">Add District</a></div>
<br>
<br>
<style>
table {
    border-collapse: collapse;
    width: 50%;
}

th, td {
    text-align: left;
    font-size: 15px;
	font-weight: bold;
    padding: 5px;
}

tr:nth-child(even){background-color: #f2f2f2}


th {
    background-color:#6bdd6b;
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