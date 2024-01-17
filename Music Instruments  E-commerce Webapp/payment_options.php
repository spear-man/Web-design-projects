<div class="box"><!-- box starts -->

<?php 
	
	$session_email = $_SESSION['customer_email'];
	$select_customer = "select * from customers where customer_email='$session_email'";
	$run_customer = mysqli_query($con,$select_customer);
	$row_customer = mysqli_fetch_array($run_customer);
	$customer_id = $row_customer['customer_id'];

 ?>	
	<center><i class="fa fa-money" style="font-size:130px;color:#4d392f;"></i></center>

	<div class="text-center ">
		<h1 >Payment Options</h1>
		<p>Please pay for your items with any of the methods indicated bellow</p>
	</div>
	
	<p class="lead text-center">
	    <a href="order.php?c_id=<?php echo $customer_id; ?> ">Pay Offline</a>
    </p>
    <center><!--- center starts --->
    	<p class="lead">
    		<a href="#">Pay Online</a>
    	</p>
    </center><!--- center ends --->

</div><!-- box ends -->