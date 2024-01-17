<?php 

	if(!isset($_SESSION['admin_email']))
	{
		echo "<script>window.open('login.php','_self')</script>";
	}
	else
	{

 ?>

<div class="row"><!-- row starts -->
	<div class="col-lg-12"><!-- col-lg-12 starts -->
		<ol class="breadcrumb"><!-- breadcrumb starts -->
			<li class="active">
				<i class="fa fa-dashboard"></i> Dashboard / View Orders
			</li>
		</ol><!-- breadcrumb ends -->
	</div><!-- col-lg-12 starts -->
</div><!-- row starts -->

<div class="row"><!-- 2 row starts -->
	<div class="col-lg-12"><!-- col-lg-12 starts -->
		<div class="panel panel-default"><!-- panel panel-default starts -->
			
			<div class="panel-heading"><!-- panel-heading starts -->
				<h3 class="panel-title"><!-- panel-title starts -->
					<i class="fa fa-database fa-fw"></i> View Orders
				</h3><!-- panel-title ends -->
			</div><!-- panel-heading ends-->

			<div class="panel-body"><!-- panel-body starts -->
				<div class="table-responsive"><!-- table-responsive starts --> 
					<table class="table table-bordered table-hover table-striped"><!--table table-bordered table-hover table-striped starts --> 
						<thead><!--thead starts -->
							<tr>
								<th>Order No</th>
							<!--	<th>Customer Email</th>  -->
								<th>Invoice No</th>
								<th>Product Title</th>
								<th>Product Qty</th>
								<th>Product Type</th>
								<th>Order Date</th>
								<th>Total Amount</th>
								<th>Order Status</th>
								<th>Delete</th>

							</tr>
						</thead><!--thead ends -->

						<tbody><!--tbody starts  -->
							<?php

								$i = 0;
								$get_orders = "select * from pending_orders";
								$run_orders = mysqli_query($con,$get_orders);

								while ($row_orders = mysqli_fetch_array($run_orders) )
								{
									$order_id = $row_orders['order_id'];
									$c_id = $row_orders['customer_id'];
									$invoice_no = $row_orders['invoice_no'];
									$product_id = $row_orders['product_id'];
									$qty = $row_orders['qty'];
									$type = $row_orders['type'];
									$order_status = $row_orders['order_status'];

									$get_products = "select * from products where product_id='$product_id'";
									$run_products = mysqli_query($con,$get_products);
									$row_products = mysqli_fetch_array($run_products);
									$product_title = $row_products['product_title'];
									$i++;
	
							?>

							<tr>
								<td><?php echo $i; ?></td>
					<!-------------------------------------------------			
								<td>
									<?php 

								$get_customer = "select * from customers where customer_id ='$c_id'";

								$run_customer = mysqli_query($con,$get_customer);

								$row_customer = mysqli_fetch_array($run_customer);

								$customer_email = $row_customer['customer_email'];

								echo $customer_email;

								 ?>
										
								</td>
					------------------------------------------>			
								<td><?php echo $invoice_no; ?></td>
								<td><?php echo $product_title; ?></td>
								<td><?php echo $qty; ?></td>
								<td><?php echo $type; ?></td>
								<td>
									<?php

									$get_customer_order = "select * from customer_orders where order_id='$order_id'";
									$run_customer_order = mysqli_query($con,$get_customer_order);
									$row_customer_order = mysqli_fetch_array($run_customer_order);
									$order_date = $row_customer_order['order_date'];
									$due_amount = $row_customer_order['due_amount'];
									echo $order_date;
									

								 ?>
								 	
								 </td>
								
								<td><?php echo $due_amount; ?></td>
								
								<td><?php 
									if ($order_status=='pending') {
										echo $order_status='pending';
									}
									else
									{
										echo $order_status='Completed';
									}
								 ?></td>

								<td>
					
									<a href="index.php?order_delete=<?php echo $order_id; ?>">
									<i class="fa fa-trash-o"></i> Delete</a>
									 	
								 </td>
							</tr>

						<?php } ?>

						</tbody><!--tbody ends  -->
					</table><!--table table-bordered table-hover table-striped ends-->
				</div><!-- table-responsive ends --> 
			</div><!-- panel-body ends -->
		</div><!-- panel panel-default ends -->
	</div><!-- col-lg-12 ends-->
</div><!-- 2 row ends -->

								<?php } ?>