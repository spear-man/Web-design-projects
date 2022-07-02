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
						
						<li>
							<a href="booking.php">BOOKING</a>
						</li>

						<li class="active">
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






<form action="emergency_contact.php" method="post">

	<div class="form2" ><!-- form-group Starts -->
		<center>
			<h2 class="form-login-heading" >Emergency contact</h2>
			<p>Please fill out the form correctly</p>
		</center>
		
		<br>

<div class="form-row">
    <div class="col-md-6">
      <label >First name</label>
      <input type="text" class="form-control" name="fname"   required>
    </div>
    <div class="col-md-6">
      <label>Last name</label>
      <input type="text" class="form-control" name="lname"  required>
    </div>
</div>

		<br>
    <div class="col-md-12">
      
		<label>Phone no: </label>

		<input type="text" name="phone" class="form-control" required>

    </div>

		<br>
    <div class="col-md-12">
    		<label> Email </label>
    		<input type="email" name="email" class="form-control" required>
    </div>
		<br>

    <div class="col-md-12">
        <label> Address</label>
        <input type="text" name="address" class="form-control" required>
    </div>
		
		<br>

    <div class="col-md-12">
        <label> relationship with patient</label>
        <select type="text" name="relationship" class="form-control" required>
            <option>parent</option>
            <option>child</option>
            <option>sibling</option>
            <option>friend</option>
            <option>other</option>
         </select>
    </div>
    
    <br>

    <div>

        <div class="col-md-4">
          <label >city</label>
          <input type="text" class="form-control" name="city" required>
        </div>
        <div class="col-md-4">
          <label>county</label>
          <input type="text" class="form-control" name="county" required>
        </div>
        <div class="col-md-4">
          <label>zip code</label>
          <input type="text" class="form-control" name="zip" required>
        </div>

		</div>

		<br>

    <div class="col-md-12">
    <center style="padding-top: 20px;">
      <button class="btn btn-primary text-center" type="submit" name="submit" >submit</button>
    </center>
    </div>
    
    <br>

	</div><!-- form-group Ends -->

</form>

<!----------------------------booking form database connection and data insertion ------------>

<?php
$con = mysqli_connect("localhost","root","","docapp_db");
if(isset($_POST['submit']))
{
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $relationship = $_POST['relationship'];
  $city = $_POST['city'];
  $county = $_POST['county'];
  $zip = $_POST['zip'];

  $insert_query = "insert into emergency_contact (fname,lname,phone,email,address,relationship,city,county,zip) values('$fname','$lname','$phone','$email','$address','$relationship','$city','$county','$zip')";

  $run_query = mysqli_query($con,$insert_query);
  if($run_query)
  {
    echo "<script>alert('emergency details submited successfully')</script>";
  }
 
}
?>

<?php
		include("includes/footer.php");
?>
</body>
</html>