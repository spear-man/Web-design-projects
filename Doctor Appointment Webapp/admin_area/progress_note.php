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
 				 Progress Note details
 				</h3><!-- panel-title ends -->
 			</div><!-- panel-heading ends -->

 			<div class="panel-body" ><!-- panel-body Starts -->

			<div class="table-responsive" ><!-- table-responsive Starts -->

			<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

			<thead><!-- thead Starts -->

				<tr>

					<th>FIRST NAME </th>
				    <th>MIDDLE NAME</th>
				    <th>LAST NAME</th>
				    <th>DATE</th>
				    <th>SESSION</th>
				    <th>CODE</th>
				    <th>ASSESSMENT</th>
				    <th>SAFTY</th>
				     <th>MEDICAL ISSUE</th>
				     <th>MEDICAL ISSUE DESCRIPTION</th>
				
				 
				    <th>DELETE</th>

				</tr>

			</thead><!-- thead Ends -->

 				<tbody><!---tbody starts -->
 					<?php

 						$i=0;

						$select_users = " select * from progress";
					    $run_users = mysqli_query($con,$select_users);
					    while ($row=mysqli_fetch_array($run_users))
 						{
						 	  $id = $row['id'];
						      $fname = $row['fname'];
							  $mname = $row['mname'];
							  $lname = $row['lname'];
							  $date = $row['date'];
							  $session = $row['session'];
							  $code = $row['code'];
							  $assessment = $row['assessment'];
							  $safty = $row['safty'];
							  $medical_issue = $row['medical_issue'];
							  $desc_medical_issue = $row['desc_medical_issue'];
							  
 							$i++;

 					?>
 					<tr>
 						<td><?php echo $fname; ?></td>
 						<td><?php echo $mname; ?></td>
 						<td><?php echo $lname; ?></td>
 						<td><?php echo $date; ?></td>
 						<td><?php echo $session; ?></td>
 						<td><?php echo $code; ?></td>
 						<td><?php echo $assessment; ?></td>
 						<td><?php echo $safty; ?></td>
 						<td><?php echo $medical_issue; ?></td>
 						<td><?php echo $desc_medical_issue; ?></td>
 						
 					
 						<td>
						<button><a href="index.php?progress_delete=<?php echo $id; ?> ">  Delete</a></button>
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
