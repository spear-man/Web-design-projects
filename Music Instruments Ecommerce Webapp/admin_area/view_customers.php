<?php 

	if(!isset($_SESSION['admin_email']))
	{
		echo "<script>window.open('login.php','_self')</script>";
	}
	else
	{

 ?>

 <div class="row"><!-- 1 row starts -->
 	<div class="col-lg-12"><!-- col-lg-12 starts -->
 		<ol class="breadcrumb"><!-- breadcrumb starts -->
 			<li>
 				<i class="fa fa-dashboard"></i> Dashboard / View Customers
 			</li>
 		</ol><!-- breadcrumb starts -->
 	</div><!-- col-lg-12 ends -->
 </div><!-- 1 row ends -->

 <div class="row"><!-- 2 row starts -->
 	<div class="col-lg-12"><!-- col-lg-12 starts -->
 		<div class="panel panel-default"><!-- panel panel-default starts -->
 			
 			<div class="panel-heading"><!-- panel-heading starts -->
 				<h3 class="panel-title"><!-- panel-title starts -->
 					<i class="fa fa-database fa-fw"></i> View Customers
 				</h3><!-- panel-title ends -->
 			</div><!-- panel-heading ends -->

 			<div class="panel-body" ><!-- panel-body Starts -->

			<div class="table-responsive" ><!-- table-responsive Starts -->

			<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

			<thead><!-- thead Starts -->

				<tr>

					<th>Customer No:</th>
					<th>Customer Name:</th>
					<th>Customer Email:</th>
					<th>Customer location:</th>
					<th>Customer phone number:</th>
					<th>Customer Image:</th>
					<th>Delete</th>

				</tr>

			</thead><!-- thead Ends -->

 				<tbody><!---tbody starts -->
 					<?php

 						$i=0;

						$get_c = "select * from customers";

						$run_c = mysqli_query($con,$get_c);

 						While($row_c=mysqli_fetch_array($run_c))
 						{
 							$c_id = $row_c['customer_id'];
 							$c_name = $row_c['customer_name'];
 							$c_email = $row_c['customer_email'];
 							$c_loc = $row_c['customer_loc'];
 							$c_contact = $row_c['customer_contact'];
 							$c_image = $row_c['customer_image'];

 							$i++;

 					?>
 					<tr>
 						<td><?php echo $i; ?></td>
 						<td><?php echo $c_name; ?></td>
 						<td><?php echo $c_email; ?></td>
 						<td><?php echo $c_loc; ?></td>
 						<td><?php echo $c_contact; ?></td>
 						<td><img src="../customer/customer_images/<?php echo $c_image;?>" width="60" height="60"></td>
 						<td>
 							<a href="index.php?customer_delete=<?php echo $c_id; ?>">
 								<i class="fa fa-trash-o"></i>Delete
 							</a>
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