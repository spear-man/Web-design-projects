<?php 

	if(!isset($_SESSION['admin_email']))
	{
		echo "<script>window.open('login.php','_self')</script>";
	}
	else
	{

 ?>

<?php
	
	if(isset($_GET['normal_user_delete']))
	{
		$delete_id = $_GET['normal_user_delete'];
		$delete_user = "delete from users where id='$delete_id'";
		$run_delete = mysqli_query($con,$delete_user);

		if($run_delete)
		{
			echo "<script>alert('Standard User Deleted!!')</script>";
			echo "<script>window.open('index.php?normal_user','_self')</script>";
		}
	}

?>

 <?php } ?>