<!doctype html>

<html class="no-js" lang="en">
<!--<![endif]-->
<?php
include 'dbconnect.php';
include 'officer_header.php';
?>


        <div class="content mt-3"><h1><font color="green"><center>Rules</h1><br></font>
        <?php
include 'dbconnect.php';
$sql="SELECT `rule_id`, `rule` FROM `tbl_rule`";
$result=mysqli_query($con,$sql)or die("error:".mysqli_error($con));
?>

 
<table>
<table border=3 width=70%>
<tr>
<th>Sl.no.</th>
<th>Rule</th>

</tr>	
<?php 
$count=0;
while ($row = mysqli_fetch_array($result)) {
   
    $count++;
            ?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $row['rule']; ?></td>
                    
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