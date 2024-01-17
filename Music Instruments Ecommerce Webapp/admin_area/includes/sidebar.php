<?php 

	if(!isset($_SESSION['admin_email']))
	{
		echo "<script>window.open('login.php','_self')</script>";
	}
	else
	{

 ?>

<nav class="navbar navbar-inverse navbar-fixed-top"><!--navbar navbar-inverse navbar-fixed-top starts-->
	<div class="navbar-header"><!--navbar-header starts-->
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapes"><!--.navbar-ex1-collapes -->
			<span class="sr-only">Toogle Navigation </span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
		</button><!-- .navbar-ex1-collapes ends -->
		
		<a class="navbar-brand" href="index.php?dashboard">
	Admin Panel
		</a>
		
	</div><!--navbar-header ends -->

	<ul class="nav navbar-right top-nav"><!--nav navbar-right top-nav starts-->
		<li class="dropdown"><!-- dropdown starts-->
			<a href="#" class="dropdown-toogle" data-toggle="dropdown"><!-- drop down-toogle starts-->
				<i class="fa fa-user"></i>
				<?php echo $admin_name; ?><b class="caret"></b>
			</a><!-- dropdown-toogle ends-->

			<ul class="dropdown-menu"><!-- dropdown-menu stars -->

				<li><!-- li stars -->
					<a href="index.php?user_profile=<?php echo $admin_id; ?>">
						<i class="fa fa-fw fa-user"></i>Profile
					</a>
				</li><!-- li ends -->


				<li><!-- li stars -->
					<a href="index.php?view_products">
						<i class="fa fa-fw fa-angle-double-right"></i>Products
						<span class="badge"><?php echo $count_products; ?></span>
					</a>
				</li><!-- li ends -->


				<li><!-- li stars -->
					<a href="index.php?view_customers">
						<i class="fa fa-fw fa-angle-double-right"></i>Customers
						<span class="badge"><?php echo $count_customers; ?></span>
					</a>
				</li><!-- li ends -->


				<li><!-- li stars -->
					<a href="index.php?view_p_cats">
						<i class="fa fa-fw fa-angle-double-right"></i>Product Categories
						<span class="badge"><?php echo $count_p_categories; ?></span>
					</a>
				</li><!-- li ends -->

				<li class="divider"></li>

				<li><!-- li starts -->
					<a href="logout.php">
						<i class="fa fa-fw fa-sign-out"></i> Logout
					</a>
				</li><!-- li ends -->

			</ul><!-- dropdown-menu ends -->
		</li><!-- drop down ends-->
	</ul><!--nav navbar-right top-nav-->

	<div class="collapse navbar-collapse navbar-ex1-collapes"><!--collapse navbar-collapse navbar-ex1-collapes starts-->
		<ul class="nav navbar-nav side-nav"><!--nav navbar-nav side-nav starts-->


<!--------------------------------------products  and dropdown---------------------------------------------------->
			<li><!-- li Starts -->

				<a href="index.php?dashboard">

				<i class="fa fa-fw fa-dashboard"></i> Welcome

				</a>

			</li><!-- li Ends -->



			<li><!-- li Starts -->

			<a href="#" data-toggle="collapse" data-target="#products">

				<i class="fa fa-fw fa-shopping-cart"></i> Products

				<i class="fa fa-fw fa-caret-down"></i>


			</a>

	<!--------------------------dropdown content------------------------------>

			<ul id="products" class="collapse">

				<li>
					<a href="index.php?insert_product"> Insert Products </a>
				</li>

				<li>
					<a href="index.php?view_products"> View Products </a>
				</li>

			</ul>

			</li><!-- li Ends -->

<!------------------------------------------------------------------------------------------------------------>
				<li><!-- li Starts -->

			<a href="#" data-toggle="collapse" data-target="#cat">

				<i class="fa fa-fw fa-list-ol"></i> Main Product Categories

				<i class="fa fa-fw fa-caret-down"></i>


			</a>

	<!--------------------------dropdown content------------------------------>

			<ul id="cat" class="collapse">

				<li>
					<a href="index.php?insert_cat"> Insert Category </a>
				</li>

				<li>
					<a href="index.php?view_cats"> View Categories </a>
				</li>

			</ul>

		</li><!-- li Ends -->








<!--------------------------------------2---------------------------------------------------->

			<li><!-- li Starts -->

			<a href="#" data-toggle="collapse" data-target="#p_cat">

				<i class="fa fa-fw fa-indent"></i> Products Sub-categories

				<i class="fa fa-fw fa-caret-down"></i>


			</a>

	<!--------------------------dropdown content------------------------------>

			<ul id="p_cat" class="collapse">

				<li>
					<a href="index.php?insert_p_cat"> Insert Product Category </a>
				</li>

				<li>
					<a href="index.php?view_p_cats"> View Product Category </a>
				</li>

			</ul>

			</li><!-- li Ends -->

			

<!--------------------------------------------------------------------------------------------------->

			<li>
				<a href="index.php?view_customers">
					<i class="fa fa-fw fa-male"></i> View Customers
				</a>
			</li>


			<li>
				<a href="index.php?view_orders">
					<i class="fa fa-fw fa-list-alt"></i> View Orders
				</a>
			</li>



			<li>
				<a href="index.php?view_payments">
					<i class="fa fa-fw fa-money"></i> View Payments
				</a>
			</li>




<!--------------------------------------2---------------------------------------------------->

			<li><!-- li Starts -->

			<a href="#" data-toggle="collapse" data-target="#users">

				<i class="fa fa-fw fa-shield"></i> Users

				<i class="fa fa-fw fa-caret-down"></i>


			</a>

	<!--------------------------dropdown content------------------------------>

			<ul id="users" class="collapse">

				<li>
					<a href="index.php?insert_user"> Insert User </a>
				</li>

				<li>
					<a href="index.php?view_users"> View Users </a>
				</li>

				<li>
					<a href="index.php?user_profile=<?php echo $admin_id; ?>"> Edit Profile </a>
				</li>

			</ul>
		</li><!-- li Ends -->


		<li><!-- li Starts -->

			<a href="logout.php">
			<i class="fa fa-fw fa-sign-out"></i> Log Out
			</a>

		</li><!-- li Ends -->


		</ul><!--nav navbar-nav side-nav ends-->
	</div><!--collapse navbar-collapse navbar-ex1-collapes ends-->

</nav><!--navbar navbar-inverse navbar-fixed-top ends -->



<?php } ?>