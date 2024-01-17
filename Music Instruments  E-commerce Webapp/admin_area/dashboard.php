<?php
if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<!------------------------------breadcrumb------------------------------>

<div class="row"><!-- 1 row starts -->
	<div class="col-lg-12"><!-- col-lg-12 starts -->
		<ol class="breadcrumb"><!--breadcrumb starts -->
			<li class="active">
				<i class="fa fa-dashboard"></i>Dashboard / Welcome
			</li>
		</ol><!-- breadcrum ends -->
	</div><!-- col-lg-12 ends -->
</div><!-- 1 row ends -->

<!------------------------panel-heading--------------------------->

<div class="row"><!-- 2 row starts -->
	<div class="col-lg-12"><!-- col-lg-12 starts -->
		<div class="panel panel-default"><!-- panel panel-default starts -->

			<div class="panel-heading"><!-- panel-heading starts -->
				<h3 class="panel-title"><!-- panel-title starts -->
					<i class="fa fa-thumbs-up fa-fw"></i> Welcome
				</h3><!-- panel-title ends -->
			</div ><!-- panel-heading ends -->

<!----------------------------panel-body-------------------------->

			<div class="panel-body"><!-- panel-body starts -->
				
					<center>
						<div>
						<img src="images/mainlogo.png"  class="img-responsive" >
						<h3>WELCOME TO MY ADMIN PANEL</h3>
						<p>To perform any modification to the database tables and web pages please navigate to the<br> panel on your left. </p>
						</div>
					</center>
			
			</div><!-- panel-body ends-->
			
		</div><!-- panel panel-default ends -->
	</div><!-- col-lg-12 ends-->
</div>


<?php } ?>