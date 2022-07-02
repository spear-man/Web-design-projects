<?php 

	if(!isset($_SESSION['admin_email']))
	{
		echo "<script>window.open('login.php','_self')</script>";
	}
	else
	{
		
 ?>


 <div class="row"><!-- 2nd row starts -->
 	<div class="col-lg-12"><!-- col-lg-12 starts -->
 		<div class="panel panel-default"><!-- panel panel-default starts -->
 			
 			<div class="panel-heading"><!-- panel-heading starts -->
 				<h3 class="panel-title">
 					</i> Insert New Admin
 				</h3>
 			</div><!-- panel-heading ens -->

 			<div class="panel-body"><!-- panel-body starts -->
 				<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal starts -->
 					
 					
 					<div class="form-group"><!-- form-group starts -->
 						<label class="col-md-3 control-label">User Name</label>
 						<div class="col-md-6"><!-- col-md-6 starts -->
 							<input type="text" name="admin_name" class="form-control"   required>
 						</div><!-- col-md-6 ends -->
 					</div><!-- form-group ends -->


 					<div class="form-group"><!-- form-group starts -->
 						<label class="col-md-3 control-label">User Email</label>
 						<div class="col-md-6"><!-- col-md-6 starts -->
 							<input type="text" name="admin_email" class="form-control"   required>
 						</div><!-- col-md-6 ends -->
 					</div><!-- form-group ends -->


 					<div class="form-group"><!-- form-group starts -->
 						<label class="col-md-3 control-label">User Password</label>
 						<div class="col-md-6"><!-- col-md-6 starts -->
 							<input type="Password" name="admin_pass" class="form-control"   required>
 						</div><!-- col-md-6 ends -->
 					</div><!-- form-group ends -->

 					<div class="form-group"><!-- form-group starts -->
 						<label class="col-md-3 control-label">User Contact</label>
 						<div class="col-md-6"><!-- col-md-6 starts -->
 							<input type="text" name="admin_contact" class="form-control"   required>
 						</div><!-- col-md-6 ends -->
 					</div><!-- form-group ends -->



 					<div class="form-group"><!-- form-group starts -->
 						<label class="col-md-3 control-label">User Location</label>
 						<div class="col-md-6"><!-- col-md-6 starts -->
 							<input type="text" name="admin_location" class="form-control"   required>
 						</div><!-- col-md-6 ends -->
 					</div><!-- form-group ends -->




 					<div class="form-group"><!-- form-group starts -->
 						<label class="col-md-3 control-label">User Image</label>
 						<div class="col-md-6"><!-- col-md-6 starts -->
 							<input type="file" name="admin_image" class="form-control"   required>
 						</div><!-- col-md-6 ends -->
 					</div><!-- form-group ends -->



 					<div class="form-group"><!-- form-group starts -->
 						<label class="col-md-3 control-label"></label>
 						<div class="col-md-6"><!-- col-md-6 starts -->
 							<input type="submit" name="submit" value="Insert User" class="btn btn-primary form-control">
 						</div><!-- col-md-6 ends -->
 					</div><!-- form-group ends -->


 				</form><!-- form-horizontal ends -->
 			</div><!-- panel-body ends -->

 		</div><!-- panel panel-default ends -->
 	</div><!-- col-lg-12 ends-->
 </div><!-- 2nd row starts -->

<?php
	
	if(isset($_POST['submit']))
	{
		$admin_name = $_POST['admin_name'];
		$admin_email = $_POST['admin_email'];
		$admin_pass = $_POST['admin_pass'];
		$admin_contact = $_POST['admin_contact'];
		$admin_location = $_POST['admin_location'];
		$admin_image = $_FILES['admin_image']['name'];
		$temp_admin_image = $_FILES['admin_image']['tmp_name'];
		move_uploaded_file($temp_admin_image,"admin_images/$admin_image");

		$insert_admin = "insert into admins (admin_name,admin_email,admin_pass,admin_contact,admin_location,admin_image) values ('$admin_name','$admin_email','$admin_pass','$admin_contact','$admin_location','$admin_image')";
		$run_admin = mysqli_query($con,$insert_admin);

		if($run_admin)
		{
			echo "<script>alert('New user successfully inserted')</script>";
			echo "<script>window.open('index.php?view_users','_self')</script>";
		}
	}

?>



 <?php } ?>