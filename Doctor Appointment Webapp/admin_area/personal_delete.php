<?php 

	if(!isset($_SESSION['admin_email']))
	{
		echo "<script>window.open('login.php','_self')</script>";
	}
	else
	{

 ?>



<?php
	
	if(isset($_GET['personal_delete']))
	{
		$delete_id = $_GET['personal_delete'];
		$delete_user = "delete from personal_training where id='$delete_id'";
		$run_delete = mysqli_query($con,$delete_user);

		if($run_delete)
		{
			echo "<script>alert('Record Deleted!!')</script>";
			echo "<script>window.open('index.php?personal_training','_self')</script>";
		}
	}

?>

<?php } ?>