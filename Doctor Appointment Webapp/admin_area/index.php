<?php 
	session_start();
	include("includes/db.php");
	if(!isset($_SESSION['admin_email']))
	{
		echo "<script>window.open('login.php','_self')</script>";
	}
	else
	{
?>

<?php
	$admin_session = $_SESSION['admin_email'];
	$get_admin = "select * from admins where admin_email ='$admin_session'";
	$run_admin = mysqli_query($con,$get_admin);
	$row_admin = mysqli_fetch_array($run_admin);
	$admin_id = $row_admin['admin_id'];
	$admin_name = $row_admin['admin_name'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>MTANDAO-DOC ADMIN</title>
	<link href="admin_images/favicon.ico" type="image/ico" rel="shortcut icon">
	<link href="images/favicon.ico" type="image/ico" rel="shortcut icon">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>

	<div id="wrapper"><!-- wraper starts -->
		<div id="page-wrapper"><!-- pagewraper starts -->
			<div class="container-fluid"><!-- container-fluid starts -->


	<!-------------------------------dashboard inc----------------------------->
		<?php
		if(isset($_GET['dashboard'])){

		include("booking_details.php");

		}


		   if(isset($_GET['booking_details']))
		 {
			include("booking_details.php");
		 }


		   if(isset($_GET['booking_delete']))
		 {
			include("booking_delete.php");
		 }



		 if(isset($_GET['emergency_contact']))
		 {
			include("emergency_contact.php");
		 }

		    if(isset($_GET['emergency_delete']))
		 {
			include("emergency_delete.php");
		 }


		  if(isset($_GET['personal_training']))
		 {
			include("personal_training.php");
		 }

		   if(isset($_GET['personal_delete']))
		 {
			include("personal_delete.php");
		 }



		   if(isset($_GET['progress_note']))
		 {
			include("progress_note.php");
		 }

		    if(isset($_GET['progress_delete']))
		 {
			include("progress_delete.php");
		 }




		 if(isset($_GET['psychiatric_evaluation']))
		 {
			include("psychiatric_evaluation.php");
		 }

		  if(isset($_GET['psychiatric_delete']))
		 {
			include("psychiatric_delete.php");
		 }


		 if(isset($_GET['contact']))
		 {
			include("contact.php");
		 }

		  if(isset($_GET['contact_delete']))
		 {
			include("contact_delete.php");
		 }





		 if(isset($_GET['insert_user']))
		 {
			include("insert_user.php");
		 }


		 if(isset($_GET['view_users']))
		 {
			include("view_users.php");
		 }

		  if(isset($_GET['user_delete']))
		 {
			include("user_delete.php");
		 }


		 if(isset($_GET['normal_user']))
		 {
			include("normal_user.php");
		 }

		  if(isset($_GET['normal_user_delete']))
		 {
			include("normal_user_delete.php");
		 }



		 ?>
		 
	<!-------------------------------sidebar inc----------------------------->

		<?php include("includes/sidebar.php"); ?>

	<!----------------------------------------------------------------------->
			</div><!-- container-fluid ends -->
		</div><!-- pagewrapper ends -->
	</div><!-- wraper ends -->


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php } ?>