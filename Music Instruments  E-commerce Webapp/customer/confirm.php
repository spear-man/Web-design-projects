<?php 
	session_start();

	if(!isset($_SESSION['customer_email']))
	{
		echo "<script>window.open('../checkout.php','_self')</script>";
	}
	else
	{
	
	include("includes/db.php");

	include("functions/functions.php");

	if(isset($_GET['order_id']))
	{
		$order_id = $_GET['order_id'];

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
					<li><a href="../customer_register.php">REGISTER</a></li>
					<li><?php 
                           
                           if(!isset($_SESSION['customer_email']))
                           {
                           	 echo "<a href='../checkout.php'>MY ACCOUNT</a>";
                           }
                           else
                           {
                           	 echo "<a href='my_account.php?my_orders'>MY ACCOUNT</a>";
                           }
						 ?></li>
					<li><a href="../cart.php">GO TO CART</a></li>
					<li><?php 

						if(!isset($_SESSION['customer_email']))
						{
							echo "<a href='../checkout.php'>LOGIN</a>";
						}
						else
						{
							echo "<a href='../logout.php'>LOGOUT</a>";
						}
					 	?>
					 	</li></li>
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
							<a href="../index.php">HOME</a>
						</li>

						<li >
							<a href="../shop.php">SHOP</a>
						</li>

						<li class="active">
							<?php 
                           
                           if(!isset($_SESSION['customer_email']))
                           {
                           	 echo "<a href='../checkout.php'>MY ACCOUNT</a>";
                           }
                           else
                           {
                           	 echo "<a href='my_account.php?my_orders'>MY ACCOUNT</a>";
                           }
							 ?>
						</li>

						<li>
							<a href="../cart.php">SHOPPING CART</a>
						</li>

						<li>
							<a href="../contact.php">CONTACT US</a>
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
					<li>My Account</li>
				</ul><!---smallstuf starts --->
			</div><!---col-md-12 ends --->

			<!----------------include side bar page ---------->
			<div class="col-md-3"><!---col-md-3 start --->
				<?php
					include("includes/sidebar.php");
				?>	
			</div><!---col-md-3 end--->
<!---------------------------------------------------------------------------------------->

<div class="col-md-9"><!-- col-md-9 Starts -->

<div class="box"><!-- box Starts -->

<h1 align="center"> Please Confirm Your Payment </h1>


<form action="confirm.php?update_id=<?php echo $order_id; ?>" method="post" enctype="multipart/form-data"><!--- form Starts -->

<div class="form-group"><!-- form-group Starts -->

<label>Invoice No:</label>

<input type="text" class="form-control" name="invoice_no" required>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label>Amount Sent:</label>

<input type="text" class="form-control" name="amount_sent" required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label>Select Payment Mode:</label>

<select name="payment_mode" class="form-control"><!-- select Starts -->

<option>Select Payment Mode</option>
<option>Equity</option>
<option>Mpesa</option>


</select><!-- select Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label>Transaction/Reference Id:</label>

<input type="text" class="form-control" name="ref_no" required>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label>Code:</label>

<input type="text" class="form-control" name="code" required>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label>Payment Date:</label>

<input type="text" class="form-control" name="date" required>

</div><!-- form-group Ends -->

<div class="text-center"><!-- text-center Starts -->

<button type="submit" name="confirm_payment" class="btn btn-primary btn-lg">

 Confirm Payment

</button>

</div><!-- text-center Ends -->

</form><!--- form Ends -->

<?php

if(isset($_POST['confirm_payment'])){

$update_id = $_GET['update_id'];

$invoice_no = $_POST['invoice_no'];

$amount = $_POST['amount_sent'];

$payment_mode = $_POST['payment_mode'];

$ref_no = $_POST['ref_no'];

$code = $_POST['code'];

$payment_date = $_POST['date'];

$complete = "Complete";

$insert_payment = "insert into payments (invoice_no,amount,payment_mode,ref_no,code,payment_date) values ('$invoice_no','$amount','$payment_mode','$ref_no','$code','$payment_date')";

$run_payment = mysqli_query($con,$insert_payment);

$update_customer_order = "update customer_orders set order_status='$complete' where order_id='$update_id'";

$run_customer_order = mysqli_query($con,$update_customer_order);

$update_pending_order = "update pending_orders set order_status='$complete' where order_id='$update_id'";

$run_pending_order = mysqli_query($con,$update_pending_order);

if($run_pending_order){

echo "<script>alert('your Payment has been received,order will be completed within 24 hours')</script>";

echo "<script>window.open('my_account.php?my_orders','_self')</script>";

}



}



?>


	</div>	<!---box ends--->
</div><!---col-md-9 ends--->


<!---------------------------------------------------------------------------------------->
		</div><!---container ends --->
	</div><!---content ends --->


	<?php

		include("includes/footer.php");
	?>

<script src="js/jquery.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
</body>
</html>

<?php } ?>