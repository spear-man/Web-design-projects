<?php
// check whether session variable is set
include("includes/config.php");

	if(isset($_SESSION['userloggedin']))
	{
		$userloggedin = $_SESSION['userloggedin'];
	}
	else
	{
		header("Location: register.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>MTANDAO-DOC</title>
<link href="images/favicon.ico" type="image/ico" rel="shortcut icon">
<link href="styles/bootstrap.min.css" rel="stylesheet">
<link href="styles/style.css" rel="stylesheet">
<link href="styles/font-awesome/css/all.css" rel="stylesheet">
<script src="js/typed.js" ></script>

<!-----------------tinymce textarea addon------------->
<script src="js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

</head>
<body>
	
<!----------------------------------second bar----------------------------------- -->

	<div class="navbar navbar-default" id="navbar"> <!--navbar navbar-default starts -->
		<div class="container"><!--container starts -->
			<div class="navbar-header"><!--navbar header starts -->
				<a class="navbar-brand home" href="index.php"><!--navbar-brand home start -->
					<img src="images/logo.png" class="hidden-xs" width="57px">
				</a><!--navbar-brand home ends -->

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
					<span class="sr-only">Toogle Navigation</span>
					<i class="fa fa-align-justify"></i>
				</button>

				

			</div><!--navbar header ends -->

			<div class="navbar-collapse collapse" id="navigation"><!--navbar-collapse collapse start -->
				<div class="padding-nav"><!--padding nav start -->
					<center>
					<ul class="nav navbar-nav navbar-left"><!--nav navbar-nav navbar-left start -->
						
						<li class="active">
							<a href="index.php">HOME</a>
						</li>
						
						<li>
							<a href="booking.php">BOOKING</a>
						</li>

						<li>
							<a href="emergency_contact.php">EMERGENCY CONTACT</a>
						</li>

						<li>
							<a href="personal_training.php">PERSONAL TRAINING</a>
						</li>

						<li>
							<a href="progress.php">PROGRESS </a>
						</li>

						<li>
							<a href="psychiatric_evaluation.php">PSYCHIATRIC EVALUATION</a>
						</li>

						<li>
							<a href="contact.php">CONTACT US</a>
						</li>
						
						<li>
							<a href="logout.php" ><i class="fa fa-sign-out-alt"></i> LOGOUT</a>
						</li>

						<li>
							<a href="admin_area/index.php" target="_blank"> <i class="far fa-cog"></i> ADMIN</a>
						</li>
					</ul><!--nav navbar-nav navbar-left ends -->
					</center>
				</div><!--padding nav ends -->
				

				
			</div><!--navbar-collapse collapse ends-->
		</div><!--container ends -->	
	</div><!--navbar navbar-default ends -->




<!------------------------------------------------------------------------------------->
	<div class="container" id="slider"><!--container starts -->
		<div class="col-md-12"><!--col-md-12 starts -->
			<div id="myCarousel" class="carousel slide" data-ride="carousel"><!--carousel slide starts -->

				<div class="carousel-inner"><!--carousel-inner starts-->
				</div><!--carousel-inner end-->

	<section class="slider" id="slider">
		<ul class="slider-carousel" id="slider-carousel">

				<a class="logo"  href="#"><img src="images/1.gif" alt=""></a></p>
				<h1>WELCOME TO <span id="title">MTANDAO-DOC <i class="fa fa-hand-holding-heart"></i></span></h1>
				<p>THE BEST WEB APPLICATION FOR ACCESSING AND BOOKING <br> <b><span id="typewrite"></span></b></p>
				<script>
						var typing=new Typed("#typewrite", {
							strings: [ " PATIENT APPOINTMENTS ", "PATIENTS EMERGENCY CONTACTS", "PERSONAL TRAININERS", "PATIENTS PROGRESS NOTES","PSYCHIATRIC EVALUATIONS"],
							typeSpeed: 100,
							backSpeed: 40,
							loop: true,
						});
					</script>	

				<a href="booking.php" class="secondary-sky-blue-bg cta2 btn btn-prymary btn-lg">GET STARTED
					<i class="fa fa-angle-double-right"></i>
				</a>


					


		</ul>

	</section> 



			</div><!--carousel slide ends -->
		</div><!--col-md-12 ends -->
	</div><!--container ends-->
<!------------------------------------------------------------------------------------->
<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>

</html>
