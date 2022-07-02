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
						
						<li >
							<a href="index.php" >HOME</a>
						</li>
						
						<li>
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

						<li class="active">
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






<form action="psychiatric_evaluation.php" method="post">

	<div class="form5" ><!-- form-group Starts -->
		<div class="col-md-6">
			<h2 class="form-login-heading" >Psychiatric Evaluation</h2>
			<p>track Psychiatric Evaluation details</p>
		</div>
		
		<br>

<div class="form-row">
  <div class="col-md-12">
    <div class="col-md-4">
      <label >First name</label>
      <input type="text" class="form-control" name="fname"   required>
    </div>
    <div class="col-md-4">
      <label>middle name</label>
      <input type="text" class="form-control" name="mname"  required>
    </div>
    <div class="col-md-4">
      <label>Last name</label>
      <input type="text" class="form-control" name="lname"  required>
    </div>
  </div>
</div>
<div class="col-md-12">
		<br>
    <div class="col-md-6">
  		<label>Referral: </label>
  		<input type="text" name="referal" class="form-control" required>
    </div>
    <div class="col-md-6">
      <label>Accompanied by: </label>
      <input type="text" name="accompanied" class="form-control" required>
    </div>
</div>


    <div class="col-sm-12">
      <br>
      <div class="col-md-12">
        <label>Chief Complaint</label>
        <textarea name="ccomplaint" class="form-control" ></textarea>
    </div>
		</div>
		<br>

<div class="col-sm-12">
      <br>
      <div class="col-md-12">
        <h2>symptoms:</h2>
    </div>
    </div>
    <br>

 <div class="col-sm-12">
      <br>
      <div class="col-md-12">
        <label>Interests:</label>
        <textarea name="interests" class="form-control" ></textarea>
    </div>
    </div>
    <br>

    <div class="col-sm-12">
      <br>
      <div class="col-md-12">
        <label>Guilt:</label>
        <textarea name="guilt" class="form-control" ></textarea>
    </div>
    </div>
    <br>

    <div class="col-sm-12">
      <br>
      <div class="col-md-12">
        <label>Appetite:</label>
        <textarea name="appetite" class="form-control" ></textarea>
    </div>
    </div>
    <br>

    <div class="col-sm-12">
      <br>
      <div class="col-md-3">
        <label>Mood</label>
        <select type="text" name="mood" class="form-control" >
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
        </select>
    </div>
    </div>
    <br>
 


		<br>

    <div class="col-md-12">
    <center style="padding-top: 20px;">
      <button class="btn btn-primary text-center" type="submit" name="submit" >submit</button>
    </center>
    </div>
    
    <br>

	</div><!-- form-group Ends -->

</div>
</form>

<!----------------------------booking form database connection and data insertion ------------>

<?php
$con = mysqli_connect("localhost","root","","docapp_db");
if(isset($_POST['submit']))
{
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $lname = $_POST['lname'];
  $referal = $_POST['referal'];
  $accompanied = $_POST['accompanied'];
  $ccomplaint = $_POST['ccomplaint'];
  $interests = $_POST['interests'];
  $guilt = $_POST['guilt'];
  $appetite = $_POST['appetite'];
  $mood = $_POST['mood'];

  $insert_query = "insert into psychiatric (fname,mname,lname,referal,accompanied,ccomplaint,interests,guilt,appetite,mood) values('$fname','$mname','$lname','$referal','$accompanied','$ccomplaint','$interests','$guilt','$appetite','$mood')";

  $run_query = mysqli_query($con,$insert_query);
  if($run_query)
  {
    echo "<script>alert('psychatric details submited successfully')</script>";
  }
 
}
?>

<?php
		include("includes/footer.php");
?>
</body>
</html>