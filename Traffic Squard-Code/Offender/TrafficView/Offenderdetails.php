<?php include "dbconnect.php";
session_start();


?>

<div class="content"><br>

            <div class="container-fluid">
			
 <div class="row">
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<h3><b><a href="../offender_offenselist.php?" style="color:blue"><--Back</a><b></h3>
					<center><div class="col-md-8 col-md-offset-2">
						
					 			<?php
                            
							$id=$_GET['id'];
							$sql="SELECT * FROM `offense committed`Where `O_R_id`='$id'";
							$result=mysqli_query($con,$sql)or die("error:".mysqli_error($con));
							$row = mysqli_fetch_array($result);
							$c=$row['Vehicle_Number'];
							$ofnce=$row['Offense'];
							$sql1="SELECT * FROM `tbl_drivers` WHERE `Vehicle_number`='$c'";
							$result1=mysqli_query($con,$sql1)or die("error:".mysqli_error($con));
							$row1 = mysqli_fetch_array($result1);
							$sql2="SELECT * FROM `tbl_offense` WHERE `offense`='$ofnce'";
							$result2=mysqli_query($con,$sql2)or die("error:".mysqli_error($con));
							$row2 = mysqli_fetch_array($result2);
							
				
                                
?>

                        <div class="card">
							
			<div class="header text-center">
                                <h2 class="title">Offense Detail</h2>
                                <br>
								
								<div class="mapouter"><div class="gmap_canvas"><iframe width="650px" height="294px" 
							id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo $row['district'].", ". $row['Place']; ?>
							&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" 
							marginwidth="0"></iframe><a href="https://www.webdesign-muenchen-pb.de"></a></div>
							<style>.mapouter{text-align:right;height:294px;width:650px;}.gmap_canvas 
							{overflow:hidden;background:none!important;height:294px;width:650px;}</style><small></small></div>
                            </div>
							
                          
                            <div class="content table-responsive table-full-width table-upgrade">
							 <table class="table">
                                   
							 <body>
										<style>
											td
											{
											font-size: 20px;
											font-weight: bold;
											padding:30px;
											
											font-family: "Times New Roman", Times, serif;
											}
											</style>
									<tr>
                                        	<td style="background-color:#3dd;">Offense:</td>
                                        	<td><?php echo $row['Offense']; ?></td>
                                        </tr>
									
										<tr>
                                        	<td style="background-color:#3dd;">Vehicle Reg. No:</td>
                                        	<td><?php echo $row['Vehicle_Number']; ?></td>
                                        </tr>
										<tr>
                                        	<td style="background-color:#3dd;">Vehicle Type:</td>
                                        	<td><?php echo $row1['Vehicle_Type']; ?></td>
                                        </tr>
										<tr>
                                        	<td style="background-color:#3dd;">Location of Offense:</td>
                                        	<td><?php echo $row['district'].", ". $row['Place']; ?></td>
                                        </tr>
										
										 
										<tr>
                                        	<td style="background-color:#3dd;">Date of Offense:</td>
                                        	<td><?php echo date('l jS \of F Y h:i:s A');?></td>
                                        </tr>
										<tr>
                                        	<td style="background-color:#3dd;">Amount:</td>
                                        	<td><?php echo $row2['amount'];?></td>
                                        </tr>
										<tr>
                                        	<td ></td>
                                        	<td></td>
                                        </tr>
										<br><br>
										</body>
										</table>
										 </div>
										 
						  
                </div> 
            </div>
        </div>
		</div>
		</div></center>
		