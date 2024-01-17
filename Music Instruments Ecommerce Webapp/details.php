<?php 
	session_start();
	
	include("includes/db.php");

	include("functions/functions.php");

 ?>

 <?php 

 	if(isset($_GET['pro_id']))
 	{
 		$product_id = $_GET['pro_id'];
 		$get_product = "select * from products where product_id='$product_id'";
 		$run_product = mysqli_query($con,$get_product);
 		$row_product = mysqli_fetch_array($run_product);
 		$p_cat_id = $row_product['p_cat_id'];
 		$pro_title = $row_product['product_title'];
 		$pro_price = $row_product['product_price'];
 		$pro_desc = $row_product['product_desc'];
 		$pro_img1 = $row_product['product_img1'];
 		$pro_img2= $row_product['product_img2'];

 		$get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";

 		$run_p_cat = mysqli_query($con, $get_p_cat);
 		$row_p_cat = mysqli_fetch_array($run_p_cat);
 		$p_cat_title = $row_p_cat['p_cat_title'];

 	}

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
					<li><?php 
                           
                           if(!isset($_SESSION['customer_email']))
                           {
                           	 echo "<a href='checkout.php'>MY ACCOUNT</a>";
                           }
                           else
                           {
                           	 echo "<a href='customer/my_account.php?my_orders'>MY ACCOUNT</a>";
                           }
						 ?></li>
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
						<li>
							<a href="index.php">HOME</a>
						</li>

						<li class="active">
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
					<li>SHOP</li>
					<li>
						<a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
					</li>
					<li><?php echo $pro_title; ?></li>
				</ul><!---smallstuf starts --->
			</div><!---col-md-12 ends --->

			<!----------------include side bar page ---------->
			<div class="col-md-3"><!---col-md-3 start --->
				<?php
					include("includes/sidebar.php");
				?>	
			</div><!---col-md-3 end--->

<!-------------------------------------------center content start------------------- ---------->
	
	<div class="col-md-9"><!---col-md-9 starts-->
		<div class="row" id="productMain"><!---row starts-->
			<div class="col-sm-6"><!---col-sm-6 starts-->
				<div id="mainImage"><!---mainImage starts-->
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators"><!---carousel-indicators starts-->
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							
						</ol><!---carousel-indicators ends-->
						<div class="carousel-inner"><!---carousel-inner starts-->
							<div class="item active">
								<center>
									<img src="admin_area/product_images/<?php echo $pro_img1; ?>" class="img-responsive">
								</center>
							</div>

							<div class="item">
								<center>
									<img src="admin_area/product_images/<?php echo $pro_img2; ?>" class="img-responsive">
								</center>									
							</div>


						</div><!---carousel-inner ends-->

						<a href="#myCarousel" class="left carousel-control" data-slide="prev"><!--left carousel-control starts-->
							<span class="glyphicon glyphicon-chevron-left"></span>
							<span class="sr-only">Previous</span>
						</a><!--left carousel-control end-->

						<a class="right carousel-control" href="#myCarousel" data-slide="next"><!--rightcarousel-control starts-->
							<span class="glyphicon glyphicon-chevron-right"></span>
							<span class="sr-only">Next</span>
						</a><!--rightcarousel-control end-->
					</div>
				</div><!---mainImage starts-->
			</div><!---col-sm-6 ends-->

<!-------------------------------------------box 2 product number ------------------- ---------->
			<div class="col-sm-6"><!---col-sm-6 starts-->
				<div class="box" style=""><!---box starts-->
					<h2 class="text-center"><?php echo $pro_title; ?></h2>
<!-------------------------------------------add cart form inclution ----------------------------->

					<?php add_cart(); ?>


					<form action="details.php?add_cart=<?php echo $product_id; ?>" method="post" class="form-horizontal"><!---form-horizontalstarts-->
						<div class="form-group"><!---form-group starts-->
							<label class="col-md-5 control-label">Product quantity</label>
							<div class="col-md-7"><!---col-md-7 starts-->
								<select name="product_qty" class="form-control">
									<option>Select quantity</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div><!---col-md-7 ends-->
						</div><!---form-group ends-->

			<!---------------------------pending modifiacation--------------------------------->
						<div class="form-group"><!---form-group starts-->
							<label class="col-md-5 control-label">Product quantity</label>
							<div class="col-md-7"><!---col-md-7 starts-->
								<select name="product_type" class="form-control">
									<option>select the type</option>
									<option>Brand New</option>
									<option>Refubished</option>
								</select>
							</div><!---col-md-7 ends-->
						</div><!---form-group ends-->
			<!------------------------------ss--------------------------------------------------->
						<p class="price"> ksh.<?php echo $pro_price; ?></p>
						<p class="text-center buttons"><!---text-center buttons starts-->
							<button class="btn btn-primary" type="submit">
								<i class="fa fa-cart-plus"></i> Add to Cart
							</button>
						</p><!---text-center buttons ends-->
					</form><!---form-horizontal ends-->
				</div><!---box ends-->
			<!------------------------------extras items for deletion---------------------------->
				<div class="row" id="thumbs"><!---row starts-->
					<div class="col-xs-4">
						
					</div><!---col-xs-4 ends--> 
						
				</div>

			</div><!---col-sm-6 ends-->
			<!-------------------------------------------box 2 product number end ----------------->			
		</div><!---row ends-->
			<div class="box" id="details"><!---box starts-->
				<p><!-- p starts -->
					<h4>Product details</h4>
					<p>
						<?php echo $pro_desc; ?>
					</p>

					<h4>Types avalable</h4>

					<ul>
						<li>Brand New</li>
						<li>Refabished</li>
					</ul>
				</p><!-- p ends -->
				<hr>
			</div><!---box ends-->

		
	</div><!---col-md-9 starts-->

<!-------------------------------------------center content end----------------------------->
	
		</div><!---container ends --->
	</div><!---content ends --->
	<?php

		include("includes/footer.php");
	?>

<script src="js/jquery.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
</body>
</html>