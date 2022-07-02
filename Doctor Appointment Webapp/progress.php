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

						<li>
							<a href="emergency_contact.php">EMERGENCY CONTACT</a>
						</li>

						<li>
							<a href="personal_training.php">PERSONAL TRAINING</a>
						</li>

						<li class="active">
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






<form action="progress.php" method="post">

	<div class="form4" ><!-- form-group Starts -->
		<div class="col-md-6">
			<h2 class="form-login-heading" >Client Progress note </h2>
			<p>track pacient progress</p>
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
    <div class="col-md-4">
  		<label>Session Date: </label>
  		<input type="date" name="date" class="form-control" required>
    </div>
</div>


<div class="col-md-12">
  <br>
    <div class="col-md-4">
      <label>Type of session: </label>
      <select type="date" name="session" class="form-control" required>
        <option>therapy</option>
        <option>treatment</option>
      </select>
    </div>
</div>		

<div class="col-md-12">
  <br>
    <div class="col-md-4">
      <label>Service code : </label>
      <select type="date" name="code" class="form-control" required>
        <option>t478-8127</option>
        <option>m423-4454</option>
        <option>x878-8121</option>
        <option>l323-4450</option>
        <option>nc78-8012</option>
        <option>m4p3-4453</option>

      </select>
    </div>
</div>  


    <div class="col-sm-12">
      <br>
      <div class="col-md-12">
        <label>Assessment and observation</label>
        <textarea name="assessment" class="form-control"></textarea>
    </div>
		</div>
		<br>
    <div class="col-md-12">
      <br>
      <div class="col-md-12">
        <label> Safty issue</label>
        <select type="text" name="safty" class="form-control" required>
            <option>none</option>
            <option>suicidal</option>
            <option>homicidal</option>
            <option>other</option>
         </select>
    </div>
    </div>
    <br>

    <div class="col-md-12">
  <br>
    <div class="col-md-4">
      <label>Medical Issue: </label>
      <select type="date" name="medical_issue" class="form-control" required>
        <option>yes</option>
        <option>no</option>
      </select>
    </div>
</div>  

 <div class="col-sm-12">
      <br>
      <div class="col-md-12">
        <label>Describe Medical issue</label>
        <textarea name="desc_medical_issue"></textarea>
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
  $date = $_POST['date'];
  $session = $_POST['session'];
  $code = $_POST['code'];
  $assessment = $_POST['assessment'];
  $safty = $_POST['safty'];
  $medical_issue = $_POST['medical_issue'];
  $desc_medical_issue = $_POST['desc_medical_issue'];

  $insert_query = "insert into progress (fname,mname,lname,date,session,code,assessment,safty,medical_issue,desc_medical_issue) values('$fname','$mname','$lname','$date','$session','$code','$assessment','$safty','$medical_issue','$desc_medical_issue')";

  $run_query = mysqli_query($con,$insert_query);
  if($run_query)
  {
    echo "<script>alert('progress details submited successfully')</script>";
  }
 
}
?>

<?php
		include("includes/footer.php");
?>
</body>
</html>