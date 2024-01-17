<div class="box"><!--- box Starts ---> 

	<div class="box-header"><!--- box-header Starts ---> 
		<center>
			<i class="fa fa-lock"></i>
			<h1>Login</h1>
			<p class="lead">Already Our Customer?</p>
		</center>
		<p class="text-muted">
			if you have already created an acount with us please fill the details required below to have better access to our amaizing products otherwise click on the regester here link just bellow the form to get started :).
		</p>
	</div><!--- box-header ends ---> 
	<form action="checkout.php" method="post"><!---form Starts ---> 
		
		<div class="form-group"><!---form group starts ---> 
			<label>Email</label>
			<input type="text" class="form-control" name="c_email" required>
		</div><!---form group starts ---> 

		<div class="form-group"><!--form-group starts -->
			<label>Password</label>	
			<input type="Password" class="form-control" name="c_pass" required>
		</div><!--form-group end -->

		<div class="text-center"><!--text center starts -->
			<button name="login" class="btn btn-primary">
			<i class="fa fa-sign-in"></i> Login
			</button>
		</div><!--text center ends-->

	</form><!--- form ends ---> 
	
	<center><!--- center starts --->
		<h5>New to our website? click
		<a href="Customer_register.php">
			here
		</a>
	to create an account </h5>
	</center><!--- center ends --->

</div><!--- box ends ---> 

<!---------------------login button functionality ---------------------->
	<?php

if(isset($_POST['login'])){

$customer_email = $_POST['c_email'];

$customer_pass = $_POST['c_pass'];

$select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";

$run_customer = mysqli_query($con,$select_customer);

$get_ip = getRealUserIp();

$check_customer = mysqli_num_rows($run_customer);

$select_cart = "select * from cart where ip_add='$get_ip'";

$run_cart = mysqli_query($con,$select_cart);

$check_cart = mysqli_num_rows($run_cart);

if($check_customer==0){

echo "<script>alert('password or email is wrong')</script>";

exit();

}

if($check_customer==1 AND $check_cart==0){

$_SESSION['customer_email']=$customer_email;

echo "<script>alert('You have Logged In')</script>";

echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";

}
else {

$_SESSION['customer_email']=$customer_email;

echo "<script>alert('You have Logged In')</script>";

echo "<script>window.open('checkout.php','_self')</script>";

} 


}

?>
