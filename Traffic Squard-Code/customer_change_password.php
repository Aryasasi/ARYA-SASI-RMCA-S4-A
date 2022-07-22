
<?php
include 'dbconnect.php';
session_start();
$b=$_SESSION['r_id'];
$res=mysqli_query($con,"SELECT * FROM `tbl_registration` where `r_id`='$b'");
	$fetch=mysqli_fetch_array($res);
if(!isset($_SESSION['r_id'])){
	header("Location:login.php");
}
include 'customer_header.php';
?> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
<script type="text/javascript">
function validate()
{
var pas1=document.getElementById("new");
							  var pas2=document.getElementById("confirm");
							
							  if(pas1.value=="")
	{
		alert("Password cant be null!!");
		pas1.focus();
		return false;
	}
	if(pas2.value=="")
	{
		alert("Please confirm password!!");
		pass2.focus();
		return false;
	}
	if(pas1.value!=pas2.value)
	{
		alert("Passwords does not match!!");
		pas1.focus();
		return false;
	}
	
        
      
	
	
}
</script>

 <div class="wrapper">
			<div class="inner" >
                                 <form action="customer_password_action.php" method="post" onsubmit="return validate()">
								
                                     
									   <div align="center">
									<h3>Change Password</h3>
                                      <div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<!-- upload upto 20 images!-->
						<input type="password" placeholder="Old Password"name="old" id="old" class="form-control"required >
					</div>
       
       <div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<!-- upload upto 20 images!-->
						<input type="password" placeholder="New Password" name="new" id="new"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" class="form-control"required onchange="return Validp();">
					</div>
					<span id="msg6" style="color:red;"></span>
<script>		
function Validp() 
{
    var val = document.getElementById('pwd').value;

    if (!val.match(/^[A-Za-z0-9!-*]{4,}$/)) 
    {
        document.getElementById('msg6').innerHTML="Password should contain atleast 6 characters";
		
		     document.getElementById('pwd').value = "";
        return false;
    }
document.getElementById('msg6').innerHTML=" ";
    return true;
}

</script>
       <div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<!-- upload upto 20 images!-->
						<input type="password" placeholder="Re-Type Password" name="confirm" id="confirm"  class="form-control"required>
					</div> 
                                             <div>
					<button type="submit" name="submit" value="Save Changes">Save Changes
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