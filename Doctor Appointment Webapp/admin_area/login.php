<?php 

	session_start();
	include("includes/db.php");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN-LOGIN</title>
	<link href="admin_images/favicon.ico" type="image/ico" rel="shortcut icon">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/login.css">
	<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

	<div class="container"><!-- container starts -->
		<form class="form-login" action="" method="post"><!-- form login starts -->
<center>
		<img src="admin_images/1.gif" alt="">
</center>
			<h2 class="form-login-heading">Doc / Admin Login</h2>
			<br>
			<h3>Email</h3>
			<input type="text" class="form-control" name="admin_email" placeholder="Email address">
			<br>
			<h3>Password</h3>
			<input type="password" class="form-control" name="admin_pass" placeholder="password"><br>
<center>
			<button class="btn btn-lg btn-primary " type="submit" name="admin_login">
				Login
			</button></center>

		</form><!-- form login ends-->
	</div><!-- container ends -->

</body>
</html>

<?php

if(isset($_POST['admin_login'])){

$admin_email = mysqli_real_escape_string($con,$_POST['admin_email']);

$admin_pass = mysqli_real_escape_string($con,$_POST['admin_pass']);

$get_admin = "select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";

$run_admin = mysqli_query($con,$get_admin);

$count = mysqli_num_rows($run_admin);

if($count==1){

$_SESSION['admin_email']=$admin_email;

echo "<script>alert('You are Logged in into admin panel')</script>";

echo "<script>window.open('index.php?dashboard','_self')</script>";

}
else {

echo "<script>alert('Email or Password is Wrong')</script>";

}

}

?>