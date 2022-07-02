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
					 View Current Normal Users
				</h3><!-- panel-title ends--> 
			</div><!-- panel-heading ends-->

			<div class="panel-body"><!-- panel-body starts-->
				<div class="table-responsive"><!-- table-responsive starts-->
					<table class="table table-bordered table-hover table-striped"><!-- table table-boarder table-hover table-striped starts-->
						
						<thead><!-- thead starts-->
							<tr>
								<th>User Name</th>
								<th>First Name</th>
								<th>last Name</th>
								<th>Email</th>
								<th>Password</th>
								<th>signUpDate</th>
								<th>Delete</th>
				
							</tr>
						</thead><!-- thead ends-->

						<tbody><!-- thead starts-->
							<?php

								$get_users = "select * from users";
								$run_users = mysqli_query($con,$get_users);

								while ($row_users = mysqli_fetch_array($run_users))
								 {
									$id = $row_users['id'];
									$username = $row_users['username'];
									$firstname = $row_users['firstName'];
									$lastname = $row_users['lastName'];
									$email = $row_users['email'];
									$password = $row_users['password'];
									$signupdate = $row_users['signUpDate'];
								
							?>
								<tr>
									<td><?php echo $username; ?></td>
									<td><?php echo $firstname; ?></td>
									<td><?php echo $lastname; ?></td>
									<td><?php echo $email; ?></td>
									<td><?php echo $password; ?></td>
									<td><?php echo $signupdate; ?></td>
									
									<td>
										<button><a href="index.php?normal_user_delete=<?php echo $id; ?> "> 
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