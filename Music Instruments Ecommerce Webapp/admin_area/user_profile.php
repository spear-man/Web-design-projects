<?php 

	if(!isset($_SESSION['admin_email']))
	{
		echo "<script>window.open('login.php','_self')</script>";
	}
	else
	{
		
 ?>

 <!---------------------------------------------------------------------------------->

 <?php 
 	
 	if(isset($_GET['user_profile']))
 	{
 		$edit_id = $_GET['user_profile'];
 		$get_admin = "select * from admins where admin_id='$edit_id'";
 		$run_admin = mysqli_query($con,$get_admin);
 		$row_admin = mysqli_fetch_array($run_admin);

 		$admin_id = $row_admin['admin_id'];
 		$admin_name = $row_admin['admin_name'];
		$admin_email = $row_admin['admin_email'];
		$admin_pass =$row_admin['admin_pass'];
		$admin_contact = $row_admin['admin_contact'];
		$admin_location = $row_admin['admin_location'];
		$admin_image = $row_admin['admin_image'];


 	}

  ?>

 <!---------------------------------------------------------------------------------->
 <div class="row"><!-- row starts -->
 	<div class="col-lg-12"><!-- col-lg-12 starts -->
 		<ol class="breadcrumb"><!-- breadcrumb starts -->
 			<li class="active">
 				<i class="fa fa-dashboard"></i> Dashboard / Edit Profile
 			</li>
 		</ol><!-- breadcrumb ends -->
 	</div><!-- col-lg-12 ends-->
 </div><!-- row ends -->

 <div class="row"><!-- 2nd row starts -->
 	<div class="col-lg-12"><!-- col-lg-12 starts -->
 		<div class="panel panel-default"><!-- panel panel-default starts -->
 			
 			<div class="panel-heading"><!-- panel-heading starts -->
 				<h3 class="panel-title">
 					<i class="fa fa-pencil-square"></i> Edit Profile
 				</h3>
 			</div><!-- panel-heading ens -->

 			<div class="panel-body"><!-- panel-body starts -->
 				<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal starts -->
 					
 					
 					<div class="form-group"><!-- form-group starts -->
 						<label class="col-md-3 control-label">User Name</label>
 						<div class="col-md-6"><!-- col-md-6 starts -->
 							<input type="text" name="admin_name" class="form-control" required value="<?php echo $admin_name; ?>">
 						</div><!-- col-md-6 ends -->
 					</div><!-- form-group ends -->


 					<div class="form-group"><!-- form-group starts -->
 						<label class="col-md-3 control-label">User Email</label>
 						<div class="col-md-6"><!-- col-md-6 starts -->
 							<input type="text" name="admin_email" class="form-control"   required value="<?php echo $admin_email; ?>">
 						</div><!-- col-md-6 ends -->
 					</div><!-- form-group ends -->


 					<div class="form-group"><!-- form-group starts -->
 						<label class="col-md-3 control-label">User Password</label>
 						<div class="col-md-6"><!-- col-md-6 starts -->
 							<input type="text" name="admin_pass" class="form-control"   required  value="<?php echo $admin_pass; ?>">
 						</div><!-- col-md-6 ends -->
 					</div><!-- form-group ends -->

 					<div class="form-group"><!-- form-group starts -->
 						<label class="col-md-3 control-label">User Contact</label>
 						<div class="col-md-6"><!-- col-md-6 starts -->
 							<input type="text" name="admin_contact" class="form-control"   required  value="<?php echo $admin_contact; ?>">
 						</div><!-- col-md-6 ends -->
 					</div><!-- form-group ends -->



 					<div class="form-group"><!-- form-group starts -->
 						<label class="col-md-3 control-label">User Location</label>
 						<div class="col-md-6"><!-- col-md-6 starts -->
 							<input type="text" name="admin_location" class="form-control"   required value="<?php echo $admin_location; ?>">
 						</div><!-- col-md-6 ends -->
 					</div><!-- form-group ends -->




 					<div class="form-group"><!-- form-group starts -->
 						<label class="col-md-3 control-label">User Image</label>
 						<div class="col-md-6"><!-- col-md-6 starts -->
 							<input type="file" name="admin_image" class="form-control"   required ">
 							<br>
 							<img src="admin_images/<?php echo $admin_image; ?>" width="70" height="70">
 						</div><!-- col-md-6 ends -->
 					</div><!-- form-group ends -->



 					<div class="form-group"><!-- form-group starts -->
 						<label class="col-md-3 control-label"></label>
 						<div class="col-md-6"><!-- col-md-6 starts -->
 							<input type="submit" name="update" value="Update User" class="btn btn-primary form-control">
 						</div><!-- col-md-6 ends -->
 					</div><!-- form-group ends -->


 				</form><!-- form-horizontal ends -->
 			</div><!-- panel-body ends -->

 		</div><!-- panel panel-default ends -->
 	</div><!-- col-lg-12 ends-->
 </div><!-- 2nd row starts -->

<?php
	
	if(isset($_POST['update']))
	{
		$admin_name = $_POST['admin_name'];
		$admin_email = $_POST['admin_email'];
		$admin_pass = $_POST['admin_pass'];
		$admin_contact = $_POST['admin_contact'];
		$admin_location = $_POST['admin_location'];
		$admin_image = $_FILES['admin_image']['name'];
		$temp_admin_image = $_FILES['admin_image']['tmp_name'];
		move_uploaded_file($temp_admin_image,"admin_images/$admin_image");

		$update_admin = "update admins set admin_name='$admin_name',admin_email='$admin_email',admin_pass='$admin_pass',admin_contact='$admin_contact',admin_location='$admin_location',admin_image='$admin_image' where admin_id='$admin_id'";

		$run_admin = mysqli_query($con,$update_admin);

		if($run_admin)
		{
			echo "<script>alert('User successfully Updated')</script>";
			echo "<script>window.open('index.php','_self')</script>";
			session_destroy();
		}
	
	}

?>



 <?php } ?>