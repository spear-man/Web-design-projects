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

				</div><!--collapse clearfix end -->
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
				</ul><!---smallstuf starts --->
			</div><!---col-md-12 ends --->

			<!----------------include side bar page ---------->
			<div class="col-md-3"><!---col-md-3 start --->
				<?php
					include("includes/sidebar.php");
				?>	
			</div><!---col-md-3 end--->

			<div class="col-md-9"><!---col-md-9 start --->
			
			<?php 

				if(!isset($_GET['p_cat']))
				{
					if(!isset($_GET['cat']))
					{
						echo "
						<div class='box'> 
							<h1>Shop</h1>
							<p>welcome to  spear instruments shoping page, the perfect destination for any high end music equipment physical or downloadable at affordable prices.we offer a wide variety of quality equipment; look no further!</p>
						</div>

						";
					}
				}

			 ?>

				<div class="row"><!---------------row starts rebuild products in shop page --->
	<?php

		if(!isset($_GET['p_cat'])) {

		if(!isset($_GET['cat'])){


		$per_page=6;

		if(isset($_GET['page'])){

		$page = $_GET['page'];

		}else {

		$page=1;

		}

		$start_from = ($page-1) * $per_page ;

		$get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";

		$run_products = mysqli_query($con,$get_products);

		while($row_products=mysqli_fetch_array($run_products)){

		$pro_id = $row_products['product_id'];

		$pro_title = $row_products['product_title'];

		$pro_price = $row_products['product_price'];

		$pro_img1 = $row_products['product_img1'];	

					 				echo "
					 					<div class='col-md-4 col-sm-6 center-responsive'>
					 						<div class='product'>
					 							<a href='details.php?pro_id=$pro_id'>
					 								<img src='admin_area/product_images/$pro_img1' class='img-responsive'>
					 							</a>
					 							<div class='text'>
					 								<h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
					 								<p class='price'>ksh.$pro_price</p>
					 								<p class='button text-center'>
					 									<a href='details.php?pro_id=$pro_id' class='btn btn-primary'>
					 									<i class='fa fa-plus-circle'></i> View Details

					 									</a>
					 								</p>
					 							</div>
					 						</div>

					 					</div>

					 				";
					 			}
					 	
					 	
					  ?>
				</div><!--------row ends--->
				
				<!----------------------------------------pagination----------------------------->
				<center><!--------center start--->
					<ul class="pagination"><!--------pagination start--->
						<?php 
						$query = "select * from products";
						$result = mysqli_query($con,$query);
						$total_records = mysqli_num_rows($result);

						$total_pages = ceil($total_records / $per_page);

						// show first page
						echo "
							<li><a href='shop.php?page=1'>".'&laquo; '."</a></li>
						";

						//show all other pages with for loop 
						for($i =1; $i<=$total_pages; $i++)
						{
							echo "
								<li><a href='shop.php?page=".$i."'>".$i."</a></li>
							";
						};

						// display last page
						echo "
							<li><a href='shop.php?page=$total_pages' >".'&raquo;'."</a></li>
						";


							}
						}


						 ?>
					</ul><!--------pagination end--->
				</center><!--------center ends-->

<!---------------------------product categories and categories records-------------->

				<?php 
					 getpcatpro();

					 getcatpro();
				 ?>

<!---------------------------------------------------------------------------------->

			</div><!---col-md-9 ends--->
		</div><!---container ends --->
	</div><!---content ends --->

	<?php

		include("includes/footer.php");
	?>

<script src="js/jquery.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
</body>
</html>