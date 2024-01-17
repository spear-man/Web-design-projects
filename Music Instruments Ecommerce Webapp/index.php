<?php 
	
	session_start();
	
	include("includes/db.php");

	include("functions/functions.php");

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>SPEAR INSTRUMENTS</title>
	<link href="images/favicon.ico" type="image/ico" rel="shortcut icon">

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
					SHOPPING CART | Total Price: <?php total_price(); ?> | Total items:<?php items(); ?>
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
					<li><a href="checkout.php">
						
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
					 	
					</a></li>
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
						<li class="active">
							<a href="index.php">HOME</a>
						</li>

						<li>
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

<!--------------------------main header image----------------------------------------->

	<div class="container" id="slider"><!--container starts -->
		<div class="col-md-12"><!--col-md-12 starts -->
			<div id="myCarousel" class="carousel slide" data-ride="carousel"><!--carousel slide starts -->

				<div class="carousel-inner"><!--carousel-inner starts-->
					<div class="item active"><img src="admin_area/slide_images/mainlogo.png"></div>
				</div><!--carousel-inner end-->

			</div><!--carousel slide ends -->
		</div><!--col-md-12 ends -->
	</div><!--container ends-->

<!----------------------------serivces advert and offers -------------------------------->

	<div id="servoffers"><!-- servoffers starts -->
		<div class="container" ><!-- container starts -->
			<div class="same-height-row"><!-- same-height-row starts -->

				<div class="col-sm-3"><!-- col-sm-4 starts -->
					<div class="box same-height"><!-- box same-height starts -->
						<div class="icon"><i class="fa fa-external-link"></i></div>
						<h3><a href="#">LEASE</a></h3>
						<P>we are known to provide  afordable leasing plans to our esteemed customers</P>
					</div><!-- box same-height end -->
				</div><!-- col-sm-4 end -->

				<div class="col-sm-3"><!-- col-sm-4 starts -->
					<div class="box same-height"><!-- box same-height starts -->
						<div class="icon"><i class="fa fa-tags"></i></div>
						<h3><a href="#">RETAIL</a></h3>
						<P>Our amaizingly affordable prices will knock right off<br> you feet! </P>
					</div><!-- box same-height end -->
				</div><!-- col-sm-4 end -->

				<div class="col-sm-3"><!-- col-sm-4 starts -->
					<div class="box same-height"><!-- box same-height starts -->
						<div class="icon"><i class="fa fa-wrench"></i></div>
						<h3><a href="#">REPAIR</a></h3>
						<P>we fix any broken instruments at affordable prices both physical & digital </P>
					</div><!-- box same-height end -->
				</div><!-- col-sm-4 end -->

				<div class="col-sm-3"><!-- col-sm-4 starts -->
					<div class="box same-height"><!-- box same-height starts -->
						<div class="icon"><i class="fa fa-truck"></i></div>
						<h3><a href="#">DELIVER </a></h3>
						<P>We offer quick delivary to all customers near and far within 24 - 48 hours</P>
					</div><!-- box same-height end -->
				</div><!-- col-sm-4 end -->

			</div><!-- same-height-row end -->
		</div><!-- container ends-->
	</div><!-- servoffers ends -->

<!-------------------------latest this week ---------------------------------->

	<div id="prod"> <!---- hot starts ---->
		<div class="box"> <!---- box starts ---->
			<div class="container"><!---- container starts ---->
				<div class="col-md-12"> <!---- col-md-12 starts ---->
					<marquee behavior="alternate" direction="left" loop="infinity">
						<h2>CHECKOUT OUR PRODUCTS!</h2>
					</marquee>
				</div><!---- col-md-12 starts ---->
			</div><!---- container ends ---->
		</div><!---- box ends ---->
	</div><!---- hot ends ---->

<!-------------------------------------products---------------------------------->
	<div id="content" class="container"><!---- container starts ---->
		<div class="row"><!---- row starts ---->

<!-----------inc products from database in functions.php---------->

			<?php 
				getPro();
			 ?>
			
		</div><!---- row ends ---->
	</div><!---- container ends---->

	<?php
		include("includes/footer.php");
	?>

<script src="js/jquery.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
</body>
</html>