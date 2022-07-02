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
 				 Personal Training details
 				</h3><!-- panel-title ends -->
 			</div><!-- panel-heading ends -->

 			<div class="panel-body" ><!-- panel-body Starts -->

			<div class="table-responsive" ><!-- table-responsive Starts -->

			<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

			<thead><!-- thead Starts -->

				<tr>

					<th>FIRST NAME</th>
				    <th>LAST NAME</th>
				    <th>AGE</th>
				    <th>HEIGHT</th>
				    <th>WEIGHT</th>
				    <th>GENDER</th>
				    <th>JOB</th>
				    <th>EXTRA ACTIVITIES</th>
				     <th>TRAVEL</th>
				     <th>OFFWORK</th>
				    <th>MOTIVATION</th>
				    <th>INJURIES</th>
				     <th>MAJOR DESEASES</th>
				     <th>SECONDARY DESEASES</th>
				     <th>SMOKER</th>
				     <th>DIET</th>
				     <th>READYNESS</th>
				    <th>DELETE</th>

				</tr>

			</thead><!-- thead Ends -->

 				<tbody><!---tbody starts -->
 					<?php

 						$i=0;

						$select_users = " select * from personal_training";
					    $run_users = mysqli_query($con,$select_users);
					    while ($row=mysqli_fetch_array($run_users))
 						{
						 	  $id = $row['id'];
						      $fname = $row['fname'];
							  $lname = $row['lname'];
							  $age = $row['age'];
							  $height = $row['height'];
							  $weight = $row['weight'];
							  $gender = $row['gender'];
							  $job = $row['job'];
							  $activity = $row['activity'];
							  $travel = $row['travel'];
							  $offwork = $row['offwork'];
							  $motivation = $row['motivation'];
							  $injuries = $row['injuries'];
							  $desease1 = $row['desease1'];
							  $desease2 = $row['desease2'];
							  $smoke = $row['smoke'];
							  $diet = $row['diet'];
							  $readyness = $row['readyness'];
		

 							$i++;

 					?>
 					<tr>
 						<td><?php echo $fname; ?></td>
 						<td><?php echo $lname; ?></td>
 						<td><?php echo $age; ?></td>
 						<td><?php echo $height; ?></td>
 						<td><?php echo $weight; ?></td>
 						<td><?php echo $gender; ?></td>
 						<td><?php echo $job; ?></td>
 						<td><?php echo $activity; ?></td>
 						<td><?php echo $travel; ?></td>
 						<td><?php echo $offwork; ?></td>
 						<td><?php echo $motivation; ?></td>
 						<td><?php echo $injuries; ?></td>
 						<td><?php echo $desease1; ?></td>
 						<td><?php echo $desease2; ?></td>
 						<td><?php echo $smoke; ?></td>
 						<td><?php echo $diet; ?></td>
 						<td><?php echo $readyness; ?></td>
 					
 						<td>
						<button><a href="index.php?personal_delete=<?php echo $id; ?> ">  Delete</a></button>
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
