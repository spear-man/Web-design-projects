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
 				 Psychiatric Evaluation details
 				</h3><!-- panel-title ends -->
 			</div><!-- panel-heading ends -->

 			<div class="panel-body" ><!-- panel-body Starts -->

			<div class="table-responsive" ><!-- table-responsive Starts -->

			<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

			<thead><!-- thead Starts -->

				<tr>

					<th>FIRST NAME</th>
				    <th>MIDDLE NAME</th>
				    <th>LAST NAME</th>
				    <th>REFERAL</th>
				    <th>ACCOMPANIED</th>
				    <th>MAIN COMPLAINT</th>
				    <th>INTERESTS</th>
				    <th>GUILT</th>
				     <th>APPETITE</th>
				     <th>MOOD</th>
				
				 
				    <th>DELETE</th>

				</tr>

			</thead><!-- thead Ends -->

 				<tbody><!---tbody starts -->
 					<?php

 						$i=0;

						$select_users = " select * from psychiatric";
					    $run_users = mysqli_query($con,$select_users);
					    while ($row=mysqli_fetch_array($run_users))
 						{
						 	  $id = $row['id'];
						      $fname = $row['fname'];
							  $mname = $row['mname'];
							  $lname = $row['lname'];
							  $referal = $row['referal'];
							  $accompanied = $row['accompanied'];
							  $ccomplaint = $row['ccomplaint'];
							  $interests = $row['interests'];
							  $guilt = $row['guilt'];
							  $appetite = $row['appetite'];
							  $mood = $row['mood'];
							  
 							$i++;

 					?>
 					<tr>
 						<td><?php echo $fname; ?></td>
 						<td><?php echo $mname; ?></td>
 						<td><?php echo $lname; ?></td>
 						<td><?php echo $referal; ?></td>
 						<td><?php echo $accompanied; ?></td>
 						<td><?php echo $ccomplaint; ?></td>
 						<td><?php echo $interests; ?></td>
 						<td><?php echo $guilt; ?></td>
 						<td><?php echo $appetite; ?></td>
 						<td><?php echo $mood; ?></td>
 						
 					
 						<td>
						<button><a href="index.php?psychiatric_delete=<?php echo $id; ?> ">  Delete</a></button>
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
