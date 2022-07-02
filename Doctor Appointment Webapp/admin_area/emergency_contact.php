<?php 

	if(!isset($_SESSION['admin_email']))
	{
		echo "<script>window.open('login.php','_self')</script>";
	}
	else
	{

 ?>



 <div class="row"><!-- 2 row starts -->
 	<div class="col-lg-12"><!-- col-lg-12 starts -->
 		<div class="panel panel-default"><!-- panel panel-default starts -->
 			
 			<div class="panel-heading"><!-- panel-heading starts -->
 				<h3 class="panel-title"><!-- panel-title starts -->
 				 View 
 				 Emergency Contact details
 				</h3><!-- panel-title ends -->
 			</div><!-- panel-heading ends -->

 			<div class="panel-body" ><!-- panel-body Starts -->

			<div class="table-responsive" ><!-- table-responsive Starts -->

			<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

			<thead><!-- thead Starts -->

				<tr>

					<th>FIRST NAME</th>
				    <th>LAST NAME</th>
				    <th>PHONE</th>
				    <th>EMAIL</th>
				    <th>ADDDRESS</th>
				    <th>RELATIONSHIP</th>
				    <th>CITY</th>
				    <th>COUNTY</th>
				     <th>ZIP CODE</th>
				    <th>DELETE</th>

				</tr>

			</thead><!-- thead Ends -->

 				<tbody><!---tbody starts -->
 					<?php

 						$i=0;

						$select_users = " select * from emergency_contact ";
					    $run_users = mysqli_query($con,$select_users);
					    while ($row=mysqli_fetch_array($run_users))
 						{
						 	  $id = $row['id'];
						      $fname = $row['fname'];
							  $lname = $row['lname'];
							  $phone = $row['phone'];
							  $email = $row['email'];
							  $address = $row['address'];
							  $relationship = $row['relationship'];
							  $city = $row['city'];
							  $county = $row['county'];
							  $zip = $row['zip'];
 							$i++;

 					?>
 					<tr>
 						<td><?php echo $fname; ?></td>
 						<td><?php echo $lname; ?></td>
 						<td><?php echo $phone; ?></td>
 						<td><?php echo $email; ?></td>
 						<td><?php echo $address; ?></td>
 						<td><?php echo $relationship; ?></td>
 						<td><?php echo $city; ?></td>
 						<td><?php echo $county; ?></td>
 						<td><?php echo $zip; ?></td>
 					
 						<td>
						<button><a href="index.php?emergency_delete=<?php echo $id; ?> ">  Delete</a></button>
						</td>
 										
 					</tr>

 					<?php } ?>
 				</tbody><!---tbody ends-->
 					</table><!---table table-bordered table-hover table-striped ends -- >
 				</div><!--  table-responsive ends -->
 			</div><!-- panel-body ends -->

 		</div><!-- panel panel-default ends -->
 	</div><!-- col-lg-12 ends -->
 </div><!-- 2 row ends -->


<?php } ?>
