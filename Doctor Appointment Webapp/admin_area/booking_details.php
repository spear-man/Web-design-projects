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
 				 View Booking details
 				</h3><!-- panel-title ends -->
 			</div><!-- panel-heading ends -->

 			<div class="panel-body" ><!-- panel-body Starts -->

			<div class="table-responsive" ><!-- table-responsive Starts -->

			<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

			<thead><!-- thead Starts -->

				<tr>

					<th>PACIENT NAME</th>
				    <th>GENDER</th>
				    <th>PHONE NO</th>
				    <th>EMAIL</th>
				    <th>DATE OF BIRTH</th>
				    <th>COUNTY</th>
				    <th>DOCTOR</th>
				    <th>DOC SPECIALIZATION</th>
				    <th>DELETE</th>

				</tr>

			</thead><!-- thead Ends -->

 				<tbody><!---tbody starts -->
 					<?php

 						$i=0;

						$select_users = " select * from booking ";
					    $run_users = mysqli_query($con,$select_users);
					    while ($row=mysqli_fetch_array($run_users))
 						{
						 	  $user_id = $row['user_id'];
						      $user_name = $row['user_name'];
							  $user_gender = $row['user_gender'];
							  $user_no = $row['user_no'];
							  $user_email = $row['user_email'];
							  $user_dob = $row['user_dob'];
							  $user_county = $row['user_county'];
							  $doc = $row['doc'];
							  $specialization = $row['specialization'];
 							$i++;

 					?>
 					<tr>
 						<td><?php echo $user_name; ?></td>
 						<td><?php echo $user_gender; ?></td>
 						<td><?php echo $user_no; ?></td>
 						<td><?php echo $user_email; ?></td>
 						<td><?php echo $user_dob; ?></td>
 						<td><?php echo $user_county; ?></td>
 						<td><?php echo $doc; ?></td>
 						<td><?php echo $specialization; ?></td>
 					
 						<td>
						<button><a href="index.php?booking_delete=<?php echo $user_id; ?> ">Delete</a></button>
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

