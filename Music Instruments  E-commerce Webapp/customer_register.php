<?php 
	session_start();

	include("includes/db.php");

	include("functions/functions.php");


 ?>
 
<!DOCTYPE html>
<html>
<head>
	<title>SPEAR INSTRUMENTS</title>
	<link href="images/favicon.png" type="image/ico" rel="shortcut icon">

	<link href="styles/bootstrap.min.css" rel="stylesheet">
	<link href="styles/style.css" rel="stylesheet">
	<link href="fa/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<!-----------------------------------------top bar------------------------------>

	<div id="top"><!-- top starts -->
		<div class="container"><!-- container starts -->
			<div class="col-md-6 offer"><!-- col-md-6 offer starts -->
				<a href="#" class="btn btn-primary btn-sm">
					<?php 
						if(!isset($_SESSION['customer_email']))
						{
							echo "Welcome :Guest";
						}
						else
						{
							echo "welcome : " . $_SESSION['customer_email'] . " ";
						}
					 ?>
				</a>

				<a href="#">
					SHOPPING CART | Total Price: <?php total_price(); ?>, Total items:<?php items(); ?>
				</a>

			</div><!--col-md-6 offer ends  -->

			<div class="col-md-6"><!--col-md-6 starts -->
				<ul class="menu"><!--menu starts -->
					<li><a href="customer_register.php">REGISTER</a></li>
					<li>
						<?php 
                           
                           if(!isset($_SESSION['customer_email']))
                           {
                           	 echo "<a href='checkout.php'>MY ACCOUNT</a>";
                           }
                           else
                           {
                           	 echo "<a href='customer/my_account.php?my_orders'>MY ACCOUNT</a>";
                           }
						 ?>
					</li>
					<li><a href="cart.php">GO TO CART</a></li>
					<li>
						
						<?php 

						if(!isset($_SESSION['customer_email']))
						{
							echo "<a href='checkout.php'>LOGIN</a>";
						}
						else
						{
							echo "<a href='logout.php'>LOGOUT</a>";
						}
					 	?>
					 	
					 </li>
				</ul><!--menu ends-->
			</div><!--col-md-6 starts -->
		</div><!-- container ends -->	
	</div><!-- top ends -->

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
					<ul class="nav navbar-nav navbar-left"><!--nav navbar-nav navbar-left start -->
						<li >
							<a href="index.php">HOME</a>
						</li>

						<li >
							<a href="shop.php">SHOP</a>
						</li>

						<li>
							<?php 
                           
                           if(!isset($_SESSION['customer_email']))
                           {
                           	 echo "<a href='checkout.php'>MY ACCOUNT</a>";
                           }
                           else
                           {
                           	 echo "<a href='customer/my_account.php?my_orders'>MY ACCOUNT</a>";
                           }
						 ?>
						</li>

						<li>
							<a href="cart.php">SHOPPING CART</a>
						</li>

						<li>
							<a href="contact.php">CONTACT US</a>
						</li>
					</ul><!--nav navbar-nav navbar-left ends -->
				</div><!--padding nav ends -->
				<a class="btn btn-primary navbar-btn right" href="cart.php"><!--btn btn-primary navbar-btn right start -->
					<i class="fa fa-cart-arrow-down"></i>
					<span><?php items(); ?> items in cart</span>
				</a><!--btn btn-primary navbar-btn right end -->

				
			</div><!--navbar-collapse collapse ends-->
		</div><!--container ends -->	
	</div><!--navbar navbar-default ends -->

<!-------------------------------------------content ------------------------------------>
	
	<div id="content"> <!---content starts --->
		<div class="container"><!---container starts --->
			<div class="col-md-12"><!---col-md-12 starts --->
				<ul class="breadcrumb"><!---smallstuf starts --->
					<li><a href="index.php">HOME</a></li>
					<li>REGISTER</li>
				</ul><!---smallstuf starts --->
			</div><!---col-md-12 ends --->

			<!----------------include side bar page ---------->
			<div class="col-md-3"><!---col-md-3 start --->
				<?php
					include("includes/sidebar.php");
				?>	
			</div><!---col-md-3 end--->

	<div class="col-md-9"><!---col-md-9 starts--->
		<div class="box"><!---box starts--->
			<div class="box-header"><!---box header starts--->
				<center><!---center starts--->
					<i class="fa fa-user-plus" style="font-size: 4em; color:#4d392f;"></i>
					<h2>Create A New Account</h2>
				</center><!---center ends --->
			</div><!---box header ends --->
			<form action="customer_register.php" method="post" enctype="multipart/form-data" ><!---form starts --->

				<div class="form-group"><!---form-group starts --->
					<label>Customer Name</label>
					<input type="text" class="form-control" name="c_name" required>
				</div><!---form-group ends --->

				<div class="form-group"><!---form-group starts --->
					<label>Customer Email</label>
					<input type="text" class="form-control" name="c_email" required>
				</div><!---form-group ends --->

				<div class="form-group"><!---form-group starts --->
					<label>Customer Password</label>
					<input type="password" class="form-control" name="c_pass" required>
				</div><!---form-group ends --->

				<div class="form-group"><!---form-group starts --->
					<label>Customer Location</label>
					<input type="text" class="form-control" name="c_location" required>
				</div><!---form-group ends --->

				<div class="form-group"><!---form-group starts --->
					<label>Customer Contact</label>
					<input type="text" class="form-control" name="c_contact" required>
				</div><!---form-group ends --->

				<div class="form-group"><!---form-group starts --->
					<label>Customer Image</label>
					<input type="file" class="form-control" name="c_image" required>
				</div><!---form-group ends --->


				<div class="text-center"><!---text-center starts --->
					<button type="submit" name="register" class="btn btn-primary">
					 Register
				</div><!---text-center ends --->

			</form><!---form ends --->
			
		</div><!---box starts--->
			
	</div><!---col-md-9 starts--->






		</div><!---container ends --->
	</div><!---content ends --->


	<?php

		include("includes/footer.php");
	?>

<script src="js/jquery.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
</body>
</html>

<?php 
	
	if(isset($_POST['register'])){

		$c_name = $_POST['c_name'];

		$c_email = $_POST['c_email'];

		$c_pass = $_POST['c_pass'];

		$c_location = $_POST['c_location'];

		$c_contact = $_POST['c_contact'];

		$c_image = $_FILES['c_image']['name'];

		$c_image_tmp = $_FILES['c_image']['tmp_name'];

		$c_ip = getRealUserIp(); 

		move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");

	$insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_loc,customer_contact,customer_image,customer_ip) value('$c_name','$c_email','$c_pass','$c_location','$c_contact','$c_image','$c_ip')";

	$run_customer = mysqli_query($con,$insert_customer);

	$sel_cart = "select * from cart where ip_add='$c_ip'";

	$run_cart = mysqli_query($con,$sel_cart);

	$check_cart = mysqli_num_rows($run_cart);

	if($check_cart>0){

	$_SESSION['customer_email']=$c_email;

		echo "<script>alert('You have been Registered Successfully')</script>";

		echo "<script>window.open('checkout.php','_self')</script>";

	}else{

	$_SESSION['customer_email']=$c_email;

		echo "<script>alert('You have been Registered Successfully')</script>";

		echo "<script>window.open('index.php','_self')</script>";


	}

	}

	?>