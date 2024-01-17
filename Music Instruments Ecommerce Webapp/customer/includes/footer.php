<!---------------------------main footer---------------------------->

<div id="footer"><!---footer starts --->
	<div class="container"><!---container starts --->
		<div class="row"><!---row starts --->

			<div class="col-md-3 col-sm-6"><!---col-md-3 col-sm-6 start --->
				<h4>pages</h4>
					<ul><!---ul start --->
						<li><a href="cart.php">SHOPPING CART</a></li>
						<li><a href="contact.php">CONTACT US</a></li>
						<li><a href="shop.php">SHOP</a></li>
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
					</ul><!---ul start --->

				<hr>

				<h4>User section</h4>
					<ul><!---ul start --->
						<li>
								<?php 
                           
                           if(!isset($_SESSION['customer_email']))
                           {
                           	 echo "<a href='checkout.php'>LOGIN</a>";
                           }
                           else
                           {
                           	 echo "<a href='customer/my_account.php?my_orders'>MY ACCOUNT</a>";
                           }
						 ?>
						</li>
						<li><a href="customer_register.php">REGISTER</a></li>
					</ul><!---ul ends --->
				<hr class="hidden-md hidden-lg hidden-sm">	
			</div><!---col-md-3 col-sm-6 ends --->


			<div class="col-md-3 col-sm-6"><!---col-md-3 col-sm-6 start --->
				<h4>Top Products Categories</h4>
					<ul><!---ul start --->

						<?php
							$get_p_cats = "select * from product_categories";
							$run_p_cats = mysqli_query($con,$get_p_cats);

							while($row_p_cats = mysqli_fetch_array($run_p_cats))
							{
								$p_cat_id = $row_p_cats['p_cat_id'];
								$p_cat_title = $row_p_cats['p_cat_title'];

								echo "<li><a href='shop.php?p_cat=$p_cat_id'>$p_cat_title</a></li>";
							}
						?>

					</ul><!---ul ends --->
				<hr class="hidden-md hidden-lg">
			</div><!---col-md-3 col-sm-6 ends--->

			
			<div class="col-md-3 col-sm-6"><!---col-md-3 col-sm-6 start-->
				<h4>Get in touch</h4>
					<p style="color: #5ea6e6"><!---p start-->
						spear instruments music store
						<br>Ushirika house limuru
						<br>0705599224
						<br>spearinst@gmail.com
						<br>
						spear njoroge ngugi
					</p><!---p end-->
				<a href="contact.php" style="color:white;"><strong>Go to contact us page</strong></i></a>
				<hr class="hidden-md hidden-lg">
			</div><!---col-md-3 col-sm-6 ends--->


			<div class="col-md-3 col-sm-6"><!---col-md-3 col-sm-6 start-->
				<h4>About us</h4>
					<p class="text-muted">
						want the best physical and virtual instrument; 
						here at spearinstruments we have just that and at affordable prices.
						welcome aboard!
					</p>
<!---------------------socail links-------------------------------------->

	
					<hr>

				<h4>stay in touch</h4>
					<p class="social"><!---social start--->
						<a href="https://www.facebook.com/el.spear.14" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="mailto:spearnjoroge@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
						<a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
						<a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
						<a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin-square"></i></a>
					</p><!---social end--->
			</div><!---col-md-3 col-sm-6 ends--->
		</div><!---row ends --->
	</div><!---container ends --->
</div><!---footer ends --->

<!-----------------------------copyright section--------------------------------->

<div id="copyright"><!---copyright starts --->
	<div class="container"><!---container starts --->

		<div class="col-md-6"><!---col-md-6 starts --->
			<p class="">&copy; spear njoroge ngugi 2019</p>
		</div><!---col-md-6 end --->
		
		<div class="col-md-6"><!---col-md-6 starts --->
			<p class="pull-right">project: kabete national polytechnic</p>
		</div><!---col-md-6 end --->

	</div><!---container ends --->
</div><!---copyright ends --->