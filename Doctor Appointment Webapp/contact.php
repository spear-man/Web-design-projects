<?php
// check whether session variable is set
include("includes/config.php");

	if(isset($_SESSION['userloggedin']))
	{
		$userloggedin = $_SESSION['userloggedin'];
	}
	else
	{
		header("Location: register.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>MTANDAO-DOC</title>
<link href="images/favicon.ico" type="image/ico" rel="shortcut icon">
<link href="styles/bootstrap.min.css" rel="stylesheet">
<link href="styles/style.css" rel="stylesheet">
<link href="styles/font-awesome/css/all.css" rel="stylesheet">
<script src="js/typed.js" ></script>

<!-----------------tinymce textarea addon------------->
<script src="js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

</head>
<body>
	
<!----------------------------------second bar----------------------------------- -->

	<div class="navbar navbar-default" id="navbar"> <!--navbar navbar-default starts -->
		<div class="container"><!--container starts -->
			<div class="navbar-header"><!--navbar header starts -->
				<a class="navbar-brand home" href="index.php"><!--navbar-brand home start -->
					<img src="images/logo.png" class="hidden-xs" width="57px">
					<img src="images/logo-small.png" class="visible-xs" width="57px">
				</a><!--navbar-brand home ends -->

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
					<span class="sr-only">Toogle Navigation</span>
					<i class="fa fa-align-justify"></i>
				</button>

				

			</div><!--navbar header ends -->

			<div class="navbar-collapse collapse" id="navigation"><!--navbar-collapse collapse start -->
				<div class="padding-nav"><!--padding nav start -->
					<center>
					<ul class="nav navbar-nav navbar-left"><!--nav navbar-nav navbar-left start -->
						
						<li>
							<a href="index.php" >HOME</a>
						</li>
						
						<li >
							<a href="booking.php">BOOKING</a>
						</li>

						<li>
							<a href="emergency_contact.php">EMERGENCY CONTACT</a>
						</li>

						<li>
							<a href="personal_training.php">PERSONAL TRAINING</a>
						</li>

						<li>
							<a href="progress.php">PROGRESS </a>
						</li>

						<li>
							<a href="psychiatric_evaluation.php">PSYCHIATRIC EVALUATION</a>
						</li>

						<li class="active">
							<a href="contact.php">CONTACT US</a>
						</li>

						<li>
							<a href="logout.php" ><i class="fa fa-sign-out-alt"></i> LOGOUT</a>
						</li>

						<li>
							<a href="admin_area/index.php" target="_blank"> <i class="far fa-cog"></i> ADMIN</a>
						</li>
					</ul><!--nav navbar-nav navbar-left ends -->
					</center>
				</div><!--padding nav ends -->
				

				
			</div><!--navbar-collapse collapse ends-->
		</div><!--container ends -->	
	</div><!--navbar navbar-default ends -->






<form action="contact.php" method="post">

	<div class="form-group" ><!-- form-group Starts -->
		<center>
			<h2 class="form-login-heading" >TALK TO US </h2>
		</center>
		
		<br>

		<label> Name: </label>

		<input type="text" name="user_name" class="form-control" required>


		<br>

		<label> Email </label>

		<input type="email" name="user_email" class="form-control" required>


		<br>

		
        <label>MESSAGE</label>
        <textarea name="user_message" class="form-control"></textarea>
		<br>

		<center>
			<button class="btn btn-primary text-center" type="submit" name="submit" >send</button>
		</center>
		

	</div><!-- form-group Ends -->

</form>

<!----------------------------booking form database connection and data insertion ------------>

<?php
$con = mysqli_connect("localhost","root","","docapp_db");
if(isset($_POST['submit']))
{
  $user_name = $_POST['user_name'];

  $user_email = $_POST['user_email'];

  $user_message = $_POST['user_message'];


  $insert_query = "insert into contacts (user_name,user_email,user_message) values('$user_name','$user_email','$user_message')";

  $run_query = mysqli_query($con,$insert_query);
  if($run_query)
  {
    echo "<script>alert('Message Received successfully')</script>";
  }
 
}
?>

<?php
		include("includes/footer.php");
?>

</body>
</html>