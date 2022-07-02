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

						<li class="active">
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






<form action="personal_training.php" method="post">

	<div class="form3" ><!-- form-group Starts -->
    <div class="col-md-12">
		
      <h2 class="form-login-heading" >Personal Training & Consoltation </h2>
      <p>please fill pacient consoltation details correctly</p>
 
		</div>
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
<div>

        <div class="col-md-4">
          <label >Age</label>
          <input type="text" class="form-control" name="age" required>
        </div>
        <div class="col-md-4">
          <label>Height(CM)</label>
          <input type="text" class="form-control" name="height" required>
        </div>
        <div class="col-md-4">
          <label>Weight(KG)</label>
          <input type="text" class="form-control" name="weight" required>
        </div>

</div>
<br>

    <div class="col-md-3">
        <label>Gender </label>
        <select type="text" name="gender" class="form-control" required>
            <option>Male</option>
            <option>Female</option>
         </select>
    </div>
    
<br>
<div class="col-md-12">
        <label>What do you do for a living </label>
        <input type="text" name="job" class="form-control" required>
 </div>
    
<br>

<div class="col-md-12">
        <label>Activity leval</label>
        <select type="text" name="activity" class="form-control" required>
            <option>none(seated only)</option>
            <option>Moderate(light activity eg walking)</option>
            <option>high(heavy labor,very active)</option>
         </select>
 </div>

<br>

<div class="col-md-12">
        <label>How often do you travel</label>
        <select type="text" name="travel" class="form-control" required>
            <option>rarely</option>
            <option>few times an year</option>
            <option>weekly</option>
            <option>few times a month</option>
         </select>
 </div>
    
<br>

<div class="col-md-12">
        <label>Please list the physical activities that you participate in outside of the gym and outside of work.:</label>
        <textarea name="offwork" class="form-control" cols="" rows="7"></textarea>
 </div>

<br>

<div class="col-md-12">
        <label>Are you experiencing any stresses or motivational problems?</label>
        <select type="text" name="motivation" class="form-control" required>
            <option>yes</option>
            <option>no</option>
           
         </select>
 </div>

<br>

<div class="col-md-12">
      <label>injuries</label>
       <input type="text" name="injuries" class="form-control" required>
 </div>

<div class="col-md-12">
        <label>Has anyone of your immediate family developed heart disease before the age of 60?</label>
        <select type="text" name="desease1" class="form-control" required>
            <option>yes</option>
            <option>no</option>
           
         </select>
 </div>

<div class="col-md-6">
        <label>Do any diseases run in your family?</label>
        <select type="text" name="desease2" class="form-control" required>
            <option>yes</option>
            <option>no</option>
           
         </select>
 </div>
    
<div class="col-md-6">
        <label>Do you smoke</label>
        <select type="text" name="smoke" class="form-control" required>
            <option>yes</option>
            <option>no</option>
           
         </select>
 </div>
 <br>
<div class="col-md-6">
        <label>diet</label>
        <select type="text" name="diet" class="form-control" required>
            <option>low-fat</option>
            <option>low-carb</option>
           <option>high-protein</option>
            <option>Vegetarian/Vegan</option>
            <option>No special diet</option>
         </select>
 </div>
 <div class="col-md-6">
        <label>Leval of readyness</label>
        <select type="text" name="readyness" class="form-control" required>
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
  $age = $_POST['age'];
  $height = $_POST['height'];
  $weight = $_POST['weight'];
  $gender = $_POST['gender'];
  $job = $_POST['job'];
  $activity = $_POST['activity'];
  $travel = $_POST['travel'];
  $offwork = $_POST['offwork'];
  $motivation = $_POST['motivation'];
  $injuries = $_POST['injuries'];
  $desease1 = $_POST['desease1'];
  $desease2 = $_POST['desease2'];
  $smoke = $_POST['smoke'];
  $diet = $_POST['diet'];
  $readyness = $_POST['readyness'];
  


  $insert_query = "insert into personal_training (fname,lname,age,height,weight,gender,job,activity,travel,offwork,motivation,injuries,desease1,desease2,smoke,diet,readyness) values('$fname','$lname','$age','$height','
  $weight','$gender','$job','$activity','$travel','$offwork','$motivation','$injuries','$desease1','$desease2','$smoke','$diet','$readyness')";

  $run_query = mysqli_query($con,$insert_query);
  if($run_query)
  {
    echo "<script>alert('personal training details submited successfully')</script>";
  }
 
}
?>

<?php
		include("includes/footer.php");
?>
</body>
</html>