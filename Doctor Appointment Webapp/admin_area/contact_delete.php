<?php 

	if(!isset($_SESSION['admin_email']))
	{
		echo "<script>window.open('login.php','_self')</script>";
	}
	else
	{

 ?>



<?php
	
	if(isset($_GET['contact_delete']))
	{
		$delete_id = $_GET['contact_delete'];
		$delete_user = "delete from contacts where user_id='$delete_id'";
		$run_delete = mysqli_query($con,$delete_user);

		if($run_delete)
		{
			echo "<script>alert('Record Deleted!!')</script>";
			echo "<script>window.open('index.php?contact','_self')</script>";
		}
	}

?>

<?php } ?>