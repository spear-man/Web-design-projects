<?php 

	if(!isset($_SESSION['admin_email']))
	{
		echo "<script>window.open('login.php','_self')</script>";
	}
	else
	{

 ?>



<?php
	
	if(isset($_GET['booking_delete']))
	{
		$delete_id = $_GET['booking_delete'];
		$delete_user = "delete from booking where user_id='$delete_id'";
		$run_delete = mysqli_query($con,$delete_user);

		if($run_delete)
		{
			echo "<script>alert('Record Deleted!!')</script>";
			echo "<script>window.open('index.php?booking_details','_self')</script>";
		}
	}

?>

<?php } ?>