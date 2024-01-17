<?php 
	session_start();
	
	include("includes/db.php");

	include("functions/functions.php");


 ?>
 
<!DOCTYPE html>
<html>
<head>
	<title>S&Y MUSIC STORE</title>
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
					<li><?php 

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
					 	<li><a href="admin_area/index.php?login.php" target="_blank">ADMIN PANEL</a></li>
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
						<li>
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

						<li class="active">
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
					<li>CONTACT US</li>
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
					<i class="fa fa-phone" style="font-size: 5em; color:#4d392f;"></i>
					<h2>Contact Us</h2>
					<p class="text-muted">For any questions or enquierys, please fill free to contact us bellow and we <br> will get back to you within 24 hours.</p>
				</center><!---center ends --->
			</div><!---box header ends --->

			<form action="contact.php" method="post" ><!---form starts --->

				<div class="form-group"><!---form-group starts --->
					<label>Name</label>
					<input type="text" class="form-control" name="name" required>
				</div><!---form-group ends --->

				<div class="form-group"><!---form-group starts --->
					<label>Email</label>
					<input type="text" class="form-control" name="email" required>
				</div><!---form-group ends --->

				<div class="form-group"><!---form-group starts --->
					<label>Subject</label>
					<input type="text" class="form-control" name="subject" required>
				</div><!---form-group ends --->

				<div class="form-group"><!---form-group starts --->
					<label>Message</label>
					<textarea class="form-control" name="Message"></textarea>
				</div><!---form-group ends --->

				<div class="text-center"><!---text-center starts --->
					<button type="submit" name="submit" class="btn btn-primary">
						<i class="fa fa-send-o"></i> SEND
					</button>
				</div><!---text-center ends --->

			</form><!---form ends --->
			
			<?php 
				if(isset($_POST['submit']))
				{
					// admin receives email through this code
					$sender_name = $_POST['name'];
					$sender_email = $_POST['email'];
					$sender_subject = $_POST['subject'];
					$sender_message = $_POST['Message'];
					$receiver_email = "spearnjoroge@gmail.com";
					
					mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);
				
				
					// send email to sender through this code
				$email = $_POST['email'];
				$subject = "welcome to my website";
				$msg = "I shall get back to you soon";
				$from = "spearnjoroge@gmail.com";

				mail($email,$subject,$msg,$from);
				echo "<h2 align='center'>your message has been sent successfully</h2>";

				}
			 ?>


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