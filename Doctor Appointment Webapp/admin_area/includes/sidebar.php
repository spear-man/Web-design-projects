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


	<div class="collapse navbar-collapse navbar-ex1-collapes"><!--collapse navbar-collapse navbar-ex1-collapes starts-->
		<ul class="nav navbar-nav side-nav"><!--nav navbar-nav side-nav starts-->




			

<!--------------------------------------------------------------------------------------------------->

			<li>
				<a href="index.php?booking_details">
					<i class="fa fa-dashboard"></i> BOOKING 
				</a>
				
			</li>

			<li>
				<a href="index.php?emergency_contact">
					EMERGENCY CONTACT
				</a>
			</li>

			<li>
				<a href="index.php?personal_training">
					PERSONAL TRAINING
				</a>
			</li>

			<li>
				<a href="index.php?progress_note">
					PROGRESS NOTE
				</a>
			</li>

			<li>
				<a href="index.php?contact">
					CONTACT INFO
				</a>
			</li>

			<li>
				<a href="index.php?psychiatric_evaluation">
					PSYCHIATRIC EVALUATION
				</a>
			</li>

			<li>
				<a href="index.php?normal_user">
					NORMAL USERS
				</a>
			</li>



<!--------------------------------------2---------------------------------------------------->

			<li><!-- li Starts -->

			<a href="#" data-toggle="collapse" data-target="#users">

			ADMINS

				<i class="fa fa-fw fa-caret-down"></i>


			</a>

	<!--------------------------dropdown content------------------------------>

			<ul id="users" class="collapse">

				<li>
					<a href="index.php?insert_user"> INSERT ADMINS </a>
				</li>

				<li>
					<a href="index.php?view_users"> VIEW ADMINS </a>
				</li>

			

			</ul>
		</li><!-- li Ends -->


		<li><!-- li Starts -->

			<a href="logout.php">
			LOGOUT
			</a>

		</li><!-- li Ends -->


		</ul><!--nav navbar-nav side-nav ends-->
	</div><!--collapse navbar-collapse navbar-ex1-collapes ends-->

</nav><!--navbar navbar-inverse navbar-fixed-top ends -->



<?php } ?>