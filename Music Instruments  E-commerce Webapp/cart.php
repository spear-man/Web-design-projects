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

						<li class="active">
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


	
	<div id="content"> <!---content starts --->
		<div class="container"><!---container starts --->
			<div class="col-md-12"><!---col-md-12 starts --->
				<ul class="breadcrumb"><!---smallstuf starts --->
					<li><a href="index.php">HOME</a></li>
					<li>CART</li>
				</ul><!---smallstuf starts --->
			</div><!---col-md-12 ends --->

<!-------------------------------------------content start--------------------------------->
	<div class="col-md-12" id="cart"><!-- col-md-9 Start -->
		<div class="box"><!---box starts---->
			<form action="cart.php" method="post" enctype="multipart-form-data"><!---upload and show image form start---->
				<h1> Shopping Cart</h1>

				<?php 
					$ip_add = getRealUserIp();
					$select_cart = "select * from cart where ip_add='$ip_add'";
					$run_cart = mysqli_query($con,$select_cart);
					$count = mysqli_num_rows($run_cart);
				 ?>

				<p class="text-muted">you currently have <?php echo $count; ?> items in your cart</p>

				<div class="table-responsive"><!---table-responsive start---->
					<table class="table"><!---table start---->
						<thead><!---thead start---->
							<tr>
								<th colspan="2">Product</th>
								<th>Quantity</th>
								<th>Unit price</th>
								<th>Type</th>
								<th colspan="1">Delete</th>
								<th colspan="2">Sub Total</th>
							</tr>
						</thead><!---thead end---->

						<tbody><!---tbody starts---->


						<?php

							$total = 0;
							While($row_cart = mysqli_fetch_array($run_cart))
							{
								$pro_id = $row_cart['p_id'];
								$pro_type = $row_cart['type'];
								$pro_qty = $row_cart['qty'];
								
								$get_products = "select * from products where product_id='$pro_id'";
								$run_products = mysqli_query($con,$get_products);

								while ($row_products = mysqli_fetch_array($run_products)) {
									$product_title = $row_products['product_title'];
									$product_img1 = $row_products['product_img1'];
									$only_price = $row_products['product_price'];
									$sub_total = $row_products['product_price']* $pro_qty;
									$total += $sub_total;

									
								
						?>

							<tr><!---tr starts---->
								<td>
									<img src="admin_area/product_images/<?php echo $product_img1; ?>">
								</td>
								<td>
									<a href="#"><?php echo $product_title;  ?></a>
								</td>
								<td>
									<?php echo $pro_qty; ?>
								</td>
								<td>
									ksh.<?php echo $only_price;  ?>
								</td>
								<td>
									<?php echo $pro_type; ?>
								</td>
								<td>
									<input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
								</td>
								<td>
									ksh.<?php echo $sub_total; ?>
								</td>
							</tr><!---tr ends---->

			<!------------------cart items function closed bellow---------->
						<?php
						 
						 } 
							}

						 ?>
			<!------------------cart items function closed bellow---------->

						</tbody><!---tbody starts---->


						<tfoot><!---table footer starts---->
							<tr>
								<th colspan="5">Total</th>
								<th colspan="2">ksh.<?php echo $total; ?></th>
							</tr>
						</tfoot><!---table footer ends---->

					</table><!---table-end---->
				</div><!---table-responsive ends---->
	<!---------------------------foooter icon --------------------------------->
				<div class="box-footer"><!---box-footer starts ---->
					
					<div class="pull-left"><!---pull-left starts ---->
						<a href="index.php" class="btn btn-default">
							<i class="fa fa-arrow-circle-o-left"></i> Add more items
						</a>
					</div><!---pull-left ends ---->

					
					<div class="pull-right"><!---pull-right starts ---->
						<button class="btn btn-default" type="submit" name="update" value="update Cart">
							<i class="fa fa-refresh"></i> Update Cart							
						</button>
						<a href="checkout.php" class="btn btn-primary">
							checkout <i class="fa fa-arrow-circle-o-right"></i>
						</a>
					</div><!---pull-right ends ---->

				</div><!---box-footer ends---->
			</form><!---form ends---->
		</div><!---box ends---->

	<!--------------------------------update cart func---------------------------------------->
		<?php

function update_cart(){

global $con;

if(isset($_POST['update'])){

foreach($_POST['remove'] as $remove_id){


$delete_product = "delete from cart where p_id='$remove_id'";

$run_delete = mysqli_query($con,$delete_product);

if($run_delete){
echo "<script>window.open('cart.php','_self')</script>";
			 }
		}
	}
}

echo @$up_cart = update_cart();

?>

<!----------------------------------------------------------------------------------------->
	</div><!-- col-md-9 ends -->

<!-------------------------------------------content end--------------------------------->
		</div><!---container ends --->
	</div><!---content ends --->


	<?php

		include("includes/footer.php");
	?>

<script src="js/jquery.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
</body>
</html>