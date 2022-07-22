<?php
include 'admin_header.php';
$sq = mysqli_query($con,"SELECT * FROM `tbl_district`");
$user='2';
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
        <div class="content mt-3">
<body>
<div class="wrapper">
			<div class="inner" >
			<div class="wrapper">
			<div class="inner" >
            <form action="../register_action.php?type=<?php echo $user;?>" method="post" enctype="multipart/form-data" onsubmit="return Validate()" style="margin-top: 203px;">
				<h3>Add Officers</h3>
				
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" name="nme" id="nme" class="form-control" title="First Name" placeholder="First Name [Eg: Arya]" required onchange="Validate();">
					
					</div>
					<span id="msg1" style="color:red;"></span>
<script>		
function Validate() 
{
    var val = document.getElementById('nme').value;

    if (!val.match(/^[A-Z][A-Za-z]{2,}$/)) 
    {
        document.getElementById('msg1').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
		            document.getElementById('nme').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}
</script>
					<div class="form-holder">
					<span class="lnr lnr-user"></span>
					<input type="text" name="lnme" id="lnme" class="form-control" title="Last Name" placeholder="Last Name [Eg: Sasi]" required onchange="Validate1();">
					</div>
					<span id="msg2" style="color:red;"></span>
<script>		
function Validate1() 
{
    var val = document.getElementById('lnme').value;

    if (!val.match(/^[A-Z][a-z]{1,}$/)) 
    {
        document.getElementById('msg2').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
		            document.getElementById('lnme').value = "";
        return false;
    }
document.getElementById('msg2').innerHTML=" ";
    return true;
}
</script>
					<div class="form-holder">
						<span class="lnr lnr-apartment"></span>
						<input type="text" name="add" id="add" class="form-control" title="Address" placeholder="Address" required onchange="Validname();">
					</div>
					<span id="msg3" style="color:red;"></span>
<script>		
function Validname() 
{
    var val = document.getElementById('add').value;

    if (!val.match(/^[A-Z][a-z]{3,}$/)) 
    {
        document.getElementById('msg3').innerHTML="Start with a Capital letter & Only alphabets are allowed";
		            document.getElementById('add').value = "";
        return false;
    }
document.getElementById('msg3').innerHTML=" ";
    return true;
}
</script>
					<div class="form-holder">
					<span class="lnr lnr-calendar-full"></span>
					<input type="date" name="dob" id="myDate" class="form-control" min="1980-01-01" max="2004-12-30" title="Date of birth" placeholder="Date of Birth" max="<?php echo date("Y-m-d")?>" >
					</div>
					<span id="demo" style="color:red;"></span>
					<script>
						function myFunction() 
					{
						var x = document.getElementById("myDate").max;
						document.getElementById("demo").innerHTML = "Invalid Date!!";
					}
</script>

					<div ><div style="padding-top: 7px;padding-bottom: 23px;">
					<span class="lnr lnr-users"></span>
					&nbsp&nbsp&nbsp <input type="radio"  name="gender" value="male"> Male
					<input type="radio" name="gender" value="female"> Female
					<input type="radio" name="gender" value="others"> Others
					</div>
					</div>
					
			<div class="form-holder">
			<span class="lnr lnr-users">
			</span>			
			<select class="tkvsoft"  name="district" style="border-style: initial;padding-top: 18px; padding-bottom: 10px;
    margin-bottom: 4px;width: 100%;border-bottom: 1px solid #e6e6e6;"  required>
			<option>&nbsp &nbsp &nbsp &nbsp --Select District--</option>
			<?php while($row=mysqli_fetch_assoc($sq)){ ?>
				<option value="<?php echo $row['d_name']; ?>"><?php echo $row['d_name']; ?></option>
				<?php } ?>
			</select>
			</div>
			
			<div class="form-holder">
			<span class="lnr lnr-phone-handset"></span>
			<input type="text" name="phn"  maxlength="10" id="phn" class="form-control" title="Phone Number" placeholder="Phone Number" required onchange="Validat();">
			</div>
			<span id="msg4" style="color:red;"></span>
			
<script>
function Validat() 
{
    var val = document.getElementById('phn').value;

    if (!val.match(/^[7-9][0-9]{1,9}$/)) 
    {
        document.getElementById('msg4').innerHTML="Only Numbers are allowed and must contain 10 number";
	
		
		            document.getElementById('phn').value = "";
        return false;
    }
document.getElementById('msg4').innerHTML=" ";
    return true;
}

</script>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="email" name="email" id="email" title="E-Mail" class="form-control" placeholder="E-Mail [Eg: xyz@gmail.com]" required onchange="return Validata();">
					</div>
					<span id="msg5" style="color:red;"></span>
<script>		
function Validata() 
{
    var val = document.getElementById('email').value;

    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/)) 
    {
        document.getElementById('msg5').innerHTML="Enter a Valid Email";
		
		     document.getElementById('email').value = "";
        return false;
    }
document.getElementById('msg5').innerHTML=" ";
    return true;
}

		</script>
					
					<div class="form-holder">
						<span class="lnr lnr-picture"></span>
						<!-- upload upto 20 images!-->
						<input type="file" name="img" id="img" class="form-control" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG" required onchange="return Validp();">
					</div>
					<script type="text/javascript">
function load_image(id,ext)
{
   if(validateExtension(ext) == false)
   {
      alert("Upload only JPEG or JPG or PNG format ");
      
      document.getElementById("img").value = "";
	  document.getElementById("file").focus();
	  
      return;
   }
}

function validateExtension(v)
{
      var allowedExtensions = new Array("jpg","JPG","jpeg","JPEG","png","PNG");
      for(var ct=0;ct<allowedExtensions.length;ct++)
      {
          sample = v.lastIndexOf(allowedExtensions[ct]);
          if(sample != -1){return true;}
      }
      return false;
}
</script>
					<div>
					
					<button type="submit" name="submit" value="Register">Add
						</button>
						</div>
				</form>
			
			</div>
		</div>
    
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

<script>
			
		
$(document).ready(function()
{
	
	
	
$(".tkvsoft").on('change', function()
	{
		
		
		var t=this;
		
		if($(t).val()==1)
		$("#tkvsoft").show();
	else
		$("#tkvsoft").hide();
		
		
	});
			
	});		
			</script>
</body>

</html>