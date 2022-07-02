<?php 

	if(!isset($_SESSION['admin_email']))
	{
		echo "<script>window.open('login.php','_self')</script>";
	}
	else
	{

 ?>



<?php
	
	if(isset($_GET['emergency_delete']))
	{
		$delete_id = $_GET['emergency_delete'];
		$delete_user = "delete from emergency_contact where id='$delete_id'";
		$run_delete = mysqli_query($con,$delete_user);

		if($run_delete)
		{
			echo "<script>alert('Record Deleted!!')</script>";
			echo "<script>window.open('index.php?emergency_contact','_self')</script>";
		}
	}

?>

<?php } ?>