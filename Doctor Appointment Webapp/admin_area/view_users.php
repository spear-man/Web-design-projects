<?php 

	if(!isset($_SESSION['admin_email']))
	{
		echo "<script>window.open('login.php','_self')</script>";
	}
	else
	{

 ?>



<div class="row"><!-- 2 row starts-->
	<div class="col-lg-12"><!-- col-lg-12 starts-->
		<div class="panel panel-default"><!-- panel panel-default starts-->
			<div class="panel-heading"><!-- panel-heading starts-->
				<h3 class="panel-title"><!-- panel-title starts-->
					 View Current Admins
				</h3><!-- panel-title ends--> 
			</div><!-- panel-heading ends-->

			<div class="panel-body"><!-- panel-body starts-->
				<div class="table-responsive"><!-- table-responsive starts-->
					<table class="table table-bordered table-hover table-striped"><!-- table table-boarder table-hover table-striped starts-->
						
						<thead><!-- thead starts-->
							<tr>
								<th>User Name</th>
								<th>User Email</th>
								<th>User Contact</th>
								<th>User Location</th>
								<th>User Password</th>
								<th>User image</th>
								<th>Delete</th>
				
							</tr>
						</thead><!-- thead ends-->

						<tbody><!-- thead starts-->
							<?php

								$get_admin = "select * from admins";
								$run_admin = mysqli_query($con,$get_admin);

								while ($row_admin = mysqli_fetch_array($run_admin))
								 {
									$admin_id = $row_admin['admin_id'];
									$admin_name = $row_admin['admin_name'];
									$admin_email = $row_admin['admin_email'];
									$admin_contact = $row_admin['admin_contact'];
									$admin_location = $row_admin['admin_location'];
									$admin_password = $row_admin['admin_pass'];
									$admin_image = $row_admin['admin_image'];
								
							?>
								<tr>
									<td><?php echo $admin_name; ?></td>
									<td><?php echo $admin_email; ?></td>
									<td><?php echo $admin_contact; ?></td>
									<td><?php echo $admin_location; ?></td>
									<td><?php echo $admin_password; ?></td>
									<td><img src="admin_images/<?php echo $admin_image; ?>" width="60" height="60"></td>
									<td>
										<button><a href="index.php?user_delete=<?php echo $admin_id; ?> "> 
											 Delete
										</a></button>
									</td>
									
								</tr>

							<?php } ?>
						</tbody><!-- thead ends-->

					</table><!-- table table-boarder table-hover table-striped ends-->
				</div><!-- table-responsive ends-->
			</div><!-- panel-body starts-->
		</div><!-- panel panel-default ends-->
	</div><!-- col-lg-12 starts-->
</div><!-- 2 row ends-->

 <?php } ?>