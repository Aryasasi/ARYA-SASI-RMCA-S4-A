<?php
if(isset($_POST["submit"]))
{
    include 'dbconnect.php';
    $o=$_POST['offense'];
    $d=$_POST['description'];
    $a=$_POST['amount'];
    $var=mysqli_query($con,"SELECT *`tbl_offense` WHERE `offense`=$o ");
    $checkrows=mysqli_num_rows($var);

    if($checkrows>0){
        echo "<script>alert(' Already Exits!!Try with another.');window.location.href='admin_offenselist.php';</script>";

    }else{

    $var=mysqli_query($con,"INSERT INTO `tbl_offense`(`offense`, `description`, `amount`) VALUES ('$o','$d','$a')");
    header("Location:admin_offenselist.php");
    }
}
?>



<?php
include 'admin_header.php';?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
<div class="wrapper">
			<div class="inner" >
                                 <form action="" method="post" onsubmit="return validate()">
								
                                     
									   <div align="center">
									<h3>Add Offense</h3>
       
                        <div class="form-holder">
						<input type="text" placeholder="offense" name="offense" id="offense" class="form-control"required style="text-transform:uppercase">
					     </div>

                         <div class="form-holder">
						<input type="text" placeholder="description" name="description" id="description" class="form-control"required style="text-transform:uppercase">
					     </div>

                    <div class="form-holder">
						<input type="text" placeholder="amount" name="amount" id="amount" class="form-control" requiredpattern="[0-9].{9,}">
					     </div>

					<button type="submit" name="submit" value="Save Changes">Add
						</button></div>
</div>
</div>

</div>
</form>
</body>
		
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