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


	<!----------------------------------------checkout code starts here  ----------------------------------->

			<div class="col-md-9"><!---col-md-9 starts--->
				<?php 

					if(!isset($_SESSION['customer_email']))
					{
						include("customer/customer_login.php");
					}
					else
					{
						include("payment_options.php");
					}

				 ?>
			</div><!---col-md-9 ends--->


	<!------------------------------------------------------------------ ----------------------------------->
	


					</div><!---container ends --->
	</div><!---content ends --->


	<?php

		include("includes/footer.php");
	?>

<script src="js/jquery.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
</body>
</html>