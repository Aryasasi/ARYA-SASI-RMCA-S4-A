<?php
include 'admin_header.php';?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
        <div class="content mt-3">
<body>

			
 <form action="district_action.php" method="post" enctype="multipart/form-data" onsubmit="return Validate()" style="margin-top: 203px;">
 <h3>Add District</h3>
 <div class="form-holder">
 <input type="textarea" rows="100" cols="45" name="district" id="district" class="form-control" placeholder="District"required pattern="([A-Z]).{4,}">
 <span id="msg3" style="color:red;"></span>
<button type="submit" name="submit" value="Register">Add
						</button>
						</div>
				</form>
			
			
    

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
    
</body>
</html>