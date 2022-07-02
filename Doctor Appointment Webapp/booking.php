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
						
						<li class="active">
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

						<li>
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






<form action="booking.php" method="post">

	<div class="form-group" ><!-- form-group Starts -->
		<center>
			<h2 class="form-login-heading" >New patient booking </h2>
		</center>
		
		<br>

		<label> Name: </label>

		<input type="text" name="user_name" class="form-control" required>


		<br>

		<label> Gender: </label>

	
		<select type="text" name="user_gender" class="form-control" required>
			<option>Male</option>
			<option>Female</option>
		

		</select>

		<br>

		<label>Phone no: </label>

		<input type="text" name="user_no" class="form-control" required>


		<br>

		<label> Email </label>

		<input type="email" name="user_email" class="form-control" required>


		<br>

		<label> Date of birth </label>

		<input type="date" name="user_dob" class="form-control" required>


		<br>

		<label> County </label>

		<input type="text" name="user_county" class="form-control" required>



		<br>

		<label> Doctor</label>

		<select type="text" name="doc" class="form-control" required>
			<option>Dr.Agnes wanja</option>
			<option>Dr.Dennis Kamau</option>
			<option>Dr.Moses Kimani</option>
			<option>Dr.James otieno</option>
			<option>Dr.Mary Kitone</option>

		</select>


		<br>

		<label> Doctor Specialization</label>

		<select type="text" name="specialization" class="form-control" required>
			<option>Cardiologist</option>
			<option>Optician</option>
			<option>Dermatologist</option>
			<option>physician</option>
			<option>Allergist</option>

		</select>

		<br>


		<label> Payment fee(ksh)</label>

		<select type="text" name="payment" class="form-control" required>
			<option>200</option>
			<option>300</option>
			<option>400</option>
			<option>500</option>

		</select>

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
  $user_gender = $_POST['user_gender'];
  $user_no = $_POST['user_no'];
  $user_email = $_POST['user_email'];
  $user_dob = $_POST['user_dob'];
  $user_county = $_POST['user_county'];
  $doc = $_POST['doc'];
  $specialization = $_POST['specialization'];
  $payment = $_POST['payment'];

  $insert_query = "insert into booking (user_name,user_gender,user_no,user_email,user_dob,user_county,doc,specialization,payment) values('$user_name','$user_gender','$user_no','$user_email','$user_dob','$user_county','$doc','$specialization','$payment')";

  $run_query = mysqli_query($con,$insert_query);
  if($run_query)
  {
    echo "<script>alert('booking successfully')</script>";
  }
 
}
?>

<?php
		include("includes/footer.php");
?>

</body>
</html>