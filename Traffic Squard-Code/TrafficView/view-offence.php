<?php 
include"sidebar.php";
include "dbconnect.php";
session_start();
$a=$_SESSION['r_id'];
?>                    <div class="header">
                      <h4 class="title">Offence Table</h4>
                      <p class="category">Here is a list of all Offences</p>
                            </div>
                            <div class="content table-responsive table-full-width">
							
							 <label for="filter">Search</label> <input type="text" name="filter" value="" id="myInput" placeholder="Search with offence ID" onkeyup="myFunction()"/>
   
   <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
	<?php 
	$sql="SELECT * FROM `offense committed`";
  $result=mysqli_query($con,$sql)or die("error:".mysqli_error($con));
  ?>
<table>
<table border=3 width=70%>
<tr>
<th>Sl.no.</th>
<th>Vehicle Number</th>
<th>offense</th>
<th>place</th>
<th>Action</th>
</tr>	
<?php 
$count=0;
while ($row = mysqli_fetch_array($result)) {
   
    $count++;
            ?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $row['Vehicle_Number']; ?></td>
                    <td><?php echo $row['Offense']; ?></td>
                    <td><?php echo $row['Place']; ?></td>
                    <td><a rel="facebox" title="Click to edit view details" href="./TrafficView/offence-detail.php?id=<?php echo $row['O_R_id']; ?>">
                    <i class="fa fa-eye  fa-lg text-success"></i> </a>
			<a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Click to Delete the Offense">
            <i class="fa fa-trash fa-lg text-danger"></i></a>
													</td>
                    
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

								
    </div>
  </div>
  
								
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
		   <footer class="footer">
            <div class="container-fluid">
                
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.lykup.com">Hillsofts</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>
</body>
</html>
