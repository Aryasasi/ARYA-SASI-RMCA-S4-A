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


        <div class="content mt-3"><h1><font color="green"><center>Rules</h1></font>
        <?php
include 'dbconnect.php';
$sql="SELECT `rule_id`, `rule` FROM `tbl_rule`";
$result=mysqli_query($con,$sql)or die("error:".mysqli_error($con));
?>

 
<table>
<table border=5 width=80%>
<tr>
<th>Sl.no.</th>
<th>Rule</th>
<th>Actions</th>
</tr>	

<?php 
$count=0;
while ($row = mysqli_fetch_array($result)) {
    $count++;
            ?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $row['rule']; ?></td>
                    <td><a href="edit_rule.php?s_id=<?php echo $row['rule_id']; ?>"><button type="button" class="btn btn-success">Edit</button></a>
                        <a href="delete_rule.php?s_id=<?php echo $row['rule_id']; ?>"><button type="button" class="btn btn-danger">Delete</button></a>

                    </td>
                </tr>
            <?php
         } 
         ?>
<div class="button home_slider_button"><div class="button_bcg"></div><a href="add_rule.php">Add Rule</a></div>
<br>
<br>
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